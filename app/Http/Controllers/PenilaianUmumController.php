<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\penilaian_umum;
use App\Models\penilaian_personil;
use App\Models\penilaian_dantim;

class PenilaianUmumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('poinpenilaian');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kirim = new penilaian_umum;
        $kirim->judul_acara = $request->judul_acara;
        $kirim->tanggal = $request->tanggal;
        $kirim->waktu = $request->waktu;
        $kirim->tempat = $request->tempat;
        $kirim->nama_penilai = $request->nama_penilai;
        $kirim->jabatan = $request->jabatan;
        $kirim->save();
        return redirect ('/poinpenilaian');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\penilaian_umum  $penilaian_umum
     * @return \Illuminate\Http\Response
     */
    public function show(penilaian_umum $penilaian_umum)
    {
        $users = DB::table('penilaian_umums')->select('penilaian_umums as id_pu')->get();

        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\penilaian_umum  $penilaian_umum
     * @return \Illuminate\Http\Response
     */
    public function edit(penilaian_umum $penilaian_umum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\penilaian_umum  $penilaian_umum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, penilaian_umum $penilaian_umum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\penilaian_umum  $penilaian_umum
     * @return \Illuminate\Http\Response
     */
    public function destroy(penilaian_umum $penilaian_umum)
    {
        //
    }
}
