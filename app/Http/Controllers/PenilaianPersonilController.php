<?php

namespace App\Http\Controllers;

use App\Models\penilaian_personil;
use Illuminate\Http\Request;

class PenilaianPersonilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    return view('poinpenilaian');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kirim = new penilaian_personil;
        $kirim->nama_personil = $request->nama_personil;
        $kirim->etika = $request->etika;
        $kirim->disiplin = $request->disiplin;
        $kirim->tanggung_jawab = $request->tanggung_jawab;
        $kirim->teamwork = $request->teamwork;
        $kirim->problem_solve = $request->problem_solve;
        $kirim->kepatuhan = $request->kepatuhan;
        $kirim->kejujuran = $request->kejujuran;
        $kirim->inisiatif = $request->inisiatif;
        $kirim->komunikasi = $request->komunikasi;




        $kirim->save();
        return redirect ('/penilaian');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\penilaian_personil  $penilaian_personil
     * @return \Illuminate\Http\Response
     */
    public function show(penilaian_personil $penilaian_personil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\penilaian_personil  $penilaian_personil
     * @return \Illuminate\Http\Response
     */
    public function edit(penilaian_personil $penilaian_personil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\penilaian_personil  $penilaian_personil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, penilaian_personil $penilaian_personil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\penilaian_personil  $penilaian_personil
     * @return \Illuminate\Http\Response
     */
    public function destroy(penilaian_personil $penilaian_personil)
    {
        //
    }
}
