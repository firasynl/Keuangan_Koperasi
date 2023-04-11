<?php

namespace App\Http\Controllers;

use App\Models\login;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index(){
        return view('login');
    }
}