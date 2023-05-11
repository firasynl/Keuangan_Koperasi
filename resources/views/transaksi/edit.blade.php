@extends('layouts.mainlayout')
@section('content')    
    <h1 class="text-center mb-4">Update Data Transaksi</h1>
    
    <div class="container">
         
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route("updatetransaksi",$pdp->id) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="inputEmail3" class="form-label">Nama Transaksi</label>
                                    <input type="text" class="form-control" id="inputEmail3" placeholder="Input Nama" name="namatransaksi" value="{{$pdp->namatransaksi}}">
                            </div>
                            <div class="mb-3">
                                <label for="inputEmail3" class="form-label">Tanggal Transaksi</label>
                                    <input type="date" class="form-control" id="inputEmail3" name="tgltransaksi" value="{{$pdp->tgltransaksi}}">
                            </div>
                            <div class="mb-3">
                                <label for="statustransaksi" class="form-label">Status</label>
                                    <select  class="form-select" name="statustransaksi" aria-label="Default select example" required="required">>
                                        <option value="debit">Dalam Proses</option>
                                        <option value="kredit">Selesai</option>
                                    </select>
                            </div>
                            <div class="mb-3">
                                <label for="inputEmail3" class="form-label">Nilai Transaksi</label>
                                    <input type="text" class="form-control" id="inputEmail3" placeholder="Input Nilai" name="jumlahtransaksi" value="{{$pdp->jumlahtransaksi}}">
                            </div>
                            <div class="mb-3">
                                <label for="inputEmail3" class="form-label">Deskripsi</label>
                                    <input type="text" class="form-control" id="inputEmail3" placeholder="Deskripsi" name="deskripsitransaksi" value="{{$pdp->deskripsitransaksi}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button> <a class="btn btn-outline-danger btn-xl" href="{{ route("transaksi") }}"> Kembali</a>
                          </form> 
                    </div>
                </div> 
            </div>
        </div>
    </div>
@endsection
