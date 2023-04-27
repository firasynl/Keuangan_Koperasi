
@extends('layouts.mainlayout')

@section('content')
        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
                <div class="pb-3">
                    <h1 class="text-center mb-4">Data Simpanan</h1>
                    <a href='{{ route('simpanans.create') }}' class="btn btn-success">+ Tambah Data</a>
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
                            <th>No</th>
                            <th>Tanggal Setoran</th>
                            <th>ID Anggota</th>
                            <th>Jumlah Simpanan</th>
                            <th>Jenis Simpanan</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($simpanans as $simpanan)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $simpanan->tgl_setoran }}</td>
                            <td>{{ $simpanan->anggota_id }}</td>
                            <td>{{ $simpanan->jumlah_simpanan }}</td>
                            <td>{{ $simpanan->jenis_simpanan }}</td>
                            <td>
                                <form action="{{ route('simpanans.destroy',$simpanan->id) }}" method="POST">
                    
                                    <a class="btn btn-warning" href="{{ route('simpanans.edit',$simpanan->id) }}">Edit</a>
                    
                                    @csrf
                                    @method('DELETE')
                        
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
            </table>
          </div>
          {!! $simpanans->links() !!}
@endsection
