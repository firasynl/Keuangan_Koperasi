<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    function register(){
        return view('/sesi/signup');
    }

    function create(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8'
        ], [
            'name.required'=>'Nama wajib diisi!',
            'email.required'=>'Email wajib diisi!',
            'email.email'=>'Silakan gunakan email yang valid',
            'email.unique'=>'Email sudah digunakan, gunakan E-mail yang lain',
            'password.required'=>'Password wajib diisi!',
            'password.min'=>'Password harus memiliki 8 karakter atau lebih'
        ]);
           
        $data = [
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> Hash::make($request->password),
        ];
        User::create($data);

        $infologin = [
            'email'=> $request->email,
            'password'=> $request->password,
        ];

        if(Auth::attempt($infologin)){
            return redirect('/home')->with('success', Auth::user()->name . 'Berhasil Login');
        }
        else{
            $errorMessage = 'Email atau Password yang dimasukkan tidak Valid!';
            return redirect('/sesi')->withErrors($errorMessage);
        }
    }
}
