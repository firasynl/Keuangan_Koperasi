@extends('layouts.mainlayout')
@section('content')    
        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
                <div class="pb-3">
                    <h1 class="text-center mb-4">Data Pengguna</h1>
                    <a href='anggota/create' class="btn btn-success">+ Tambah Data</a>
                </div>
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
                
          
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">Id</th>
                            <th class="col-md-3">Nama</th>
                            <th class="col-md-4">Nomer Telepon</th>
                            <th class="col-md-2">Kategori User</th>
                            <th class="col-md-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->id_users }}</td>
                            <td>{{$item->nama}}</td>
                            <td>{{ $item->no_telp }}</td>
                            <td>{{ $item->kategori_users }}</td>
                            <td>
                                <a href='{{url('anggota/'.$item->id_users.'/edit')}}' class="btn btn-warning btn-sm">Edit</a>

                                <form onsubmit="return confirm('Yakin akan menghapus data?')" class='d-inline' action="{{url('anggota/'.$item->id_users)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" name="submit" class="btn btn-danger btn-sm">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach     
                    </tbody>
                </table>
          </div>
@endsection