@extends('layouts.main')
@section('content')    
        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                </div>
                
                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href='/user/create' class="btn btn-primary">+ Tambah Data</a>
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
                                <a href='{{url('user/'.$item->id_users.'/edit')}}' class="btn btn-warning btn-sm">Edit</a>

                                <form onsubmit="return confirm('Yakin akan menghapus data?')" class='d-inline' action="{{url('user/'.$item->id_users)}}" method="post">
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