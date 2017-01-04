@extends('layout.principal')
@section('item-navegacion')
	<a class="btn btn-success btn-addon m-b-sm"> <i class="fa fa-chevron-down"></i>  Administración Usuario</a>
@stop
@section('content')

	<div class="col-md-12">
		<div class="panel panel-white">
			<div class="panel-heading m-b-md">
				<h4 class="panel-title">Lista de Usuarios en el Sistema</h4>
				<button type="button" id="nuevo" class="right btn btn-primary m-b-sm rigth"><i class="fa fa-folder-open-o"></i> Nuevo Usuario</button>
			</div>
			<div class="panel-body">
		    <input type="hidden" name="_token" value={!! csrf_token() !!} >
				<div class="table-responsive">
			    <table id="dependencias" class="display table te" cellspacing="0" width="100%" style="font-size:12px;">
			      <thead>
			        <tr>
			          <th>Nombres</th>
							<th>Apellidos</th>
			          		<th>Cargo</th>
							<th>Usuario</th>
							<th>Estado</th>
			          <th>Opciones</th>
			        </tr>
			      </thead>
			      <tbody>
			        @foreach ($usuario as $user)
			          <tr>
			            <td>{!! $user->nombres !!}</td>
									<td>{!! $user->apellidos !!}</td>
									<td>{!! $user->cargo !!}</td>
									<td>{!! $user->user !!}</td>

			        
									@if ( $user->estado == 0 )
										<td> Inactivo </td>
									@endif
									@if ( $user->estado == 1 )
										<td> Activo </td>
									@endif
									@if ( $user->estado == 2 )
										<td> Suspendido </td>
									@endif
			            <td>
										{!! link_to_action('UsuarioController@edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-info btn-xs editar fa fa-edit', 'data-toggle' => "tooltip", 'title' => "Editar"])!!}

										{!! link_to_action('UsuarioController@desact', $title = 'Desactivar', $parameters = $user->id, $attributes = ['class'=>'btn btn-danger btn-xs eliminar fa fa-remove', 'data-toggle' => "tooltip", 'title' => "Eliminar" ])!!}


										<button type="button" class="btn btn-primary  btn-xs m-b-sm" data-toggle="modal" data-target="#ModalPassword" data-id="{{ $user->id }}" data-toggle = "tooltip" title = "Cambiar Password"><i class="fa fa-unlock"></i>Cambiar Contrasena</button>
			            </td>
			          </tr>
			        @endforeach
			      </tbody>
			  	</table>
				</div>
			</div>
		</div>
  </div>

	<div class="modal fade" id="ModalPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
	    <div class="modal-dialog" role="document">
	      	<div class="modal-content">
	        	<div class="modal-header">
	          		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	          	<h4 class="modal-title" id="exampleModalLabel">Escriba una Contrasenia Nueva</h4>
	        	</div>
					{!!Form::open(['action'=>'UsuarioController@password', 'method'=>'POST'])!!}
		       		<div class="modal-body" style="height: 100px;">
						<input type="hidden" id="user_id" name="user_id"  >
		          		<div class="form-group col-md-4">
					        {!!Form::label('password','Contraseña:')!!}
					        {!!Form::password('password',['class'=>'form-control','placeholder'=>'Contraseña'])!!}
					        <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('password')!!}</div>
				      	</div>
		        	</div>
			        <div class="modal-footer">
			          {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
			          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
			        </div>
	        		{!!Form::close()!!}
	      	</div>
	    </div>
	</div>


	

@stop

@section('scripts')




  	@parent
 	 <script>
	  	$('#ModalPassword').on('show.bs.modal', function (event) {
		  	console.log(event);

      		var button = $(event.relatedTarget)
      		var id = button.data('id')
     		var modal = $(this)
			document.getElementById("user_id").value = id;
    	});

    	$("#nuevo").click(function(){
	      	window.location.href = '{!! URL::to('usuariocreate') !!}'
	    });

		$(document).ready(function(){
    	$('[data-toggle="tooltip"]').tooltip();
		});
	</script>
@stop