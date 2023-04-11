<!DOCTYPE html>
<html>
  <head>
    <title>Sistem Keuangan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
      .navbar-inverse {
        background-color: rgb(23, 23, 255) !important;
      }

      .navbar-inverse .navbar-nav > li > a {
          color: #fff !important;
      }

      .navbar .logo a{
        color: #fff !important;
        line-height: 75% !important;
        font-size: 25px !important;
        font-weight: 600 !important;
        text-decoration: none !important;
      }
    </style>
  </head>
  <body>

    <div class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="logo">
              <button class="navbar-toggle" data-target="#mobile_menu" data-toggle="collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
              <a href="/" class="navbar-brand">Sistem Keuangan</a>
            </div>

            <div class="navbar-collapse collapse" id="mobile_menu">
              <ul class="nav navbar-nav">
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
                    <a class="nav-link" href="/hutangs">Hutang</a>
                </li>
              </ul>

              <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                <li><a href="/"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <main class="container">
      @yield('content')
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </body>
</html>
