<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class sessionController extends Controller
{
    function index(){
        return view('sesi/index');
    }

    function login(Request $request){
        
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ], [
            'email.required'=>'Email wajib diisi!',
            'password.required'=>'Password wajib diisi'
        ]);
           
        $infologin = [
            'email'=> $request->email,
            'password'=> $request->password,
        ];

        if(Auth::attempt($infologin)){
            return redirect('/home')->with('success', 'Berhasil Login');
        }
        else{
            $errorMessage = 'Email atau Password yang dimasukkan tidak Valid!';
            return redirect('/sesi')->withErrors($errorMessage);
        }
    }

    function logout(){
        Auth::logout();
        return redirect('sesi')->with('success','Berhasil logout');
    }
}
