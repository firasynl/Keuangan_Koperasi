<?php

namespace App\Http\Controllers;

use App\Models\Simpanan;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class SimpananController extends Controller
{
    //
    public function index(): View
    {
        $simpanans = Simpanan::latest()->paginate(5);

        return view('simpanans.index', compact('simpanans'))
        ->with('i', (request()->input('page', 1) - 1) * 5);;
    }

    public function create(): View
    {
        return view('simpanans.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'tgl_setoran' => 'required',
            'anggota_id' => 'required',
            'jumlah_simpanan' => 'required',
            'jenis_simpanan' => 'required'
        ]);

        $input = $request->all();

        Simpanan::create($input);

        return redirect()->route('simpanans.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(Simpanan $simpanan)
    {
       //
    }

    public function edit(Simpanan $simpanan): View
    {
        //render view with post
        return view('simpanans.edit', compact('simpanan'));
    }

    public function update(Request $request, Simpanan $simpanan): RedirectResponse
    {
        //validate form
        $request->validate([
            'tgl_setoran' => 'required',
            'anggota_id' => 'required',
            'jumlah_simpanan' => 'required',
            'jenis_simpanan' => 'required'
        ]);

        $input = $request->all();

        $simpanan->update($input);

        //redirect to index
        return redirect()->route('simpanans.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy(Simpanan $simpanan): RedirectResponse
    {
        $simpanan->delete();

        return redirect()->route('simpanans.index')
                        ->with('success','Data deleted successfully');
    }
}
