<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\anggaran;
use App\jenis;
use App\peminat;
use App\realisasi;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $anggaran = anggaran::all();
        $jenis = jenis::all();
        $peminat = peminat::all();
        $realisasi = realisasi::all();
        return view('beranda', compact('anggaran','jenis','peminat','realisasi'));
    }
}
