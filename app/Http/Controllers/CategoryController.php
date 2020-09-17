<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\LengthAwarePaginator;
use PDF;

class CategoryController extends Controller {

    public function getCategories() {
        $response = Http::post('https://dev-ducon.cs100.force.com/services/apexrest/DuconSiteFactory/categories', [
                    '' => ''
        ]);
        $result = $response->json();
        return json_encode($result['data']);
    }

    public function showSubcategories($category) {
        $response = Http::post('https://dev-ducon.cs100.force.com/services/apexrest/DuconSiteFactory/subcategories', [
                    'categoryId' => $category
        ]);
        $result = $response->json();
        $parentCat = $result['data'][0]['Parent_Category__r']['Name'];
        return view('category', ['results' => $result['data'], 'category' => $parentCat]);
    }
    
    public function showSubcategoryProducts(Request $request, $category, $subCategory) {
        $subcategoryString = $category .'#'. $subCategory;
        $response = Http::post('https://dev-ducon.cs100.force.com/services/apexrest/DuconSiteFactory/fetchProducts', [
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
        $response = Http::post('https://dev-ducon.cs100.force.com/services/apexrest/DuconSiteFactory/productDetail', [
                    'pricebookEntryId' => $productString
        ]);
        $result = $response->json();
        
        return view('product-details', ['details' => $result['data'], 'product' => 'Check']);
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

    public function checkoutSubmit(Request $request){
        $validatedData = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => ['required', 'email:rfc,dns'],
            'phone' => 'required',
            'terms' => 'required',
            ]);

        if($request->submit == 'quote'){
            $pdf = PDF::loadView('getquote', ['details' => $request]);
            return $pdf->download('getQuote.pdf');
            return redirect()->back();
        }
        
        // $response = Http::post('https://dev-ducon.cs100.force.com/services/apexrest/DuconSiteFactory/search', [
        //     'key' => $key,
        // ]);
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

        return json_encode($result);
    }

    public function getRegions(){
        $response = Http::post('https://dev-ducon.cs100.force.com/services/apexrest/DuconSiteFactory/regions', [
            '' => ''
        ]);
        $result = $response->json();
        return json_encode($result['data']);
    }

    public function getShippingCharge(){
        
    }
}
