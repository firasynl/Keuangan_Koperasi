<?php

namespace App\Http\Controllers;

use App\Models\BukuFira;
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
        $bukufiras = BukuFira::latest()->paginate(5);
        
        return view('bukufiras.index',compact('bukufiras'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        //
        return view('bukufiras.create');
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
    public function edit(BukuFira $bukuFira)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BukuFira $bukuFira)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BukuFira $bukuFira)
    {
        //
    }
}
