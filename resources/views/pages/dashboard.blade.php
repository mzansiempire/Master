@extends('layouts.app')

    @section('content')
      <div class="page-content row">
        <!-- Page header -->
        <div class="page-header">
          <div class="page-title">
            <h3> Title <small> Tag Line </small></h3>
          </div>

          <ul class="breadcrumb">
            <li><a href="{{ URL::to('dashboard') }}">{{ Lang::get('core.home') }}</a></li>
            <li class="active">MOTHERFUCKERS </li>
          </ul>      

        </div>

        <div class="page-content-wrapper">
        ----   Content page here  --- 
        </div>

      </div>  

    @stop