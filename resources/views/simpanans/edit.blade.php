@extends('simpanans.layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Data</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('simpanans.index') }}"> Kembali</a>
            </div>
        </div>
    </div>
     
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('simpanans.update',$simpanan->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
     
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Setoran:</strong>
                <input type="date" name="tgl_setoran" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Anggota:</strong>
                <input type="text" name="anggota_id" class="form-control" placeholder="ID Anggota">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah Simpanan:</strong>
                <input type="text" name="jumlah_simpanan" class="form-control" placeholder="Contoh: Rp 15.000">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis Simpanan:</strong>
                <select class="form-control"  name="jenis_simpanan">
                <option selected >Pilih Jenis Simpanan</option>
                <option value="Simpanan Pokok">Simpanan Pokok</option>
                <option value="Simpanan Wajib">Simpanan Wajib</option>
                <option value="Simpanan Sukarela">Simpanan Sukarela</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
     
    </form>
@endsection