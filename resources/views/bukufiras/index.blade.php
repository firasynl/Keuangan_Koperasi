@extends('bukufiras.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Buku</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('bukufiras.create') }}"> Tambah</a>
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
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Jumlah Stok</th>
            <th>Denda</th>
            <th>Kategori</th>

            <th width="280px">Action</th>
        </tr>
        @foreach ($bukufiras as $bukufira)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $bukufira->judul }}</td>
            <td>{{ $bukufira->penulis }}</td>
            <td>{{ $bukufira->penerbit }}</td>
            <td>{{ $bukufira->tahun_terbit}}</td>
            <td>{{ $bukufira->jumlah_stok }}</td>
            <td>{{ $bukufira->denda_buku }}</td>
            <td>{{ $bukufira->kategori->nama_kategori }}</td>
            <td>
                <form action="{{ route('bukufiras.destroy',$bukufira->id) }}" method="POST">
   
                    <a class="btn btn-primary" href="{{ route('bukufiras.edit',$bukufira->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $bukufiras->links() !!}
      
@endsection