@extends('layouts.mainlayout')
@section('content')    
    <h1 class="text-center mb-4">Tambah Data Hutang</h1>
    
    <div class="container">
         
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('hutangs.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nama_kreditur" class="form-label">Nama Kreditur</label>
                                    <input type="text" class="form-control" name='nama_kreditur' id="nama_kreditur">
                            </div>
                            <div class="mb-3">
                                <label for="jenis_hutang" class="form-label">Jenis Hutang</label>
                                    <input type="text" class="form-control" name='jenis_hutang' id="jenis_hutang">
                            </div>
                            <div class="mb-3">
                                <label for="jumlah_hutang" class="form-label">Jumlah Hutang</label>
                                    <input type="number" class="form-control" name='jumlah_hutang' id="jumlah_hutang">
                            </div>
                            <div class="mb-3">
                                <label for="tgl_jatuhtempo" class="form-label">Tanggal Jatuh Tempo Hutang</label>
                                    <input type="date" class="form-control" name='tgl_jatuhtempo' id="tgl_jatuhtempo">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button> <a class="btn btn-outline-danger btn-xl" href="{{ route('hutangs.index') }}"> Kembali</a>
                          </form> 
                    </div>
                </div> 
            </div>
        </div>
    </div>
@endsection