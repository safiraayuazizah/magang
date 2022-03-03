<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Poin Penilaian Dantim  | Page</title>
  </head>
  <body>
  <nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="img/garuda.png" alt="" width="40" height="40" class="d-inline-block align-text-top">
                Poin  Penilaian Dantim
    </a>
  </div>
</nav>



<div class="container col-9 mt-5" >
    <div class="row ">
    <form action="{{ route('create.penilaiandantim') }}" method="POST" enctype="multipart/form-data">
      @csrf


<div class="form-group mb-3">
  <label for="formGroupExampleInput" class="form-label" bg-secondary><h3 >Nama Dantim</h3></label>
  <input type="text" name="nama_dantim" class="form-control" id="formGroupExampleInput" placeholder="Nama Dantim yang dinilai">
</div>

<figure class="text-center">
  <blockquote class="blockquote">
    <p><H3>POIN PENILAIAN</H3></p>
  </blockquote>
  <figcaption class="blockquote">Berikut adalah poin penilaian untuk Dantim</figcaption>
</figure>

<div class="form-group mb-4 align=center">
  <label for="formGroupExampleInput" class="form-label" bg-secondary><h3 >POIN PENILAIAN</h3></label>
</div>

<div class="card border-secondary">
<div class="card-body">
<h3>Etika</h3>
</div>
</div>
<div class="card ">
<div class="card-body col-9 ">
<div class="form-check form-check-inline col-2 mt-3">
  <input class="form-check-input" type="radio" name="etika" id="inlineRadio1" value="buruk">
  <label class="form-check-label" for="inlineRadio1">1</label>
</div>

<div class="form-check form-check-inline col-2">
  <input class="form-check-input" type="radio" name="etika" id="inlineRadio2" value="kurang baik">
  <label class="form-check-label" for="inlineRadio2">2</label>
</div>

<div class="form-check form-check-inline col-2">
  <input class="form-check-input" type="radio" name="etika" id="inlineRadio3" value="cukup" >
  <label class="form-check-label" for="inlineRadio3">3 </label>
</div>

<div class="form-check form-check-inline col-2">
  <input class="form-check-input" type="radio" name="etika" id="inlineRadio3" value="baik" >
  <label class="form-check-label" for="inlineRadio4">4 </label>
</div>

<div class="form-check form-check-inline col-2">
  <input class="form-check-input" type="radio" name="etika" id="inlineRadio3" value="sangat baik" >
  <label class="form-check-label" for="inlineRadio5">5 </label>
</div>
</div>
</div>

<div class="card border-secondary mt-4" >
<div class="card-body"><h3>Disiplin</h3></div>
</div>
<div class="card ">
<div class="card-body col-9 ">
<div class="form-check form-check-inline col-2 mt-3">
  <input class="form-check-input" type="radio" name="disiplin" id="inlineRadio1" value="buruk">
  <label class="form-check-label" for="inlineRadio1">1</label>
</div>

<div class="form-check form-check-inline col-2">
  <input class="form-check-input" type="radio" name="disiplin" id="inlineRadio2" value="kurang baik">
  <label class="form-check-label" for="inlineRadio2">2</label>
</div>

<div class="form-check form-check-inline col-2">
  <input class="form-check-input" type="radio" name="disiplin" id="inlineRadio3" value="cukup" >
  <label class="form-check-label" for="inlineRadio3">3 </label>
</div>

<div class="form-check form-check-inline col-2">
  <input class="form-check-input" type="radio" name="disiplin" id="inlineRadio4" value="baik" >
  <label class="form-check-label" for="inlineRadio4">4 </label>
</div>

<div class="form-check form-check-inline col-2">
  <input class="form-check-input" type="radio" name="disiplin" id="inlineRadio5" value="sangat baik" >
  <label class="form-check-label" for="inlineRadio5">5 </label>
</div>
</div>
</div>

<div class="card border-secondary mt-4">
<div class="card-body"><h3>Tanggung Jawab</h3></div>
</div>
<div class="card ">
<div class="card-body col-9 ">
<div class="form-check form-check-inline col-2 mt-3">
  <input class="form-check-input" type="radio" name="tanggung_jawab" id="inlineRadio1" value="buruk">
  <label class="form-check-label" for="inlineRadio1">1</label>
</div>

<div class="form-check form-check-inline col-2">
  <input class="form-check-input" type="radio" name="tanggung_jawab" id="inlineRadio2" value="kurang baik">
  <label class="form-check-label" for="inlineRadio2">2</label>
</div>

<div class="form-check form-check-inline col-2">
  <input class="form-check-input" type="radio" name="tanggung_jawab" id="inlineRadio3" value="cukup" >
  <label class="form-check-label" for="inlineRadio3">3 </label>
</div>

<div class="form-check form-check-inline col-2">
  <input class="form-check-input" type="radio" name="tanggung_jawab" id="inlineRadio3" value="baik" >
  <label class="form-check-label" for="inlineRadio4">4 </label>
