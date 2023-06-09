@extends('layouts.mainlayout')
@section('content')    
    <h1 class="text-center mb-4">Tambah Data Buku</h1>
    
    <div class="container">
         
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="/Book/InsertDataBook" method="POST">
                            @csrf
                            <div class="mb-3">
                              <label for="InputIDBuku" class="form-label">Id</label>
                              <input type="number" name="IDBuku" class="form-control" id="InputIDBuku" aria-describedby="" required="required">
                              <div id="InputIDBuku" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <label for="InputJudul" class="form-label">Judul</label>
                                <input type="varchar" name="Judul" class="form-control" id="InputJudul" required="required">
                            </div>
                            <div class="mb-3">
                                <label for="InputPenulis" class="form-label">Penulis</label>
                                <input type="varchar" name="Penulis" class="form-control" id="InputPenulis" required="required">
                            </div>
                            <div class="mb-3">
                                <label for="InputPenerbit" class="form-label">Penerbit</label>
                                <input type="varchar" name="Penerbit" class="form-control" id="InputPenerbit" required="required">
                            </div>
                            <div class="mb-3">
                              <label for="InputTahunTerbit" class="form-label">Tahun Terbit</label>
                              <input type="date" name="TahunTerbit" class="form-control" id="InputTahunTerbit" aria-describedby="" required="required">
                              <div id="InputTahunTerbit" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                              <label for="InputStokBuku" class="form-label">Stok Buku</label>
                              <input type="number" name="StokBuku" class="form-control" id="InputStokBuku" required="required">
                            </div>
                            <div class="mb-3">
                              <label for="Inputdendabuku" class="form-label">Denda Buku</label>
                              <input type="number" name="dendabuku" class="form-control" id="Inputdendabuku" required="required">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button> <a class="btn btn-outline-danger btn-xl" href="/Book"> Kembali</a>
                          </form> 
                    </div>
                </div> 
            </div>
        </div>
    </div>
@endsection