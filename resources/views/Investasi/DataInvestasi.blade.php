@extends('layouts.main')
    @section('content')
    <title>CRUD Investasi</title>
  </head>
  <body>
    <h1 class="text-center mb-4">Data Investasi</h1>
    
    <div class="container">
        <div class="pb-3">
        <a href="/Investasi/TambahDataInvestasi" class="btn btn-success">Tambah +</a>
        </div>
        <div class="row">
            @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{$message}}
                </div>
            @endif
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Nilai Investasi</th>
                    <th scope="col">Jenis Investasi</th>
                    <th scope="col">Nama Investor</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($data as $row)
                    <tr>
                        <th scope="row">{{$no++}}</th>
                        <td>{{$row->tanggal}}</td>
                        <td>{{$row->nilai_investasi}}</td>
                        <td>{{$row->jenis_investasi}}</td>
                        <td>{{$row->nama_investor}}</td>
                        <td>
                            <a href="/Investasi/Delete/{{$row->id_investasi}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                            <a href="/Investasi/ShowDataInvestasi/{{$row->id_investasi}}" class="btn btn-info">Update</a>
                        </td>
                    </tr>
                @endforeach
                
                </tbody>
            </table>
        </div>
    </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
  @endsection