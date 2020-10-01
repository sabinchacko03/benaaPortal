<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\LengthAwarePaginator;
use PDF;

class CategoryController extends Controller {

    public function getCategories() {
        $response = Http::post(config('benaa.sf_url').'/services/apexrest/DuconSiteFactory/categories', [
                    '' => ''
        ]);
        $result = $response->json();
        return json_encode($result['data']);
    }

    public function showSubcategories(Request $request, $category) {
        $response = Http::post(config('benaa.sf_url').'/services/apexrest/DuconSiteFactory/subcategories', [
                    'categoryId' => $category
        ]);
        $result = $response->json();
        if(!count($result['data'])){

            //call the subcategory API with the category name, to get the products
            $response = Http::post(config('benaa.sf_url').'/services/apexrest/DuconSiteFactory/fetchProducts', [
                    'subcategoryId' => $category
            ]);
            $result = $response->json();        
            $parentCat = $result['data'][0]['Product2']['Portal_Category__r']['Name'];

            $currentPage = $request->input("page") ?? 1;
            $perPage = 12;
            $currentItems = array_slice($result['data'], $perPage * ($currentPage -1 ), $perPage);
            $paginator = new LengthAwarePaginator($currentItems, count($result['data']), $perPage, $currentPage);
            $paginator->setPath('');      
            $CategoryName = $paginator[0]['Product2']['Portal_Category__r']['Name'];
            
            return view('category-product-list', ['results' => $paginator, 'category' => $CategoryName]);
        }else{
            $parentCat = $result['data'][0]['Parent_Category__r']['Name'];
        }        
        return view('category', ['results' => $result['data'], 'category' => $parentCat]);
    }
    
    public function showSubcategoryProducts(Request $request, $category, $subCategory) {
        $subcategoryString = $category .'#'. $subCategory;
        $response = Http::post(config('benaa.sf_url').'/services/apexrest/DuconSiteFactory/fetchProducts', [
                    'subcategoryId' => $subcategoryString
        ]);
        $result = $response->json();
        
        $currentPage = $request->input("page") ?? 1;
        $perPage = 12;
        $currentItems = array_slice($result['data'], $perPage * ($currentPage -1 ), $perPage);
        $paginator = new LengthAwarePaginator($currentItems, count($result['data']), $perPage, $currentPage);
        $paginator->setPath('');      
        $subCategoryName = $paginator[0]['Product2']['Portal_Subcategory__r']['Name'];
        $CategoryName = $paginator[0]['Product2']['Portal_Category__r']['Name'];
        
        return view('sub-category', ['results' => $paginator, 'category' => $CategoryName, 'subCategory' => $subCategoryName]);
    }
    
    public function showProductDetails($category, $subCategory, $product){
        $productString = $category . '#'. $subCategory .'#'. $product;
        // dd(str_replace('-',' ', $category. ' '. $subCategory.' '. $product));
        // $productString = urlencode($productString);
        $response = Http::post(config('benaa.sf_url').'/services/apexrest/DuconSiteFactory/productDetail', [
                    'pricebookEntryId' => urlencode(str_replace('-',' ', $productString))
        ]);
        $result = $response->json();
        
        return view('product-details', ['details' => $result['data'], 'product' => 'Check']);
    }

    public function shop(){
        $response = Http::post(config('benaa.sf_url').'/services/apexrest/DuconSiteFactory/categories', [
                    '' => ''
        ]);
        $result = $response->json();
        return view('shop', ['categories' => $result['data']]);
    }

    public function addToCart(Request $request){
        // $validatedData = $request->validate(['item' => 'required']);
        \Cart::setGlobalTax(5);
        
        $rowId = $request->get('id');
        $name = $request->get('name');
        $price = $request->get('price');
        $image = $request->get('image');
        $link = $request->get('link');
        $qty = $request->has('quantity') ? $qty = $request->get('quantity') : 1;

        \Cart::add($rowId, $name, $qty, $price, 0, ['image' => $image, 'link' => $link]);
        return redirect()->back();
    }

    public function deleteItem(Request $request){
        $rowId = $request->get('rowId');
        if($request->submit == 'delete'){
            \Cart::remove($rowId);
        }
        return redirect()->back();
    }

    public function updateCart(Request $request){
        if($request->submit == 'update'){
            foreach(\Cart::content() as $item){
                \Cart::update($item->rowId, $request->get($item->rowId));
            }
        }
        return redirect()->back();
    }

    public function checkout(Request $request){
        $response = Http::post(config('benaa.sf_url').'/services/apexrest/DuconSiteFactory/regions', [
            '' => ''
        ]);
        $regions = $response->json();
        $data['myForm'] = '';
        $data['regions'] = $regions['data'];
        return view('checkout', $data);
    }

    public function checkoutSubmit(Request $request){
        session(['formValues' => $request->all()]);

        if($request->region != '' && (!$request->btnSubmit  == 'submit')){
            $region = $request->get('region');
            $shippingInfo["shippingCity"] = $region;
            foreach(\Cart::content() as $row){
                $temp["pricebookEntryId"] = $row->id;
                $temp["quantity"] = $row->qty;
                $shippingInfo["entries"][] = $temp;
            }
            $postArray['shippingInfo'] = $shippingInfo;
            $response = Http::withBody(json_encode($postArray), 'application/json')->post(config('benaa.sf_url').'/services/apexrest/DuconSiteFactory/shippingcharges');
            $result = $response->json();
            $shippingCharge = $result['data'];
            session(['shippingCharge' => $shippingCharge]);
            session(['cartTotal' => $shippingCharge + (str_replace(',', '', \Cart::total()) + $shippingCharge)]);
            return redirect()->back();
        }

        $validatedData = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'region' => 'required',
            'email' => ['required', 'email:rfc,dns'],
            'phone' => 'required',
            'terms' => 'required',            
            ]);

        if($request->btnSubmit  == 'quote'){
            $pdf = PDF::loadView('getquote', ['details' => $request]);
            return $pdf->download('getQuote.pdf');
            return redirect()->back();
        }

        if($request->btnSubmit  == 'submit'){            
            $leadInfo = array(
                "firstName" => $request->firstname,
                "lastName" => $request->lastname,
                "mobilephone" => $request->phone,
                "email" => $request->email,
                "company" => $request->company
            );
            $orderInfo = array(
                "Shipping_City__c" => $request->region,
                "Shipping_Cost__c" => session('shippingCharge'),
                "Shipping_Country__c" => $request->country,
                "Shipping_Street__c" => $request->street,
                "P_O_Box__c" => $request->postcode,
                "Payment_Mode__c" => 'Cash on Delivery'
            );

            foreach(\Cart::content() as $row){
                $temp["pricebookEntryId"] = $row->id;
                $temp["quantity"] = $row->qty;
                $info["entries"][] = $temp;
            }
            $info['leadInfo'] = $leadInfo;
            $info['orderInfo'] = $orderInfo;
            $postArray['checkoutInfo'] = $info;

            $response = Http::withBody(json_encode($postArray), 'application/json')->post(config('benaa.sf_url').'/services/apexrest/DuconSiteFactory/placeorder');
            $result = $response->json();
            if($result['success'] == true){
                session()->flush();
                return view('orderComplete');                
                // return redirect('')->with('success', 'Order Submitted Successfully');
            }
            return json_encode($result['message']);
        }
    }    

    public function getCart(){
        $cart = array();
        $temp = array();
        foreach(\Cart::content() as $row){
            $temp['subtotal'] = $row->subtotal();
            $temp['total'] = $row->total();
            $temp['qty'] = $row->qty;
            $temp['name'] = $row->name;
            $cart[] = $temp;
        }
        $result['cart'] = $cart;
        $result['subtotal'] = \Cart::subtotal();
        $result['total'] = \Cart::total();
        $result['tax'] = \Cart::tax();
        $result['shippingCharge'] = round(session('shippingCharge'), 2);

        return json_encode($result);
    }

    public function getRegions(){
        $response = Http::post(config('benaa.sf_url').'/services/apexrest/DuconSiteFactory/regions', [
            '' => ''
        ]);
        $result = $response->json();
        return json_encode($result['data']);
    }

    public function updateShipping(Request $request){
        session(['formValues' => $request->all()]);
        $region = $request->get('region');
        $shippingInfo["shippingCity"] = $region;
        foreach(\Cart::content() as $row){
            $temp["pricebookEntryId"] = $row->id;
            $temp["quantity"] = $row->qty;
            $shippingInfo["entries"][] = $temp;
        }
        $postArray['shippingInfo'] = $shippingInfo;
        $response = Http::withBody(json_encode($postArray), 'application/json')->post(config('benaa.sf_url').'/services/apexrest/DuconSiteFactory/shippingcharges');
        $result = $response->json();
        $shippingCharge = $result['data'];
        session(['shippingCharge' => $shippingCharge]);
        session(['cartTotal' => $shippingCharge + (str_replace(',', '', \Cart::total()) + $shippingCharge)]);
        $ajaxReturn = array('shippingCharge' => $shippingCharge ? 'AED '. number_format($shippingCharge, 2) : 'NA', 'cartTotal' => 'AED ' . ($shippingCharge + (str_replace(',', '', \Cart::total()))));
        return json_encode($ajaxReturn);
    }
}
