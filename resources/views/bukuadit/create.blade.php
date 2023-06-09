@extends('layouts.UASlayout')
@section('content')    
    <h1 class="text-center mb-4">Tambah Data Buku</h1>
    
    <div class="container">
         
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action='{{ url('bukuadit') }}' method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="Judul" class="form-label">Judul</label>
                                    <input type="text" class="form-control" name='Judul' id="Judul">
                            </div>
                            <div class="mb-3">
                                <label for="Penulis" class="form-label">Penulis</label>
                                    <input type="text" class="form-control" name='Penulis' id="Penulis">
                            </div>
                            <div class="mb-3">
                                <label for="Penerbit" class="form-label">Penerbit</label>
                                    <input type="text" class="form-control" name='Penerbit' id="Penerbit">
                            </div>
                            <div class="mb-3">
                                <label for="TahunTerbit" class="form-label">Tahun Terbit</label>
                                    <input type="number" class="form-control" name='TahunTerbit' id="TahunTerbit">
                            </div>
                            <div class="mb-3">
                                <label for="JumlahStok" class="form-label">Stok</label>
                                    <input type="number" class="form-control" name='JumlahStok' id="JumlahStok">
                            </div>
                            <div class="mb-3">
                                <label for="dendabuku" class="form-label">Denda Buku</label>
                                    <input type="number" class="form-control" name='dendabuku' id="dendabuku">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button> <a class="btn btn-outline-danger btn-xl" href="{{ url('bukuadit') }}"> Kembali</a>
                          </form> 
                    </div>
                </div> 
            </div>
        </div>
    </div>
@endsection