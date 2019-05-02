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
                  <h4 class="card-title">Realisasi Kegiatan</h4>
                  <p class="card-category">Complete your profile</p>
                </div>
                <div class="card-body">
                  <form action="/realisasi/tambah/save" method="post">
                    @csrf
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Realisasi Kegiatan </label>
                          <input type="text" name="renam" class="form-control">
                        </div>
                        <div class="form-group">
                          <label class="bmd-label-floating">Botot Realisasi </label>
                          <input type="number" name="rebobot" class="form-control">
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
