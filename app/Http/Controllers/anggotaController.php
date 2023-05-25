<?php

namespace App\Http\Controllers;
use App\Models\anggota;
use Illuminate\Http\Request;


class anggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $data = anggota::orderBy('id', 'asc')->get();
        return view('anggota.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('anggota.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'nama'=>$request->nama,
            'no_telp'=>$request->no_telp,
            'kategori_users'=>$request->kategori_users
        ];
        anggota::create($data);
        return redirect()->to('anggota')->with('success','Berhasil menambahkan Data');
        
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
        $data = anggota::where('id',$id)->first();
        return view('anggota.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'nama'=>$request->nama,
            'no_telp'=>$request->no_telp,
            'kategori_users'=>$request->kategori_users
        ];
        anggota::where('id',$id)->update($data);
        return redirect()->to('anggota')->with('success','Berhasil mengedit Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        anggota::where('id',$id)->delete();
        return redirect()->to('anggota')->with('success', 'Berhasil menghapus User');
    }
}
