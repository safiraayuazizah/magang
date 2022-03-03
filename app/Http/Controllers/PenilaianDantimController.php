<?php

namespace App\Http\Controllers;

use App\Models\penilaian_dantim;
use Illuminate\Http\Request;


class PenilaianDantimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('poinpenilaiandantim');

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kirim = new penilaian_dantim;
        $kirim->nama_dantim = $request->nama_dantim;
        $kirim->etika = $request->etika;
        $kirim->disiplin = $request->disiplin;
        $kirim->tanggung_jawab = $request->tanggung_jawab;
        $kirim->perencanaan = $request->perencanaan;
        $kirim->teamwork = $request->teamwork;
        $kirim->kepemimpinan = $request->kepemimpinan;
        $kirim->problem_solve = $request->problem_solve;
        $kirim->inovasi = $request->inovasi;
        $kirim->analisa_pemikiran = $request->analisa_pemikiran;

        $kirim->kejujuran = $request->kejujuran;




        $kirim->save();
        return redirect ('/penilaian');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\penilaian_dantim  $penilaian_dantim
     * @return \Illuminate\Http\Response
     */
    public function show(penilaian_dantim $penilaian_dantim)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\penilaian_dantim  $penilaian_dantim
     * @return \Illuminate\Http\Response
     */
    public function edit(penilaian_dantim $penilaian_dantim)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\penilaian_dantim  $penilaian_dantim
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, penilaian_dantim $penilaian_dantim)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\penilaian_dantim  $penilaian_dantim
     * @return \Illuminate\Http\Response
     */
    public function destroy(penilaian_dantim $penilaian_dantim)
    {
        //
    }
}
