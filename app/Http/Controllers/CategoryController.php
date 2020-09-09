<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\LengthAwarePaginator;

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
        $response = Http::post('https://dev-ducon.cs100.force.com/services/apexrest/DuconSiteFactory/fetchProducts', [
                    'subcategoryId' => $subCategory
        ]);
        $result = $response->json();
        
        $currentPage = $request->input("page") ?? 1;
        $perPage = 12;
        $currentItems = array_slice($result['data'], $perPage * ($currentPage -1 ), $perPage);
        $paginator = new LengthAwarePaginator($currentItems, count($result['data']), $perPage, $currentPage);
        $paginator->setPath('');
        
        // $parentCat = $result['data'][0]['Parent_Category__r']['Name'];
        
        return view('sub-category', ['results' => $paginator, 'category' => $subCategory]);
    }
    
    public function showProductDetails($category, $subCategory, $product){
        $response = Http::post('https://dev-ducon.cs100.force.com/services/apexrest/DuconSiteFactory/productDetail', [
                    'pricebookEntryId' => $product
        ]);
        $result = $response->json();
        
        return view('product-details', ['details' => $result['data'], 'product' => 'Check']);
    }

    public function addToCart(Request $request){
        $validatedData = $request->validate(['item' => 'required']);
        $item = $validatedData['item'];
        // $item = $request->get('item');
        echo "added " . $item ;
    }
}
