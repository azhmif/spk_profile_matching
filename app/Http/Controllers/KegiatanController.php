<?php

namespace App\Http\Controllers;

use App\kegiatan;
use App\kriteriabobot;
use App\tbl_bobot;
use Illuminate\Http\Request;

use App\jenis;
use App\anggaran;
use App\peminat;
use App\realisasi;
class KegiatanController extends Controller
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
        $kegiatan = kegiatan::join('anggarans','anggarans.agid','=','kegiatans.kgagid')->join('jenis','jenis.jnsid','=','kegiatans.kgjnsid')->join('peminats','peminats.pmid','=','kegiatans.kgpmid')->join('realisasis','realisasis.reid','=','kegiatans.kgreid')->get();
       
        return view ('kegiatan.index',compact('kegiatan'));
    }
    public function cekprofile()
    {
        //
        $kegiatan = kegiatan::join('anggarans','anggarans.agid','=','kegiatans.kgagid')->join('jenis','jenis.jnsid','=','kegiatans.kgjnsid')->join('peminats','peminats.pmid','=','kegiatans.kgpmid')->join('realisasis','realisasis.reid','=','kegiatans.kgreid')->get();
       $kriteriabobot =kriteriabobot::all();
       foreach($kegiatan as $j){
           $gap[] = [
               "nama"=>$j->kgnam,
               "c1"=>$j->jnsbobot-$kriteriabobot[0]->pencapaian,
               "c2"=>$j->pmbobot-$kriteriabobot[0]->pencapaian,
               "c3"=>$j->agbobot-$kriteriabobot[0]->pencapaian,
               "c4"=>$j->rebobot-$kriteriabobot[0]->pencapaian
               

           ];
       }


        $tbl_bobot= tbl_bobot::all();
       foreach($gap as $g){
           $bobotgap[]=  [
            "nama"=>$g['nama'],
            "c1"=>tbl_bobot::where('selisih','=',$g['c1'])->get()[0]->bobot,
            "c2"=>tbl_bobot::where('selisih','=',$g['c2'])->get()[0]->bobot,
            "c3"=>tbl_bobot::where('selisih','=',$g['c3'])->get()[0]->bobot,
            "c4"=>tbl_bobot::where('selisih','=',$g['c4'])->get()[0]->bobot
           ];
       }

       foreach($bobotgap as $a){
           $total[]=[
            "nama"=>$a['nama'],
            "c1"=>$a['c1'],
            "c2"=>$a['c2'],
            "c3"=>$a['c3'],
            "c4"=>$a['c4'],
            "ncf"=>($a['c1']+$a['c3'])/2,
            "nsf"=>($a['c2']+$a['c4'])/2
           ];
       }

       foreach($total as $a){
           $totala =((($kriteriabobot[0]->persen+$kriteriabobot[2]->persen)/100)*$a['ncf'])+((($kriteriabobot[1]->persen+$kriteriabobot[3]->persen)/100)*$a['nsf']);
           
            $totalbobot[]=[
                "nama"=>$a['nama'],
                "c1"=>$a['c1'],
                "c2"=>$a['c2'],
                "c3"=>$a['c3'],
                "c4"=>$a['c4'],
                "ncf"=>$a['ncf'],
                "nsf"=>$a['nsf'],
                "total" => $totala
            ];
       }


        return view ('kegiatan.profile',compact('kegiatan','kriteriabobot','gap','bobotgap','total','totalbobot'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $jenis = jenis::all();
        $anggaran = anggaran::all();
        $peminat = peminat::all();
        $realisasi = realisasi::all();
        return view("kegiatan.tambah", compact('jenis','anggaran','peminat','realisasi'));
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
        $kegiatan = new kegiatan;
        $kegiatan->kgnam=$request['kgnam'];
        $kegiatan->kgjnsid=$request['kgjnsid'];
        $kegiatan->kgpmid=$request['kgpmid'];
        $kegiatan->kgagid=$request['kgagid'];
        $kegiatan->kgreid=$request['kgreid'];
        $kegiatan->save();

        return redirect('kegiatan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(kegiatan $kegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit( $kegiatan)
    {
        //
        $kegiatan = kegiatan::find($kegiatan);
        $jenis = jenis::all();
        $anggaran = anggaran::all();
        $peminat = peminat::all();
        $realisasi = realisasi::all();
        return view('kegiatan.edit', compact('kegiatan','jenis','anggaran','peminat','realisasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $kegiatan)
    {
        //
        $kegiatan =  kegiatan::find($kegiatan);
        $kegiatan->kgnam=$request['kgnam'];
        $kegiatan->kgjnsid=$request['kgjnsid'];
        $kegiatan->kgpmid=$request['kgpmid'];
        $kegiatan->kgagid=$request['kgagid'];
        $kegiatan->kgreid=$request['kgreid'];
        $kegiatan->save();

        return redirect('kegiatan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy( $kegiatan)
    {
        //
        $kegiatan = kegiatan::find($kegiatan);
        $kegiatan->delete();
        return redirect('kegiatan');
    }
}
