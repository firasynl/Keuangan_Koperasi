@extends('layouts.mainlayout')
@section('content')

        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
                <div class="pb-3">
                    <h1 class="text-center mb-4">Data Hutang</h1>
                    <a href="{{route('hutangs.create') }}" class="btn btn-success">+ Tambah Data</a>
                    <div>
                        @if(Session::has('success'))
                            <div class = "pt3">
                                <div class = "alert alert-success" Id="alert">
                                    {{Session::get('success')}}
                                </div>
                            </div>
                            <script>
                                    setTimeout(function(){
                                        document.getElementById('alert').style.display = 'none';
                                    }, 2500);
                            </script>
                        @endif
                    </div>
                </div>
          
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nama Kreditur</th>
                            <th>Jenis Hutang</th>
                            <th>Jumlah Hutang</th>
                            <th>Tgl JatuhTempo</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
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
                    </tbody>
                </table>
    
    {!! $hutangs->links() !!}
        
@endsection