@extends('layouts.main')
@section('content')
<!-- START FORM -->
<form action='{{ url('user/'.$data->id_users) }}' method='post'>
@csrf
@method('PUT')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="mb-3 row">
            <label for="id_users" class="col-sm-2 col-form-label">ID User</label>
                {{ $data->id_users }}
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama'value="{{$data->nama}}" id="nama">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="no_telp" class="col-sm-2 col-form-label">Nomer Telepon</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='no_telp' value="{{$data->no_telp}}" id="no_telp">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="kategori_users" class="col-sm-2 col-form-label">Kategori User</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='kategori_users'value="{{$data->kategori_users}}" id="kategori_users">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
          </form>
        </div>
        <!-- AKHIR FORM --> 
@endsection