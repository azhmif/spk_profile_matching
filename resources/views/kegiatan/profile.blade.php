@extends('layout.app')

@section('judul')
Profile Matching
@endsection

@section('profile')
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
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          Nama
                        </th>
                        <th>
                          Jenis (C1)
                        </th>
                        <th>
                          Peminat (C2)
                        </th>
                        <th>
                          Anggaran (C3)
                        </th>
                        <th>
                          Realisasi (C4)
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
                        
                          
                        </tr>
                        @endforeach
                      </tbody>
                      
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Dalam bobot </h4>
                  <p class="card-category"> </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                      <th>
                          Nama
                        </th>
                        <th>
                          Jenis (C1)
                        </th>
                        <th>
                          Peminat (C2)
                        </th>
                        <th>
                          Anggaran (C3)
                        </th>
                        <th>
                          Realisasi (C4)
                        </th>
                    
                        
                      </thead>
                      <tbody>
                      @foreach($kegiatan as $j)
                        <tr>
                          <td>
                           {{$j->kgnam}}
                          </td>
                          <td>
                          {{$j->jnsbobot}}
                          </td>
                          <td>
                          {{$j->pmbobot}}
                          </td>
                          <td>
                          {{$j->agbobot}}
                          </td>
                          <td>
                          {{$j->rebobot}}
                          </td>
                        
                          
                        </tr>
                        @endforeach
                      </tbody>
                      <tfoot>
                      <tr>
                        <th>STANDRART KRITERIA	</th>
                        <th>{{$kriteriabobot[0]->pencapaian}}</th>
                        <th>{{$kriteriabobot[1]->pencapaian}}</th>
                        <th>{{$kriteriabobot[2]->pencapaian}}</th>
                        <th>{{$kriteriabobot[3]->pencapaian}}</th>
                      </tr>
                      <tr>
                        <th>Jenis	</th>
                        <th> @if($kriteriabobot[0]->jenis==0) Core Factor @else Secondary Factor @endif</th>
                        <th>@if($kriteriabobot[1]->jenis==0) Core Factor @else Secondary Factor @endif </th>
                        <th> @if($kriteriabobot[2]->jenis==0) Core Factor @else Secondary Factor @endif </th>
                        <th> @if($kriteriabobot[3]->jenis==0) Core Factor @else Secondary Factor @endif  </th>
                      </tr>
                      <tr>
                        <th>Persentase	</th>
                        <th>{{$kriteriabobot[0]->persen}} % </th>
                        <th>{{$kriteriabobot[1]->persen}} %</th>
                        <th>{{$kriteriabobot[2]->persen}} % </th>
                        <th>{{$kriteriabobot[3]->persen}} %</th>
                      </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">GAP</h4>
                  <p class="card-category"> </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                      <th>
                          Nama
                        </th>
                        <th>
                          Jenis (C1)
                        </th>
                        <th>
                          Peminat (C2)
                        </th>
                        <th>
                          Anggaran (C3)
                        </th>
                        <th>
                          Realisasi (C4)
                        </th>
                    
                        
                      </thead>
                      <tbody>
                      @foreach($gap as $key=>$j)
                        <tr>
                          <td>
                           {{$j['nama']}}
                          </td>
                          <td>
                          {{$j['c1']}}
                          </td>
                          <td>
                          {{$j['c2']}}
                          </td>
                          <td>
                          {{$j['c3']}}
                          </td>
                          <td>
                          {{$j['c4']}}
                          </td>
                        
                          
                        </tr>
                        @endforeach
                      </tbody>
                      <tfoot>
                    
                      <tr>
                        <th>Jenis	</th>
                        <th> @if($kriteriabobot[0]->jenis==0) Core Factor @else Secondary Factor @endif</th>
                        <th>@if($kriteriabobot[1]->jenis==0) Core Factor @else Secondary Factor @endif </th>
                        <th> @if($kriteriabobot[2]->jenis==0) Core Factor @else Secondary Factor @endif </th>
                        <th> @if($kriteriabobot[3]->jenis==0) Core Factor @else Secondary Factor @endif  </th>
                      </tr>
                      <tr>
                        <th>Persentase	</th>
                        <th>{{$kriteriabobot[0]->persen}} % </th>
                        <th>{{$kriteriabobot[1]->persen}} %</th>
                        <th>{{$kriteriabobot[2]->persen}} % </th>
                        <th>{{$kriteriabobot[3]->persen}} %</th>
                      </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Pembobotan GAP </h4>
                  <p class="card-category"> </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                      <th>
                          Nama
                        </th>
                        <th>
                          Jenis (C1)
                        </th>
                        <th>
                          Peminat (C2)
                        </th>
                        <th>
                          Anggaran (C3)
                        </th>
                        <th>
                          Realisasi (C4)
                        </th>
                    
                        
                      </thead>
                      <tbody>
                      @foreach($bobotgap as $j)
                      <tr>
                          <td>
                           {{$j['nama']}}
                          </td>
                          <td>
                          {{$j['c1']}}
                          </td>
                          <td>
                          {{$j['c2']}}
                          </td>
                          <td>
                          {{$j['c3']}}
                          </td>
                          <td>
                          {{$j['c4']}}
                          </td>
                        
                          
                        </tr>
                        @endforeach
                      </tbody>
                      <tfoot>
                      
                      <tr>
                        <th>Jenis	</th>
                        <th> @if($kriteriabobot[0]->jenis==0) Core Factor @else Secondary Factor @endif</th>
                        <th>@if($kriteriabobot[1]->jenis==0) Core Factor @else Secondary Factor @endif </th>
                        <th> @if($kriteriabobot[2]->jenis==0) Core Factor @else Secondary Factor @endif </th>
                        <th> @if($kriteriabobot[3]->jenis==0) Core Factor @else Secondary Factor @endif  </th>
                      </tr>
                      <tr>
                        <th>Persentase	</th>
                        <th>{{$kriteriabobot[0]->persen}} % </th>
                        <th>{{$kriteriabobot[1]->persen}} %</th>
                        <th>{{$kriteriabobot[2]->persen}} % </th>
                        <th>{{$kriteriabobot[3]->persen}} %</th>
                      </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Total </h4>
                  <p class="card-category"> </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                      <th>
                          Nama
                        </th>
                        <th>
                          Jenis (C1)
                        </th>
                        <th>
                          Peminat (C2)
                        </th>
                        <th>
                          Anggaran (C3)
                        </th>
                        <th>
                          Realisasi (C4)
                        </th>
                        <th>
                          NCF
                        </th>
                        <th>
                          NSF
                        </th>
                      </thead>
                      <tbody>
                      @foreach($total as $j)
                      <tr>
                          <td>
                           {{$j['nama']}}
                          </td>
                          <td>
                          {{$j['c1']}}
                          </td>
                          <td>
                          {{$j['c2']}}
                          </td>
                          <td>
                          {{$j['c3']}}
                          </td>
                          <td>
                          {{$j['c4']}}
                          </td>
                          <td>
                          {{$j['ncf']}}
                          </td>
                          <td>
                          {{$j['nsf']}}
                          </td>
                          
                        </tr>
                        @endforeach
                      </tbody>
                      <tfoot>
                      
                     
                      <tr>
                        <th>Persentase	</th>
                        <th>{{$kriteriabobot[0]->persen}} % </th>
                        <th>{{$kriteriabobot[1]->persen}} %</th>
                        <th>{{$kriteriabobot[2]->persen}} % </th>
                        <th>{{$kriteriabobot[3]->persen}} %</th>
                        
                        <th>{{$kriteriabobot[0]->persen+$kriteriabobot[2]->persen}} % </th>
                        <th>{{$kriteriabobot[1]->persen+$kriteriabobot[3]->persen}} %</th>
                      </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>



            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Nilai Total </h4>
                  <p class="card-category"> </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                      <th>
                          Nama
                        </th>
                        <th>
                          Jenis (C1)
                        </th>
                        <th>
                          Peminat (C2)
                        </th>
                        <th>
                          Anggaran (C3)
                        </th>
                        <th>
                          Realisasi (C4)
                        </th>
                        <th>
                          NCF
                        </th>
                        <th>
                          NSF
                        </th>
                        <th>
                          total
                        </th>
                      </thead>
                      <tbody>
                      @foreach($totalbobot as $j)
                      <tr>
                          <td>
                           {{$j['nama']}}
                          </td>
                          <td>
                          {{$j['c1']}}
                          </td>
                          <td>
                          {{$j['c2']}}
                          </td>
                          <td>
                          {{$j['c3']}}
                          </td>
                          <td>
                          {{$j['c4']}}
                          </td>
                          <td>
                          {{$j['ncf']}}
                          </td>
                          <td>
                          {{$j['nsf']}}
                          </td>
                          <td>
                          {{$j['total']}}
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                      
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Rangking</h4>
                  <p class="card-category"> </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                      <th>
                          total
                        </th>
                      <th>
                          Rangking
                        </th>
                        
                        <th>
                          Nama
                        </th>
                        <th>
                          Jenis (C1)
                        </th>
                        <th>
                          Peminat (C2)
                        </th>
                        <th>
                          Anggaran (C3)
                        </th>
                        <th>
                          Realisasi (C4)
                        </th>
                        <th>
                          NCF
                        </th>
                        <th>
                          NSF
                        </th>
                        
                      </thead>
                      <tbody>
                      <?php

foreach ($totalbobot as $key => $row) {
  $attack[$key]  = $row['total'];
}

// Sort the data with attack descending
array_multisort($attack, SORT_DESC, $totalbobot);


?>
                      @foreach($totalbobot as $key => $j)
                      <tr>
                      <td>
                          {{$j['total']}}
                          </td>
                         <td>
                           {{$key+1}}
                          </td>
                          <td>
                           {{$j['nama']}}
                          </td>
                          <td>
                          {{$j['c1']}}
                          </td>
                          <td>
                          {{$j['c2']}}
                          </td>
                          <td>
                          {{$j['c3']}}
                          </td>
                          <td>
                          {{$j['c4']}}
                          </td>
                          <td>
                          {{$j['ncf']}}
                          </td>
                          <td>
                          {{$j['nsf']}}
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
