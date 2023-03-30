<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Simpanan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Simpanan</h2>
            <p class="dashboard-subtitle">Data Simpanan</p>
        </div>
    </div>
    <div class="dashboard-content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('simpanan.create') }}" class="btn btn-primary mb-3">+ Tambah Data</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table" id="crudTable">
                            <thead>
                                <tr>
                                    <th>Tanggal Setoran</th>
                                    <th>ID Anggota</th>
                                    <th>Jumlah Simpanan</th>
                                    <th>Jenis Simpanan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                            </tbody>

                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>