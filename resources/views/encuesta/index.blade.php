@extends('layout.principal')

@section('item-navegacion')

@stop

@section('content')  
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 

    <div  class="col-md-12">
      <div class="panel panel-white">
        <div class="panel-heading m-b-md">
          <h4 class="panel-title">Lista de Registros de Encuestas</h4>
          <button type="button" id="nuevo" class="fa fa-folder-open-o right btn btn-primary m-b-sm rigth"> Nuevo Registro Encuesta</button>
        </div>

 
        <div class="panel-body">
          <input type="hidden" name="_token" value={!! csrf_token() !!} >
              

          <div  id="tablaprincipal_s" class="table-responsive">
            <table id="lista_registros_s" class="display compact te" cellspacing="0" width="100%" style="font-size:11px;">
              <thead>
                <tr>
                  <th>Id</th>
                  
                  <th>Titulo</th>
                  <th>Fecha de Creacion</th>
                  <th>Usuario</th>
                  <th>Acciones</th>
                 
                </tr>
              </thead>
        
              <tbody>
                @foreach ($poll as $poll)
                  <tr>
                    <td>{!! $poll->pollid !!}</td>
                    <td>{!! $poll->title !!} {!! $poll->pollid !!} </td>
                    <td>{!! $poll->created_at !!}</td>                   
                    <td>{!! $poll->nombres !!} {!! $poll->apellidos !!}</td>
                    <td>
                      <a class="btn btn-info btn-xs editar" href="{{ URL::to('encuestaview/' . $poll->pollid) }}" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i>Ver</a>
                    </td>

                    @if ( $id_tipo_usuario == 2 )
                    <td>
                      <a class="btn btn-info btn-xs editar" href="{{ URL::to('encuestaedit/' . $poll->pollid) }}" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i>Editar</a>
                      <a class="btn btn-danger btn-xs editar" href="{{ URL::to('encuestadestroy/' . $poll->pollid) }}" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i>Eliminar</a>                      
                    <td>                    
                    @endif

                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
       
      </div>
    </div>
    <div id="test"></div>

@stop

@section('scripts')
  @parent
  <script>
  

   
  </script>
@stop



@section('scripts')
  @parent
  <script>
    $('#lista_registros').dataTable({
      'iDisplayLength': 10,
    });
  </script>
  <script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
    });
    $("#nuevo").click(function(){
      window.location.href = '{!! URL::to('encuesta/create') !!}'
    });
    $('#lista_registros tfoot th').each( function () {
      if($(this).index()>0){
        var tam=0;
        title = $('#lista_registros tfoot th').eq( $(this).index() ).text();
        switch($(this).index()) {
          case 1: //ID
              tam=6;
              break;
          case 2: //CORRELATIVO
              tam=6;
              break;
          case 3://FECHA
              tam=16;
              break;
          case 4://APE AGREDIDO
              tam=16;
              break;
          case 5://NOM AGREDIDO
              tam=16;
              break;
          case 6://APE AGRESOR
              tam=16;
              break;
          case 7://NOM AGRESOR
              tam=16;
              break;


          default:
              tam=16;
        }
        $(this).html( '<input type="text" size='+ tam +' align="center" />' );
      }
    } );

    // DataTable
    var table = $('#lista_registros').DataTable();

    // Apply the search
    table.columns().every( function () {
      var that = this;
      $( 'input', this.footer() ).on( 'keyup change', function () {
        that
          .search( this.value )
          .draw();
      } );
    } );

    $("#lista_registros input[type=checkbox]").on("change", function() {
      if (this.checked) {
            $(this).parents('tr').addClass('selected');
        } else {
            $(this).parents('tr').removeClass('selected');
        }
    });
  </script>
@stop

@section('scripts')
  @parent
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
    <script src="//code.jquery.com/jquery-1.12.3.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/colreorder/1.3.2/js/dataTables.colReorder.min.js"></script>

    <script>
    $(document).ready(function() {
      var table =  $('#example').DataTable( {
        "dom": 'C<"clear">lfrtip',
        "colVis": {
        "buttonText": "Change columns"
        },
      initComplete: function () {
          this.api().columns('.select-filter').every( function () {
              var column = this;
              var select = $('<select><option value=""></option></select>')
                  .appendTo( $(column.footer()).empty() )
                  .on( 'change', function () {
                      var val = $.fn.dataTable.util.escapeRegex(
                          $(this).val()
                      );

                      column
                          .search( val ? '^'+val+'$' : '', true, false )
                          .draw();
                  } );

              column.data().unique().sort().each( function ( d, j ) {
                  select.append( '<option value="'+d+'">'+d+'</option>' )
              } );
          } );
      },
             "language": {

                 "lengthMenu": "Mostrar _MENU_ Filas por página",
                 "search":  "Buscar:",
                 "zeroRecords": "Ningún dato encontrado...",
                 "info": "Mostrando página _PAGE_ de _PAGES_",
                 "infoEmpty": "Filas no Disponibles",
                 "infoFiltered": "(Filtrado de _MAX_ total filas)",
                 "loadingRecords": "Cargando...",
                 "processing":     "Procesando...",
                 "buttons-collection": "davis",
                 "paginate": {
                     "first":      "Primero",
                     "last":       "Último",
                     "next":       "Siguiente",
                     "previous":   "Anterior"
                 }
             },
             aLengthMenu: [[20,50,100,200,-1],[20,50,100,200,'Todos']],
            dom: 'Bfrtip',
            colReorder: true,
            buttons: [
          'colvis',
             {
                extend: 'pdfHtml5',
                orientation: 'landscape',
                pageSize: 'LEGAL'
            },
            'excelHtml5',
            {
               extend: 'print',
               orientation: 'landscape',
               pageSize: 'LEGAL'
           }
        ]
    } );


} );
</script>
@stop