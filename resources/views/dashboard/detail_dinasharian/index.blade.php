@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <h1 class="h2">Data Penugasan Dinas Harian</h1>
        
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary"> <span data-feather="printer"></span> Cetak Form</button>
            
          </div>
         
        </div>
        
      </div>



    
        <h2>Tambah Data</h1>
        


        <form action="/dashboard/dinas_harian" method="post">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Yang Akan Dinas" id="nama">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Jumlah Dinas</label>
                <input type="text" name="jml_dinas" class="form-control" placeholder="Masukkan Jumlah Yang Dinas" id="jml_dinas">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Jumlah Yang Dinas</label>
                <input type="text" name="jml_yangdinas" class="form-control" placeholder="Masukkan Jumlah Yang Akan Dinas" id="jml_yangdinas">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Nilai Dinas</label>
                <input type="text" name="nilai" class="form-control" placeholder="Masukkan Nilai Dinas" id="nilai">
            </div>
            

            <button class="btn btn-outline-primary" type="submit" role="button">Simpan</button>
            <a class="btn btn-outline-danger" href="/dashboard/dalam_kota" role="button">Batal</a>
        </form>
    </div>

</body>

@endsection