<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Zakat </title>
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-secondary">
    
    <nav class="navbar navbar-expand-lg bg-dark navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand text-light" href="/home">E-Zakat</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <ul class="nav  nav-tabs">
                    <li class="nav-item">
                      <a class="nav-link text-secondary {{ ($tittle === "Muzzaki") ? 'active' : '' }}" aria-current="page" href="{{ route('muzzakis.index') }}">Muzzaki</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link text-secondary {{ ($tittle === "Distribusi") ? 'active' : '' }} dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Distribusi Zakat
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('mustahiqs.index') }}">Warga Setempat</a></li>
                        <li><a class="dropdown-item" href="{{ route('mustahiqlainnya.index') }}">Warga Lainnya</a></li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-secondary {{ ($tittle === "Bayar Zakat") ? 'active' : '' }}" href="{{ route('bayarzakats.index') }}">Bayar Zakat</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-secondary {{ ($tittle === "Kategori") ? 'active' : '' }}" href="{{ route('kategori-mustahiqs.index') }}">Kategori</a>
                    </li>
                  </ul>
            </ul>
            <li class="nav-item dropdown">
              <a class="nav-link active dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-square"></i> Hallo, {{ auth()->user()->name }} 
              </a>
              <ul class="dropdown-menu">
                <form action="/logout" method="POST">
                  @csrf
                 <li><button type="submit" class="dropdown-item" href="{{ route('logout') }}"><i class="bi bi-box-arrow-right"></i>  Logout</button></li>
                </form>
              </ul>
            </li>
          </div>
        </div>
      </nav>

    <div class="container">
      @yield('content')
    </div>


<script src="bootstrap-5.3.0-alpha1-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
