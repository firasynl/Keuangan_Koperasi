@extends('layouts.mainpage')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Simpanan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('simpanans.create') }}"> Tambah Data</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Tanggal Setoran</th>
            <th>ID Anggota</th>
            <th>Jumlah Simpanan</th>
            <th>Jenis Simpanan</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($simpanans as $simpanan)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $simpanan->tgl_setoran }}</td>
            <td>{{ $simpanan->anggota_id }}</td>
            <td>{{ $simpanan->jumlah_simpanan }}</td>
            <td>{{ $simpanan->jenis_simpanan }}</td>
            <td>
                <form action="{{ route('simpanans.destroy',$simpanan->id) }}" method="POST">
      
                    <a class="btn btn-primary" href="{{ route('simpanans.edit',$simpanan->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $simpanans->links() !!}
        
@endsection