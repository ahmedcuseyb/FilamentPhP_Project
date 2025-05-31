<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class BookController extends Controller
{
    public function index()
    {
        // Fetch 5 random dog breeds from the Dog CEO API
        $response = Http::get('https://dog.ceo/api/breeds/list/random/5');

        // Ensure the API call succeeded
        if ($response->successful()) {
            $breeds = $response['message'];
        } else {
            $breeds = []; // Fallback if API call fails
        }

        return view('index', compact('breeds'));
    }
}
