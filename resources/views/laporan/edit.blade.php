@extends('layouts.mainlayout')
@section('content')
<!-- START FORM -->
<form action='{{ url('laporan/'.$data->id_laporan) }}' method='post'>
@csrf
@method('PUT')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                <label for="id_laporan" class="col-sm-2 col-form-label">ID Laporan</label>
                    {{ $data->id_laporan }}
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama Laporan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama_laporan' id="nama_laporan">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="no_telp" class="col-sm-2 col-form-label">Tanggal Laporan</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name='tgl_laporan' id="tgl_laporan">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="kategori_users" class="col-sm-2 col-form-label">Jenis Laporan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='jenis_laporan' id="jenis_laporan">
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