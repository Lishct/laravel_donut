<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $places = [
            ['name' => 'Bongsos', 'location' => 'Sablan', 'rating' => 2.4],
            ['name' => 'Binangor', 'location' => 'Tennesee', 'rating' => 3.4],
            ['name' => 'Donut town', 'location' => 'Flavor street', 'rating' => 5],
        ];
        return view('places', compact('products'));
    }
}
