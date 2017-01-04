@extends('layout.principal')

@section('content')



    <?php //echo $nroencuesta  ?>
    {!! Form::open(array('url' => 'encuesta')) !!}
                 
      <div class="row " >
        <div class="widget widget-blue">
          <div class="widget-title">
            <div class="widget-controls">
            {!!Form::submit('Registrar',['class'=>'btn btn-round btn-success btn-xs'])!!}
            <input type="button" class="btn btn-round btn-danger btn-xs" value="Cancelar" id="cancelar" >
            </div>
            <h3 ><i class="fa fa-edit"></i>Nuevo Registro de Encuesta</h3>
          </div>
          <div class="widget-content">
            @include('encuesta.forms.encuesta')
          </div>
        </div>
      </div>
   
    {!!Form::close()!!}

@stop

@section('scripts')
  @parent
  <script>
    $("#cancelar").click(function(){
       console.log('dadaf');
       window.location.href = '{!! URL::to('encuesta') !!}'
    });
  </script>
@stop