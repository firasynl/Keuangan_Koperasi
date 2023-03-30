<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tabel;

class transaksiController extends Controller
{
    public function index(){
        $data = tabel::all();
        return view('transaksi', compact('data'));
    }

    public function create(){
        return view('create');
    }

    public function edit($id)
    {
        $pdp = tabel::find($id);
        return view("edit", ["pdp" => $pdp]);
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

        return redirect(route("transaksi"));
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

        return redirect(route("transaksi"));
    }

    public function delete($id)
    {
        tabel::where("id", $id)->delete();
        return redirect(route("transaksi"));
    }
}
