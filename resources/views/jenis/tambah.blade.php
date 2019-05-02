@extends('layout.app')

@section('judul')
 Tambah Jenis
@endsection

@section('jenis')
active
@endsection

@section('content')

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 ">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Jenis Kegiatan</h4>
                  <p class="card-category">Complete your profile</p>
                </div>
                <div class="card-body">
                  <form action="/jenis/tambah/save" method="post">
                    @csrf
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Jenis Kegiatan </label>
                          <input type="text" name="jnsnam" class="form-control">
                        </div>
                        <div class="form-group">
                          <label class="bmd-label-floating">Botot Jenis </label>
                          <input type="number" name="jnsbobot" class="form-control">
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
