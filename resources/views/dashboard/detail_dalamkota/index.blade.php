@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <h1 class="h2">Data Penugasan Dalam Kota</h1>

        
    </div>
    <h2>Tambah Data</h1>
        <form action="/dashboard/dalam_kota" method="post">
            @csrf
            <div class="form-floating">
                <select name="kategori_acara"  class="form-select" id="floatingSelect"
                    aria-label="Floating label select example">
                    <option selected> </option>
                    <option value="Dalam Kota Acara Resmi">Dalam Kota Acara Resmi</option>
                    <option value="Dalam Kota Acara Tidak Resmi">Dalam Kota Acara Tidak Resmi</option>

                </select>
                <label for="floatingSelect">Pilih Kategori Acara</label>
            </div>
            <div class="satu">
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="name" name="nama" class="form-control" placeholder="Masukkan Nama Yang Akan Dinas" id="name">
            </div>
            <div class="row">
                <div class="col">
                    <label for="text" class="form-label">Masukkan Jumlah Dinas</label>
                    <input type="text" name="jml_dinas" class="form-control" placeholder="Jumlah Dinas"
                        aria-label="Masukkan Jumlah Dinas">
                </div>
                <div class="col">
                    <label for="text" class="form-label">Masukkan Jumlah Yang Dinas</label>
                    <input type="text" name="jml_yangdinas" class="form-control" placeholder="Jumlah Yang Dinas"
                        aria-label="Masukkan Jumlah Yang Dinas">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="text" class="form-label">Nilai Dinas</label>
                    <input type="text" name="nilai" class="form-control" placeholder="Nilai Dinas"
                        aria-label="Nilai Dinas">
                </div>
                <div class="col">
                    <label for="text" class="form-label">Administrasi Setelah Dinas</label>
                    <input type="text" name="admin" class="form-control" placeholder="Administrasi Setelah Dinas"
                        aria-label="Administrasi Setelah Dinas">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="text" class="form-label">Titik Acara</label>
                    <input type="text" name="titik_acara" class="form-control" placeholder="Titik Acara"
                        aria-label="Titik Acara">
                </div>
                <div class="col">
                    <label for="text" class="form-label">Tingkat Kesulitan Acara</label>
                    <input type="text" name="kesulitan" class="form-control" placeholder="Titik Kesulitan Acara"
                        aria-label="Titik Kesulitan Acara">
                </div>
            </div>
            </div>
            
            <button class="btn btn-outline-primary" type="submit" role="button">Simpan</button>
            <a class="btn btn-outline-danger" href="/dashboard/dalam_kota" role="button">Batal</a>
        </form>
        </div>

        </body>

    @endsection
