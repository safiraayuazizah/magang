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
  <nav class="navbar navbar-dark bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="img/garuda.png" alt="" width="40" height="40" class="d-inline-block align-text-top">
                Penilaian Petugas
    </a>
  </div>
</nav>



<div class="container mt-4" >
    <div class="row ">
    <form action="{{ url('/store') }}" method="POST" enctype="multipart/form-data">
      @csrf

  <div class="form-group mb-3">
  <label for="formGroupExampleInput" class="form-label" bg-secondary>Judul Acara</label>
  <input type="text" name="judul_acara" class="form-control" id="formGroupExampleInput" placeholder="Nama acara yang dilakukan">
</div>

<div class="form-group mb-3">
  <label for="formGroupExampleInput2" class="form-label">Tanggal</label>
  <input type="text" name="tanggal" class="form-control" id="formGroupExampleInput2" placeholder="Tanggal berlangsung">
</div>

<div class="form-group mb-3">
  <label for="formGroupExampleInput" class="form-label">Waktu</label>
  <input type="text" name="waktu" class="form-control" id="formGroupExampleInput" placeholder="Waktu diselenggarakan">
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

<div class="form-group mb-3">
  <label for="formGroupExampleInput2" class="form-label">Nama Personil</label>
  <input type="text" name="n_personil" class="form-control" id="formGroupExampleInput2" placeholder="Tempat Acara">
</div>

<div class="form-group mb-3">
  <label for="formGroupExampleInput2" class="form-label">Etika</label>
  <input type="text" name="Etika" class="form-control" id="formGroupExampleInput2" placeholder="Tempat Acara">
</div>

<div class="form-group mb-3">
  <label for="formGroupExampleInput2" class="form-label">Disiplin</label>
  <input type="text" name="Disiplin" class="form-control" id="formGroupExampleInput2" placeholder="Tempat Acara">
</div>

<div class="form-group mb-3">
  <label for="formGroupExampleInput2" class="form-label">Tanggung Jawab</label>
  <input type="text" name="Tanggung_jawab" class="form-control" id="formGroupExampleInput2" placeholder="Tempat Acara">
</div>

<div class="form-group mb-3">
  <label for="formGroupExampleInput2" class="form-label">Kerjasama</label>
  <input type="text" name="kerjasama" class="form-control" id="formGroupExampleInput2" placeholder="Tempat Acara">
</div>

<div class="form-group mb-3">
  <label for="formGroupExampleInput2" class="form-label">Pemecahan Masalah</label>
  <input type="text" name="pemecahan_masalah" class="form-control" id="formGroupExampleInput2" placeholder="Tempat Acara">
</div>

<div class="form-group mb-3">
  <label for="formGroupExampleInput2" class="form-label">Kepatuhan</label>
  <input type="text" name="kepatuhan" class="form-control" id="formGroupExampleInput2" placeholder="Tempat Acara">
</div>

<div class="form-group mb-3">
  <label for="formGroupExampleInput2" class="form-label">Kejujuran</label>
  <input type="text" name="kejujuran" class="form-control" id="formGroupExampleInput2" placeholder="Tempat Acara">
</div>

<div class="form-group mb-3">
  <label for="formGroupExampleInput2" class="form-label">Inisiatif</label>
  <input type="text" name="inisiatif" class="form-control" id="formGroupExampleInput2" placeholder="Tempat Acara">
</div>

<div class="form-group mb-3">
  <label for="formGroupExampleInput2" class="form-label">Komunikasi</label>
  <input type="text" name="komunikasi" class="form-control" id="formGroupExampleInput2" placeholder="Tempat Acara">
</div>


<div class="form-group d-grid gap-2 col-6 mx-auto mt-5">
  <button type="submit" class=btn btn-primary >Submit</button>
</div>
  </div>
  </body>
</html>