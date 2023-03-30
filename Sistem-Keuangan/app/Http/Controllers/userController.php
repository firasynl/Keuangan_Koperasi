<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\user;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = user::orderBy('id_users', 'asc')->get();
        return view('users.userList')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.createUser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'id_users'=>$request->id_users,
            'nama'=>$request->nama,
            'no_telp'=>$request->no_telp,
            'kategori_users'=>$request->kategori_users
        ];
        user::create($data);
        return redirect()->to('user')->with('success','Berhasil menambahkan Data');
        
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
        $data = user::where('id_users',$id)->first();
        return view('users.editUser')->with('data',$data);
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
        user::where('id_users',$id)->update($data);
        return redirect()->to('user')->with('success','Berhasil mengedit Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return 'HI';
    }
}
