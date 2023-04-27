@extends('layouts.mainlayout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Data</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('hutangs.index') }}"> Kembali</a>
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
    
    <form action="{{ route('hutangs.update', $hutang->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
     
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Kreditur:</strong>
                    <input type="text" name="nama_kreditur" class="form-control" value="{{ $hutang->nama_kreditur }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jenis Hutang:</strong>
                    <input type="text" name="jenis_hutang" class="form-control" placeholder="jenis hutang" value="{{ $hutang->jenis_hutang }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jumlah Hutang:</strong>
                    <input type="number" name="jumlah_hutang" class="form-control" placeholder="Contoh: Rp 100.000" value="{{ $hutang->jumlah_hutang }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Jatuh Tempo:</strong>
                    <input type="date" name="tgl_jatuhtempo" class="form-control" value="{{ $hutang->tgl_jatuhtempo }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
     
    </form>
@endsection