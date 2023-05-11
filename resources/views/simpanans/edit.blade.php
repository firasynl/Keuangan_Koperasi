@extends('layouts.mainlayout')
@section('content')    
    <h1 class="text-center mb-4">Update Data Pengguna</h1>
    
    <div class="container">
         
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('simpanans.update',$simpanan->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                                <div class="mb-3">
                                <label for="tgl_setoran" class="form-label">Tanggal Setoran</label>
                                    <input type="date" name="tgl_setoran" class="form-control" value="{{$simpanan->tgl_setoran}}">
                                </div>
                                <div class="mb-3">
                                    <label for="anggota_id" class="form-label">ID Anggota</label>
                                        <input type="text" class="form-control" name='anggota_id' value="{{$simpanan->anggota_id}}" id="nama">
                                </div>
                                <div class="mb-3">
                                    <label for="jumlah_simpanan" class="form-label">Jumlah Simpanan</label>
                                        <input type="number" class="form-control" name='jumlah_simpanan' value="{{$simpanan->jumlah_simpanan}}" id="no_telp">
                                </div>
                                <div class="mb-3">
                                    <label for="jenis_simpanan" class="form-label">Jenis Simpanan</label>
                                        <select class="form-select" name="jenis_simpanan" id="jenis_simpanan" aria-label="Default select example" required="required">
                                            <option selected >Pilih Jenis Simpanan</option>
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
