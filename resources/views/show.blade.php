<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    
    <!-- MY CSS -->
    <link rel="stylesheet" href="styledb.css" />
    
    <title>Detail Data Form Mahasiswa</title>
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
            <div class="col-12 text-center">
                <h1><br><br></h1>
                <h4 class="fs-4" style="font-family: cursive; margin-top: 5px; margin-bottom: 20px"><strong>Data Mahasiswa</strong></h4>
            </div>
        </div>

        <div class="row justify-content-center gap-0">
            <div class="col-12">
                <table class="table" style="border: 1px solid #000000; border-spacing: 0; border-collapse: collapse;">
                    @csrf
                    <thead>
                        <tr style="background-color: #ffbf00">
                            <td class="col-6" style="border: 1px solid #000000; border-spacing: 0; border-collapse: collapse;"><strong>Nama Lengkap</strong></td>
                            <td style="border: 1px solid #000000; border-spacing: 0; border-collapse: collapse;">{{$data->nama_mhs}}</td>
                        </tr>
                    </thead>

                    <thead>
                        <tr style="background-color: #ffbf00">
                            <td class="col-6" style="border: 1px solid #000000; border-spacing: 0; border-collapse: collapse;"><strong>Tanggal Lahir</strong></td>
                            <td style="border: 1px solid #000000; border-spacing: 0; border-collapse: collapse;">{{$data->tgl_lahir}}</td>
                        </tr>
                    </thead>

                    <thead>
                        <tr style="background-color: #ffbf00">
                            <td class="col-6" style="border: 1px solid #000000; border-spacing: 0; border-collapse: collapse;"><strong>Alamat</strong></td>
                            <td style="border: 1px solid #000000; border-spacing: 0; border-collapse: collapse;">{{$data->alamat}}</td>
                        </tr>
                    </thead>

                    <thead>
                        <tr style="background-color: #ffbf00">
                            <td class="col-6" style="border: 1px solid #000000; border-spacing: 0; border-collapse: collapse;"><strong>Agama</strong></td>
                            <td style="border: 1px solid #000000; border-spacing: 0; border-collapse: collapse;">{{$data->agama}}</td>
                        </tr>
                    </thead>

                    <thead>
                        <tr style="background-color: #ffbf00">
                            <td class="col-6" style="border: 1px solid #000000; border-spacing: 0; border-collapse: collapse;"><strong>Universitas</strong></td>
                            <td style="border: 1px solid #000000; border-spacing: 0; border-collapse: collapse;">{{$data->universitas}}</td>
                        </tr>
                    </thead>

                    <thead>
                        <tr style="background-color: #ffbf00">
                            <td class="col-6" style="border: 1px solid #000000; border-spacing: 0; border-collapse: collapse;"><strong>Fakultas</strong></td>
                            <td style="border: 1px solid #000000; border-spacing: 0; border-collapse: collapse;">{{$data->fakultas}}</td>
                        </tr>
                    </thead>

                    <thead>
                        <tr style="background-color: #ffbf00">
                            <td class="col-6" style="border: 1px solid #000000; border-spacing: 0; border-collapse: collapse;"><strong>Program Studi</strong></td>
                            <td style="border: 1px solid #000000; border-spacing: 0; border-collapse: collapse;">{{$data->prodi}}</td>
                        </tr>
                    </thead>

                    <thead>
                        <tr style="background-color: #ffbf00">
                            <td class="col-6" style="border: 1px solid #000000; border-spacing: 0; border-collapse: collapse;"><strong>NIM</strong></td>
                            <td style="border: 1px solid #000000; border-spacing: 0; border-collapse: collapse;">{{$data->nim_mhs}}</td>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>

        <div class="d-grid gap-2">
            <a class="btn btn-outline-danger" href="{{ route('biodata.index') }}" role="button">Back</a>
        </div>
</body>
</html>