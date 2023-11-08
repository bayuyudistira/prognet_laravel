<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <title>Home | Bayu</title>
    <style>
        body{
            background-color= #000000;
        }
    </style>
  </head>
  <body>
    <!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg navbar-dark shadow-lg bg-dark navbar fixed-top">
      <div class="container-md">
        <a class="navbar-brand" href="#">Bayu Yudistira</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{ url('/') }}">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ url('/biodata/create') }}">Form Data</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ url('/biodata') }}">Database</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- AKHIR NAVBAR -->

    <div class="container">
        <div class="row justify-content-center">
            <div class="col text-center">
                <h1><br><br><br><br><br><br><br>Welcome to My Page!</h1>
                <h1>Saya Bayu Yudistira Ramadhan, Mahasiswa Universitas Udayana</h1>
            </div>
        </div>
    </div>
    <script>
    </script>
  </body>
</html>
