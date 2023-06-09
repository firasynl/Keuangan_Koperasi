@extends('layouts.mainlayout')
@section('content')    

        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="pb-3">
                <h1 class="text-center mb-4">Data Buku UAS Ari</h1>
                <a href="/Book/TambahDataBook" class="btn btn-success">+ Tambah Data</a>
            </div>
            <div>
                @if ($message = Session::get('success'))
                    <div class = "pt3">
                        <div class="alert alert-success" Id="alert">
                            {{$message}}
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
                        <th scope="col">Id</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Penulis</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Tahun Terbit</th>
                        <th scope="col">Stok Buku</th>
                        <th scope="col">Denda Buku</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $row)
                        <tr>
                            <td>{{$row->IDBuku}}</td>
                            <td>{{$row->Judul}}</td>
                            <td>{{$row->Penulis}}</td>
                            <td>{{$row->Penerbit}}</td>
                            <td>{{$row->TahunTerbit}}</td>
                            <td>{{$row->StokBuku}}</td>
                            <td>{{$row->dendabuku}}</td>
                            <td>
                                <a href="/Book/ShowDataBook/{{$row->IDBuku}}" class="btn btn-warning btn-sm">Edit</a>
                                <a href="/Book/Delete/{{$row->IDBuku}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
        </div>
@endsection