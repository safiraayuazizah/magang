<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DetailDalamKotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('dashboard.detail_dalamkota.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $kirim = new DetailDalamKota;
        $kirim->kategori_acara = $request->kategori_acara;
        $kirim->nama = $request->nama;
        $kirim->jml_dinas = $request->jml_dinas;
        $kirim->jml_yangdinas = $request->jml_yangdinas;
        $kirim->nilai = $request->nilai;
        $kirim->admin = $request->admin;
        $kirim->titik_acara = $request->titik_acara;
        $kirim->kesulitan = $request->kesulitan;
        $kirim->save();
        return redirect ('/dashboard/dalam_kota');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
