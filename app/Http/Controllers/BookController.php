<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $data = Book::orderBy('IDBuku', 'asc')->get();
        return view('/Book/DataBook')->with('data',$data);
    }

    public function TambahDataBook(){
        return view('/Book/TambahDataBook');
    }

    public function InsertDataBook(Request $request){
        //dd($request->all());
        Book::create($request->all());
        return redirect()->route('/Book')->with('success', 'Data berhasil di input!');
    }

    public function ShowDataBook($IDBuku){
       
        $data = Book::find($IDBuku);
        //dd($data);

        return view('/Book/UpdateDataBook', compact('data'));
    }

    public function UpdateDataBook(Request $request, $IDBuku){
        $data = Book::find($IDBuku);
        $data->update($request->all());
        return redirect()->route('/Book')->with('success', 'Data berhasil di update!');
    }

    public function Delete($IDBuku){
        $data = Book::find($IDBuku);
        $data->delete();
        return redirect()->route('/Book')->with('success', 'Data berhasil di hapus!');
    }
}
