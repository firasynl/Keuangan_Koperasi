<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Kategori;
use Illuminate\View\View;


class KategoriController extends Controller
{
    public function index(): View
    {
        //get posts
        $kategoris = Kategori::latest()->paginate(5);
        
        //render view with posts
        return view('kategoris.index', compact('kategoris'))
        ->with('i', (request()->input('page', 1) - 1) * 5);;
    }

    public function create(): View
    {
        return view('kategoris.create');
    }
  
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama_kategori' => 'required',
        ]);
        
        Kategori::create($request->all());
         
        return redirect()->route('kategoris.index')
                        ->with('success','Product created successfully.');
    }

    public function edit(Kategori $kategori): View
    {
        return view('kategoris.edit',compact('kategori'));
    }

    public function destroy(Kategori $kategori): RedirectResponse
    {
        $kategori->delete();
         
        return redirect()->route('kategoris.index')
                        ->with('success','Product deleted successfully');
    }
}
