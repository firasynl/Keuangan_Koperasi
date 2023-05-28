@extends('layouts.mainlayout')
@section('content')    
    <h1 class="text-center mb-4">Tambah Data Simpanan</h1>
    
    <div class="container">
         
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('simpanans.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="tgl_setoran" class="form-label">Tanggal Setoran</label>
                                    <input type="date" class="form-control" name='tgl_setoran' id="tgl_setoran">
                            </div>
                            <div class="mb-3">
                                <label for="anggota_id" class="form-label">ID Anggota</label>
                                <select class="form-select" name="anggota_id" id="anggota_id" aria-label="Default select example" required="required">
                                <option selected>Pilih Anggota</option>
                                    @foreach($anggota as $anggota)
                                        <option selected value={{ $anggota->id }}>{{ $anggota->nama}}</option>
                                    @endforeach
                                            
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="jumlah_simpanan" class="form-label">Jumlah Simpanan</label>
                                    <input type="number" class="form-control" name='jumlah_simpanan' id="jumlah_simpanan">
                            </div>
                            <div class="mb-3">
                                <label for="jenis_simpanan" class="form-label">Kategori User</label>
                                        <select class="form-select" name="jenis_simpanan" id="jenis_simpanan" aria-label="Default select example" required="required">
                                            <option selected>Pilih Jenis Simpanan</option>
                                            <option value="Simpanan Pokok">Simpanan Pokok</option>
                                            <option value="Simpanan Wajib">Simpanan Wajib</option>
                                            <option value="Simpanan Sukarela">Simpanan Sukarela</option>
                                        </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button> <a class="btn btn-outline-danger btn-xl" href="{{ route('simpanans.index') }}"> Kembali</a>
                          </form> 
                    </div>
                </div> 
            </div>
        </div>
    </div>
@endsection
