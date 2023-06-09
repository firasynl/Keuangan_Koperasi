@extends('layouts.UASlayout')
@section('content')    
        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
                <div class="pb-3">
                    <h1 class="text-center mb-4">Data Buku</h1>
                    <h2 class="text-center mb-4">Aditya Y.D. | 4611421130</h2>
                    <a href='bukuadit/create' class="btn btn-success">+ Tambah Data</a>
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
                            <th class="col-md-1">No</th>
                            <th class="col-md-2">Judul</th>
                            <th class="col-md-2">Penulis</th>
                            <th class="col-md-2">Penerbit</th>
                            <th class="col-md-2">Tahun Terbit</th>
                            <th class="col-md-2">Jumlah Stok</th>
                            <th class="col-md-2">Denda Buku</th>
                            <th class="col-md-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->IDBuku }}</td>
                            <td>{{ $item->Judul }}</td>
                            <td>{{ $item->Penulis }}</td>
                            <td>{{ $item->Penerbit }}</td>
                            <td>{{ $item->TahunTerbit }}</td>
                            <td>{{ $item->JumlahStok }}</td>
                            <td>{{ $item->dendabuku }}</td>
                            <td>
                                <a href='{{url('bukuadit/'.$item->IDBuku.'/edit')}}' class="btn btn-warning btn-sm">Edit</a>

                                <form onsubmit="return confirm('Yakin akan menghapus data?')" class='d-inline' action="{{url('bukuadit/'.$item->IDBuku)}}" method="post">
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