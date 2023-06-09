@extends('bukufiras.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Buku</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('bukufiras.index') }}"> Back</a>
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
  
    <form action="{{ route('bukufiras.update',$bukufira->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Judul</strong>
                    <input type="text" name="judul" value="{{ $bukufira->judul }}" class="form-control" placeholder="Judul">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Penulis</strong>
                    <input type="text" name="penulis" value="{{ $bukufira->penulis }}" class="form-control" placeholder="Penulis">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Penerbit</strong>
                    <input type="text" name="penerbit" value="{{ $bukufira->penerbit }}" class="form-control" placeholder="Penerbit">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tahun Terbit</strong>
                    <input type="number" name="tahun_terbit" value="{{ $bukufira->tahun_terbit }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah Stok</strong>
                <input type="number" name="jumlah_stok" value="{{ $bukufira->jumlah_stok }}" class="form-control">
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Denda Buku</strong>
                    <input type="number" name="denda_buku" value="{{ $bukufira->denda_buku }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection