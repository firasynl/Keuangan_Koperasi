<?php

namespace App\Http\Controllers;

use App\Models\bukuAdit;
use Illuminate\Http\Request;

class bukuAditController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = bukuAdit::orderBy('IDBuku', 'asc')->get();
        return view('bukuadit.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bukuadit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'Judul'=>$request->Judul,
            'Penulis'=>$request->Penulis,
            'Penerbit'=>$request->Penerbit,
            'TahunTerbit'=>$request->TahunTerbit,
            'JumlahStok'=>$request->JumlahStok,
            'dendabuku'=>$request->dendabuku
        ];
        bukuAdit::create($data);
        return redirect()->to('bukuadit')->with('success','Berhasil menambahkan Data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = bukuAdit::where('IDBuku',$id)->first();
        return view('bukuadit.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'Judul'=>$request->Judul,
            'Penulis'=>$request->Penulis,
            'Penerbit'=>$request->Penerbit,
            'TahunTerbit'=>$request->TahunTerbit,
            'JumlahStok'=>$request->JumlahStok,
            'dendabuku'=>$request->dendabuku
        ];
        bukuAdit::where('IDBuku',$id)->update($data);
        return redirect()->to('bukuadit')->with('success','Berhasil mengedit Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        bukuAdit::where('IDBuku',$id)->delete();
        return redirect()->to('bukuadit')->with('success', 'Berhasil menghapus User');
    }
}
