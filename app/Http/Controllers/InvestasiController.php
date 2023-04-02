<?php

namespace App\Http\Controllers;

use App\Models\Investasi;
use Illuminate\Http\Request;

class InvestasiController extends Controller
{
    public function index(){
        $data = Investasi::all();
        return view('/Investasi/DataInvestasi', compact('data'));
    }

    public function TambahDataInvestasi(){
        return view('/Investasi/TambahDataInvestasi');
    }

    public function InsertDataInvestasi(Request $request){
        //dd($request->all());
        Investasi::create($request->all());
        return redirect()->route('/Investasi/DataInvestasi')->with('success', 'Data berhasil di input!');
    }

    public function ShowDataInvestasi($id_investasi){
       
        $data = Investasi::find($id_investasi);
        //dd($data);

        return view('/Investasi/UpdateDataInvestasi', compact('data'));
    }

    public function UpdateDataInvestasi(Request $request, $id_investasi){
        $data = Investasi::find($id_investasi);
        $data->update($request->all());
        return redirect()->route('/Investasi/DataInvestasi')->with('success', 'Data berhasil di update!');
    }

    public function Delete($id_investasi){
        $data = Investasi::find($id_investasi);
        $data->delete();
        return redirect()->route('/Investasi/DataInvestasi')->with('success', 'Data berhasil di hapus!');
    }
}
