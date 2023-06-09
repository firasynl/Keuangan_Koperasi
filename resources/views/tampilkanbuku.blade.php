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
    <h1 class="text-center">Tambah Data Buku</h1>

   <div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-body">
                <form action="/updatebuku/{{$data->id}}" method="POST">
                    @csrf
                    <div class="mb-4">
                      <label for="exampleInputEmail1" class="form-label">ID Buku</label>
                      <input type="text" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{ $data->id}}">
                    </div>
                    <div class="mb-4">
                      <label for="exampleInputEmail1" class="form-label">Judul</label>
                      <input type="text" name="judul" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{ $data->judul}}">
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label">Penulis</label>
                        <input type="text" name="penulis" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->penulis}}">
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label">Penerbit</label>
                        <input type="text" name="penerbit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->penerbit}}">
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label">Tahun Terbit</label>
                        <input type="text" name="tahun_terbit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->tahun_terbit}}">
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label">Jumlah Stok</label>
                        <input type="text" name="jumlah_stok" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->jumlah_stok}}">
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label">Denda Buku</label>
                        <input type="text" name="denda_buku" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->denda_buku}}">
                    </div>
                    <button type="submit justify-content-center" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
   </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>