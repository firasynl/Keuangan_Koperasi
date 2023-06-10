<?php

namespace App\Http\Controllers;

use App\Models\BukuFira;
use App\Models\Kategori;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class BukuFiraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $bukufiras = BukuFira::with('kategori')->paginate(5);
        
        return view('bukufiras.index',compact('bukufiras'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        //
        $kat = Kategori::all();
        return view('bukufiras.create', compact('kat'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'jumlah_stok' => 'required',
            'denda_buku' => 'required',
            'kategori_id' => 'required',
        ]);
        BukuFira::create($request->all());
         
        return redirect()->route('bukufiras.index')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(BukuFira $bukuFira)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BukuFira $bukufira)
    {
        //
        $kat = Kategori::all();
        return view('bukufiras.edit',compact('bukufira', 'kat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BukuFira $bukufira): RedirectResponse
    {
        //
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'jumlah_stok' => 'required',
            'denda_buku' => 'required',
        ]);
        return redirect()->route('bukufiras.index')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BukuFira $bukufira)
    {
        //
        $bukufira->delete();
         
        return redirect()->route('bukufiras.index')
                        ->with('success','Product deleted successfully');
    }
}
