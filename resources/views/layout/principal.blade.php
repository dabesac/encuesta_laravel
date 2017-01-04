@extends('layout.base')

	

@section('base')
  <div class="all-wrapper fixed-header active-sub-menu horizontal-menu">

    @section('page_header')
	   @include('layout.principal.header.control')   		
    @show

     <div class="top-menu">
      @section('bloque_menu')
        @include('layout.principal.menu.control_bloque')
      @show

  

    </div>

    <div class="main-content">
      @section('page_content')
        @include('layout.principal.content.control')
      @show
    </div>

  
  </div>
@stop