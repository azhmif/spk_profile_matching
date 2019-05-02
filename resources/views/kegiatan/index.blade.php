@extends('layout.app')

@section('judul')
 Kegiatan
@endsection

@section('kegiatan')
active
@endsection

@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Data Kegiatan </h4>
                  <a rel="tooltip" href="./kegiatan/tambah" class="btn btn-link btn-link card-title">
                                    <i class="material-icons">add</i>
                                    Tambah Kegiatan</a>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          Nama
                        </th>
                        <th>
                          Jenis
                        </th>
                        <th>
                          Peminat
                        </th>
                        <th>
                          Anggaran
                        </th>
                        <th>
                          Realisasi
                        </th>
                        <th class="td-actions text-right">
                          aksi
                        </th>
                        
                      </thead>
                      <tbody>
                      @foreach($kegiatan as $j)
                        <tr>
                          <td>
                           {{$j->kgnam}}
                          </td>
                          <td>
                          {{$j->jnsnam}}
                          </td>
                          <td>
                          {{$j->pmnam}}
                          </td>
                          <td>
                          {{$j->agnam}}
                          </td>
                          <td>
                          {{$j->renam}}
                          </td>
                          
                            <td class="td-actions text-right">                  
                                                                                
                                  <a rel="tooltip" href="/kegiatan/edit/{{$j->kgid}}" class="btn btn-success btn-link">
                                    <i class="material-icons">edit</i>
                                    <div class="ripple-container"></div>
                                  </a>
                                  <form method="POST" action="/kegiatan/delete/{{$j->kgid}}"> 
                                    {{csrf_field()}} {{method_field('DELETE')}}
                                    
                                    <button  type="submit" class="btn btn-danger btn-link"> <i class="material-icons">close</i></button>
                                  </form>
                              </form>
                         
                          </td>
                          
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
          
@endsection
