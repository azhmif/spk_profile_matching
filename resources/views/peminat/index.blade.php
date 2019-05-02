@extends('layout.app')

@section('judul')
Peminat Kegiatan
@endsection

@section('peminat')
active
@endsection

@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Data Peminat </h4>
                  <a rel="tooltip" href="./peminat/tambah" class="btn btn-link btn-link card-title">
                                    <i class="material-icons">add</i>
                                    Tambah Peminat</a>
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
                      @foreach($peminat as $j)
                        <tr>
                          <td>
                           {{$j->pmnam}}
                          </td>
                          <td>
                          {{$j->pmbobot}}
                          </td>
                          
                            <td class="td-actions text-right">                  
                                                                                
                                  <a rel="tooltip" href="/peminat/edit/{{$j->pmid}}"class="btn btn-success btn-link">
                                    <i class="material-icons">edit</i>
                                    <div class="ripple-container"></div>
                                  </a>
                                  <form method="POST" action="/peminat/delete/{{$j->pmid}}"> 
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
