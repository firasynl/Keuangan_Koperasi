@extends('layouts.mainlayout')
@section('content')    
    
    

    <div class="container">
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="pb-3">
                <h1 class="text-center mb-4">Data Investasi</h1>
                <a href="/Investasi/TambahDataInvestasi" class="btn btn-success">Tambah +</a>
            </div>
            <div class="row">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success" Id="alert">
                        {{$message}}
                    </div>
                    <script>
                        setTimeout(function(){
                            document.getElementById('alert').style.display = 'none';
                        }, 2500);
                    </script>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Nilai Investasi</th>
                        <th scope="col">Jenis Investasi</th>
                        <th scope="col">Nama Investor</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $row)
                        <tr>
                            <td>{{$row->id_investasi}}</td>
                            <td>{{$row->tanggal}}</td>
                            <td>{{$row->nilai_investasi}}</td>
                            <td>{{$row->jenis_investasi}}</td>
                            <td>{{$row->nama_investor}}</td>
                            <td>
                                <a href="/Investasi/ShowDataInvestasi/{{$row->id_investasi}}" class="btn btn-warning">Edit</a>
                                <a href="/Investasi/Delete/{{$row->id_investasi}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection