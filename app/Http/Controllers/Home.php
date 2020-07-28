<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Home extends Controller {

    public function index() {

        $response = Http::post('https://dev-ducon.cs100.force.com/services/apexrest/DuconSiteFactory/search', [
                    'key' => 'SHIELD',
        ]);
        $res = $response->json();
        return view('index');
    }

}
