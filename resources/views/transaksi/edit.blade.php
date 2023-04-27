@extends('layouts.mainlayout')

@section('content')
<h2 class="fw-bold mb-4 pt-2 text-center">Edit Kolom</h2>
<form action="{{ route("updatetransaksi",$pdp->id) }}" method="POST" class="form-custom px-4 pb-5 pt-4 mb-4">
@csrf
<div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Transaksi</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="inputEmail3" placeholder="Input Nama" name="namatransaksi" required>
    </div>
</div>
<div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Transaksi</label>
    <div class="col-sm-10">
        <input type="date" class="form-control" id="inputEmail3" name="tgltransaksi" required>
    </div>
</div>
<div class="row mb-3">
    @php
        $semua_kategori_row = [
            "Dalam Proses",
            "Selesai"
        ]
    @endphp
    <label for="statustransaksi" class="col-sm-2 col-form-label">Kategori</label>
    <div class="col-sm-10">
        <select name="statustransaksi" id="statustransaksi"  class="form-control">
            @foreach ($semua_kategori_row as $statustransaksi)
                @if ($statustransaksi == $pdp->statustransaksi)
                <option value="{{ $statustransaksi }}" selected>{{ $statustransaksi }}</option>
                @else
                <option value="{{ $statustransaksi }}">{{ $statustransaksi }}</option>
                @endif
            @endforeach
        </select>
    </div>
</div>
<div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nilai Transaksi</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="inputEmail3" placeholder="Input Nilai" name="jumlahtransaksi" required>
    </div>
</div>
<div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Deskripsi</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="inputEmail3" placeholder="Deskripsi" name="deskripsitransaksi" required>
    </div>
</div>

<button type="submit" class="btn btn-primary float-end">
    <i class="bi bi-cloud-upload"> Update</i>
</button>
</form>
<br><br>
<a href="{{ route("transaksi") }}">
    <button type="button" class="btn btn-outline-danger btn-xl mt-5">
        <i class="bi bi-chevron-double-left"> Kembali</i>
    </button>
</a>
    </main>
</div>

</div>
</div>


    <script src="script.js"></script>
@endsection
