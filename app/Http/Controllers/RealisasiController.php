<?php

namespace App\Http\Controllers;

use App\realisasi;
use Illuminate\Http\Request;

class RealisasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $realisasi = realisasi::all();
        return view ('realisasi.index',compact('realisasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("realisasi.tambah");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $realisasi = new realisasi;
        $realisasi->renam=$request['renam'];
        $realisasi->rebobot=$request['rebobot'];
        $realisasi->save();

        return redirect('realisasi');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\realisasi  $realisasi
     * @return \Illuminate\Http\Response
     */
    public function show(realisasi $realisasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\realisasi  $realisasi
     * @return \Illuminate\Http\Response
     */
    public function edit($realisasi)
    {
        //
        $realisasi = realisasi::find($realisasi);
        return view('realisasi.edit', compact('realisasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\realisasi  $realisasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $realisasi)
    {
        //
        $realisasi =  realisasi::find($realisasi);
        $realisasi->renam=$request['renam'];
        $realisasi->rebobot=$request['rebobot'];
        $realisasi->save();

        return redirect('realisasi');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\realisasi  $realisasi
     * @return \Illuminate\Http\Response
     */
    public function destroy( $realisasi)
    {
        //
        $realisasi = realisasi::find($realisasi);
        $realisasi->delete();
        return redirect('realisasi');
    }
}
