@extends('layouts.app')

    @section('content')
      <div class="page-content row">
        <!-- Page header -->
        <div class="page-header">
          <div class="page-title">
            <h3> Title <small> Tag Line </small></h3>
          </div>

          <ul class="breadcrumb">
            <li><a href="{{ URL::to('memberdashboard') }}">{{ Lang::get('core.home') }}</a></li>
            <li class="active">Title </li>
          </ul>      

        </div>

        <div class="page-content-wrapper">
        <!--   Content page here  -- >

            <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="top-header">
                          <div class="x_title">

                              <div class="row top_tiles">

                                  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                      <div class="tile-stats">
                                          <div class="icon"><i class="fa fa-users"></i>
                                          </div>
                                          <div class="count"> 125</div>

                                          <h3>Noble Signed</h3>
                                          <p>Total Nobles (Kinga/Queens) Signed</p>
                                      </div>
                                  </div>

                                  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                      <div class="tile-stats">
                                          <div class="icon"><i class="fa  fa-bank"></i>
                                          </div>
                                          <div class="count">R {{ Auth::user()->commissions }}</div>

                                          <h3>Commission</h3>
                                          <p> Commission Paid</p>
                                      </div>
                                  </div>

                                  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                      <div class="tile-stats">
                                          <div class="icon"><i class="fa blue fa-money"></i>
                                          </div>
                                          <div class="count">R {{ Auth::user()->donations }}</div>

                                          <h3>Donations Paid</h3>
                                          <p>Total Donations you paid</p>
                                      </div>
                                  </div>

                                  <!-- Donations Received -->


                                  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                      <div class="tile-stats">
                                          <div class="icon"><i class="fa green fa-line-chart"></i>
                                          </div>
                                          <div class="count">R 30 500</div>

                                          <h3>Donations Received</h3>
                                          <p>Total Donations you received.</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>



          </div>

      </div> 
      </div>

    @stop