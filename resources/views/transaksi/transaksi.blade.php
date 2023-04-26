
@extends('layouts.main')

@section('content')
<h1 class="text-center mb4 mt-2"> Daftar Transaksi</h1>

<div class="tombol">
    <a href="{{ route('create') }}" class="btn btn-success btn-lg">Add +</a>

</div>

<div class="konten-utama">
<table class="table table-bordered">
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
