<?php

namespace App\Http\Controllers;

use App\Models\Hutang;
use App\Models\Laporan;
use App\Models\Simpanan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = laporan::orderBy('id_laporan', 'asc')->get();
        $totalSimpanan = Simpanan::sum('jumlah_simpanan');
        $totalHutang = Hutang::sum('jumlah_Hutang');
        return view('laporan.laporan',compact('data', 'totalSimpanan', 'totalHutang'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('laporan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'id_laporan'=>$request->id_laporan,
            'nama_laporan'=>$request->nama_laporan,
            'tgl_laporan'=>$request->tgl_laporan,
            'jenis_laporan'=>$request->jenis_laporan
        ];
        laporan::create($data);
        return redirect()->to('laporan')->with('success','Berhasil menambahkan Data');
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
        $data = laporan::where('id_laporan',$id)->first();
        return view('laporan.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'nama_laporan'=>$request->nama_laporan,
            'tgl_laporan'=>$request->tgl_laporan,
            'jenis_laporan'=>$request->jenis_laporan
        ];
        laporan::where('id_laporan',$id)->update($data);
        return redirect()->to('laporan')->with('success','Berhasil mengedit Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        laporan::where('id_laporan',$id)->delete();
        return redirect()->to('laporan')->with('success', 'Berhasil menghapus Laporan');
    }
}
