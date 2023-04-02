<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Keuangan Koperasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body class="bg-light">  
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="/">Keuangan</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/user">Pengguna</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Investasi">Investasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/transaksi">Transaksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/simpanans">Simpanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/laporan">Laporan Keuangan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/hutang">Hutang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container">
        {{-- @if(Session::has('success'))
            <div class = "pt3">
                <div class = "alert alert-success">
                    {{Session::get('success')}}
                </div>
            </div>
        @endif --}}
        @yield('content')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>