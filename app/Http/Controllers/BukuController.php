<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index(){
        $data = Buku::all();
        return view('index', compact('data'));
    }
    public function tambahbuku(){

        return view('tambahbuku');
    }
    public function insertbuku(Request $request){
        Buku::create($request->all());
        return redirect()->route('index');
    }
    public function tampilkanbuku($id){
        $data = Buku::find($id);
        return view('tampilkanbuku', compact('data')); 
    }
    public function updatebuku(Request $request, $id){
        $data = Buku::find($id);
        $data->update($request->all());
        return redirect()->route('index');
    }
    public function delete($id){
        $data = Buku::find($id);
        $data->delete();
        return redirect()->route('index');
    }
}