</div>

<div class="form-check form-check-inline col-2">
  <input class="form-check-input" type="radio" name="tanggung_jawab" id="inlineRadio3" value="sangat baik" >
  <label class="form-check-label" for="inlineRadio5">5 </label>
</div>
</div>
</div>

<div class="card border-secondary mt-4">
<div class="card-body"><h3>perencanaan</h3></div>
</div>
<div class="card ">
<div class="card-body col-9 ">
<div class="form-check form-check-inline col-2 mt-3">
  <input class="form-check-input" type="radio" name="perencanaan" id="inlineRadio1" value="buruk">
  <label class="form-check-label" for="inlineRadio1">1</label>
</div>

<div class="form-check form-check-inline col-2">
  <input class="form-check-input" type="radio" name="perencanaan" id="inlineRadio2" value="kurang baik">
  <label class="form-check-label" for="inlineRadio2">2</label>
</div>

<div class="form-check form-check-inline col-2">
  <input class="form-check-input" type="radio" name="perencanaan" id="inlineRadio3" value="cukup" >
  <label class="form-check-label" for="inlineRadio3">3 </label>
</div>

<div class="form-check form-check-inline col-2">
  <input class="form-check-input" type="radio" name="perencanaan" id="inlineRadio3" value="baik" >
  <label class="form-check-label" for="inlineRadio4">4 </label>
</div>

<div class="form-check form-check-inline col-2">
  <input class="form-check-input" type="radio" name="perencanaan" id="inlineRadio3" value="sangat baik" >
  <label class="form-check-label" for="inlineRadio5">5 </label>
</div>
</div>
</div>


<div class="card border-secondary mt-4">
<div class="card-body"><h3>Kerjasama Tim</h3></div>
</div>
<div class="card ">
<div class="card-body col-9 ">
<div class="form-check form-check-inline col-2 mt-3">
  <input class="form-check-input" type="radio" name="teamwork" id="inlineRadio1" value="buruk">
  <label class="form-check-label" for="inlineRadio1">1</label>
</div>

<div class="form-check form-check-inline col-2 mt-4">
  <input class="form-check-input" type="radio" name="teamwork" id="inlineRadio2" value="kurang baik">
  <label class="form-check-label" for="inlineRadio2">2</label>
</div>

<div class="form-check form-check-inline col-2">
  <input class="form-check-input" type="radio" name="teamwork" id="inlineRadio3" value="cukup" >
  <label class="form-check-label" for="inlineRadio3">3 </label>
</div>

<div class="form-check form-check-inline col-2">
  <input class="form-check-input" type="radio" name="teamwork" id="inlineRadio3" value="baik" >
  <label class="form-check-label" for="inlineRadio4">4 </label>
</div>

<div class="form-check form-check-inline col-2">
  <input class="form-check-input" type="radio" name="teamwork" id="inlineRadio3" value="sangat baik" >
  <label class="form-check-label" for="inlineRadio5">5 </label>
</div>
</div>
</div>

<div class="card border-secondary mt-4">
<div class="card-body"><h3>Kepemimpinan</h3></div>
</div>
<div class="card ">
<div class="card-body col-9 ">
<div class="form-check form-check-inline col-2 mt-3">
  <input class="form-check-input" type="radio" name="kepemimpinan" id="inlineRadio1" value="buruk">
  <label class="form-check-label" for="inlineRadio1">1</label>
</div>

<div class="form-check form-check-inline col-2">
  <input class="form-check-input" type="radio" name="kepemimpinan" id="inlineRadio2" value="kurang baik">
  <label class="form-check-label" for="inlineRadio2">2</label>
</div>

<div class="form-check form-check-inline col-2">
  <input class="form-check-input" type="radio" name="kepemimpinan" id="inlineRadio3" value="cukup" >
  <label class="form-check-label" for="inlineRadio3">3 </label>
</div>

<div class="form-check form-check-inline col-2">
  <input class="form-check-input" type="radio" name="kepemimpinan" id="inlineRadio3" value="baik" >
  <label class="form-check-label" for="inlineRadio4">4 </label>
</div>

<div class="form-check form-check-inline col-2">
  <input class="form-check-input" type="radio" name="kepemimpinan" id="inlineRadio3" value="sangat baik" >
  <label class="form-check-label" for="inlineRadio5">5 </label>
</div>
</div>
</div>


<div class="card border-secondary mt-4">
<div class="card-body"><h3>Pemecahan Masalah</h3></div>
</div>
<div class="card ">
<div class="card-body col-9 ">
<div class="form-check form-check-inline col-2 mt-3">
  <input class="form-check-input" type="radio" name="problem_solve" id="inlineRadio1" value="buruk">
  <label class="form-check-label" for="inlineRadio1">1</label>
</div>

<div class="form-check form-check-inline col-2">
  <input class="form-check-input" type="radio" name="problem_solve" id="inlineRadio2" value="kurang baik">
  <label class="form-check-label" for="inlineRadio2">2</label>
