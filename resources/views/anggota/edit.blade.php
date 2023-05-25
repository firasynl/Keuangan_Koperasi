@extends('layouts.mainlayout')
@section('content')    
    <h1 class="text-center mb-4">Update Data Pengguna</h1>
    
    <div class="container">
         
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action='{{ url('anggota/'.$data->id) }}' method="POST">
                            @csrf
                            @method('PUT')
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                        <input type="text" class="form-control" name='nama'value="{{$data->nama}}" id="nama">
                                </div>
                                <div class="mb-3">
                                    <label for="no_telp" class="form-label">Nomer Telepon</label>
                                        <input type="number" class="form-control" name='no_telp' value="{{$data->no_telp}}" id="no_telp">
                                </div>
                                <div class="mb-3">
                                    <label for="kategori_users" class="form-label">Kategori User</label>
                                        <select class="form-select" name="kategori_users" id="kategori_users" aria-label="Default select example" required="required">
                                            <option selected>Pilih Kategori User</option>
                                            <option value="Ketua">Ketua</option>
                                            <option value="Anggota">Anggota</option>
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
