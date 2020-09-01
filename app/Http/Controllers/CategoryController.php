<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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
        return view('category', ['results' => $result['data'], 'category' => $category]);
    }
    
    public function showSubcategoryProducts($category, $subCategory) {
        $response = Http::post('https://dev-ducon.cs100.force.com/services/apexrest/DuconSiteFactory/fetchProducts', [
                    'subcategoryId' => $subCategory
        ]);
        $result = $response->json();
        return view('sub-category', ['results' => $result['data'], 'category' => $subCategory]);
    }
    
    public function showProductDetails($product){
        return view('product-details');
    }
}
