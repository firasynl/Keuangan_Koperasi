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
              <a href="#" class="navbar-brand">Sistem Keuangan</a>
            </div>

              <ul class="nav navbar-nav navbar-right">
                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span> Login / Sign Up <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="/login">Login</a></li>
                    <li><a href="#">Sign Up</a></li>
                  </ul>
                </li>
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