</div>

<div class="form-check form-check-inline col-2">
  <input class="form-check-input" type="radio" name="problem_solve" id="inlineRadio3" value="cukup" >
  <label class="form-check-label" for="inlineRadio3">3 </label>
</div>

<div class="form-check form-check-inline col-2">
  <input class="form-check-input" type="radio" name="problem_solve" id="inlineRadio3" value="baik" >
  <label class="form-check-label" for="inlineRadio4">4 </label>
</div>

<div class="form-check form-check-inline col-2">
  <input class="form-check-input" type="radio" name="problem_solve" id="inlineRadio3" value="sangat baik" >
  <label class="form-check-label" for="inlineRadio5">5 </label>
</div>
</div>
</div>


<div class="card border-secondary mt-4">
<div class="card-body"><h3>Inovasi</h3></div>
</div>
<div class="card ">
<div class="card-body col-9 ">
<div class="form-check form-check-inline col-2 mt-3">
  <input class="form-check-input" type="radio" name="inovasi" id="inlineRadio1" value="buruk">
  <label class="form-check-label" for="inlineRadio1">1</label>
</div>

<div class="form-check form-check-inline col-2">
  <input class="form-check-input" type="radio" name="inovasi" id="inlineRadio2" value="kurang baik">
  <label class="form-check-label" for="inlineRadio2">2</label>
</div>

<div class="form-check form-check-inline col-2">
  <input class="form-check-input" type="radio" name="inovasi" id="inlineRadio3" value="cukup" >
  <label class="form-check-label" for="inlineRadio3">3 </label>
</div>

<div class="form-check form-check-inline col-2">
  <input class="form-check-input" type="radio" name="inovasi" id="inlineRadio3" value="baik" >
  <label class="form-check-label" for="inlineRadio4">4 </label>
</div>

<div class="form-check form-check-inline col-2">
  <input class="form-check-input" type="radio" name="inovasi" id="inlineRadio3" value="sangat baik" >
  <label class="form-check-label" for="inlineRadio5">5 </label>
</div>
</div>
</div>

<div class="card border-secondary mt-4">
<div class="card-body"><h3>Analisa Pemikiran</h3></div>
</div>
<div class="card ">
<div class="card-body col-9 ">
<div class="form-check form-check-inline col-2 mt-3">
  <input class="form-check-input" type="radio" name="analisa_pemikiran" id="inlineRadio1" value="buruk">
  <label class="form-check-label" for="inlineRadio1">1</label>
</div>

<div class="form-check form-check-inline col-2">
  <input class="form-check-input" type="radio" name="analisa_pemikiran" id="inlineRadio2" value="kurang baik">
  <label class="form-check-label" for="inlineRadio2">2</label>
</div>

<div class="form-check form-check-inline col-2">
  <input class="form-check-input" type="radio" name="analisa_pemikiran" id="inlineRadio3" value="cukup" >
  <label class="form-check-label" for="inlineRadio3">3 </label>
</div>

<div class="form-check form-check-inline col-2">
  <input class="form-check-input" type="radio" name="analisa_pemikiran" id="inlineRadio3" value="baik" >
  <label class="form-check-label" for="inlineRadio4">4 </label>
</div>

<div class="form-check form-check-inline col-2">
  <input class="form-check-input" type="radio" name="analisa_pemikiran" id="inlineRadio3" value="sangat baik" >
  <label class="form-check-label" for="inlineRadio5">5 </label>
</div>
</div>
</div>


<div class="card border-secondary mt-4">
<div class="card-body"><h3>Kejujuran</h3></div>
</div>
<div class="card ">
<div class="card-body col-9 ">
<div class="form-check form-check-inline col-2 mt-3">
  <input class="form-check-input" type="radio" name="kejujuran" id="inlineRadio1" value="buruk">
  <label class="form-check-label" for="inlineRadio1">1</label>
</div>

<div class="form-check form-check-inline col-2">
  <input class="form-check-input" type="radio" name="kejujuran" id="inlineRadio2" value="kurang baik">
  <label class="form-check-label" for="inlineRadio2">2</label>
</div>

<div class="form-check form-check-inline col-2">
  <input class="form-check-input" type="radio" name="kejujuran" id="inlineRadio3" value="cukup" >
  <label class="form-check-label" for="inlineRadio3">3 </label>
</div>

<div class="form-check form-check-inline col-2">
  <input class="form-check-input" type="radio" name="kejujuran" id="inlineRadio3" value="baik" >
  <label class="form-check-label" for="inlineRadio4">4 </label>
</div>

<div class="form-check form-check-inline col-2">
  <input class="form-check-input" type="radio" name="kejujuran" id="inlineRadio3" value="sangat baik" >
  <label class="form-check-label" for="inlineRadio5">5 </label>
</div>
</div>
</div>




<div class="form-group d-grid gap-2 col-6 mx-auto mt-5">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
  </div>

  
  </body>
</html>