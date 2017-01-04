@extends('layout.principal')
@section('content')
	
  <li class="active"><b>Edicion Registro de Encuesta</b></li>
      

    {!! Form::model($pollresutls, array('route' => array('encuesta.update',$resu), 'method' => 'PUT')) !!}  


      <?php //print_r($resu)?>

      <div class="row " >
        <div class="widget widget-blue">
          <div class="widget-title">
            <div class="widget-controls">
                {!!Form::submit('Actualizar',['class'=>'btn btn-round btn-success btn-xs '])!!} 
                {!!Form::hidden('resu', $resu) !!}

                
               
                <input type="button" id="cancelar" class="btn btn-round btn-danger btn-xs" value="Cancelar" id="cancelar" >
            </div>
            <h3 ><i class="fa fa-edit"></i>Edicion Registro de Casos</h3>
          </div>  
            <div class="widget-content">
              @include('encuesta.forms.encuestaedit')
            </div>
        </div>  
      </div>          
  	          
    {!!Form::close()!!}


@stop

@section('scripts')
  @parent
  <script>
    $("#cancelar").click(function(){ 
       window.location.href = '{!! URL::to('encuesta') !!}'
    });
  </script>
@stop