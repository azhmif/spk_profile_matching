<?php

namespace App\Http\Controllers;

use App\peminat;
use Illuminate\Http\Request;

class PeminatController extends Controller
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
        $peminat = peminat::all();
        return view ('peminat.index',compact('peminat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("peminat.tambah");
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
        $peminat = new peminat;
        $peminat->pmnam=$request['pmnam'];
        $peminat->pmbobot=$request['pmbobot'];
        $peminat->save();

        return redirect('peminat');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\peminat  $peminat
     * @return \Illuminate\Http\Response
     */
    public function show(peminat $peminat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\peminat  $peminat
     * @return \Illuminate\Http\Response
     */
    public function edit( $peminat)
    {
        //
        $peminat = peminat::find($peminat);
        return view('peminat.edit', compact('peminat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\peminat  $peminat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $peminat)
    {
        //
        $peminat = peminat::find($peminat);
        $peminat->pmnam=$request['pmnam'];
        $peminat->pmbobot=$request['pmbobot'];
        $peminat->save();

        return redirect('peminat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\peminat  $peminat
     * @return \Illuminate\Http\Response
     */
    public function destroy( $peminat)
    {
        //
        $peminat = peminat::find($peminat);
        $peminat->delete();
        return redirect('peminat');
    }
}
