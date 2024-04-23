@extends('layout')

@section('isi')
<div class="content">
  <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
              <div class="card-body ">
                  <div class="row">
                      <div class="col-5 col-md-4">
                          <div class="icon-big text-center icon-warning">
                              <i class="nc-icon nc-book-bookmark text-warning"></i>
                          </div>
                      </div>
                      <div class="col-7 col-md-8">
                          <div class="numbers">
                              <p class="card-category">Buku</p>
                              <p class="card-title">150GB
                              <p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="card-footer ">
                  <hr>
                  
              </div>
          </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
              <div class="card-body ">
                  <div class="row">
                      <div class="col-5 col-md-4">
                          <div class="icon-big text-center icon-warning">
                              <i class="nc-icon nc-circle-10 text-success"></i>
                          </div>
                      </div>
                      <div class="col-7 col-md-8">
                          <div class="numbers">
                              <p class="card-category">User</p>
                              <p class="card-title">$ 1,345
                              <p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="card-footer ">
                  <hr>
                  
              </div>
          </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
              <div class="card-body ">
                  <div class="row">
                      <div class="col-5 col-md-4">
                          <div class="icon-big text-center icon-warning">
                              <i class="nc-icon nc-vector text-danger"></i>
                          </div>
                      </div>
                      <div class="col-7 col-md-8">
                          <div class="numbers">
                              <p class="card-category">Pasok</p>
                              <p class="card-title">23
                              <p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="card-footer ">
                  <hr>
                  
              </div>
          </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
              <div class="card-body ">
                  <div class="row">
                      <div class="col-5 col-md-4">
                          <div class="icon-big text-center icon-warning">
                              <i class="nc-icon nc-cart-simple text-primary"></i>
                          </div>
                      </div>
                      <div class="col-7 col-md-8">
                          <div class="numbers">
                              <p class="card-category">Penjualan</p>
                              <p class="card-title">+45K
                              <p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="card-footer ">
                  <hr>
                  
              </div>
          </div>
      </div>
  </div>
  <div class="row">
      <div class="col-md-12">
          <div class="card ">
              <div class="card-header ">
                  <h5 class="card-title">Users Behavior</h5>
                  <p class="card-category">24 Hours performance</p>
              </div>
              <div class="card-body ">
                  <canvas id=chartHours width="400" height="100"></canvas>
              </div>
              <div class="card-footer ">
                  <hr>
                  <div class="stats">
                      <i class="fa fa-history"></i> Updated 3 minutes ago
                  </div>
              </div>
          </div>
      </div>
  </div>

</div>
</div>


@endsection