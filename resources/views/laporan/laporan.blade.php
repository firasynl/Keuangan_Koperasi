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
                  <a href='{{ route('laporan.create') }}' class="btn btn-primary">+ Tambah Data</a>
                </div>
          
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">Id Laporan</th>
                            <th class="col-md-3">Nama Laporan</th>
                            <th class="col-md-4">Tanggal Laporan</th>
                            <th class="col-md-2">Jenis Laporan</th>
                            <th class="col-md-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->id_laporan }}</td>
                            <td>{{$item->nama_laporan}}</td>
                            <td>{{ $item->tgl_laporan }}</td>
                            <td>{{ $item->jenis_laporan }}</td>
                            <td>
                                <a href='{{url('laporan/'.$item->id_laporan.'/edit')}}' class="btn btn-warning btn-sm">Edit</a>

                                <form onsubmit="return confirm('Yakin akan menghapus data?')" class='d-inline' action="{{url('laporan/'.$item->id_laporan)}}" method="post">
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