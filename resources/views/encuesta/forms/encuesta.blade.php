<div class="row">

   <div class="col-md-12">   

    <div class="widget widget-blue">
      <div class="widget-title">
        <h4 class="panel-title">1.- ESTADO DE LA INSCRIPCIÓN  Y TITULACION DE LA COMUNIDAD </h4>
      </div>
      <div class="widget-content">
      <div class="panel-body">
        <div class="col-md-12">

          <div class="row">
            <div class="form-group">
                <label>1.1 La Comunidad cuenta con INSCRIPCION DE PERSONERÍA JURÍDICA Y RESOLUCION DE TITULACION DE TIERRAS:</label>
            </div>    
            <div class="form-group col-md-6">
                {!!Form::label('NResolución_inscripcion:','a) N° Resolución de INSCRIPCION:',['class'=>'control-label'])!!}
                {!!Form::text('NResolución_inscripcion',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('NResolución_inscripcion')!!}</div>
            </div>
            <div class="form-group col-md-6">
                {!!Form::label('Resolucion_titulacion:','b) Resolución de TITULACIÓN:',['class'=>'control-label'])!!}
                {!!Form::text('Resolucion_titulacion',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('Resolucion_titulacion')!!}</div>
            </div>
            <div class="form-group col-md-6">
                {!!Form::label('Has_titulada:','c) Nº total Has Tituladas:',['class'=>'control-label'])!!}
                {!!Form::text('Has_titulada',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('Has_titulada')!!}</div>
                {!!Form::label('Has_propiedad:','Nº Has. En propiedad:',['class'=>'control-label'])!!}
                {!!Form::text('Has_propiedad',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('Has_propiedad:')!!}</div>

                {!!Form::label('Has_cesion:','Nº Has. en cesión de uso:',['class'=>'control-label'])!!}
                {!!Form::text('Has_cesion',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('Has_cesion:')!!}</div>
            </div>
            <div class="form-group col-md-6">
                {!!Form::label('Has_sintitulacion:','d) Nº Has sin titulación:',['class'=>'control-label'])!!}
                {!!Form::text('Has_sintitulacion',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('Has_sintitulacion:')!!}</div> 
            </div>
          </div>
        </div>  
        <div class="col-md-12">
          <div class="row">
            <div class="form-group ">
                <label>1.2 La Comunidad cuenta CON INSCRIPCION pero aun NO tiene TITULACIÓN de sus TIERRAS:</label>
            </div>
            <div class="form-group col-md-4">
                {!!Form::label('Resolución_inscripcion','a) Resolución de Inscripción:',['class'=>'control-label'])!!}
                {!!Form::text('Resolución_inscripcion',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('Resolución_inscripcion')!!}</div>
            </div>
            <div class="form-group col-md-4">
                {!!Form::label('situacion_tramite','b) Indique la situación de trámite de Titulación de Tierras? :',['class'=>'control-label'])!!}
                {!!Form::text('situacion_tramite',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('situacion_tramite')!!}</div>
            </div>
            <div class="form-group col-md-4">
                {!!Form::label('Has_portitular','c) Has por Titular:',['class'=>'control-label'])!!}
                {!!Form::text('Has_portitular',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('Has_portitular')!!}</div>               
            </div>
          </div>
        </div>  
        <div class="col-md-12">
          <div class="row">
            <div class="form-group">
                <label>1.3 La Comunidad aun NO ESTA INSCRITA NI TITULADA:</label>
            </div>
            <div class="form-group col-md-4">
                {!!Form::label('expediente_tramite','a) Expediente de Tramite Inscripción:',['class'=>'control-label'])!!}
                {!!Form::text('expediente_tramite',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('expediente_tramite')!!}</div>
            </div>
            <div class="form-group col-md-4">
                {!!Form::label('desde_anio','Desde el Año: ',['class'=>'control-label'])!!}
                {!!Form::text('desde_anio',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('desde_anio')!!}</div>
            </div>
            <div class="form-group col-md-4">
                {!!Form::label('NHas_portitular','Nº de Has. Por titular',['class'=>'control-label'])!!}
                {!!Form::text('NHas_portitular',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('NHas_portitular')!!}</div>               
            </div>
          </div>
        </div>  

            
      </div>
      </div>
    </div>
  </div>

  <div class="col-md-12">
    <div class="widget widget-blue">
      <div class="widget-title">
        <h4 class="panel-title">2.- POBLACION DE LA COMUNIDAD </h4>
      </div>
      <div class="widget-content">
      <div class="panel-body">
        <div class="col-md-12">
          <div class="row">
            <div class="form-group ">
                <label>2.1 POBLACIÓN en general:</label>
            </div>
            <div class="form-group col-md-2">
                {!!Form::label('total:','a) Total:',['class'=>'control-label'])!!}
                {!!Form::text('total',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('total')!!}</div>
            </div>
            <div class="form-group col-md-2">
                {!!Form::label('hombres:','b) Hombres:',['class'=>'control-label'])!!}
                {!!Form::text('hombres',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('hombres')!!}</div>
            </div>
            <div class="form-group col-md-2">
                {!!Form::label('mujeres:','c) Mujeres:',['class'=>'control-label'])!!}
                {!!Form::text('mujeres',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('mujeres')!!}</div>                
            </div>
          </div>
        </div>  
        <div class="col-md-12">
          <div class="row">
            <div class="form-group ">
                <label>2.2 N° de FAMILIAS de la comunidad</label>
            </div>
            <div class="form-group col-md-2">
                {!!Form::label('Ntotal_familias','a) N° Total de Familias: ',['class'=>'control-label'])!!}
                {!!Form::text('Ntotal_familias',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('Ntotal_familias')!!}</div>
            </div>       
          </div>
        </div>  
        <div class="col-md-12">
          <div class="row">
            <div class="form-group ">
                <label>2.3 Población de COMUNEROS inscrita en el Padrón de comuneros</label>
            </div>
            <div class="form-group col-md-3">
                {!!Form::label('Ntotal_comuneros','a) N° Total comuneros:  ',['class'=>'control-label'])!!}
                {!!Form::text('Ntotal_comuneros',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('Ntotal_comuneros')!!}</div>
            </div>
            <div class="form-group col-md-3">
                {!!Form::label('Ncomuneros_activos','b) N° Comuneros activos:  ',['class'=>'control-label'])!!}
                {!!Form::text('Ncomuneros_activos',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('Ncomuneros_activos')!!}</div>
            </div>
            <div class="form-group col-md-3">
                {!!Form::label('Ncomuneros_pasivos','c) N° Comuneros Pasivos o internos:',['class'=>'control-label'])!!}
                {!!Form::text('Ncomuneros_pasivos',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('Ncomuneros_pasivos')!!}</div>               
            </div>
          </div>
        </div>
       
      </div>
      </div>
    </div>
  </div>


  <div class="col-md-12">
    <div class="widget widget-blue">
      <div class="widget-title">
        <h4 class="panel-title">3.- CAPITAL HUMANO CALIFICADO DE LA COMUNIDAD</h4>
      </div>
      <div class="widget-content">
      <div class="panel-body">
        <div class="col-md-12">
          <div class="row">
            <div class="form-group">          
                <label>3.1 NIVEL EDUCATIVO alcanzado por la POBLACIÓN de la comunidad 
                (De la población según el Padrón de comuneros) (De contar con información detallar en hoja aparte según especialidad)</label>
            </div>
            <div class="form-group col-md-6">
                {!!Form::label('Nestudios_univconcluidos','a) Nº de Población con estudios universitarios concluidos:',['class'=>'control-label'])!!}
                {!!Form::text('Nestudios_univconcluidos',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('Nestudios_univconcluidos')!!}</div>
            </div>
            <div class="form-group col-md-6">
                {!!Form::label('Nestudios_univcurso','b) Nº de Población con estudios  universitarios en curso:',['class'=>'control-label'])!!}
                {!!Form::text('Nestudios_univcurso',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('Nestudios_univcurso')!!}</div>
            </div>
            <div class="form-group col-md-6">
                {!!Form::label('Nestudios_univconcluIST:','c) Nº de Población con estudios concluidos en  IST: ',['class'=>'control-label'])!!}
                {!!Form::text('Nestudios_univconcluIST',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('Nestudios_univconcluIST')!!}</div>                
            </div>
            <div class="form-group col-md-6">
                {!!Form::label('Nestudios_univcursoIST:','d) Nº de Población con estudios IST en curso:',['class'=>'control-label'])!!}
                {!!Form::text('Nestudios_univcursoIST',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('Nestudios_univcursoIST')!!}</div>                
            </div>
            <div class="form-group col-md-6">
                {!!Form::label('Nestudios_tecconcluotros:','e) Nº de Población con estudios técnicos concluidos en SENATI, CETPROs, Otros Institutos):',['class'=>'control-label'])!!}
                {!!Form::text('Nestudios_tecconcluotros',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('Nestudios_tecconcluotros')!!}</div>                
            </div>
            <div class="form-group col-md-6">
                {!!Form::label('Nestudios_teccurso:','f) Nº de Población con estudios técnicos en curso:',['class'=>'control-label'])!!}
                {!!Form::text('Nestudios_teccurso',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('Nestudios_teccurso')!!}</div>                
            </div>
          </div>
        </div>  
        
        <div class="col-md-12">
          <div class="row">
            <div class="form-group"> 
                <label>3.2 EDUCACION INTERCULTURAL BILINGÜE en la comunidad. (Instituciones educativas, primarias y secundarias) </label>
            </div>
            <div class="form-group col-md-6">
                {!!Form::label('Nombre_institucion','a) Nombre de la Institución Educativa que imparte Educación Intercultural en la Comunidad:',['class'=>'control-label'])!!}
                {!!Form::text('Nombre_institucion',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('Nombre_institucion')!!}</div>
            </div>           
          </div>
        </div> 

        <div class="col-md-12">
          <div class="row">
            <div class="form-group">  
                <label>3.3 A qué ciudades de la región Pasco o de otra región  EMIGRAN principalmente LOS JÓVENES de la cc que no logran continuar sus estudios en la región  (indicar  las 3 ciudades principales, y los 3 tipos de trabajo que buscan) </label>
            </div>
            <div class="form-group col-md-6">
                {!!Form::label('ciudades','a) Ciudades:',['class'=>'control-label'])!!}
                {!!Form::text('ciudades',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('ciudades')!!}</div>
            </div>  
            <div class="form-group col-md-6">
                {!!Form::label('buscar_trabajos','b) Trabajo que generalmente buscan o encuentran los jóvenes:',['class'=>'control-label'])!!}
                {!!Form::text('buscar_trabajos',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('buscar_trabajos')!!}</div>
            </div>           
          </div>
        </div> 

        <div class="col-md-12">
          <div class="row">
            <div class="form-group">   
                <label>3.4 SISTEMA Y SERVICIO DE SALUD en la Comunidad (Responder según se cuente o no con servicio de salud en la misma comunidad) </label>
            </div> 
            <div class="form-group col-md-6">
                {!!Form::label('posta','a) Si cuenta con Posta de Salud:',['class'=>'control-label'])!!}
                {!!Form::text('posta',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('posta')!!}</div>
            </div>  
            <div class="form-group col-md-6">
                {!!Form::label('diasposta','O Solo ',['class'=>'control-label'])!!}
                {!!Form::text('diasposta',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                {!!Form::label('diasposta','días a la semana',['class'=>'control-label'])!!}
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('diasposta')!!}</div>
            </div> 

            <div class="form-group col-md-6">
                {!!Form::label('Noposta','b) No se cuenta con Posta de salud:',['class'=>'control-label'])!!}
                {!!Form::text('Noposta',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('Noposta')!!}</div>
                {!!Form::label('distancia','A que distancia se encuentra la Posta más cercana: Lugar:',['class'=>'control-label'])!!}
                {!!Form::text('distancia',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('distancia')!!}</div>

                {!!Form::label('Nkm','N° de Km. ',['class'=>'control-label'])!!}
                {!!Form::text('Nkm',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('Nkm')!!}</div>

                {!!Form::label('horasviaje','y A ',['class'=>'control-label'])!!}                
                {!!Form::text('horasviaje',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                {!!Form::label('horasviaje','Horas de viaje',['class'=>'control-label'])!!}
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('horasviaje')!!}</div>
            </div>  
 
            <div class="form-group col-md-6">
                {!!Form::label('promotor_salud','c) Cuenta su Comunidad con promotores de salud?',['class'=>'control-label'])!!}
                {!!Form::label('promotor_salud','SI',['class'=>'control-label'])!!}
                {!! Form::radio('promotor_salud', 'S', (Input::old('promotor_salud') == 'S')) !!}
                {!!Form::label('promotor_salud','NO',['class'=>'control-label'])!!}
                {!! Form::radio('promotor_salud', 'N', (Input::old('promotor_salud') == 'N')) !!}             
            
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('promotor_salud')!!}</div>
            </div> 

            <div class="form-group col-md-6">
                {!!Form::label('problema_posta','d) Cual es el principal problema del servicio que brinda la Posta de salud?',['class'=>'control-label'])!!}
                {!!Form::text('problema_posta',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('problema_posta')!!}</div>
            </div>

            <div class="form-group col-md-6">
                {!!Form::label('medicina','e) A qué tipo de medicina recurre la población prioritariamente:',['class'=>'control-label'])!!}
                {!!Form::label('medicina','A la medicina ancestral o tradicional: ',['class'=>'control-label'])!!}
                {!! Form::radio('medicina', 'A', (Input::old('promotor_salud') == 'A')) !!}
                {!!Form::label('medicina','A la medicina de la Posta de salud:',['class'=>'control-label'])!!}
                {!! Form::radio('medicina', 'T', (Input::old('promotor_salud') == 'T')) !!}            
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('medicina')!!}</div>
            </div>           

          </div>
        </div> 

        <div class="col-md-12">
          <div class="row">
            <div class="form-group"> 
                <label>3.5 Instituciones de comuneros residentes en otras regiones, o provincias. </label>
            </div>
            <div class="form-group col-md-4">
                {!!Form::label('residentes','a) Cuenta la comunidad con instituciones de comuneros residentes en otras ciudades:',['class'=>'control-label'])!!}
                {!!Form::label('residentes','SI',['class'=>'control-label'])!!}
                {!! Form::radio('residentes', 'S', (Input::old('residentes') == 'S')) !!}
                {!!Form::label('residentes','NO',['class'=>'control-label'])!!}
                {!! Form::radio('residentes', 'N', (Input::old('residentes') == 'N')) !!}            
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('residentes')!!}</div>
            </div>  
            <div class="form-group col-md-4">
                {!!Form::label('nombre_institucioncomunero','b) Nombre de las instituciones ( indique también el lugar )',['class'=>'control-label'])!!}               
                {!!Form::text('nombre_institucioncomunero1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                {!!Form::text('nombre_institucioncomunero2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('nombre_institucioncomunero1')!!}</div>
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('nombre_institucioncomunero2')!!}</div>                         
            </div>   
            <div class="form-group col-md-4">
                {!!Form::label('relacion_institucion','c) La Comunidad Mantiene relaciones de coordinación activas o colaboración con esta instituciones?',['class'=>'control-label'])!!}               
                {!!Form::label('relacion_institucion','SI',['class'=>'control-label'])!!}
                {!! Form::radio('relacion_institucion', 'S', (Input::old('relacion_institucion') == 'S')) !!}
                {!!Form::label('relacion_institucion','NO',['class'=>'control-label'])!!}
                {!! Form::radio('relacion_institucion', 'N', (Input::old('relacion_institucion') == 'N')) !!}     
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('relacion_institucion')!!}</div>
            </div>         
          </div>
        </div> 
       
      </div>
      </div>
    </div>
  </div>


  <div class="col-md-12">
    <div class="widget widget-blue">
      <div class="widget-title">
        <h4 class="panel-title">4.- ACTIVIDADES ECONOMICAS PRODUCTIVAS DE LA COMUNIDAD</h4>
      </div>
      <div class="widget-content">
      <div class="panel-body">


        <div class="col-md-12">
          <div class="row">
            <div class="form-group "> 
                <label>4.1 Enumere las 3   ACTIVIDADES   ECONÓMI CAS PRINCIPALES de la comunidad. Según su importancia de empleo generado (Opciones: Agricultura, Ganadería, Acuicultura, Pesca, Caza,  Forestal, agroindustria, Artesanía, Comercio, Turismo, otra): E Indicar los 3 principales productos o especies por cada actividad respondida</label>
            </div>
  
            <div class="form-group col-md-4">
                {!!Form::label('producto_descripcion1','Actividades',['class'=>'control-label'])!!}
                {!!Form::text('producto_descripcion1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('producto_descripcion')!!}</div>        
                {!!Form::label('productos_principales1','Productos principales',['class'=>'control-label'])!!}
                {!!Form::text('productos_principales11',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                {!!Form::text('productos_principales12',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                {!!Form::text('productos_principales13',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('productos_principales1')!!}</div>
            </div>
            <div class="form-group col-md-4">
                {!!Form::label('producto_descripcion2','Actividades',['class'=>'control-label'])!!}
                {!!Form::text('producto_descripcion2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('producto_descripcion')!!}</div>        
                {!!Form::label('productos_principales2','Productos principales',['class'=>'control-label'])!!}
                {!!Form::text('productos_principales21',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                {!!Form::text('productos_principales22',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                {!!Form::text('productos_principales23',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('productos_principales2')!!}</div>
            </div>
            <div class="form-group col-md-4">
                {!!Form::label('producto_descripcion3','Actividades',['class'=>'control-label'])!!}
                {!!Form::text('producto_descripcion3',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('producto_descripcion')!!}</div>        
                {!!Form::label('productos_principales3','Productos principales',['class'=>'control-label'])!!}
                {!!Form::text('productos_principales31',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                {!!Form::text('productos_principales32',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                {!!Form::text('productos_principales33',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('productos_principales3')!!}</div>
            </div>
 
          </div>
        </div>

        <div class="col-md-12">
          <div class="row">
            <div class="form-group "> 
                <label>4.2 Cuáles son los 3 principales PROBLEMAS PARA PRODUCIR EN SU COMUNIDAD (indicar máximo 3 problemas, con sus causas, y la solución que propone la misma comunidad) Responder en orden de Prioridad </label>
            </div>
            <div class="form-group col-md-4">
                {!!Form::label('Problema1producir','a) Problema1°:',['class'=>'control-label'])!!}
                {!!Form::text('Problema1producir',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}  
                {!!Form::label('CProblema1producir','Causa del problema 1:',['class'=>'control-label'])!!}
                {!!Form::text('CProblema1producir',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                {!!Form::label('SProblema1producir','Solución a problema 1: ',['class'=>'control-label'])!!}
                {!!Form::text('SProblema1producir',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}             
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('Problema1producir')!!}</div>
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('CProblema1producir')!!}</div>
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('SProblema1producir')!!}</div>
            </div>
            <div class="form-group col-md-4">
                {!!Form::label('Problema2producir','b) Problema2°:',['class'=>'control-label'])!!}
                {!!Form::text('Problema2producir',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                {!!Form::label('CProblema2producir','Causa del problema 2:',['class'=>'control-label'])!!}
                {!!Form::text('CProblema2producir',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                {!!Form::label('SProblema2producir','Solución a problema 2: ',['class'=>'control-label'])!!}
                {!!Form::text('SProblema2producir',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('Problema2producir')!!}</div>
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('CProblema2producir')!!}</div>
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('SProblema2producir')!!}</div>
            </div>
            <div class="form-group col-md-4">
                {!!Form::label('Problema3producir','c) Problema3°:',['class'=>'control-label'])!!}
                {!!Form::text('Problema3producir',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}  
                {!!Form::label('CProblema3producir','Causa del problema 3:',['class'=>'control-label'])!!}
                {!!Form::text('CProblema3producir',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                {!!Form::label('SProblema3producir','Solución a problema 3: ',['class'=>'control-label'])!!}
                {!!Form::text('SProblema3producir',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}             
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('Problema3producir')!!}</div>               
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('CProblema3producir')!!}</div>               
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('SProblema3producir')!!}</div>               
            </div> 
          </div>
        </div>

        <div class="col-md-12">
          <div class="row">
            <div class="form-group  "> 
                <label>4.3 COMERCIALIZACION DE LA PRODUCCIÓN principal de la comunidad. (Responder marcando con los números 1 al 4 en  (……..) según la importancia de volumen de venta) (Indicar al costado del Numero, el lugar o localidad del mercado) </label>
            </div> 
            <div class="form-group">
               {!!Form::label('lugar_venta','a) Donde se vende la principal producción de la comunidad ?: ',['class'=>'control-label'])!!} 
            </div>
            <div class="form-group col-md-3">
             
                {!!Form::label('productor_mercado','El mismo productor la lleva al mercado más cercano:',['class'=>'control-label'])!!}
                {!!Form::text('Nproductor_mercado',null ,['class'=>'form-control col-md-6','placeholder'=>'Numero calificacion','autofocus' => '1'])!!}  
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('Nproductor_mercado')!!}</div>
                {!!Form::text('lugar_mercado',null ,['class'=>'form-control col-md-6','placeholder'=>'el lugar o localidad del mercado','autofocus' => '1'])!!}  
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('lugar_mercado')!!}</div>                
            </div>
            <div class="form-group col-md-3">
                {!!Form::label('feria_local','Se vende en la feria local:',['class'=>'control-label'])!!}              
                {!!Form::text('feria_local1',null ,['class'=>'form-control col-md-6','placeholder'=>'Numero calificacion','autofocus' => '1'])!!}  
                {!!Form::text('feria_local2',null ,['class'=>'form-control col-md-6','placeholder'=>'el lugar o localidad del mercado','autofocus' => '1'])!!}  
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('feria_local')!!}</div>
            </div>
            <div class="form-group col-md-3">
                {!!Form::label('feria_cercana','Se vende en otra feria cercana:',['class'=>'control-label'])!!}              
                {!!Form::text('feria_cercana1',null ,['class'=>'form-control col-md-6','placeholder'=>'Numero calificacion','autofocus' => '1'])!!}  
                {!!Form::text('feria_cercana2',null ,['class'=>'form-control col-md-6','placeholder'=>'el lugar o localidad del mercado','autofocus' => '1'])!!}  
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('feria_cercana')!!}</div>
            </div>
            <div class="form-group col-md-3">
                {!!Form::label('feria_cercana','Se vende a los intermediarios:',['class'=>'control-label'])!!}              
                {!!Form::text('intermediarios1',null ,['class'=>'form-control col-md-6','placeholder'=>'Numero calificacion','autofocus' => '1'])!!}  
                {!!Form::text('intermediarios2',null ,['class'=>'form-control col-md-6','placeholder'=>'el lugar o localidad del mercado','autofocus' => '1'])!!}  
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('intermediarios1')!!}</div>
            </div>
          </div>
        </div>

        <div class="col-md-12">
          <div class="row">
            <div class="form-group ">   
                <label>4.4 Cuáles son los 3 principales PROBLEMAS PARA VENDER LA PRODUCCIÓN de los comuneros o de la  comunidad
                    Responder en orden de prioridad, es decir problema 1 es el mas importante </label>
            </div>        
            <div class="form-group col-md-4">
                {!!Form::label('Problema1vender','a) Problema1°:',['class'=>'control-label'])!!}
                {!!Form::text('Problema1vender',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}  
                {!!Form::label('CProblema1vender','Causa del problema 1:',['class'=>'control-label'])!!}
                {!!Form::text('CProblema1vender',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                {!!Form::label('SProblema1vender','Solución a problema 1: ',['class'=>'control-label'])!!}
                {!!Form::text('SProblema1vender',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}             
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('Problema1vender')!!}</div>
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('CProblema1vender')!!}</div>
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('SProblema1vender')!!}</div>
            </div>
            <div class="form-group col-md-4">
        
                {!!Form::label('Problema2vender','b) Problema2°:',['class'=>'control-label'])!!}
                {!!Form::text('Problema2vender',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                {!!Form::label('CProblema2vender','Causa del problema 2:',['class'=>'control-label'])!!}
                {!!Form::text('CProblema2vender',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                {!!Form::label('SProblema2vender','Solución a problema 2: ',['class'=>'control-label'])!!}
                {!!Form::text('SProblema2vender',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('Problema2vender')!!}</div>
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('CProblema2vender')!!}</div>
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('SProblema2vender')!!}</div>
            </div>
            <div class="form-group col-md-4">

                {!!Form::label('Problema3vender','c) Problema3°:',['class'=>'control-label'])!!}
                {!!Form::text('Problema3vender',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}  
                {!!Form::label('CProblema3vender','Causa del problema 3:',['class'=>'control-label'])!!}
                {!!Form::text('CProblema3vender',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                {!!Form::label('SProblema3vender','Solución a problema 3: ',['class'=>'control-label'])!!}
                {!!Form::text('SProblema3vender',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}             
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('Problema3vender')!!}</div>               
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('CProblema3vender')!!}</div>               
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('SProblema3vender')!!}</div> 

            </div> 
          </div>
        </div>

        <div class="col-md-12">
          <div class="row">
            <label>4.5 Que RECURSOS NATURALES de la Comunidad (por su abundancia o calidad, o particularidad o escasez) pueden ser EXPLOTADOS, o TRANSFORMADOS industrialmente (Nombre 3 recursos naturales y diga en qué forma se explotaría?</label>
  
            <div class="form-group col-md-4">
                {!!Form::label('recurso1','Recurso',['class'=>'control-label'])!!}
                {!!Form::text('recurso1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('producto_descripcion')!!}</div>        
                {!!Form::label('recurso_formaexplotacion1','Forma',['class'=>'control-label'])!!}
                {!!Form::text('recurso_formaexplotacion1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('recurso_formaexplotacion1')!!}</div>
            </div>
            <div class="form-group col-md-4">
                {!!Form::label('recurso2','Recurso',['class'=>'control-label'])!!}
                {!!Form::text('recurso2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('producto_descripcion')!!}</div>        
                {!!Form::label('recurso_formaexplotacion2','Forma',['class'=>'control-label'])!!}
                {!!Form::text('recurso_formaexplotacion2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('recurso_formaexplotacion2')!!}</div>
            </div>
            <div class="form-group col-md-4">
                {!!Form::label('recurso3','Recurso',['class'=>'control-label'])!!}
                {!!Form::text('recurso3',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('producto_descripcion')!!}</div>        
                {!!Form::label('recurso_formaexplotacion3','Forma',['class'=>'control-label'])!!}
                {!!Form::text('recurso_formaexplotacion3',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('recurso_formaexplotacion3')!!}</div>
            </div>   
          </div>
        </div>

        <div class="col-md-12">
          <div class="row">
            <label>4.6 Cuenta la comunidad con especies de hierbas medicinales y aromáticas que pueden explotarse comercialmente?</label>
            <div class="form-group col-md-6">
                
                {!!Form::label('hierbas','SI',['class'=>'control-label'])!!}
                {!! Form::radio('hierbas', 'S', (Input::old('hierbas') == 'S')) !!}
                {!!Form::label('hierbas','NO',['class'=>'control-label'])!!}
                {!! Form::radio('hierbas', 'N', (Input::old('hierbas') == 'N')) !!}            
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('hierbas')!!}</div>
            </div>  
            <div class="form-group col-md-6">
                {!!Form::label('nombre_institucion','Enumere las principales y su uso medicinal:',['class'=>'control-label'])!!}               
                {!!Form::text('hierbas1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                {!!Form::text('hierbas2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                {!!Form::text('hierbas3',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('hierbas1')!!}</div>
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('hierbas2')!!}</div>
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('hierbas3')!!}</div>                         
            </div>              
          </div>
        </div> 

        <div class="col-md-12">
          <div class="row">
            <div class="form-group "> 
                <label>4.7 De que Instituciones públicas o privadas, la comunidad, y/o sus socios reciben INFORMACIÓN DE MERCADO, o sobre PRECIOS DE PRODUCTOS (indicar el nombre de la institución y la periodicidad con que recibe la información de mercado)</label>
            </div>
            <div class="form-group col-md-12">
                <div class="form-group col-md-12">
                    {!!Form::label('periodicidad','a) Instituciones que brindan servicio de información de precios de mercado: ( /indicar periodicidad)',['class'=>'control-label'])!!}
                </div>    
                <div class="form-group col-md-4">                
                    {!!Form::label('1','1:',['class'=>'control-label'])!!}
                    {!!Form::text('nombre_institucion1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                    {!!Form::text('periodicidad1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('nombre_institucion1')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('periodicidad1')!!}</div>
                </div>  
                <div class="form-group col-md-4">  
                    {!!Form::label('2','2:',['class'=>'control-label'])!!}
                    {!!Form::text('nombre_institucion2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                    {!!Form::text('periodicidad2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}  
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('nombre_institucion2')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('periodicidad2')!!}</div> 
                </div>  
                <div class="form-group col-md-4">  
                    {!!Form::label('3','3:',['class'=>'control-label'])!!}
                    {!!Form::text('nombre_institucion3',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                    {!!Form::text('periodicidad3',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('nombre_institucion3')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('periodicidad3')!!}</div>                
                </div>  
            </div>  
            <div class="form-group col-md-6">  
                {!!Form::label('infmercado_recibida','b) Le sirve la información de mercado recibida? Como la utiliza? :',['class'=>'control-label'])!!}
                {!!Form::text('infmercado_recibida',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('infmercado_recibida')!!}</div>                      
            </div>  
            <div class="form-group col-md-6">  
                {!!Form::label('infmercado_reciba','c) Que información específica de mercado le gustaría que su comunidad reciba :',['class'=>'control-label'])!!}
                {!!Form::text('infmercado_reciba',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('infmercado_reciba')!!}</div>                      
            </div>  

          </div>
        </div> 

        <div class="col-md-12">
          <div class="row">
            <div class="form-group ">
                <label>4.8 concesiones forestales otorgadas por OSINFOR que maneja la comunidad concesiones )</label>
            </div>    
            <div class="form-group col-md-12">                
                {!!Form::label('tipo_concesión','a) Tipo de concesión que viene manejando la comunidad:',['class'=>'control-label'])!!}
            </div>
            <div class="form-group col-md-4">                

                {!!Form::label('concesion_maderables','Concesión con fines maderables:',['class'=>'control-label'])!!}
                {!!Form::text('concesion_maderables',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}  
            </div>  
            <div class="form-group col-md-4">                

                {!!Form::label('concesion_nomaderables','Concesión con fines no maderables:',['class'=>'control-label'])!!}
                {!!Form::text('concesion_nomaderables',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('Concesion_maderables')!!}</div>
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('Concesion_nomaderables')!!}</div>
            </div>  
            <div class="form-group col-md-4"> 
                {!!Form::label('manejo_comunidad','b) Problemas del manejo por la comunidad: ',['class'=>'control-label'])!!}
                {!!Form::text('manejo_comunidad',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('manejo_comunidad')!!}</div>
            </div>
          </div>
        </div> 

      </div>
      </div>
    </div>
  </div> 
  
  <div class="col-md-12">
    <div class="widget widget-blue">
      <div class="widget-title">
        <h4 class="panel-title">5.- ASOCIATIVIDAD PARA LA PRODUCCION Y COMERCIALIZACION</h4>
      </div>
      <div class="widget-content">
      <div class="panel-body">

        <div class="col-md-12">
            <div class="row">
                <div class="form-group ">
                    <label>5.1 Relación de CADENAS PRODUCTIVAS que operan los socios comuneros, o a la que pertenece la comunidad </label>
                </div>
                <div class="form-group col-md-12">
                    {!!Form::label('asociacion_producto','a) Relación: (indicar Nombre de la cadena productiva y productos que comprende la cadena)',['class'=>'control-label'])!!}
                </div>
                <div class="form-group col-md-4">
                    
                    {!!Form::label('productiva1','1:',['class'=>'control-label'])!!}
                    {!!Form::text('productiva1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                    {!!Form::text('producto1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                </div>
                <div class="form-group col-md-4">
                    
                    {!!Form::label('productiva2','2:',['class'=>'control-label'])!!}
                    {!!Form::text('productiva2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                    {!!Form::text('producto2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                </div>
                <div class="form-group col-md-4">

                    {!!Form::label('productiva3','3:',['class'=>'control-label'])!!}
                    {!!Form::text('productiva3',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                    {!!Form::text('producto3',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 

                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('productiva1')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('productiva2')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('productiva3')!!}</div>
                </div>
                <div class="form-group col-md-6">
                    {!!Form::label('problema_cadenaprod','b) Principales problemas que presentan las cadenas productivas (indicar institución pública o privada que coordina la cadena productiva:',['class'=>'control-label'])!!}
                    {!!Form::text('problema_cadenaprod',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('problema_cadenaprod')!!}</div>
                </div>
            </div>
        
        </div>



        <div class="col-md-12">
            <div class="row">
                <div class="form-group ">
                    <label>5.2 Relación de ASOCIACIONES DE PRODUCTORES de la Comunidad, o a la que pertenece: </label>
                </div>
                <div class="form-group ">
                    {!!Form::label('asociacion_producto','a) Relación: (indicar nombre de la Asociación, y sus productos )  ',['class'=>'control-label'])!!}
                </div>
                <div class="form-group col-md-4">
                    
                    {!!Form::label('asociacion1','1:',['class'=>'control-label'])!!}
                    {!!Form::text('asociacion1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                    {!!Form::text('aproductoa1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                </div>
                <div class="form-group col-md-4">
                    
                    {!!Form::label('asociacion2','2:',['class'=>'control-label'])!!}
                    {!!Form::text('asociacion2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                    {!!Form::text('aproductoa2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                </div>
                <div class="form-group col-md-4">

                    {!!Form::label('asociacion3','3:',['class'=>'control-label'])!!}
                    {!!Form::text('asociacion3',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                    {!!Form::text('aproductoa3',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('asociacion1')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('asociacion2')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('asociacion3')!!}</div>
                </div>
                <div class="form-group col-md-6">
                    {!!Form::label('problema_asociprod','b) Principales problemas que presentan las asociaciones de productores',['class'=>'control-label'])!!}
                    {!!Form::text('problema_asociprod',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('problema_asociprod')!!}</div>
                </div>
            </div>
        
        </div>
        
        <div class="col-md-12">
            <div class="row">
                <div class="form-group ">
                    <label>5.3 EMPRESAS COMUNALES que tiene la comunidad (Nombre y su principal producción) </label>
                </div>
                <div class="form-group col-md-12">
                    {!!Form::label('empresa_comunal','a) Relación de Empresas Comunales, y  sus productos: ',['class'=>'control-label'])!!}
                </div>
                <div class="form-group col-md-4">
                    
                    {!!Form::label('empresacomunal1','1:',['class'=>'control-label'])!!}
                    {!!Form::text('empresacomunal1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                    {!!Form::text('empresaproducto1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                </div>
                <div class="form-group col-md-4">
                    
                    {!!Form::label('empresacomunal2','2:',['class'=>'control-label'])!!}
                    {!!Form::text('empresacomunal2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                    {!!Form::text('empresaproducto2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                </div>
                <div class="form-group col-md-4">

                    {!!Form::label('empresacomunal3','3:',['class'=>'control-label'])!!}
                    {!!Form::text('empresacomunal3',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                    {!!Form::text('empresaproducto3',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('empresacomunal1')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('empresacomunal2')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('empresacomunal3')!!}</div>
                </div>
                <div class="form-group col-md-4">
                    {!!Form::label('problema_empresacomunal','b) Principales problemas que presenta la empresa comunal:',['class'=>'control-label'])!!}
                    {!!Form::text('problema_empresacomunal',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('problema_empresacomunal')!!}</div>
                </div>

                <div class="form-group col-md-4">
                    {!!Form::label('sunat','c) Como percibe el rol de la SUNAT frente a las operaciones de la empresa comunal: ',['class'=>'control-label'])!!}                                         
         
                    {!!Form::label('sunat','los apoya, asesora:',['class'=>'control-label'])!!}
                    {!! Form::radio('sunat', 'asesora', (Input::old('sunat') == 'S'), array('id'=>'asesora', 'class'=>'radio')) !!}
                    {!!Form::label('sunat','Los presiona:',['class'=>'control-label'])!!}
                    {!! Form::radio('sunat', 'presiona', (Input::old('sunat') == 'presiona'), array('id'=>'presiona', 'class'=>'radio')) !!}  
                    {!!Form::label('sunat','es indiferente',['class'=>'control-label'])!!}
                    {!! Form::radio('sunat', 'indiferente', (Input::old('sunat') == 'indiferente'), array('id'=>'indiferente', 'class'=>'radio')) !!} 
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('sunat')!!}</div>
                </div>
                <div class="form-group col-md-4">
                    {!!Form::label('noempresacomunal','d) Si no cuenta con una Empresa Comunal ¿ Por qué razones o motivos la comunidad no tiene hasta ahora o no ha creado una empresa comunal ?',['class'=>'control-label'])!!}
                    {!!Form::text('noempresacomunal',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('noempresacomunal')!!}</div>
                </div>
            </div>        
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="form-group ">
                    <label>5.4 ASOCIACIONES o empresas productivas de MUJERES </label>
                </div>
                <div class="form-group col-md-12">
                    {!!Form::label('empresa_mujeres','a) Relación de Asociaciones o empresas / Rubro de producción:',['class'=>'control-label'])!!}
                </div>
                <div class="form-group col-md-4">
                    
                    {!!Form::label('empresamujer1','1:',['class'=>'control-label'])!!}
                    {!!Form::text('empresamujer1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                    {!!Form::text('empresamujerrubro1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}
                </div> 
                <div class="form-group col-md-4">
                    
                    {!!Form::label('empresamujer2','2:',['class'=>'control-label'])!!}
                    {!!Form::text('empresamujer2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                    {!!Form::text('empresamujerrubro2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                </div>
                <div class="form-group col-md-4">

                    {!!Form::label('empresamujer3','3:',['class'=>'control-label'])!!}
                    {!!Form::text('empresamujer3',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                    {!!Form::text('empresamujerrubro3',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('empresamujerrubro1')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('empresamujerrubro2')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('empresamujerrubro3')!!}</div>

                </div>
                <div class="form-group col-md-6">
                    {!!Form::label('limitante_asociacion','b) Principales problemas o limitantes que presentan estas asociaciones:',['class'=>'control-label'])!!}
                    {!!Form::text('limitante_asociacion',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('limitante_asociacion')!!}</div>
                </div>                
            </div>        
        </div>

        <div class="col-md-12">
            <div class="row">
                <div class="form-group ">
                    <label>5.5 MYPES propiedad de socios de la comunidad que funcionan en el territorio de la comunidad ( Rubro a que se dedica:    agroindustrial, artesanal, acuicultura, comercialización, otros)</label>
                </div>
                <div class="form-group col-md-12">
                    {!!Form::label('MYPES_comunidad','a) Relación de Mypes: (indicar nombre mype / Rubro producción /Of. Registro ) ',['class'=>'control-label'])!!}
                </div>

                <div class="form-group col-md-4">                    
                    {!!Form::label('mype1','1:',['class'=>'control-label'])!!}
                    {!!Form::text('mype1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                    {!!Form::text('rubromype1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                    {!!Form::text('registromype1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                </div>

                <div class="form-group col-md-4">                    
                    {!!Form::label('mype2','2:',['class'=>'control-label'])!!}
                    {!!Form::text('mype2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                    {!!Form::text('rubromype2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                    {!!Form::text('registromype2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                </div>

                <div class="form-group col-md-4">
                    {!!Form::label('mype3','3:',['class'=>'control-label'])!!}
                    {!!Form::text('mype3',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                    {!!Form::text('rubromype3',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                    {!!Form::text('registromype3',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('mype1')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('mype2')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('mype3')!!}</div>
                </div>

                <div class="form-group col-md-6">
                    {!!Form::label('problema_mype','b) Principales problemas que presentan las mypes',['class'=>'control-label'])!!}
                    {!!Form::text('problema_mype',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('problema_mype')!!}</div>
                </div>                
            </div>        
        </div>
      </div>
      </div>
    </div>
  </div>


  <div class="col-md-12">
    <div class="widget widget-blue">
      <div class="widget-title">
        <h4 class="panel-title">6.- ASISTENCIA TECNICA Y/O FINANCIERA QUE RECIBE LA COMUNIDAD</h4>
      </div>
      <div class="widget-content">
      <div class="panel-body">

        <div class="col-md-12">
            <div class="row">
                <div class="form-group col-md-12">
                    <label>6.1 Instituciones Públicas o Privadas que le brindan ASISTENCIA TÉCNICA para sus actividades económicas productivas: (FORMAS: transferencia</label>
                </div>
                <div class="form-group col-md-12">
                    {!!Form::label('institucion_asistencia','a) Relación de Instituciones: (Nombre de la institución, y forma de asistencia)',['class'=>'control-label'])!!}
                </div>
                <div class="form-group col-md-4">
                    
                    {!!Form::label('institucion_asistenciatecnica1','1:',['class'=>'control-label'])!!}
                    {!!Form::text('institucion_asistenciatecnica1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                    {!!Form::text('formaasistencia1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                </div>
                <div class="form-group col-md-4">
                    
                    {!!Form::label('institucion_asistenciatecnica2','2:',['class'=>'control-label'])!!}
                    {!!Form::text('institucion_asistenciatecnica2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                    {!!Form::text('formaasistencia2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                </div>    
                <div class="form-group col-md-4">

                    {!!Form::label('institucion_asistenciatecnica3','3:',['class'=>'control-label'])!!}
                    {!!Form::text('institucion_asistenciatecnica3',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                    {!!Form::text('formaasistencia3',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                   
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('institucion_asistenciatecnica1')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('institucion_asistenciatecnica2')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('institucion_asistenciatecnica3')!!}</div>
                </div>
                <div class="form-group col-md-6">
                    {!!Form::label('deficiencia_asistenciatecnica','b) Principales deficiencias en la prestación de la asistencia técnica:',['class'=>'control-label'])!!}
                    {!!Form::text('deficiencia_asistenciatecnica',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('deficiencia_asistenciatecnica')!!}</div>
                </div>
            </div>        
        </div>

        <div class="col-md-12">
            <div class="row">
                <div class="form-group">
                    <label>6.2 Instituciones que prestan FINANCIAMIENTO a la comunidad o a sus socios., para la producción o comercialización de sus productos
                       (Bancos, cajas municipales, ONG, Cooperativas, otras</label>
                </div>
                <div class="form-group col-md-12">
                    {!!Form::label('financiamiento_comunidad','a) Relación de Instituciones: (Nombre y / forma de asistencia financiera)',['class'=>'control-label'])!!}
                </div>
                <div class="form-group col-md-4">
                    
                    {!!Form::label('institucion_financiera1','1:',['class'=>'control-label'])!!}
                    {!!Form::text('institucion_financiera1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                    {!!Form::text('asistencia_financiera1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                </div>   
                <div class="form-group col-md-4">
                    
                    {!!Form::label('institucion_financiera2','2:',['class'=>'control-label'])!!}
                    {!!Form::text('institucion_financiera2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                    {!!Form::text('asistencia_financiera2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                </div>
                <div class="form-group col-md-4">

                    {!!Form::label('institucion_financiera3','3:',['class'=>'control-label'])!!}
                    {!!Form::text('institucion_financiera3',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                    {!!Form::text('asistencia_financiera3',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}               
                   
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('institucion_financiera1')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('institucion_financiera2')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('institucion_financiera3')!!}</div>
                </div>
                <div class="form-group col-md-6">
                    {!!Form::label('deficiencia_financiero','b) Principales deficiencias en la prestación de los servicios financieros:',['class'=>'control-label'])!!}
                    {!!Form::text('deficiencia_financiero',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('deficiencia_financiero')!!}</div>
                </div>
            </div>        
        </div>
    
      </div>
      </div>
    </div>
  </div>

  <div class="col-md-12">
    <div class="widget widget-blue">
      <div class="widget-title">
        <h4 class="panel-title">7.- INFRAESTRUCTURA DE APOYO A LA PRODUCCION, EN LA COMUNIDADD</h4>
      </div>
      <div class="widget-content">
      <div class="panel-body">

        <div class="col-md-12">
            <div class="row">
                <div class="form-group col-md-12"> 
                    <label>7.1 Servicio de AGUA POTABLE EN LA COMUNIDAD (indicar si se cuenta con el servicio de agua, e indicar el tipo de servicio: a domicilio, pilón de uso público, otro)</label>
                </div>
                <div class="form-group col-md-4"> 
                    {!!Form::label('agua','a) Si cuenta',['class'=>'control-label'])!!}
                    {!! Form::radio('agua', 'S', (Input::old('agua') == 'S')) !!}                

                    {!!Form::label('agua','b) No cuenta',['class'=>'control-label'])!!}
                    {!! Form::radio('agua', 'N', (Input::old('agua') == 'N')) !!} 

                    {!!Form::label('agua','c) En Construcción:',['class'=>'control-label'])!!}
                    {!! Form::radio('agua', 'C', (Input::old('agua') == 'C')) !!}
                </div>
                <div class="form-group col-md-4"> 
                    {!!Form::label('tipo_servicio','Tipo servicio:',['class'=>'control-label'])!!}
                    {!!Form::text('tipo_servicio',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}                  

                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('agua')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('tipo_servicio')!!}</div>
                </div>
                <div class="form-group col-md-4">
                    {!!Form::label('deficiencia_agua','d) Principal deficiencia en el abastecimiento del servicio de AGUA a la comunidad: ',['class'=>'control-label'])!!}
                    {!!Form::text('deficiencia_agua',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('deficiencia_agua')!!}</div>
                </div>
            </div>        
        </div>

        <div class="col-md-12">
            <div class="row">
                <div class="form-group col-md-12">
                    <label>7.2 N° de viviendas que  SI cuentan con servicio de red de AGUA A DOMICILIO</label>
                </div>
                <div class="form-group col-md-6">
                    {!!Form::label('Nviviendas_agua','a) N° de viviendas que SI cuentan con red de agua a domicilio',['class'=>'control-label'])!!}                                       
                    {!!Form::text('Nviviendas_agua',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}                    
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('Nviviendas_agua')!!}</div>
                </div>
                <div class="form-group col-md-6">
                    {!!Form::label('Nviviendas_noagua','b) N° de viviendas que NO cuentan con red de agua a domicilio',['class'=>'control-label'])!!}                                       
                    {!!Form::text('Nviviendas_noagua',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}                    
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('Nviviendas_noagua')!!}</div>
                </div>
            </div>        
        </div>

        <div class="col-md-12">
            <div class="row">
                <div class="form-group col-md-12"> 
                    <label>7.3 Servicio de DESAGUE (indicar con una X si se cuenta, o no)</label>
                </div>
                <div class="form-group col-md-6">
                    {!!Form::label('desague','a) Si cuenta',['class'=>'control-label'])!!}
                    {!! Form::radio('desague', 'S', (Input::old('desague') == 'S')) !!}                

                    {!!Form::label('desague','b) No cuenta',['class'=>'control-label'])!!}
                    {!! Form::radio('desague', 'N', (Input::old('desague') == 'N')) !!} 

                    {!!Form::label('desague','c) En Construcción:',['class'=>'control-label'])!!}
                    {!! Form::radio('desague', 'C', (Input::old('desague') == 'C') ) !!}                  
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('desague')!!}</div>
                </div>
                <div class="form-group col-md-6">
                    {!!Form::label('deficiencia_desague','d) Principal deficiencia en el servicio de DESAGUE de la comunidad:',['class'=>'control-label'])!!}                                       
                    {!!Form::text('deficiencia_desague',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}                    
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('deficiencia_desague')!!}</div>
                </div>
            </div>        
        </div>

        <div class="col-md-12">
            <div class="row">
                <div class="form-group ">
                    <label>7.4 Servicio de ENERGIA ELECTRICA en la comunidad:</label>
                </div>
                <div class="form-group col-md-6">
                    {!!Form::label('vivienda_electrica','a) N° de Viviendas que SI cuentan con energía eléctrica:',['class'=>'control-label'])!!}
                    {!!Form::text('vivienda_electrica',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('vivienda_electrica')!!}</div>
                </div>
           
                <div class="form-group col-md-6">
                    {!!Form::label('vivienda_noelectrica','b) N° de Viviendas que NO cuentan con energía eléctrica:',['class'=>'control-label'])!!}                                       
                    {!!Form::text('vivienda_noelectrica',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}                    
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('vivienda_noelectrica')!!}</div>
                </div>
                <div class="form-group col-md-6">
                    {!!Form::label('Nhoraselectrico','c) N° de horas diarias del servicio eléctrico:',['class'=>'control-label'])!!}                                       
                    {!!Form::text('Nhoraselectrico',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}                    
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('Nhoraselectrico')!!}</div>
                </div>
                <div class="form-group col-md-6">
                    {!!Form::label('deficiencia_electrico','d) Principal deficiencia en el servicio de energía eléctrica en la comunidad.',['class'=>'control-label'])!!}                                       
                    {!!Form::text('deficiencia_electrico',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}                    
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('deficiencia_electrico')!!}</div>
                </div>           
            </div>        
        </div>

        <div class="col-md-12">
            <div class="row">
                <div class="form-group">
                    <label>7.5  Servicio de TELEFONIA FIJA Y CELULAR en la Comunidad (contestar con una X si se cuenta o no se cuenta)</label>
                </div>
                <div class="form-group col-md-6">
                    {!!Form::label('telefoniafija','a) TELEFONIA FIJA',['class'=>'control-label'])!!}
                    {!!Form::label('telefoniafija','SI',['class'=>'control-label'])!!}
                    {!! Form::radio('telefoniafija', 'S', (Input::old('telefoniafija') == 'S')) !!}                
                    {!!Form::label('telefoniafija','NO',['class'=>'control-label'])!!}
                    {!! Form::radio('telefoniafija', 'N', (Input::old('telefoniafija') == 'S')) !!} 
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('telefoniafija')!!}</div>
                </div>
                <div class="form-group col-md-6">
                    {!!Form::label('telefoniacelular','b) TELEFONIA CELULAR',['class'=>'control-label'])!!}
                    {!!Form::label('telefoniacelular','SI',['class'=>'control-label'])!!}
                    {!! Form::radio('telefoniacelular', 'S', (Input::old('telefoniacelular') == 'S')) !!}                
                    {!!Form::label('telefoniacelular','NO',['class'=>'control-label'])!!}
                    {!! Form::radio('telefoniacelular', 'N', (Input::old('telefoniacelular') == 'S')) !!} 
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('telefoniacelular')!!}</div>
                </div>
                <div class="form-group col-md-6">
                    {!!Form::label('telefoniasatelital','c) TELEFONIA SATELITAL',['class'=>'control-label'])!!}
                    {!!Form::label('telefoniasatelital','SI',['class'=>'control-label'])!!}
                    {!! Form::radio('telefoniasatelital', 'S', (Input::old('telefoniasatelital') == 'S')) !!}                
                    {!!Form::label('telefoniasatelital','NO',['class'=>'control-label'])!!}
                    {!! Form::radio('telefoniasatelital', 'N', (Input::old('telefoniasatelital') == 'S')) !!} 
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('telefoniasatelital')!!}</div>
                </div>

                <div class="form-group col-md-6">
                    {!!Form::label('deficiencia_telefonia','d) Principales deficiencias en el servicio de Telefonía con que cuenta la comunidad:',['class'=>'control-label'])!!}                                       
                    {!!Form::text('deficiencia_telefonia',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}                    
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('deficiencia_telefonia')!!}</div>
                </div>           
            </div>        
        </div>
    

        <div class="col-md-12">
            <div class="row">
                <div class="form-group ">
                    <label>7.6 Servicio de INTERNET en la Comunidad</label>
                </div>
                <div class="form-group col-md-4">
                    {!!Form::label('serviciointernet','a) Opción:',['class'=>'control-label'])!!}
                    {!!Form::label('serviciointernet','SI',['class'=>'control-label'])!!}
                    {!! Form::radio('serviciointernet', 'S', (Input::old('serviciointernet') == 'S')) !!}                
                    {!!Form::label('serviciointernet','NO',['class'=>'control-label'])!!}
                    {!! Form::radio('serviciointernet', 'N', (Input::old('serviciointernet') == 'S')) !!} 
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('serviciointernet')!!}</div>
                </div>
          
                <div class="form-group col-md-4">
                    {!!Form::label('empresa_proveedora','b) Nombre de la Empresa Proveedora del servicio:',['class'=>'control-label'])!!}                                       
                    {!!Form::text('empresa_proveedora',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}                    
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('empresa_proveedora')!!}</div>
                </div>   

                 <div class="form-group col-md-4">
                    {!!Form::label('cabinas_comunidad','c) Quien opera el servicio de cabinas internet en la comunidad?:',['class'=>'control-label'])!!}                                       
                    {!!Form::text('cabinas_comunidad',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}                    
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('cabinas_comunidad')!!}</div>
                </div>
            </div>        
        </div>

        <div class="col-md-12">
            <div class="row">
                <div class="form-group ">
                    <label>7.7 Articulación VIAL de la comunidad al mercado más cercano donde se vende la producción de la comunidad.
                        (Nombre de la carretera o rio que utilizan para llegar al principal mercado más cercano)</label>
                </div>   
                <div class="form-group col-md-4">
                    {!!Form::label('via_fluvial','a) Nombre de la vía fluvial (Rio) :',['class'=>'control-label'])!!}                                       
                    {!!Form::text('via_fluvial',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}                    
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('via_fluvial')!!}</div>
                    {!!Form::label('localidad_venta','Nombre del Mercado (o localidad) donde se vende la producción:',['class'=>'control-label'])!!}                                       
                    {!!Form::text('localidad_venta',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}                    
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('localidad_venta')!!}</div>
                    {!!Form::label('distancia_kmmercado:','Distancia en Km:',['class'=>'control-label'])!!}                                       
                    {!!Form::text('distancia_kmmercado',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}                    
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('distancia_kmmercado')!!}</div>
                    {!!Form::label('distancia_horasmercado:','Distancia en Horas:',['class'=>'control-label'])!!}                                       
                    {!!Form::text('distancia_horasmercado',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}                    
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('distancia_horasmercado')!!}</div>
                </div>          

                <div class="form-group col-md-4">
                    {!!Form::label('via_carretera','b) Nombre de la vía carretera:',['class'=>'control-label'])!!}                                       
                    {!!Form::text('via_carretera',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}                    
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('via_carretera')!!}</div>
                    
                    {!!Form::label('distancia_kmcarretera','Distancia en Km:',['class'=>'control-label'])!!}                                       
                    {!!Form::text('distancia_kmcarretera',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}                    
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('distancia_kmcarretera')!!}</div>

                    {!!Form::label('distancia_horascarretera','Distancia en Horas:',['class'=>'control-label'])!!}                                       
                    {!!Form::text('distancia_horascarretera',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}                    
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('distancia_horascarretera')!!}</div>
                </div>

                <div class="form-group col-md-4">
                    <div class="form-group col-md-12">
                        {!!Form::label('tipo_vía','Tipo de vía',['class'=>'control-label'])!!}
                    </div>
                    <div class="form-group col-md-12">
                        {!!Form::label('tipo_vía','Sendero:',['class'=>'control-label'])!!}
                        {!! Form::radio('tipo_vía', 'Sendero', (Input::old('tipo_vía') == 'Sendero')) !!}                
                        {!!Form::label('tipo_vía','Sin afirmar:',['class'=>'control-label'])!!}
                        {!! Form::radio('tipo_vía', 'Sin_afirmar', (Input::old('tipo_vía') == 'Sin_afirmar')) !!} 
                        {!!Form::label('tipo_vía','Camino afirmado:',['class'=>'control-label'])!!}
                        {!! Form::radio('tipo_vía', 'Camino_afirmado:', (Input::old('tipo_vía') == 'Camino_afirmado'), array('id'=>'Camino afirmado:', 'class'=>'radio')) !!}
                        {!!Form::label('tipo_vía','Asfaltado:',['class'=>'control-label'])!!}
                        {!! Form::radio('tipo_vía', 'Asfaltado', (Input::old('tipo_vía') == 'Asfaltado')) !!}
                        <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('tipo_vía')!!}</div>
                    </div>
                </div>
            </div>        
        </div>

        <div class="col-md-12">
            <div class="row">
                <div class="form-group">
                    <label>7.8 Infraestructura PORTUARIA (marcar con X si se cuenta; Nombre del puerto o pista aterrizaje)</label>
                </div>    
                <div class="form-group col-md-4">
                    {!!Form::label('puerto_fluvial','a) Puerto Fluvial:',['class'=>'control-label'])!!}
                    {!!Form::label('puerto_fluvial','SI',['class'=>'control-label'])!!}
                    {!! Form::radio('puerto_fluvial', 'S', (Input::old('puerto_fluvial') == 'S')) !!}                
                    {!!Form::label('puerto_fluvial','NO',['class'=>'puerto_fluvial-label'])!!}
                    {!! Form::radio('puerto_fluvial', 'N', (Input::old('puerto_fluvial') == 'S')) !!} 
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('puerto_fluvial')!!}</div>

                    {!!Form::label('nombre_puerto','Nombre del puerto',['class'=>'control-label'])!!}                                       
                    {!!Form::text('nombre_puerto',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}                    
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('nombre_puerto')!!}</div>
                </div>

                <div class="form-group col-md-4">
                    {!!Form::label('pista_aterrizaje','a) Puerto Fluvial:',['class'=>'control-label'])!!}
                    {!!Form::label('pista_aterrizaje','SI',['class'=>'control-label'])!!}
                    {!! Form::radio('pista_aterrizaje', 'S', (Input::old('pista_aterrizaje') == 'S')) !!}                
                    {!!Form::label('pista_aterrizaje','NO',['class'=>'pista_aterrizaje-label'])!!}
                    {!! Form::radio('pista_aterrizaje', 'N', (Input::old('pista_aterrizaje') == 'S')) !!} 
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('pista_aterrizaje')!!}</div>

                    {!!Form::label('nombre_pista','Nombre de la pista',['class'=>'control-label'])!!}                                       
                    {!!Form::text('nombre_pista',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}                    
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('nombre_pista')!!}</div>
                </div>

                <div class="form-group col-md-4">
                    {!!Form::label('estado_infraestuctura','c) Estado operativo de la infraestructura:',['class'=>'control-label'])!!}
                    {!!Form::label('estado_infraestuctura','Buena:',['class'=>'control-label'])!!}
                    {!! Form::radio('estado_infraestuctura', 'Buena', (Input::old('estado_infraestuctura') == 'S')) !!}                
                    {!!Form::label('estado_infraestuctura','Mala:',['class'=>'estado_infraestuctura-label'])!!}
                    {!! Form::radio('estado_infraestuctura', 'Mala', (Input::old('estado_infraestuctura') == 'S')) !!}                     
                    {!!Form::label('estado_infraestuctura','Regular:',['class'=>'estado_infraestuctura-label'])!!}
                    {!! Form::radio('estado_infraestuctura', 'Regular', (Input::old('estado_infraestuctura') == 'regular')) !!} 
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('estado_infraestuctura')!!}</div>
                </div>
                  
            </div>        
        </div> 
      </div>
      </div>
    </div>
  </div>

  <div class="col-md-12">
    <div class="widget widget-blue">
      <div class="widget-title">
        <h4 class="panel-title">8.- INFRAESTRUCTURA PRODUCTIVA EN LA COMUNIDAD</h4>
      </div>
      <div class="widget-content">
      <div class="panel-body">

        <div class="col-md-12">
            <div class="row">
                <div class="form-group ">
                    <label>8.1 INFRAESTRUCTURA DE RIEGO en la Comunidad</label>
                </div>

                <div class="form-group  ">
                    {!!Form::label('sistemas_riego','a) Sistemas de RIEGO: (Indicar Nombre, tipo de sistema de riego, Has irrigadas, Estado operativo del sistema de riego ) ',['class'=>'control-label'])!!}                  
                </div>

                <div class="form-group col-md-12">
                    <div class="form-group col-md-3">
                        {!!Form::label('nombre_sistriego1','Nombre:',['class'=>'control-label'])!!}
                        {!!Form::text('nombre_sistriego1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}    
                    </div>
                    <div class="form-group col-md-3">
                            {!!Form::label('tipo_sistriego1','Tipo:',['class'=>'control-label'])!!}
                            {!!Form::text('tipo_sistriego1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}   
                    </div> 

                    <div class="form-group col-md-3">
                            {!!Form::label('has_irrigadas1','Has irrigadas',['class'=>'control-label'])!!}
                            {!!Form::text('has_irrigadas1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}   
                    </div>    

                    <div class="form-group col-md-3">
                        {!!Form::label('estado_operativosist1','Estado operativo:',['class'=>'control-label'])!!}
                        {!!Form::text('estado_operativosist1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}  
                    </div>            
                        <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('nombre_sistriego1')!!}</div>
                        <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('tipo_sistriego1')!!}</div>
                        <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('has_irrigadas1')!!}</div>
                        <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('estado_operativosist1')!!}</div>                                       
                </div>

                <div class="form-group col-md-12">                  
                    <div class="form-group col-md-3">                  
                        {!!Form::label('nombre_sistriego2','Nombre:',['class'=>'control-label'])!!}
                        {!!Form::text('nombre_sistriego2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}   
                    </div>
                    <div class="form-group col-md-3"> 
                        {!!Form::label('tipo_sistriego2','Tipo:',['class'=>'control-label'])!!}
                        {!!Form::text('tipo_sistriego2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}    
                    </div>
                    <div class="form-group col-md-3">
                        {!!Form::label('has_irrigadas2','Has irrigadas',['class'=>'control-label'])!!}
                        {!!Form::text('has_irrigadas2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                    </div>  
                    <div class="form-group col-md-3">
                        {!!Form::label('estado_operativosist2','Estado operativo:',['class'=>'control-label'])!!}
                        {!!Form::text('estado_operativosist2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}  
                    </div>            
                        <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('nombre_sistriego2')!!}</div>
                        <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('tipo_sistriego2')!!}</div>
                        <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('has_irrigadas2')!!}</div>
                        <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('estado_operativosist2')!!}</div>
                </div>

                <div class="form-group ">
                    {!!Form::label('represas_agua','b) Represas de Agua (Indicar: Nombre y capa  cidad m3)',['class'=>'control-label'])!!}    
                </div>
                <div class="form-group col-md-12"> 
                                 
                        <div class="form-group col-md-3"> 
                            

                            {!!Form::label('nombre_represa1','1:',['class'=>'control-label'])!!}
                            {!!Form::label('nombre_represa1','Nombre:',['class'=>'control-label'])!!}
                            {!!Form::text('nombre_represa1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}
                        </div>
                        <div class="form-group col-md-3"> 
                            {!!Form::label('capacidad_represa1','Tipo:',['class'=>'control-label'])!!}
                            {!!Form::text('capacidad_represa1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}
                        </div>
                        
                        <div class="form-group col-md-3"> 
                            {!!Form::label('nombre_represa2','2:',['class'=>'control-label'])!!}
                            {!!Form::label('nombre_represa2','Nombre:',['class'=>'control-label'])!!}
                            {!!Form::text('nombre_represa2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}
                        </div>    
                        <div class="form-group col-md-3"> 
                            {!!Form::label('capacidad_represa2','Tipo:',['class'=>'control-label'])!!}
                            {!!Form::text('capacidad_represa2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                        </div>
                    
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('nombre_represa1')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('capacidad_represa1')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('nombre_represa2')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('capacidad_represa2')!!}</div>
                </div>                

                <div class="form-group">
                    {!!Form::label('deficiencia_represa',' c) Principales deficiencias o limitaciones en el sistema de riego o en la represa (proponer solución) : ',['class'=>'control-label'])!!}
                </div>
                <div class="form-group col-md-6">
                    {!!Form::text('deficiencia_represa',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('deficiencia_represa')!!}</div>
                </div>
            </div>        
        </div>

        <div class="col-md-12">
            <div class="row">
                <div class="form-group ">
                    <label>8.2 ALMACENES O SILOS comunales (para almacenamiento de la producción y la semilla)</label>
                </div>
                <div class="form-group ">
                    {!!Form::label('nombre_almacensilo','a) Relación (Indicar: Nombre /capacidad almacenamiento/ productos)',['class'=>'control-label'])!!}
                </div>
                <div class="form-group col-md-6">
                    <div class="form-group col-md-4">
                        {!!Form::label('nombre_almacensilo1','1:',['class'=>'control-label'])!!}
                        {!!Form::text('nombre_almacensilo1',null ,['class'=>'form-control   col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                    </div>
                    <div class="form-group col-md-4">
                        {!!Form::label('capacidadalmacenamiento_almacensilo1','/',['class'=>'control-label'])!!}
                        {!!Form::text('capacidadalmacenamiento_almacensilo1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                    </div>
                    <div class="form-group col-md-4"> 
                        {!!Form::label('producto_almacensilo1','/',['class'=>'control-label'])!!}
                        {!!Form::text('producto_almacensilo1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                    </div>     
                   
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('nombre_almacensilo1')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('capacidadalmacenamiento_almacensilo1')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('producto_almacensilo1')!!}</div>
                </div>
                <div class="form-group col-md-6">
                     <div class="form-group col-md-4">                    
                        {!!Form::label('nombre_almacensilo2','2:',['class'=>'control-label'])!!}
                        {!!Form::text('nombre_almacensilo2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}
                    </div>
                    <div class="form-group col-md-4">
                        {!!Form::label('capacidadalmacenamiento_almacensilo2','/',['class'=>'control-label'])!!}
                        {!!Form::text('capacidadalmacenamiento_almacensilo2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                    </div>
                    <div class="form-group col-md-4">
                        {!!Form::label('producto_almacensilo2','/',['class'=>'control-label'])!!}
                        {!!Form::text('producto_almacensilo2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}       
                    </div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('nombre_almacensilo2')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('capacidadalmacenamiento_almacensilo2')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('producto_almacensilo2')!!}</div>
                </div>
            
            </div>        
        </div>

        <div class="col-md-12">
            <div class="row">
                <label>8.3 MOLINOS DE GRANOS:)</label>
                <div class="form-group ">
                    {!!Form::label('molinos_granos','a) Relación (Indicar: Nombre; capacidad; Propietario )',['class'=>'control-label'])!!}
                </div>
                <div class="form-group col-md-6"> 
                    <div class="form-group col-md-4"> 
                        {!!Form::label('nombre_molinosgranos1','1:',['class'=>'control-label'])!!}
                        {!!Form::text('nombre_molinosgranos1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                    </div>
                    <div class="form-group col-md-4"> 
                        {!!Form::label('capacidad_molinosgranos1','/',['class'=>'control-label'])!!}
                        {!!Form::text('capacidad_molinosgranos1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                    </div>
                    <div class="form-group col-md-4">
                        {!!Form::label('propietario_molinosgranos1','/',['class'=>'control-label'])!!}
                        {!!Form::text('propietario_molinosgranos1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}   
                    </div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('nombre_molinosgranos1')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('capacidad_molinosgranos1')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('propietario_molinosgranos1')!!}</div>
                </div>
                <div class="form-group col-md-6">
                    <div class="form-group col-md-4">
                        {!!Form::label('nombre_molinosgranos2','2:',['class'=>'control-label'])!!}
                        {!!Form::text('nombre_molinosgranos2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                    </div>
                    <div class="form-group col-md-4"> 
                        {!!Form::label('capacidad_molinosgranos2','/',['class'=>'control-label'])!!}
                        {!!Form::text('capacidad_molinosgranos2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                    </div>
                    <div class="form-group col-md-4"> 
                        {!!Form::label('propietario_molinosgranos2','/',['class'=>'control-label'])!!}
                        {!!Form::text('propietario_molinosgranos2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}     
                    </div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('nombre_molinosgranos2')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('capacidad_molinosgranos2')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('propietario_molinosgranos2')!!}</div>
                </div>
         
            </div>        
        </div>

        <div class="col-md-12">
            <div class="row">
                <div class="form-group ">
                    <label>8.4 PISCIGRANJAS en el territorio de la Comunidad (Indicar: Nombre de la piscigranja, Capacidad de producción de la infraestructura, especies cultivadas, Estado operativo de la piscigranja , y nombre del propietario)</label>
                </div>
                <div class="form-group ">
                    {!!Form::label('piscigranjas_comunidad','a) Relación de piscigranjas :',['class'=>'control-label'])!!}                  
                </div>

                <div class="form-group col-md-6">
                    <div class="form-group col-md-6">
                      {!!Form::label('nombre_piscigranjas1','1: Nombre Piscigranja:',['class'=>'control-label'])!!}
                        {!!Form::text('nombre_piscigranjas1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                    </div>             

                    <div class="form-group col-md-6">
                        {!!Form::label('capacidad_piscigranjas1','Capac Producción:',['class'=>'control-label'])!!}
                        {!!Form::text('capacidad_piscigranjas1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}   
                    </div>             

                    <div class="form-group col-md-6">
                        {!!Form::label('especies_piscigranjas1','Especies:',['class'=>'control-label'])!!}
                        {!!Form::text('especies_piscigranjas1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                    </div>             

                    <div class="form-group col-md-6">
                        {!!Form::label('estadooperativo_piscigranjas1','Estado operativo:',['class'=>'control-label'])!!}
                        {!!Form::text('estadooperativo_piscigranjas1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}
                    </div>             

                    <div class="form-group col-md-6">
                        {!!Form::label('propietario_piscigranjas1','Propietario:',['class'=>'control-label'])!!}
                        {!!Form::text('propietario_piscigranjas1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                    </div>             
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('nombre_piscigranjas1')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('capacidad_piscigranjas1')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('especies_piscigranjas1')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('estadooperativo_piscigranjas1')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('propietario_piscigranjas1')!!}</div>
                </div>

                <div class="form-group col-md-6">
                    <div class="form-group col-md-6">
                        {!!Form::label('nombre_piscigranjas2','2: Nombre Piscigranja:',['class'=>'control-label'])!!}
                        {!!Form::text('nombre_piscigranjas2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                    </div>
                    <div class="form-group col-md-6">
                        {!!Form::label('capacidad_piscigranjas2','Capac Producción:',['class'=>'control-label'])!!}
                        {!!Form::text('capacidad_piscigranjas2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}  
                    </div>
                    <div class="form-group col-md-6">
                        {!!Form::label('especies_piscigranjas2','Especies:',['class'=>'control-label'])!!}
                        {!!Form::text('especies_piscigranjas2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                    </div>
                    <div class="form-group col-md-6">
                        {!!Form::label('estadooperativo_piscigranjas2','Estado operativo:',['class'=>'control-label'])!!}
                        {!!Form::text('estadooperativo_piscigranjas2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}
                    </div>
                    <div class="form-group col-md-6">
                        {!!Form::label('propietario_piscigranjas2','Propietario:',['class'=>'control-label'])!!}
                        {!!Form::text('propietario_piscigranjas2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                    </div>             
                        <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('nombre_piscigranjas2')!!}</div>
                        <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('capacidad_piscigranjas2')!!}</div>
                        <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('especies_piscigranjas2')!!}</div>
                        <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('estadooperativo_piscigranjas2')!!}</div>
                        <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('propietario_piscigranjas2')!!}</div>
                </div>
            
            </div>        
        </div>


      </div>
      </div>
    </div>
  </div>

  <div class="col-md-12">
    <div class="widget widget-blue">
      <div class="widget-title">
        <h4 class="panel-title">9.- ORDENAMIENTO Y DEMARCACION TERRITORIAL:</h4>
      </div>
      <div class="widget-content">
      <div class="panel-body">
        
        <div class="col-md-12">
            <div class="row">
                <div class="form-group">
                    <label>9.1 PROBLEMAS DE LÍMITES con las comunidades vecinas, (Solo si se tiene problemas)</label>
                </div>
                <div class="form-group ">
                    {!!Form::label('problemas_comunidades','a) Relación de problemas: ',['class'=>'control-label'])!!}                  
                </div>

                <div class="form-group col-md-6">
                  {!!Form::label('problemalimite_comunidad1','1: Con la comunidad:',['class'=>'control-label'])!!}
                    {!!Form::text('problemalimite_comunidad1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                    {!!Form::label('motivoproblemalimite_comunidad1','Motivo u Objeto y situación del Problema:',['class'=>'control-label'])!!}
                    {!!Form::text('motivoproblemalimite_comunidad1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}     
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('problemalimite_comunidad1')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('motivoproblemalimite_comunidad1')!!}</div>
                </div>

                <div class="form-group col-md-6">
                  {!!Form::label('problemalimite_comunidad2','1: Con la comunidad:',['class'=>'control-label'])!!}
                    {!!Form::text('problemalimite_comunidad2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                    {!!Form::label('motivoproblemalimite_comunidad2','Motivo u Objeto y situación del Problema:',['class'=>'control-label'])!!}
                    {!!Form::text('motivoproblemalimite_comunidad2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}     
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('problemalimite_comunidad2')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('motivoproblemalimite_comunidad2')!!}</div>
                </div>
            </div>        
        </div>

  
        <div class="col-md-12">
            <div class="row">
                <div class="form-group ">
                    <label>9.2 CONFLICTOS TERRITORIALES con los COLONOS o PARTICULARES por posesión indebida de tierras comunales (indicar extensión del territorio en conflicto)</label>
                </div>
          
                <div class="form-group ">
                    {!!Form::label('problemas_comunidades','a) Relación de Conflictos territoriales con Colonos, o Particulares: ',['class'=>'control-label'])!!}                  
                </div>

                <div class="form-group col-md-6">
                    <div class="form-group col-md-6">
                        {!!Form::label('problematerritorial_colonos1','1: Con',['class'=>'control-label'])!!}
                        {!!Form::text('problematerritorial_colonos1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}      
                    </div> 
                    <div class="form-group col-md-6">
                        {!!Form::label('motivoterritorial_colonos1','Motivo y Situación del Conflicto:',['class'=>'control-label'])!!}
                        {!!Form::text('motivoterritorial_colonos1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}     
                    </div>        

                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('problemalimite_comunidad')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('motivoproblemalimite_comunidad')!!}</div>
                </div>

                <div class="form-group col-md-6">
                    <div class="form-group col-md-6">
                        {!!Form::label('problematerritorial_colonos2','2: Con ',['class'=>'control-label'])!!}
                        {!!Form::text('problematerritorial_colonos2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}
                    </div>   
                    <div class="form-group col-md-6">
                        {!!Form::label('motivoterritorial_colonos2','Motivo y Situación del Conflicto:',['class'=>'control-label'])!!}
                        {!!Form::text('motivoterritorial_colonos2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}   
                    </div>  
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('problematerritorial_colonos2')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('motivoterritorial_colonos2')!!}</div>
                </div>
            </div>        
        </div>

        <div class="col-md-12">
            <div class="row">
                <div class="form-group">
                    <label>9.3 PROBLEMA DE SUPERPOSICION DE DENUNCIOS otorgados en el Territorio de la comunidad (Denuncios mineros, energéticos, y de otro tipo</label>
                </div>
                <div class="form-group ">
                    {!!Form::label('problemas_comunidades','a) Relación de Problemas por Denuncios ( Indicar Nombre de la Empresa o institución titular del denuncio, Detallar Situación del problema):',['class'=>'control-label'])!!}                  
                </div>

                <div class="form-group col-md-6">
                  {!!Form::label('empresa_denuncio1','1:',['class'=>'control-label'])!!}
                    {!!Form::text('empresa_denuncio1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                   
                    {!!Form::text('detalle_problemadenuncio1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}     
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('empresa_denuncio1')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('detalle_problemadenuncio1')!!}</div>
                </div>

                <div class="form-group col-md-6">
                  {!!Form::label('empresa_denuncio2','2:',['class'=>'control-label'])!!}
                    {!!Form::text('empresa_denuncio2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}              
                   
                    {!!Form::text('detalle_problemadenuncio2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}     
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('empresa_denuncio2')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('detalle_problemadenuncio2')!!}</div>
                </div>
            </div>        
        </div>

        <div class="col-md-12">
            <div class="row">
                <div class="form-group ">
                    <label>9.4 PROBLEMAS AMBIENTALES en el territorio de la comunidad (Por efectos de un mal uso del territorio, actividades económicas, o Cambio climático: )</label>
                </div>
                <div class="form-group ">
                    {!!Form::label('problemas_comunidades','a) Zonas con Problema de deforestación critica',['class'=>'control-label'])!!}                  
                </div>
                <div class="form-group col-md-12">
                    <div class="form-group col-md-4">
                        {!!Form::label('zonas_afectadas','Zonas afectadas:',['class'=>'control-label'])!!}
                        {!!Form::text('zonas_afectadas',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                    </div>
                    <div class="form-group col-md-4">
                        {!!Form::label('zonas_afectadas_km','Área aproximada (km2)',['class'=>'control-label'])!!}                   
                        {!!Form::text('zonas_afectadas_km',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}
                    </div>
                    <div class="form-group col-md-4">
                        {!!Form::label('zonas_afectadas_causa','Probable causa del problema:',['class'=>'control-label'])!!}                   
                        {!!Form::text('zonas_afectadas_causa',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                    </div> 
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('zonas_afectadas')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('zonas_afectadas_km')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('zonas_afectadas_causa')!!}</div>
                </div>
                
                <div class="form-group ">
                    {!!Form::label('perdida_silvestre','b) Perdida de la fauna silvestre (en extinción)',['class'=>'control-label'])!!}
                </div> 

                <div class="form-group col-md-12">
                      
                    <div class="form-group col-md-4">
                        {!!Form::label('perdida_silvestre_especies','Especies afectadas:',['class'=>'control-label'])!!}
                        {!!Form::text('perdida_silvestre_especies',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                    </div>
                    <div class="form-group col-md-4">
                        {!!Form::label('perdida_silvestre_lugares','Lugares afectados:',['class'=>'control-label'])!!}
                        {!!Form::text('perdida_silvestre_lugares',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}
                    </div>
                    <div class="form-group col-md-4">
                        {!!Form::label('perdida_silvestre_causa','Probable causa del problema:',['class'=>'control-label'])!!}
                        {!!Form::text('perdida_silvestre_causa',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}  
                    </div>   
                        <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('perdida_silvestre_especies')!!}</div>
                        <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('perdida_silvestre_lugares')!!}</div>
                        <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('perdida_silvestre_causa')!!}</div>
                </div>

                <div class="form-group ">
                    {!!Form::label('perdida_flora','c) Perdida de flora silvestre (en desaparición)',['class'=>'control-label'])!!}
                </div>
                <div class="form-group col-md-12">
                    <div class="form-group col-md-4">
                      
                        {!!Form::label('perdida_flora_especies','Relación de especies:',['class'=>'control-label'])!!}
                        {!!Form::text('perdida_flora_especies',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                    </div>
                    <div class="form-group col-md-4">
                        {!!Form::label('perdida_flora_lugares','Lugares afectados:',['class'=>'control-label'])!!}
                        {!!Form::text('perdida_flora_lugares',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                    </div>
                    <div class="form-group col-md-4">
                        {!!Form::label('perdida_flora_causa','Probable causa del problema:',['class'=>'control-label'])!!}
                        {!!Form::text('perdida_flora_causa',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}    
                    </div> 
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('perdida_flora_especies')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('perdida_flora_lugares')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('perdida_flora_causa')!!}</div>
                </div>

                <div class="form-group ">
                    {!!Form::label('contaminación_cuerposagua','d) Contaminación de cuerpos de agua:',['class'=>'control-label'])!!}
                </div>
                <div class="form-group col-md-12">
                    <div class="form-group col-md-6">
                       
                        {!!Form::label('cuerpo_contaminacionagua','Nombre del cuerpo de agua y Efecto visible de la contaminación:',['class'=>'control-label'])!!}
                        {!!Form::text('cuerpo_contaminacionagua',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}
                    </div>
                    <div class="form-group col-md-6">

                        {!!Form::label('causa_contaminación_cuerposagua','Probable causa del problema:',['class'=>'control-label'])!!}
                        {!!Form::text('causa_contaminación_cuerposagua',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                    </div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('cuerpo_contaminacionagua')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('causa_contaminación_cuerposagua')!!}</div>

                </div>

            </div>        
        </div>

      </div>
      </div>
    </div>
  </div>

  <div class="col-md-12">
    <div class="widget widget-blue">
      <div class="widget-title">
        <h4 class="panel-title">10.- INSTITUCIONALIDAD Y RELACIONES DE COORDINACION</h4>
      </div>
      <div class="widget-content">
      <div class="panel-body">
        
        <div class="col-md-12">
            <div class="row">
                <div class="form-group">
                    <label>10.1 Como evalúa la OPERATIVIDAD o funcionamiento de LA ESTRUCTURA ORGÁNICA de la comunidad?</label>
                </div>
            
                <div class="form-group col-md-12">
                    {!!Form::label('problemas_comunidades','a) Relación de problemas: ',['class'=>'control-label'])!!}                  

                    {!!Form::label('operatividad_estructuraorganica','a) Evaluación:',['class'=>'control-label'])!!}               
                    {!!Form::label('operatividad_estorganica_eval','Es Buena',['class'=>'control-label'])!!}
                    {!! Form::radio('operatividad_estorganica_eval', 'Buena', (Input::old('operatividad_estorganica_eval') == 'Buena')) !!}

                    {!!Form::label('operatividad_estorganica_eval','Es Mala',['class'=>'control-label'])!!}
                    {!! Form::radio('operatividad_estorganica_eval', 'Mala', (Input::old('operatividad_estorganica_eval') == 'Mala')) !!}     
                    {!!Form::label('operatividad_estorganica_eval','Es Regular',['class'=>'control-label'])!!}
                    {!! Form::radio('operatividad_estorganica_eval', 'Regular', (Input::old('operatividad_estorganica_eval') == 'Regular')) !!}      
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('operatividad_estructuraorganica')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('operatividad_estorganica_eval')!!}</div>
                </div>
            
                <div class="form-group col-md-12">
                    <div class="form-group col-md-3">
                        {!!Form::label('estorganica_dinamizaractividad','b) Que cambios en la estructura orgánica propondría para dinamizar las actividades comunidad económicas y se pueda articular mejor al mercado:',['class'=>'control-label'])!!}
                        {!!Form::text('estorganica_dinamizaractividad',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}   
                    </div>
                    <div class="form-group col-md-3">
                        {!!Form::label('mujeres_operatividad','c) Cuantas mujeres conforman la junta directiva de la comunidad:',['class'=>'control-label'])!!}
                        {!!Form::text('mujeres_operatividad',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}
                    </div>
                    <div class="form-group col-md-3">
                        {!!Form::label('jovenes_operatividad','d) Cuantos Jóvenes (hombres y mujeres menores de 30 años) conforman la junta directiva',['class'=>'control-label'])!!}
                        {!!Form::text('jovenes_operatividad',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}  
                    </div>
                      
                    <div class="form-group col-md-3">
                        {!!Form::label('personas_operatividad_junta','e) Cuantas personas conforman la junta directiva de la comunidad:',['class'=>'control-label'])!!}
                        {!!Form::text('personas_operatividad_junta',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}  
                    </div>
                                   
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('estorganica_dinamizaractividad')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('mujeres_operatividad')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('jovenes_operatividad')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('personas_operatividad_junta')!!}</div>
                </div>

            </div>        
        </div>

  
        <div class="col-md-12">
            <div class="row">
                <div class="form-group">
                    <label>10.2 Como evalúa las RELACIONES DE COORDINACION Y COOPERACIÓN de su comunidad CON OTRAS COMUNIDADES vecinas.</label>
                </div>
              
                <div class="form-group col-md-6">  
                    {!!Form::label('relacion_cooperacioncomunidad','a) Evaluación:',['class'=>'control-label'])!!}                  

                    {!!Form::label('relacion_cooperacioncomunidad','Son Buenas',['class'=>'control-label'])!!}
                    {!! Form::radio('relacion_cooperacioncomunidad', 'Buena', (Input::old('relacion_cooperacioncomunidad') == 'Buena')) !!}
                    {!!Form::label('relacion_cooperacioncomunidad','Son Malas',['class'=>'control-label'])!!}
                    {!! Form::radio('relacion_cooperacioncomunidad', 'Mala', (Input::old('relacion_cooperacioncomunidad') == 'Mala')) !!}   
                     {!!Form::label('relacion_cooperacioncomunidad','Son Regulares',['class'=>'control-label'])!!}
                    {!! Form::radio('relacion_cooperacioncomunidad', 'Regular', (Input::old('relacion_cooperacioncomunidad') == 'Regular')) !!}     
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('relacion_cooperacioncomunidad')!!}</div>
                </div>

                <div class="form-group col-md-6">
                   {!!Form::label('mejorar_relacioncooperacion','b) Que recomienda para mejorar las relaciones de coordinación y cooperación con otras comunidades: ',['class'=>'control-label'])!!}
                   {!!Form::text('mejorar_relacioncooperacion',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}   
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('mejorar_relacioncooperacion')!!}</div>
                </div>
            </div>        
        </div>

        <div class="col-md-12">
            <div class="row">
                <div class="form-group">
                    <label>10.3 RELACIONES DE COOPERACION al interior de la Comunidad (Actividades de cooperación, y solidaridad que se practican en la vida cotidiana de la comunidad) </label>
                </div>
                <div class="form-group col-md-6">
                    {!!Form::label('cooperacion_interiorcomunidad','a) Practicas:',['class'=>'control-label'])!!}     
                    {!!Form::label('cooperacion_interiorcomunidad','1) Faenas comunales',['class'=>'control-label'])!!}
                    {!! Form::radio('cooperacion_interiorcomunidad', 'Faenas', (Input::old('cooperacion_interiorcomunidad') == 'Buena')) !!}
                    {!!Form::label('cooperacion_interiorcomunidad','2) Ayni:',['class'=>'control-label'])!!}
                    {!! Form::radio('cooperacion_interiorcomunidad', 'Ayni', (Input::old('cooperacion_interiorcomunidad') == 'Mala')) !!}   
                     {!!Form::label('cooperacion_interiorcomunidad','3) Otras:',['class'=>'control-label'])!!}
                    {!! Form::radio('cooperacion_interiorcomunidad', 'Otras', (Input::old('cooperacion_interiorcomunidad') == 'Mala')) !!}  
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('cooperacion_interiorcomunidad')!!}</div>
                </div>

                <div class="form-group col-md-6">
                    {!!Form::label('comunidad_fortaleciendo_debilitando','Explique brevemente si estas prácticas se están fortaleciendo o debilitando, y Porque motivos:',['class'=>'control-label'])!!}
                    {!!Form::text('comunidad_fortaleciendo_debilitando',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}  
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('comunidad_fortaleciendo_debilitando')!!}</div>
                </div>
               
            </div>        
        </div>

        <div class="col-md-12">
            <div class="row">
                <div class="form-group">
                    <label>10.4 Como Evalúa las RELACIONES DE COORDINACIÓN con las instituciones del SECTOR PUBLICO: (Marcar con X la opción en cada caso, y explicar sucintamente porque su  calificación)</label>
                </div>
            
                <div class="form-group col-md-6">                
                    {!!Form::label('coordinacion_sectorpublico','a) Con el Gobierno Regional:',['class'=>'control-label'])!!}
                    {!!Form::label('coordinacion_sectorpublico','Es Buena',['class'=>'control-label'])!!}
                    {!! Form::radio('coordinacion_sectorpublico', 'Buena', (Input::old('coordinacion_sectorpublico') == 'Buena')) !!}
                    {!!Form::label('coordinacion_sectorpublico','Es Mala',['class'=>'control-label'])!!}
                    {!! Form::radio('coordinacion_sectorpublico', 'Mala', (Input::old('coordinacion_sectorpublico') == 'Mala')) !!}   
                     {!!Form::label('coordinacion_sectorpublico','Es Regular',['class'=>'control-label'])!!}
                    {!! Form::radio('coordinacion_sectorpublico', 'Regular', (Input::old('coordinacion_sectorpublico') == 'Regular')) !!}         
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('coordinacion_sectorpublico')!!}</div>
                </div>

                <div class="form-group col-md-6">
                  {!!Form::label('coordsectorpublico_porque','Porque?:',['class'=>'control-label'])!!}
                  {!!Form::text('coordsectorpublico_porque',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}  

                  <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('coordsectorpublico_porque')!!}</div>
                </div>

                <div class="form-group col-md-6">                
                    {!!Form::label('coordinacion_sectorpublico_provincial','b) Con la Municipalidad Provincial:',['class'=>'control-label'])!!}
                    {!!Form::label('coordinacion_sectorpublico_provincial','Es Buena',['class'=>'control-label'])!!}
                    {!! Form::radio('coordinacion_sectorpublico_provincial', 'Buena', (Input::old('coordinacion_sectorpublico_provincial') == 'Buena')) !!}
                    {!!Form::label('coordinacion_sectorpublico_provincial','Es Mala',['class'=>'control-label'])!!}
                    {!! Form::radio('coordinacion_sectorpublico_provincial', 'Mala', (Input::old('coordinacion_sectorpublico_provincial') == 'Mala')) !!}   
                     {!!Form::label('coordinacion_sectorpublico_provincial','Es Regular',['class'=>'control-label'])!!}
                    {!! Form::radio('coordinacion_sectorpublico_provincial', 'Regular', (Input::old('coordinacion_sectorpublico_provincial') == 'Regular')) !!}         
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('coordinacion_sectorpublico_provincial')!!}</div>
                </div>

                <div class="form-group col-md-6">
                  {!!Form::label('coordsectorpublico_provincialporque','Porque?:',['class'=>'control-label'])!!}
                  {!!Form::text('coordsectorpublico_provincialporque',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}
                  <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('coordsectorpublico_provincialporque')!!}</div>
                </div>

                 <div class="form-group col-md-6">                
                    {!!Form::label('coordinacion_sectorpublico_distrital','c) Con la Municipalidad Distrital:',['class'=>'control-label'])!!}
                    {!!Form::label('coordinacion_sectorpublico_distrital','Es Buena',['class'=>'control-label'])!!}
                    {!! Form::radio('coordinacion_sectorpublico_distrital', 'Buena', (Input::old('coordinacion_sectorpublico_distrital') == 'Buena')) !!}
                    {!!Form::label('coordinacion_sectorpublico_distrital','Es Mala',['class'=>'control-label'])!!}
                    {!! Form::radio('coordinacion_sectorpublico_distrital', 'Mala', (Input::old('coordinacion_sectorpublico_distrital') == 'Mala')) !!}   
                    {!!Form::label('coordinacion_sectorpublico_distrital','Es Regular',['class'=>'control-label'])!!}
                    {!! Form::radio('coordinacion_sectorpublico_distrital', 'Regular', (Input::old('coordinacion_sectorpublico_distrital') == 'Regular')) !!}         
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('coordinacion_sectorpublico_distrital')!!}</div>
                </div>

                <div class="form-group col-md-6">
                  {!!Form::label('coordsectorpublico_distritalporque','Porque?:',['class'=>'control-label'])!!}
                  {!!Form::text('coordsectorpublico_distritalporque',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}
                  <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('coordsectorpublico_distritalporque')!!}</div>
                </div>

                <div class="form-group col-md-6">
                  {!!Form::label('mejorar_coordinacionpublico','d) Que recomienda para mejorar las relaciones de coordinación con estas instituciones del sector público:',['class'=>'control-label'])!!}
                  {!!Form::text('mejorar_coordinacionpublico',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}
                  <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('mejorar_coordinacionpublico')!!}</div>
                </div>
            

            </div>        
        </div>

        <div class="col-md-12">
            <div class="row">
                <div class="form-group">    
                    <label>10.5 Como evalúa las RELACIONES DE COORDINACIÓN de su comunidad con EL SECTOR PRIVADO: (Marcar con una X la opción que corresponde, y explicar el por qué.</label>
                </div> 
                <div class="form-group col-md-6">                
                    {!!Form::label('coordinacion_ong','a) Con las ONGs:',['class'=>'control-label'])!!}                  
                    {!!Form::label('coordinacion_ong','a) Con el Gobierno Regional:',['class'=>'control-label'])!!}
                    {!!Form::label('coordinacion_ong','Son Buenas',['class'=>'control-label'])!!}
                    {!! Form::radio('coordinacion_ong', 'Buena', (Input::old('coordinacion_ong') == 'Buena')) !!}
                    {!!Form::label('coordinacion_ong','Son Malas',['class'=>'control-label'])!!}
                    {!! Form::radio('coordinacion_ong', 'Mala', (Input::old('coordinacion_ong') == 'Mala')) !!}   
                     {!!Form::label('coordinacion_ong','SOn Regulares',['class'=>'control-label'])!!}
                    {!! Form::radio('coordinacion_ong', 'Regular', (Input::old('coordinacion_ong') == 'Regular')) !!}         
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('coordinacion_ong')!!}</div>
                </div>

                <div class="form-group col-md-6">
                  {!!Form::label('coordinacionong_porque','Porque?:',['class'=>'control-label'])!!}
                  {!!Form::text('coordinacionong_porque',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!} 
                  <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('coordinacionong_porque')!!}</div>
                </div>

                <div class="form-group col-md-6">                
                    {!!Form::label('coordinacion_privada','b) Con empresas privada:',['class'=>'control-label'])!!}
                    {!!Form::label('coordinacion_privada','Son Buenas',['class'=>'control-label'])!!}
                    {!! Form::radio('coordinacion_privada', 'Buena', (Input::old('coordinacion_privada') == 'Buena')) !!}
                    {!!Form::label('coordinacion_privada','Son Mala',['class'=>'control-label'])!!}
                    {!! Form::radio('coordinacion_privada', 'Mala', (Input::old('coordinacion_privada') == 'Mala')) !!}   
                     {!!Form::label('coordinacion_privada','Son Regulares',['class'=>'control-label'])!!}
                    {!! Form::radio('coordinacion_privada', 'Regular', (Input::old('coordinacion_privada') == 'Regular')) !!}         
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('coordinacion_privada')!!}</div>
                </div>

                <div class="form-group col-md-6">
                  {!!Form::label('coordinacionprivada_porque','Porque?:',['class'=>'control-label'])!!}
                  {!!Form::text('coordinacionprivada_porque',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}
                  <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('coordinacionprivada_porque')!!}</div>
                </div>

                <div class="form-group col-md-6">                
                    {!!Form::label('coordinacion_iglesia','c) Con las Iglesias:',['class'=>'control-label'])!!}
                    {!!Form::label('coordinacion_iglesia','Son Buenas',['class'=>'control-label'])!!}
                    {!! Form::radio('coordinacion_iglesia', 'Buena', (Input::old('coordinacion_iglesia') == 'Buena')) !!}
                    {!!Form::label('coordinacion_iglesia','Son Mala',['class'=>'control-label'])!!}
                    {!! Form::radio('coordinacion_iglesia', 'Mala', (Input::old('coordinacion_iglesia') == 'Mala')) !!}   
                     {!!Form::label('coordinacion_iglesia','Son Regulares',['class'=>'control-label'])!!}
                    {!! Form::radio('coordinacion_iglesia', 'Regular', (Input::old('coordinacion_iglesia') == 'Regular')) !!}         
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('coordinacion_iglesia')!!}</div>
                </div>

                <div class="form-group col-md-6">
                  {!!Form::label('coordinacioniglesia_porque','Porque?:',['class'=>'control-label'])!!}
                  {!!Form::text('coordinacioniglesia_porque',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}
                  <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('coordinacioniglesia_porque')!!}</div>
                </div>
            </div>        
        </div>

        <div class="col-md-12">
            <div class="row">
                <div class="form-group ">
                    <label>10.6 INSTITUCIONES DE JÓVENES, MUJERES, Y DE LA TERCERA EDAD que funcionan en la comunidad:</label>
                </div>              

                <div class="form-group col-md-4">   
                    <div class="form-group ">   
                        {!!Form::label('Instituciones_funcionan_jovenes','a) De Jóvenes',['class'=>'control-label'])!!}                  
                    </div>
                    <div class="form-group col-md-6">                
                        {!!Form::label('Instituciones_funcionan_jovenes1','1',['class'=>'control-label'])!!}                  
                        {!!Form::text('Instituciones_funcionan_jovenes1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}
                    </div>
                    <div class="form-group col-md-6">                

                        {!!Form::label('Instituciones_funcionan_jovenes2','2',['class'=>'control-label'])!!}                  
                        {!!Form::text('Instituciones_funcionan_jovenes2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}
                    </div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('Instituciones_funcionan1')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('Instituciones_funcionan2')!!}</div>
                </div>

            
                <div class="form-group col-md-4">
                    <div class="form-group ">   
                        {!!Form::label('Instituciones_funcionan_mujeres','b) De Mujeres:',['class'=>'control-label'])!!}   
                    </div>
 
                    <div class="form-group col-md-6"> 
                        {!!Form::label('Instituciones_funcionan_mujeres1','1',['class'=>'control-label'])!!}                 
                        {!!Form::text('Instituciones_funcionan_mujeres2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}
                    </div>
                    <div class="form-group col-md-6">
                        {!!Form::label('Instituciones_funcionan_mujeres2','2',['class'=>'control-label'])!!}                  
                        {!!Form::text('Instituciones_funcionan_mujeres2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}
                    </div>
                        <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('Instituciones_funcionan_mujeres1')!!}</div>
                        <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('Instituciones_funcionan_mujeres2')!!}</div>
                </div>

                          

                <div class="form-group col-md-4"> 
                    <div class="form-group"> 
                        {!!Form::label('Instituciones_funcionan_3edad','c) De la Tercera edad:',['class'=>'control-label'])!!} 
                    </div>               
                    <div class="form-group col-md-6">                
                        {!!Form::label('Instituciones_funcionan_3edad1','1',['class'=>'control-label'])!!}                  
                        {!!Form::text('Instituciones_funcionan_3edad1',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}
                    </div>
                    <div class="form-group col-md-6">                

                        {!!Form::label('Instituciones_funcionan_3edad2','2',['class'=>'control-label'])!!}                  
                        {!!Form::text('Instituciones_funcionan_3edad2',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}
                    </div>
                        <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('Instituciones_funcionan_3edad1')!!}</div>
                        <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('Instituciones_funcionan_3edad2')!!}</div>
                </div>
               
            </div>        
        </div>

        <div class="col-md-12">
            <div class="row">
                <div class="form-group">
                    <label>10.7 DOCUMENTOS DE GESTIÓN COMUNAL con que cuenta la comunidad</label>
                </div> 
                <div class="form-group col-md-4">                
                    {!!Form::label('docgestion_comunidad','a) Cuenta con Plan de Desarrollo Comunal:',['class'=>'control-label'])!!}     
                    {!!Form::label('docgestion_comunidad','SI',['class'=>'control-label'])!!}
                    {!! Form::radio('docgestion_comunidad', 'S', (Input::old('docgestion_comunidad') == 'S')) !!}
                    {!!Form::label('docgestion_comunidad','NO:',['class'=>'control-label'])!!}
                    {!! Form::radio('docgestion_comunidad', 'N', (Input::old('docgestion_comunidad') == 'N')) !!}   
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('docgestion_comunidad')!!}</div>
                    
                </div>
                <div class="form-group col-md-4">                
                    {!!Form::label('plan_empresacomunal','b) Plan de Empresa comunal:',['class'=>'control-label'])!!}     
                    {!!Form::label('plan_empresacomunal','SI',['class'=>'control-label'])!!}
                    {!! Form::radio('plan_empresacomunal', 'S', (Input::old('plan_empresacomunal') == 'S')) !!}
                    {!!Form::label('plan_empresacomunal','NO:',['class'=>'control-label'])!!}
                    {!! Form::radio('plan_empresacomunal', 'N', (Input::old('plan_empresacomunal') == 'N')) !!}   
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('plan_empresacomunal')!!}</div>
                </div>

                <div class="form-group col-md-4">                
                    {!!Form::label('docgestion_comunidad_otro','c) Otro',['class'=>'control-label'])!!}   
                    {!! Form::radio('docgestion_comunidad_otro', 'Otro', (Input::old('docgestion_comunidad_otro') == 'Otro')) !!}
                    {!!Form::label('docgestion_comunidad_otro','Ninguno:',['class'=>'control-label'])!!}
                    {!! Form::radio('docgestion_comunidad_otro', 'Ninguno', (Input::old('docgestion_comunidad_otro') == 'Ninguno')) !!}   
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('docgestion_comunidad_otro')!!}</div>
                </div>
               
            </div>        
        </div>
        
        <div class="col-md-12">
            <div class="row">
                <div class="form-group"> 
                    <label>10.8 Programas Sociales con presencia en la comunidad (Marcar con X los programas que apoyan a la comunidad</label>
                </div>
                <div class="form-group ">
                    {!!Form::label('programa_sociales','a) Cuenta con Plan de Desarrollo Comunal:',['class'=>'control-label'])!!}     
                </div>
                <div class="form-group col-md-6">                
                    {!!Form::label('programa_sociales_qali','1) Qali Warmi:',['class'=>'control-label'])!!}
                    {!! Form::radio('programa_sociales_qali', 'Qali_Warmi', (Input::old('programa_sociales_qali') == 'Qali_Warmi')) !!}
                    {!!Form::label('programa_sociales_juntos','2) Juntos:',['class'=>'control-label'])!!}
                    {!! Form::radio('programa_sociales_juntos', 'Juntos', (Input::old('programa_sociales_juntos') == 'Juntos')) !!}  
                    {!!Form::label('programa_sociales_65','3) Pensión 65:',['class'=>'control-label'])!!}
                    {!! Form::radio('programa_sociales_65', 'Pensión_65', (Input::old('programa_sociales_65') == 'Pensión_65')) !!}
                    {!!Form::label('programa_sociales_otro','4) Otro:',['class'=>'control-label'])!!}
                    {!! Form::radio('programa_sociales_otro', 'Otro', (Input::old('programa_sociales_otro') == 'Otro')) !!}     
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('programa_sociales_qali')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('programa_sociales_juntos')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('programa_sociales_65')!!}</div>
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('programa_sociales_otro')!!}</div>
                    
                </div>
                
                <div class="form-group">  
                    {!!Form::label('problema_programas','b) Principal problema que presenta el (los) programa:',['class'=>'control-label'])!!}                  
                </div>
                <div class="form-group col-md-6">  
                    {!!Form::text('problema_programas',null ,['class'=>'form-control col-md-6','placeholder'=>'','autofocus' => '1'])!!}
                    <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('problema_programas')!!}</div>

                </div>

            </div>        
        </div>


      </div>
      </div>
    </div>
  </div>
</div>




















              

    <!--          <div class="form-group col-md-6">
              {!!Form::label('ano_registro','Año del Sistema:',['class'=>'control-label'])!!}
              {!!Form::select('ano_registro',['2016' => '2016','2015' => '2015'],null,array( 'class' => ' form-control col-md-6'))!!}
              <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('ano_registro')!!}</div>
            </div>

            <div class="form-group col-md-6">
                {!!Form::label('fecha_registro','Fecha de Registro:',['class'=>' control-label'])!!}
                {!!Form::text('fecha_registro',date("Y-m-d H:m:s"),['class'=>'form-control input-datepicker col-md-6 date-picker','placeholder'=>'Ingresa la fecha de registro'])!!}
                <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('fecha_registro')!!}</div>
            </div>
            <div class="form-group col-md-6">
                  {!!Form::label('agresion_fecha_ocurrencia','Fecha y Hora de Ocurrencia:',['class'=>'control-label'])!!}
                  {!!Form::text('agresion_fecha_ocurrencia',null,['class'=>'form-control input-datepicker col-md-6','placeholder'=>'Ingresa la fecha ocurrencia'])!!}
                  <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('agresion_fecha_ocurrencia')!!}</div>
            </div> -->