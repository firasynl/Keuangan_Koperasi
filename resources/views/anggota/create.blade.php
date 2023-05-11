@extends('layouts.mainlayout')
@section('content')    
    <h1 class="text-center mb-4">Tambah Data Pengguna</h1>
    
    <div class="container">
         
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action='{{ url('anggota') }}' method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="id_users" class="form-label">ID User</label>
                                    <input type="number" class="form-control" name='id_users' id="id_users">
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" name='nama' id="nama">
                            </div>
                            <div class="mb-3">
                                <label for="no_telp" class="form-label">Nomer Telepon</label>
                                    <input type="number" class="form-control" name='no_telp' id="no_telp">
                            </div>
                            <div class="mb-3">
                                <label for="kategori_users" class="form-label">Kategori User</label>
                                        <select class="form-select" name="kategori_users" id="kategori_users" aria-label="Default select example" required="required">
                                            <option selected>Pilih Kategori User</option>
                                            <option value="1">Ketua</option>
                                            <option value="2">Anggota</option>
                                        </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button> <a class="btn btn-outline-danger btn-xl" href="{{ url('anggota') }}"> Kembali</a>
                          </form> 
                    </div>
                </div> 
            </div>
        </div>
    </div>
@endsection