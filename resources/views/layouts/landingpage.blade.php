<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Keuangan Koperasi</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  </head>
  <body class="bg-light">
    <nav class="navbar fixed-top navbar-expand-lg bg-primary navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Sistem Keuangan</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNav" style="float: right;">
            <ul class="nav navbar-nav me-auto mb-2 mb-lg-0"></ul>
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/sesi/register"><span class="fas fa-user"></span> Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/sesi"><span class="fas fa-sign-in-alt"></span> Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main role="main" class="container">
        <div>
            @if(Session::has('success'))
                <div class = "pt3">
                    <div class = "alert alert-success" Id="alert">
                        {{Session::get('success')}}
                    </div>
                </div>
                <script>
                        setTimeout(function(){
                            document.getElementById('alert').style.display = 'none';
                        }, 2500);
                </script>
            @endif
        </div>
        <div class="tempat" style="margin-top: 5rem;">
            @yield('content')
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>