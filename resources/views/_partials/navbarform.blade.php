<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="csss/form.css">
</head>
<body>
    <nav class="navbar bg-body-tertiary m-2">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Pengaduan</a>
          <ul class="nav justify-content-end me-5">
            <div class="dropdown me-5">
                <a class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="text-decoration: none; color: black;">
                  Masyarakat
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#" class="bi bi-list-ul">{{ Auth::user()->nama }}</a></li>
                  <hr>
                  <li><a class="dropdown-item" href="{{ route('history') }}" class="bi bi-list-ul">Daftar Pengaduan</a></li>
                  <li><a class="dropdown-item" href="{{ route('aduanmasyarakat') }}">Pengaduan</a></li>
                  <li><a class="dropdown-item" href="{{ route('users.logout') }}">Keluar</a></li>
                </ul>
              </div>
          </ul>
        </div>
      </nav>

      <div class="container-fluid p-5">
        @yield('content')
      </div>
      

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>



