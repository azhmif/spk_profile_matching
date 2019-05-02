@extends('layout.app')

@section('judul')
Dashboard
@endsection

@section('beranda')
active
@endsection

@section('content')
<div class="col-md-12 col-sm-6 ml-auto mr-auto">
                    <div class="card card-signup">
                        
                            <div class="card-header card-header-primary text-center">
                                <h3 class="card-title">Sistem Pendukung Keputusan  </h3>
                                <h4 class="card-title"> Pemberdayaan Masyarakat Berbasis Rukun Warga </h4>
                           
                            </div>
                            <div class="card-body text-center" >
                            <h4 class="card-title"> Berdasarkan Profile Matching  </h4>
                                
                                <!-- If you want to add a checkbox to this form, uncomment this code

								<div class="checkbox">
									<label>
										<input type="checkbox" name="optionsCheckboxes" checked>
										Subscribe to newsletter
									</label>
								</div> -->
                            </div>
                            <div class="footer text-center">
                                
                            </div>
                        
                    </div>
                </div>
<div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                  </div>
                  <p class="card-category">Jenis Kegiatan</p>
                  <h3 class="card-title">{{count($jenis)}}
                    
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                   
                  </h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">store</i>
                  </div>
                  <p class="card-category">Peminat</p>
                  <h3 class="card-title">{{count($peminat)}}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                   
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">info_outline</i>
                  </div>
                  <p class="card-category">Anggaran</p>
                  <h3 class="card-title">{{count($anggaran)}}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                   
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-twitter"></i>
                  </div>
                  <p class="card-category">Realisasi</p>
                  <h3 class="card-title">{{count($realisasi)}}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                 
                  </div>
                </div>
              </div>
            </div>
          </div>
          
@endsection
