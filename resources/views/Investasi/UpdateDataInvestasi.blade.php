@extends('layouts.mainlayout')
@section('content')    
    <h1 class="text-center mb-4">Update Data Investasi</h1>
    
    <div class="container">
         
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="/Investasi/UpdateDataInvestasi/{{$data->id_investasi}}" method="POST">
                            @csrf
                            <div class="mb-3">
                              <label for="InputId" class="form-label">Id</label>
                              <input type="number" name="id_investasi" class="form-control" id="InputId" aria-describedby="" value="{{$data->id_investasi}}">
                              <div id="InputId" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                              <label for="InputTanggal" class="form-label">Tanggal</label>
                              <input type="date" name="tanggal" class="form-control" id="InputTanggal" aria-describedby="" value="{{$data->tanggal}}">
                              <div id="InputTanggal" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                              <label for="InputNilaiInvestasi" class="form-label">Nilai Investasi</label>
                              <input type="number" name="nilai_investasi" class="form-control" id="InputNilaiInvestasi" value="{{$data->nilai_investasi}}">
                            </div>
                            <div class="mb-3">
                                <label for="InputJenisInvestasi" class="form-label">Jenis Investasi</label>
                                <select class="form-select" name="jenis_investasi" aria-label="Default select example">
                                    <option selected>{{$data->jenis_investasi}}</option>
                                    <option value="1">Saham</option>
                                    <option value="2">Obligasi</option>
                                    <option value="3">Reksa Dana</option>
                                  </select>
                              </div>
                              <div class="mb-3">
                                <label for="InputNamaInvestor" class="form-label">Nama Investor</label>
                                <input type="text" name="nama_investor" class="form-control" id="InputNamaInvestor" value="{{$data->nama_investor}}">
                              </div>
                            <button type="submit" class="btn btn-primary">Submit</button> <a class="btn btn-outline-danger btn-xl" href="/Investasi"> Kembali</a>
                          </form> 
                    </div>
                </div> 
            </div>
        </div>
    </div>
@endsection