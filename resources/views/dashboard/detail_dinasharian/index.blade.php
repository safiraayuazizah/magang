@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <h1 class="h2">Data Penugasan Dalam Kota</h1>
        
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary"> <span data-feather="printer"></span> Cetak Form</button>
            
          </div>
         
        </div>
        
      </div>



    
        <h2>Tambah Data</h1>
        <div class="form-floating">
  <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
    <option selected> </option>
    <option value="1">Dalam Kota Acara Resmi</option>
    <option value="2">Dalam Kota Acara Tidak Resmi</option>
    
  </select>
  <label for="floatingSelect">Pilih Kategori Acara</label>
</div>


        <form action="#" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="name" name="name" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Jumlah Dinas</label>
                <input type="name" name="name" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Jumlah Yang Dinas</label>
                <input type="name" name="name" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nilai Dinas</label>
                <input type="name" name="name" class="form-control" id="name">
            </div>
            

<a class="btn btn-outline-primary" href="/dashboard/dinas_harian" role="button">Simpan</a>
<a class="btn btn-outline-danger" href="/dashboard/detail_dinasharian" role="button">Cancel</a>
        </form>
    </div>

</body>

@endsection