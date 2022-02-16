@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <h1 class="h2">Data Penugasan Dinas Harian</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            
            
          </div>
         
        </div>
        
      </div>


      <a class="nav-link {{ Request::is('data_penugasan') ? 'active' : ''}}" aria-current="page" 
            href="/dashboard/detail_dinasharian">
      <button type="submit" class="btn btn-sm btn-outline-secondary" > <span data-feather="plus"></span> </button>

      <table class="table table-hover text-nowrap" id="datatable">
                            <thead>
                            <tr>
                                <th> No. </th>
                                <th> Nomor Surat </th>
                                <th> Kategori </th>
                                <th> Judul </th>
                                <th> Waktu Pengarsipan </th>
                                <th> Aksi </th>

                            </tr>
                            </thead>
</table>

@endsection