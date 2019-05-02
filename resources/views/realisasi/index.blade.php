@extends('layout.app')

@section('judul')
Realisasi Kegiatan
@endsection

@section('realiasai')
active
@endsection

@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Data realisasi </h4>
                  <a rel="tooltip" href="./realisasi/tambah" class="btn btn-link btn-link card-title">
                                    <i class="material-icons">add</i>
                                    Tambah realisasi</a>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          Nama
                        </th>
                        <th>
                          Bobot
                        </th>
                        <th class="td-actions text-right">
                          aksi
                        </th>
                        
                      </thead>
                      <tbody>
                      @foreach($realisasi as $j)
                        <tr>
                          <td>
                           {{$j->renam}}
                          </td>
                          <td>
                          {{$j->rebobot}}
                          </td>
                          <td class="td-actions text-right">                  
                                                                                
                                  <a rel="tooltip" href="/realisasi/edit/{{$j->reid}}"class="btn btn-success btn-link">
                                    <i class="material-icons">edit</i>
                                    <div class="ripple-container"></div>
                                  </a>
                                  <form method="POST" action="/realisasi/delete/{{$j->reid}}"> 
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
