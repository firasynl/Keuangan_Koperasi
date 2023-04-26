@extends('layouts.main')

@section('content')

<h2 class="fw-bold mb-4 pt-2 text-center">Form Input Riwayat Transaksi</h2>
        <form action="{{ route("storeCreate") }}" method="POST" class="form-custom px-4 pb-5 pt-4 mb-4">
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
                <label for="statustransaksi" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                    <select name="statustransaksi" id="statustransaksi" class="form-control" required>
                        <option value="debit">Dalam Proses</option>
                        <option value="kredit">Selesai</option>
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
            <a class="float-end">
                <button type="submit" name="submit" class="btn btn-success btn-xl">
                    <i class="bi bi-save"> Simpan</i>
                </button>
            </a>
        </form>
        <br><br>
        <a href="{{ route("transaksi") }}">
            <button type="button" class="btn btn-outline-danger btn-xl mt-5">
                <i class="bi bi-chevron-double-left"> Kembali</i>
            </button>
        </a>

@endsection
