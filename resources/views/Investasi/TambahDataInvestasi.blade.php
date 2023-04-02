<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CRUD Investasi</title>
  </head>
  <body>
    <h1 class="text-center mb-4">Tambah Data Investasi</h1>
    
    <div class="container">
         
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="/Investasi/InsertDataInvestasi" method="POST">
                            @csrf
                            <div class="mb-3">
                              <label for="InputTanggal" class="form-label">Tanggal</label>
                              <input type="date" name="tanggal" class="form-control" id="InputTanggal" aria-describedby="">
                              <div id="InputTanggal" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                              <label for="InputNilaiInvestasi" class="form-label">Nilai Investasi</label>
                              <input type="number" name="nilai_investasi" class="form-control" id="InputNilaiInvestasi">
                            </div>
                            <div class="mb-3">
                                <label for="InputJenisInvestasi" class="form-label">Jenis Investasi</label>
                                <select class="form-select" name="jenis_investasi" aria-label="Default select example">
                                    <option selected>Pilih Investasi Yang Dilakukan</option>
                                    <option value="1">Saham</option>
                                    <option value="2">Obligasi</option>
                                    <option value="3">Reksa Dana</option>
                                  </select>
                              </div>
                              <div class="mb-3">
                                <label for="InputNamaInvestor" class="form-label">Nama Investor</label>
                                <input type="text" name="nama_investor" class="form-control" id="InputNamaInvestor">
                              </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form> 
                    </div>
                </div> 
            </div>
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
</html>