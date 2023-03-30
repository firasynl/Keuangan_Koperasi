<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Delicious+Handrawn&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


    <title>Transaksi Koperasi</title>
    <style>
        body {
    font-family: sans-serif;
}

.top-bar {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    height: 60px;
    background-color: bisque;
}

.container {
    display: flex;
    min-width: 100%;
    min-height: 100vh;
    background-color: #DEDCDC;
}

.sidebar {
    display: flex;
    box-sizing: border-box;
    flex-direction: column;
    padding: 24px;
    border-style: outset;
    position: relative;
    background: #e5e9d2;
    width: 367px;
    height: 800px;
    left: 70px;
    top: 100px
}

.container .main-content {
    background-color: #Ffff;
    flex-grow: 1;
    position: relative;
    top: 100px;
    margin-left: 100px;
    margin-right: 30px;
    margin-bottom: 230px;
    border-radius: 10px;
    height: 800px;
}

.sidebar .description-header {
    font-family: 'Delicious Handrawn', cursive;

}

.list-item a {
    display: flex;
    justify-content: center;
    letter-spacing: 3px;
    text-decoration: none;
    font-size: 2em;

}

.sidebar .main .list-item  {
    font-family: 'Delicious Handrawn', cursive;
    border-style: ridge;
    border-radius: 8px;
    margin-top: 20px;
    padding: 20px;

}

.konten-utama {
    margin: 40px;
}


    </style>
</head>
<body>
{{--   <div class="top-bar">
</div>
    <div class="container">
    <div class="sidebar">
    <div class="header">
        <div class="list-item">
            <a href="">
                <img src="" alt="" class="icon">
                <span class="description-header">
                    Transaksi Koperasi
                </span>
            </a>
        </div>
    </div>
    <div class="main">
        <div class="list-item">
            <a href="">
                <img src="" alt="" class="icon">
                <span class="description"></span>
                User
            </a>
        </div>

        <div class="list-item">
            <a href="">
                <img src="" alt="" class="icon">
                <span class="description"></span>
                Investasi
            </a>
        </div>

        <div class="list-item">
            <a href="">
                <img src="" alt="" class="icon">
                <span class="description"></span>
                Transaksi
            </a>
        </div>

        <div class="list-item">
            <a href="">
                <img src="" alt="" class="icon">
                <span class="description"></span>
                Simpanan
            </a>
        </div>

        <div class="list-item">
            <a href="">
                <img src="" alt="" class="icon">
                <span class="description"></span>
                Laporan
            </a>
        </div>

        <div class="list-item">
            <a href="">
                <img src="" alt="" class="icon">
                <span class="description"></span>
                Hutang
            </a>
        </div>

    </div>

</div> --}}
    <div class="main-content">


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
</body>
</html>
