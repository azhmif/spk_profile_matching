<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kriteriabobot;
class KriteriabobotController extends Controller
{
    //

    public function  index(){

        $kriteria = kriteriabobot::all();

        return view('kriteriabobot.index', compact('kriteria'));

    }
    public function create($id){

        $kriteria = kriteriabobot::find($id);


        return view('kriteriabobot.edit',compact('kriteria'));
    }
    public function update(Request $requset, $id){

        $kriteria = kriteriabobot::find($id);
        $kriteria->pencapaian=$requset['pencapaian'];
        $kriteria->persen=$requset['persen'];
        $kriteria->save();

        return redirect('kriteria-bobot');


    }
}
