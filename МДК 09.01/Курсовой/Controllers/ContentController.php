<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    function loadFoods()
    {
        $foods = Products::get();

        return view('main')->with(['foods' => $foods]);
    }
}
