<?php

namespace App\Http\Controllers;

use App\Models\signup;
use Illuminate\Http\Request;

class signupController extends Controller
{
    public function index(){
        return view('signup');
    }
}