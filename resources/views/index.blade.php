<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>UAS RPL</title>
  </head>
  <body>
    <h1 class="text-center">PERPUSTAKAAN TAMARA</h1>

   <div class="container">
    <div class="row">
        <table class="table">
            <a href="/tambahbuku" class="btn btn-success">Tambah</button>
            <thead>
              <tr>
                <th scope="col">ID Buku</th>
                <th scope="col">Judul</th>
                <th scope="col">Penulis</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Tahun Terbit</th>
                <th scope="col">Jumlah Stok</th>
                <th scope="col">Denda Buku</th>
                <th scope="col">Aksi</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($data as $row)
                <tr>
                    <th scope="row">{{ $row -> id}}</th>
                    <td>{{ $row -> judul}}</td>
                    <td>{{ $row -> penulis}}</td>
                    <td>{{ $row -> penerbit}}</td>
                    <td>{{ $row -> tahun_terbit}}</td>
                    <td>{{ $row -> jumlah_stok}}</td>
                    <td>{{ $row -> denda_buku}}</td>
                    <td>
                        <a href="/delete/{{ $row -> id}}" class="btn btn-danger">Hapus</button>
                        <a href="/tampilkanbuku/{{ $row -> id}}" class="btn btn-warning">Edit</button>
                    </td>
                  </tr>
                @endforeach
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>