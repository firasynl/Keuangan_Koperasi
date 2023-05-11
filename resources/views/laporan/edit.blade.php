@extends('layouts.mainlayout')
@section('content')    
    <h1 class="text-center mb-4">Update Data Laporan Keuangan</h1>
    
    <div class="container">
         
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action='{{ url('laporan/'.$data->id_laporan) }}' method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="id_laporan" class="form-label">ID Laporan</label>
                                    {{ $data->id_laporan }}
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Laporan</label>
                                    <input type="text" class="form-control" name='nama_laporan' id="nama_laporan" value="{{$data->nama_laporan}}">
                            </div>
                            <div class="mb-3">
                                <label for="no_telp" class="form-label">Tanggal Laporan</label>
                                    <input type="date" class="form-control" name='tgl_laporan' id="tgl_laporan" value="{{$data->tgl_laporan}}">
                            </div>
                            <div class="mb-3">
                                <label for="kategori_users" class="form-label">Jenis Laporan</label>
                                    <input type="text" class="form-control" name='jenis_laporan' id="jenis_laporan" value="{{$data->jenis_laporan}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button> <a class="btn btn-outline-danger btn-xl" href="{{ url('laporan') }}"> Kembali</a>
                          </form> 
                    </div>
                </div> 
            </div>
        </div>
    </div>
@endsection
