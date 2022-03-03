<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Penilaian    | Page</title>
  </head>
  <body>
  <nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="img/garuda.png" alt="" width="40" height="40" class="d-inline-block align-text-top">
                Penilaian Petugas
    </a>
  </div>
</nav>



<div class="container mt-4" >
    <div class="row ">
    <form action="{{ route('create.penilaian') }}" method="POST" enctype="multipart/form-data">
      @csrf

  <div class="form-group mb-3">
  <label for="formGroupExampleInput" class="form-label" bg-secondary>Judul Acara</label>
  <input type="text" name="judul_acara" class="form-control" id="formGroupExampleInput" placeholder="Nama acara yang dilakukan">
</div>

<div class="form-group mb-3">
  <label for="formGroupExampleInput2" class="form-label">Tanggal</label>
  <input type="date" name="tanggal" class="form-control" id="formGroupExampleInput2" placeholder="Tanggal berlangsung">
</div>

<div class="form-group mb-3">
  <label for="formGroupExampleInput" class="form-label">Waktu</label>
  <input type="time" name="waktu" class="form-control" id="formGroupExampleInput" placeholder="Waktu diselenggarakan">
</div>

<div class="form-group mb-3">
  <label for="formGroupExampleInput2" class="form-label">Tempat</label>
  <input type="text" name="tempat" class="form-control" id="formGroupExampleInput2" placeholder="Tempat Acara">
</div>

<div class="form-group mb-3">
  <label for="formGroupExampleInput2" class="form-label">Penilai</label>
  <input type="text" name="nama_penilai" class="form-control" id="formGroupExampleInput2" placeholder="Tempat Acara">
</div>

<div class="form-group mb-3">
  <label for="formGroupExampleInput2" class="form-label">Jabatan</label>
  <input type="text" name="jabatan" class="form-control" id="formGroupExampleInput2" placeholder="Tempat Acara">
</div>
<select class="form-select form-select-sm"  aria-label=".form-select-sm example">
  <option selected>Buka untuk memilih jabatan</option>
  <option value="1">Dantim</option>
  <option value="2">Personil</option>
</select>

<div class="form-group d-grid gap-2 col-6 mx-auto mt-5">
  <button type="submit" class="btn btn-primary">Selanjutnya</button>
</div>
  </div>

  
  </body>
</html>