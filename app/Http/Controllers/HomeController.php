<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller {

    public function index() {
        return view('index');
    }

    public function search(Request $request) {
        $key = $request->input('searchKey');
//        $key = $url = $request->url();
        $response = Http::post('https://dev-ducon.cs100.force.com/services/apexrest/DuconSiteFactory/search', [
                    'key' => $key,
        ]);
        $result = $response->json();
        return view('searchResult', ['results' => $result['data'], 'key' => $key]);
    }

}
