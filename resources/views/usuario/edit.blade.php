@extends('layout.principal')
@section('item-navegacion')
  <a class="btn btn-default btn-addon m-b-sm" href="/usuario"> <i class="fa fa-chevron-left"></i>  Administración Usuario </a>
  <a class="btn btn-success btn-addon m-b-sm"> <i class="fa fa-chevron-down"></i>  Editar Usuario</a>
@stop
@section('content')
  {!! Form::model($user, ['action'  => ['UsuarioController@update', $user->id], 'method'=>'patch']) !!}
 
    <div class="col-md-12">
      <div class="panel panel-white">
        <div class="p-v-xs p-h-md">
          {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
          <input type="button" id="cancelar" class="btn btn-info" value="Cancelar" id="cancelar" >
        </div>
        <div class="widget-content">
            @include('usuario.forms.user')
        </div>
      </div>
    </div>
  {!! Form::close() !!}
@endsection

@section('scripts')
	@parent
	<script>
	$("#cancelar").click(function(){
		 window.location.href = '{!! URL::to('usuario') !!}'
	});
	</script>
@stop