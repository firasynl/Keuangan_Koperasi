@extends('layouts.mainlayout')
@section('content')    
        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                    <h1 class="text-center mb-4">Data Laporan</h1>
                  <a href='{{ route('laporan.create') }}' class="btn btn-success">+ Tambah Data</a>
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
                        <h1>Total Simpanan: {{ $totalSimpanan }}
                            Total Hutang : {{ $totalHutang }}
                        </h1>
                        
                    </tbody>
                </table>
               
          </div>
@endsection