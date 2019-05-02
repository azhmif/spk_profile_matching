<?php

namespace App\Http\Controllers;

use App\jenis;
use Illuminate\Http\Request;

class JenisController extends Controller
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
        $jenis = jenis::all();
        return view ('jenis.index',compact('jenis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("jenis.tambah");
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
        $jenis = new jenis;
        $jenis->jnsnam=$request['jnsnam'];
        $jenis->jnsbobot=$request['jnsbobot'];
        $jenis->save();

        return redirect('jenis');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function show(jenis $jenis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function edit( $jenis)
    {
        //
        $jenis = jenis::find($jenis);
        return view('jenis.edit', compact('jenis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $jenis)
    {
        //
        $jenis = jenis::find($jenis);
        $jenis->jnsnam=$request['jnsnam'];
        $jenis->jnsbobot=$request['jnsbobot'];
        $jenis->save();

        return redirect('jenis');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function destroy( $jenis)
    {
        //
        $jenis = jenis::find($jenis);
        $jenis->delete();
        return redirect('jenis');
    }
}
