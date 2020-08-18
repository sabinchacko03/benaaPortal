<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller {

    public function getCategories() {
        $response = Http::post('https://dev-ducon.cs100.force.com/services/apexrest/DuconSiteFactory/categories', [
                    '' => ''
        ]);
        $result = $response->json();
    }

}
