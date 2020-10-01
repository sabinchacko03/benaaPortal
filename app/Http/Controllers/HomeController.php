<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\LengthAwarePaginator;

class HomeController extends Controller {

    public function index() {
        return view('index');
    }

    public function search(Request $request, $page = 1) {
        $key = $request->input('searchKey');
        $response = Http::post(config('benaa.sf_url').'/services/apexrest/DuconSiteFactory/search', [
            'key' => $key,
        ]);
        $result = $response->json();
        if(count($result['data'])){
            $currentPage = $request->input("page") ?? 1;
            $perPage = 12;
            $currentItems = array_slice($result['data'], $perPage * ($currentPage -1 ), $perPage);
            $paginator = new LengthAwarePaginator($currentItems, count($result['data']), $perPage, $currentPage);
            $paginator->setPath('');    
            $subCategoryName = $paginator[0]['Product2']['Portal_Subcategory__r']['Name'];
            $CategoryName = $paginator[0]['Product2']['Portal_Category__r']['Name'];
            return view('searchResult', ['results' => $paginator, 'category' => $CategoryName, 'subCategory' => $subCategoryName, 'key' => $key]);
        }else{
            $paginator = array();
            return view('searchResult', ['results' => $paginator, 'key' => $key]);
        }        
    }

    public function ajaxSearch(Request $request){
        $response = Http::post(config('benaa.sf_url').'/services/apexrest/DuconSiteFactory/search', [
            'key' => $request->key,
        ]);
        if(count($response['data'])){
            $subCategoryName = $response['data'][0]['Product2']['Portal_Subcategory__r']['Name'];
            $CategoryName = $response['data'][0]['Product2']['Portal_Category__r']['Name'];
        }        
        return view('search-suggestions', ['result' => array_slice($response['data'], 0, 5), 'category' => $CategoryName, 'subCategory' => $subCategoryName,]);
    }
}
