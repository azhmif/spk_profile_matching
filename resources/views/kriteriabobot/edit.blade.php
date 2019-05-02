@extends('layout.app')

@section('judul')
 Tambah Realisasi
@endsection

@section('realisasi')
active
@endsection

@section('content')

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 ">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Kriteria bobot</h4>
                  <p class="card-category">Complete your profile</p>
                </div>
                <div class="card-body">
                  <form action="/kriteria-bobot/edit/{{$kriteria->id}}/save" method="post">
                    @csrf {{ method_field('patch')}}
                  
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">kriteria</label>
                          <input type="text" name="kriteria" readonly value="{{$kriteria->kriteria}}" class="form-control">
                        </div>
                        <div class="form-group">
                          <label class="bmd-label-floating">jenis</label>
                          <input type="text" name="jenis" readonly value=" @if($kriteria->jenis==0) Core Factor @else Secondary Factor @endif" class="form-control">
                        </div>
                        <div class="form-group">
                          <label class="bmd-label-floating">pencapaian </label>
                          <input type="text" name="pencapaian"   value="{{$kriteria->pencapaian}}"  class="form-control">
                        </div>
                        
                        <div class="form-group">
                          <label class="bmd-label-floating">persen </label>
                          <input type="text" name="persen"   value="{{$kriteria->persen}}"  class="form-control">
                        </div>
                        
                      </div>
                      
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Simpan</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>  
@endsection
