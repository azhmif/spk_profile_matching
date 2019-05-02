<?php

namespace App\Http\Controllers;

use App\anggaran;
use Illuminate\Http\Request;

class AnggaranController extends Controller
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
        $anggaran = anggaran::all();
        return view ('anggaran.index',compact('anggaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("anggaran.tambah");
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
        $anggaran = new anggaran;
        $anggaran->agnam=$request['agnam'];
        $anggaran->agbobot=$request['agbobot'];
        $anggaran->save();

        return redirect('anggaran');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\anggaran  $anggaran
     * @return \Illuminate\Http\Response
     */
    public function show(anggaran $anggaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\anggaran  $anggaran
     * @return \Illuminate\Http\Response
     */
    public function edit( $anggaran)
    {
        //
        $anggaran = anggaran::find($anggaran);
        return view('anggaran.edit', compact('anggaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\anggaran  $anggaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $anggaran)
    {
        //
        $anggaran =  anggaran::find($anggaran);
        $anggaran->agnam=$request['agnam'];
        $anggaran->agbobot=$request['agbobot'];
        $anggaran->save();

        return redirect('anggaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\anggaran  $anggaran
     * @return \Illuminate\Http\Response
     */
    public function destroy( $anggaran)
    {
        //
        $anggaran = anggaran::find($anggaran);
        $anggaran->delete();
        return redirect('anggaran');
    }
}
