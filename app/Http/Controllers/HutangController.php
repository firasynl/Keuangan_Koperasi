<?php

namespace App\Http\Controllers;

use App\Models\Hutang;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class HutangController extends Controller
{
    //
    public function index(): View
    {
        $hutangs = Hutang::latest()->paginate(5);

        return view('hutangs.index', compact('hutangs'))
        ->with('i', (request()->input('page', 1) - 1) * 5);;
    }

    public function create(): View
    {
        return view('hutangs.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'nama_kreditur' => 'required',
            'jenis_hutang' => 'required',
            'jumlah_hutang' => 'required',
            'tgl_jatuhtempo' => 'required',
        ]);

        
        Hutang::create($request->all());

        return redirect()->route('hutangs.index')->with('success', 'Data Berhasil Disimpan!');
    }

    public function show(Hutang $hutang)
    {
       //
    }

    public function edit(Hutang $hutang): View
    {
        //render view with post
        return view('hutangs.edit', compact('hutang'));
    }

    public function update(Request $request, hutang $hutang): RedirectResponse
    {
        //validate form
        $request->validate([
            'nama_kreditur' => 'required',
            'jenis_hutang' => 'required',
            'jumlah_hutang' => 'required',
            'tgl_jatuhtempo' => 'required',
        ]);
        
        $hutang->update($request->all());

        //redirect to index
        return redirect()->route('hutangs.index')->with('success', 'Data Berhasil Diubah!');
    }

    public function destroy(hutang $hutang): RedirectResponse
    {
        $hutang->delete();

        return redirect()->route('hutangs.index')
                        ->with('success','Data deleted successfully');
    }
}
