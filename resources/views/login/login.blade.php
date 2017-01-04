@extends('layout.base')

@section('base')
  <div class="all-wrapper no-menu-wrapper light-bg">
    <div class="login-logo-w">
      <a class="logo">
        <!-- <img src="assets/images/pasco/logo_region.png"> -->
      </a>
    </div>
    <div class="row">
      <div class="col-md-4 col-md-offset-4">

        <div class="widget widget-blue">
          <div class="widget-title">
            <h3 class="text-center"><i class="fa fa-lock"></i>GOBIERNO REGIONAL ENCUESTA</h3>
          </div>
          <div class="widget-content">
            @include('login.forms.formLogin')
          </div>
        </div>
      </div>
    </div>
  </div>
@stop
