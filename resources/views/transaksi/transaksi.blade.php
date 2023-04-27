
@extends('layouts.mainlayout')

@section('content')
        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
                <div class="pb-3">
                    <h1 class="text-center mb-4">Daftar Transaksi</h1>
                    <a href='{{ route('create') }}' class="btn btn-success">+ Tambah Data</a>
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
                    <th scope="col">#</th>
                    <th scope="col">Nama Transaksi</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Status</th>
                    <th scope="col">Nilai</th>
                    <th scope="col"  class="w-25">Deskripsi</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                    <tr>
                        <th scope="row">{{ $row->id }}</th>
                        <td>{{ $row->namatransaksi }}</td>
                        <td>{{ $row->tgltransaksi }}</td>
                        <td>{{ $row->statustransaksi }}</td>
                        <td> Rp. {{ $row->jumlahtransaksi }}</td>
                        <td>{{ $row->deskripsitransaksi }}</td>
                        <td>
                            <a href="{{ route("deletetransaksi",$row->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?');">
                                Delete
                            </a>
                            <a href="{{ route("edittransaksi",$row->id) }}" class="btn btn-warning btn-sm">
                                Edit
                            </a>
                            </td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
          </div>
@endsection
