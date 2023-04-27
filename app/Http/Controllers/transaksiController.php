<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tabel;

class transaksiController extends Controller
{
    public function index(){
        $data = tabel::all();
        return view('transaksi.transaksi', compact('data'));
    }

    public function create(){
        return view('transaksi.create');
    }

    public function edit($id)
    {
        $pdp = tabel::find($id);
        return view("transaksi.edit", ["pdp" => $pdp]);
    }

    public function store(Request $request)
    {
        ///Validasi
        $validated_data = $request->validate([
            "namatransaksi" => "required",
            "tgltransaksi" => "required",
            "statustransaksi" => "required",
            "jumlahtransaksi" => "required",
            "deskripsitransaksi" => "required"
        ]);

        tabel::create($validated_data);

        return redirect()->route('transaksi')->with('success','Berhasil menambahkan Data');
    }

    public function update($id, Request $request)
    {
        ///Validasi
        $validated_data = $request->validate([
            "namatransaksi" => "required",
            "tgltransaksi" => "required",
            "statustransaksi" => "required",
            "jumlahtransaksi" => "required",
            "deskripsitransaksi" => "required"
        ]);

        tabel::where("id", $id)->update($validated_data);

        return redirect()->route('transaksi')->with('success','Berhasil mengubah Data');
    }

    public function delete($id)
    {
        tabel::where("id", $id)->delete();
        return redirect()->route('transaksi')->with('success','Berhasil menghapus Data');
    }
}
