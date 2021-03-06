@extends('layout.app')

@section('judul')
 Tambah Kegiatan
@endsection

@section('kegiatan')
active
@endsection

@section('content')

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 ">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Tambah Kegiatan</h4>
                  <p class="card-category">Complete your profile</p>
                </div>
                <div class="card-body">
                  <form action="/kegiatan/tambah/save" method="post">
                    @csrf
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Kegiatan </label>
                          <input type="text" name="kgnam" class="form-control">
                        </div>
                        <div class="form-group">
                          <label class="bmd-label-floating">Jenis</label>
                            <select class="form-control "  name="kgjnsid"  data-style="btn btn-link" id="exampleFormControlSelect1">
                                @foreach($jenis as $j)
                                <option value="{{$j->jnsid}}">{{$j->jnsnam}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                          <label class="bmd-label-floating">Peminat</label>
                            <select class="form-control " name="kgpmid"  data-style="btn btn-link" id="exampleFormControlSelect2">
                                @foreach($peminat as $j)
                                    <option value="{{$j->pmid}}">{{$j->pmnam}}</option>
                                    @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                          <label class="bmd-label-floating">Anggaran</label>
                            <select class="form-control " name="kgagid" data-style="btn btn-link" id="exampleFormControlSelect3">
                            @foreach($anggaran as $j)
                                    <option value="{{$j->agid}}">{{$j->agnam}}</option>
                                    @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                          <label class="bmd-label-floating">Realisasi</label>
                            <select class="form-control " name="kgreid" data-style="btn btn-link" id="exampleFormControlSelect4">
                            @foreach($realisasi as $j)
                                    <option value="{{$j->reid}}">{{$j->renam}}</option>
                                    @endforeach
                            </select>
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
