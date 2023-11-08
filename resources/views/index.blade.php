<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- MY CSS -->
    <link rel="stylesheet" href="styledb.css" />

    <title>Informasi Data Form Mahasiswa</title>
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
                <h2 class="fs-3" style="font-family: cursive; margin-top: 5px; margin-bottom: 10px"><br><br><br><strong>Data Mahasiswa</strong></h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-11">
                <table class="table" style="border: 1px solid #000000; border-spacing: 0; border-collapse: collapse;">
                    <thead>
                        <tr class="table-dark text-center" >
                            <th style="border: 1px solid #000000; border-spacing: 0; border-collapse: collapse;" scope="col">Nama</th>
                            <th style="border: 1px solid #000000; border-spacing: 0; border-collapse: collapse;" scope="col">Universitas</th>
                            <th style="border: 1px solid #000000; border-spacing: 0; border-collapse: collapse;" scope="col">NIM</th>
                            <th style="border: 1px solid #000000; border-spacing: 0; border-collapse: collapse;" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $dt)
                        <tr>
                            <td style="border: 1px solid #000000; border-spacing: 0; border-collapse: collapse;">{{ $dt->nama_mhs }}</td>
                            <td style="border: 1px solid #000000; border-spacing: 0; border-collapse: collapse;">{{ $dt->universitas }}</td>
                            <td style="border: 1px solid #000000; border-spacing: 0; border-collapse: collapse;">{{ $dt->nim_mhs }}</td>
                            <td class="text-center" style="border: 1px solid #000000; border-spacing: 0; border-collapse: collapse;">
                                <a href="{{ route('biodata.show', $dt->id) }}" class="btn btn-warning btn-sm col-3">Detail</a>
                                <a href="{{ route('biodata.edit', $dt->id) }}" class="btn btn-primary btn-sm col-3">Edit</a>
                                <form action="{{ route('biodata.destroy', $dt->id) }}" method="POST" style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Delete" class="btn btn-danger btn-sm col-3">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
