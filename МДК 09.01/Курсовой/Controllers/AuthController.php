<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getForm(){
        return view('auth.authForm');
    }
}
