@extends('kategoris.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tabel Kategori Buku</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('kategoris.create') }}"> Tambah</a>
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
            <th>Kategori</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($kategoris as $kategori)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $kategori->nama_kategori }}</td>
            <td>
                <form action="{{ route('kategoris.destroy',$kategori->id) }}" method="POST">
   
                    <a class="btn btn-primary" href="{{ route('kategoris.edit',$kategori->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $kategoris->links() !!}
      
@endsection