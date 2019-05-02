@extends('layout.app')

@section('judul')
Kriteria Bobot
@endsection

@section('kb')
active
@endsection

@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Data Kriteria bobot </h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                        kriteria
                        </th>
                        <th>
                        pencapaian
                        </th>
                        <th>
                        persen
                        </th>
                        <th>
                        jenis
                        </th>
                      
                        <th class="td-actions text-right">
                          aksi (Ubah pencapaian dan persen)
                        </th>
                        
                      </thead>
                      <tbody>
                      @foreach($kriteria as $j)
                        <tr>
                          <td>
                           {{$j->kriteria}}
                          </td>
                          <td>
                          {{$j->pencapaian}}
                          </td>
                          <td>
                          {{$j->persen}}
                          </td>
                          <td>
                          @if($j->jenis==0) Core Factor @else Secondary Factor @endif</th>
                          </td>
                          <td class="td-actions text-right">                  
                                                                                
                                  <a rel="tooltip" href="/kriteria-bobot/edit/{{$j->id}}"class="btn btn-success btn-link">
                                    <i class="material-icons">edit</i>
                                    <div class="ripple-container"></div>
                                  </a>
                                 
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
