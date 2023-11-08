<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <title>Form Data</title>
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

    <div class="container mt-5 mb-5">
      <div class="row justify-content-center text-center">
        <div class="col-5">
            <h1><br></h1>
            <fieldset class="form-group border p-1" style="color: #fff; background-color: black">
                <legend>Form Biodata</legend>
            </fieldset>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-5">
          <form name="form" method="POST" action="{{ route('biodata.store') }}" onsubmit="return validateForm();">
            <!-- action attribute now points to "simpan.php" to handle form submission -->
            @csrf
            <fieldset class="form-group border p-3">
              <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama_mhs" class="form-control" id="nama_mhs" />
              </div>

              <div class="mb-3">
                <label for="lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" />
              </div>

              <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label> <br />
                <textarea name="alamat" id="alamat" class="form-control" cols="30" rows="2"></textarea>
              </div>

              <div class="mb-3">
                <label for="agama" class="form-label">Agama</label>
                <select name="agama" id="agama" class="form-control">
                  <option value=""></option>
                  <option value="Islam">Islam</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Kristen Katolik">Katolik</option>
                  <option value="Kristen Protestan">Protestan</option>
                  <option value="Buddha">Buddha</option>
                </select>
              </div>

              <div class="mb-3">
                <label for="univ" class="form-label">Universitas</label>
                <input type="text" name="universitas" class="form-control" id="universitas" />
              </div>

              <div class="mb-3">
                <label for="fakultas" class="form-label">Fakultas</label>
                <select name="fakultas" id="fakultas" class="form-control">
                  <option value=""></option>
                  <option value="Teknik">Teknik</option>
                </select>
              </div>

              <div class="mb-3">
                <label for="prodi" class="form-label">Program Studi</label>
                <select name="prodi" id="prodi" class="form-control">
                  <option value=""></option>
                  <option value="Arsitektur">Arsitektur</option>
                  <option value="Teknik Sipil">Teknik Sipil</option>
                  <option value="Teknik Elektro">Teknik Elektro</option>
                  <option value="Teknik Mesin">Teknik Mesin</option>
                  <option value="Teknologi Informasi">Teknologi Informasi</option>
                  <option value="Teknik Industri">Teknik Industri</option>
                  <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                </select>
              </div>

              <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" name="nim_mhs" class="form-control" id="nim_mhs" />
              </div>

              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-dark">Submit</button>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>

    <script>
      function validateForm() {
        var nama = document.getElementById('nama_mhs').value;
        var tahunLahir = document.getElementById('tgl_lahir').value;
        var alamat = document.getElementById('alamat').value;
        var agama = document.getElementById('agama').value;
        var universitas = document.getElementById('universitas').value;
        var fakultas = document.getElementById('fakultas').value;
        var prodi = document.getElementById('prodi').value;
        var nim = document.getElementById('nim_mhs').value;

        var namaRegex = /^[a-zA-Z\s]+$/;

        if (!nama_mhs.match(namaRegex)) {
          alert('Nama hanya boleh berisi huruf dan spasi.');
          return false;
        }

        if (tgl_lahir === '') {
          alert('Tahun lahir kosong.');
          return false;
        }

        if (alamat.trim() === '') {
          alert('Alamat harus diisi.');
          return false;
        }

        if (agama === '') {
          alert('Pilih Agama.');
          return false;
        }

        if (universitas.trim() === '') {
          alert('Universitas harus diisi.');
          return false;
        }

        if (fakultas === '') {
          alert('Pilih Fakultas.');
          return false;
        }

        if (prodi === '') {
          alert('Pilih Program Studi.');
          return false;
        }

        if (nim_mhs.length !== 10 || isNaN(nim)) {
          alert('NIM harus terdiri dari 10 digit angka.');
          return false;
        }

        alert('Data anda berhasil disimpan');
        return true;
      }
    </script>
  </body>
</html>
