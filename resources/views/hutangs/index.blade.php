@extends('layouts.main')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Hutang</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('hutangs.create') }}"> Tambah Data</a>
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
            <th>Id</th>
            <th>Nama Kreditur</th>
            <th>Jenis Hutang</th>
            <th>Jumlah Hutang</th>
            <th>Tgl JatuhTempo</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($hutangs as $hutang)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $hutang->nama_kreditur }}</td>
            <td>{{ $hutang->jenis_hutang }}</td>
            <td>{{ $hutang->jumlah_hutang }}</td>
            <td>{{ $hutang->tgl_jatuhtempo }}</td>
            <td>
                <form action="{{ route('hutangs.destroy',$hutang->id) }}" method="POST">
      
                    <a class="btn btn-primary" href="{{ route('hutangs.edit',$hutang->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $hutangs->links() !!}
        
@endsection