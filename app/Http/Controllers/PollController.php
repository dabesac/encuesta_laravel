<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Auth;
use Session;

use DB;
use Input;
use Redirect;


use App\Http\Requests;
use App\Http\Requests\EncuestaRequest;

use App\Http\Controllers\Controller;
use App\Poll;
use App\Pollquestion;
use App\Pollresults;
use App\User;

class PollController extends Controller
{


	public function index()
 	{ 	

    //dd(Auth::user()->id) ;exit();

    if((Auth::user()->id_tipo_usuario)==1){
      $poll = DB::table('poll')
      ->join('users','poll.id_usuario_at','=','users.id')
      ->select('poll.*','users.nombres as nombres','users.apellidos as apellidos')
      ->get();
    }else
    {

      $poll = DB::table('poll')
      ->join('users','poll.id_usuario_at','=','users.id')
      ->select('poll.*','users.nombres as nombres','users.apellidos as apellidos')
      ->Where('poll.id_usuario_at', '=', Auth::user()->id) 
      ->get();

      //print_r($poll);exit();

    }

    $id_tipo_usuario=Auth::user()->id_tipo_usuario;

    return  view('encuesta.index',compact('poll','id_tipo_usuario'));

 	}


  public function create()
  {   

    //   $poll= new Poll;
    //   $poll->title='Encuesta';
    //   $poll->user='Admin';
    //   $poll->id_usuario_at=Auth::user()->id;
    //   $poll->save();

    // $nroencuesta=$poll->pollid;
    //echo $nroencuesta;exit();
    return  view('encuesta.create');

  }

  public function view($id)
  {
    
    $pollresutls = DB::table('poll_resutls')
    ->Where('pollid', '=', $id) 
    ->get();



    $ar=array();
    $resu=array();

    foreach ($pollresutls as $nro)
    { 
      $qid=$nro->qid;
      $resultid=$nro->resultid;
      $respuesta=$nro->respuesta;

      $array = json_decode($respuesta, true);
      $ar[$qid]=$array; 
      $resu[$qid]=$resultid; 
    }
      
    //print_r($ar);
      $aa=collect($ar);  
      $resu=collect($resu);  

    return  view('encuesta.show',compact('pollresutls','aa','resu'));
  }

  public function update(EncuestaRequest $request, $id)
  {

    try {
      $resut=array();


      $resu=$request->resu;
      $resu=json_decode($resu, true);
      $resut=collect($resu);  
      //print_r($resut);exit();

       // $j=4;
        $unouno=array('NResolucion_inscripcion' => $request->NResolución_inscripcion, 'Resolucion_titulacion' => $request->Resolucion_titulacion,'Has_titulada' => $request->Has_titulada,'Has_propiedad' => $request->Has_propiedad,'Has_cesion' => $request->Has_cesion,'Has_sintitulacion' => $request->Has_sintitulacion );

        $unodos=array('Resolucion_inscripcion' => $request->Resolución_inscripcion, 'situacion_tramite' => $request->situacion_tramite,'Has_portitular' => $request->Has_portitular);
        $unotres=array('expediente_tramite' => $request->expediente_tramite, 'desde_anio' => $request->desde_anio,'NHas_portitular' => $request->NHas_portitular);

        //Preguntas del dos//
        $dosuno=array('total' => $request->total, 'hombres' => $request->hombres,'mujeres' => $request->mujeres);      
        $dosdos=array('Ntotal_familias' => $request->Ntotal_familias);
        $dostres=array('Ntotal_comuneros' => $request->Ntotal_comuneros,'Ncomuneros_activos' => $request->Ncomuneros_activos,'Ncomuneros_pasivos' => $request->Ncomuneros_pasivos);

        //Preguntas del tres//
        $tresuno=array('Nestudios_univconcluidos' => $request->Nestudios_univconcluidos, 'Nestudios_univcurso' => $request->Nestudios_univcurso,'Nestudios_univconcluIST' => $request->Nestudios_univconcluIST,'Nestudios_univcursoIST' => $request->Nestudios_univcursoIST,'Nestudios_tecconcluotros' => $request->Nestudios_tecconcluotros,'Nestudios_teccurso' => $request->Nestudios_teccurso);
        $tresdos=array('Nombre_institucion' => $request->Nombre_institucion);       
        $trestres=array('ciudades' => $request->ciudades,'buscar_trabajos' => $request->buscar_trabajos);       
        $trescuatro=array('posta' => $request->posta,'diasposta' => $request->diasposta,'Noposta' => $request->Noposta,'distancia' => $request->distancia,'Nkm' => $request->Nkm,'horasviaje' => $request->horasviaje,'promotor_salud' => $request->promotor_salud,'problema_posta' => $request->problema_posta,'medicina' => $request->medicina);
        $trescinco=array('residentes' => $request->residentes,'nombre_institucioncomunero1' => $request->nombre_institucioncomunero1,'nombre_institucioncomunero2' => $request->nombre_institucioncomunero2,'relacion_institucion' => $request->relacion_institucion);       

        //Preguntas del cuatro//
        $cuatrouno=array('producto_descripcion1' => $request->producto_descripcion1,'productos_principales1.1' => $request->productos_principales11,'productos_principales1.2' => $request->productos_principales12,'productos_principales1.3' => $request->productos_principales13,'producto_descripcion2' => $request->producto_descripcion2,'productos_principales2.1' => $request->productos_principales21,'productos_principales2.2' => $request->productos_principales22,'productos_principales2.3' => $request->productos_principales23,
          'producto_descripcion3' => $request->producto_descripcion3,'productos_principales3.1' => $request->productos_principales31,'productos_principales3.2' => $request->productos_principales32,'productos_principales3.3' => $request->productos_principales33);
        
        $cuatrodos=array('Problema1producir' => $request->Problema1producir, 'CProblema1producir' => $request->CProblema1producir,'SProblema1producir' => $request->SProblema1producir,
          'Problema2producir' => $request->Problema2producir, 'CProblema2producir' => $request->CProblema2producir,'SProblema2producir' => $request->SProblema2producir,
          'Problema3producir' => $request->Problema3producir, 'CProblema3producir' => $request->CProblema3producir,'SProblema3producir' => $request->SProblema3producir); 
        $cuatrotres=array('Nproductor_mercado' => $request->Nproductor_mercado, 'lugar_mercado' => $request->lugar_mercado,'feria_local1' => $request->feria_local1,'feria_local2' => $request->feria_local2,'feria_cercana1' => $request->feria_cercana1,'feria_cercana2' => $request->feria_cercana2,'intermediarios1' => $request->intermediarios1,'intermediarios2' => $request->intermediarios2);
        
        $cuatrocuatro=array(
          'Problema1vender' => $request->Problema1vender, 'CProblema1vender' => $request->CProblema1vender,'SProblema1vender' => $request->SProblema1vender,
          'Problema2vender' => $request->Problema2vender, 'CProblema2vender' => $request->CProblema2vender,'SProblema2vender' => $request->SProblema2vender,
          'Problema3vender' => $request->Problema3vender, 'CProblema3vender' => $request->CProblema3vender,'SProblema3vender' => $request->SProblema3vender,
         );
        $cuatrocinco=array(
          'recurso1' => $request->recurso1, 'recurso_formaexplotacion1' => $request->recurso_formaexplotacion1,
          'recurso2' => $request->recurso2, 'recurso_formaexplotacion2' => $request->recurso_formaexplotacion2,
          'recurso3' => $request->recurso3, 'recurso_formaexplotacion3' => $request->recurso_formaexplotacion3,        
         );
        $cuatroseis=array(
          'hierbas' => $request->hierbas, 
          'hierbas1' => $request->hierbas1, 'hierbas2' => $request->hierbas2,
          'hierbas3' => $request->hierbas3,       
         );
        $cuatrosiete=array(
          'nombre_institucion1' => $request->nombre_institucion1, 'periodicidad1' => $request->periodicidad1,
          'nombre_institucion2' => $request->nombre_institucion2, 'periodicidad2' => $request->periodicidad2,
          'nombre_institucion3' => $request->nombre_institucion3, 'periodicidad3' => $request->periodicidad3,
          'infmercado_recibida' => $request->infmercado_recibida, 'infmercado_reciba' => $request->infmercado_reciba,         
         );
        $cuatroocho=array(
          'concesion_maderables' => $request->concesion_maderables, 'concesion_nomaderables' => $request->concesion_nomaderables,
          'manejo_comunidad' => $request->manejo_comunidad      
         );
        //Preguntas del cinco//
        $cincouno=array(
          'productiva1' => $request->productiva1, 'producto1' => $request->producto1,
          'productiva2' => $request->productiva2, 'producto2' => $request->producto2,
          'productiva3' => $request->productiva3, 'producto3' => $request->producto3,
          'problema_cadenaprod' => $request->problema_cadenaprod,      
         );
        $cincodos=array(
          'asociacion1' => $request->asociacion1, 'aproductoa1' => $request->aproductoa1,
          'asociacion2' => $request->asociacion2, 'aproductoa2' => $request->aproductoa2,
          'asociacion3' => $request->asociacion3, 'aproductoa3' => $request->aproductoa3,  
          'problema_asociprod' => $request->problema_asociprod      
         );

        $cincotres=array(
          'empresacomunal1' => $request->empresacomunal1, 'empresaproducto1' => $request->empresaproducto1,
          'empresacomunal2' => $request->empresacomunal2, 'empresaproducto2' => $request->empresaproducto2,
          'empresacomunal3' => $request->empresacomunal3, 'empresaproducto3' => $request->empresaproducto3, 
          'problema_empresacomunal' => $request->problema_empresacomunal ,     
          'sunat' => $request->sunat ,     
          'noempresacomunal' => $request->noempresacomunal,
         );

        $cincocuatro=array(
          'empresamujer1' => $request->empresamujer1, 'empresamujerrubro1' => $request->empresamujerrubro1,
          'empresamujer2' => $request->empresamujer2, 'empresamujerrubro2' => $request->empresamujerrubro2,
          'empresamujer3' => $request->empresamujer3, 'empresamujerrubro3' => $request->empresamujerrubro3,         
          'limitante_asociacion' => $request->limitante_asociacion ,            
         );

        $cincocinco=array(
          'mype1' => $request->mype1, 'rubromype1' => $request->rubromype1,'registromype1' => $request->registromype1,
          'mype2' => $request->mype2, 'rubromype2' => $request->rubromype2,'registromype2' => $request->registromype2,
          'mype3' => $request->mype3, 'rubromype3' => $request->rubromype3,'registromype3' => $request->registromype3,                 
          'problema_mype' => $request->problema_mype,            
         );

        $seisuno=array(
          'institucion_asistenciatecnica1' => $request->institucion_asistenciatecnica1, 'institucion_asistenciatecnica2' => $request->institucion_asistenciatecnica2,'institucion_asistenciatecnica3' => $request->institucion_asistenciatecnica3,
          'formaasistencia1' => $request->formaasistencia1, 'formaasistencia2' => $request->formaasistencia2,'formaasistencia3' => $request->formaasistencia3,
          'deficiencia_asistenciatecnica' => $request->deficiencia_asistenciatecnica           
         );

        $seisdos=array(
          'institucion_financiera1' => $request->institucion_financiera1, 'institucion_financiera2' => $request->institucion_financiera2,'institucion_financiera3' => $request->institucion_financiera3,'deficiencia_financiero' => $request->deficiencia_financiero, 'asistencia_financiera1' => $request->asistencia_financiera1,'asistencia_financiera2' => $request->asistencia_financiera2,  'asistencia_financiera3' => $request->asistencia_financiera3    
         );

        $sieteuno=array(
          'agua' => $request->agua, 'tipo_servicio' => $request->tipo_servicio,'deficiencia_agua' => $request->deficiencia_agua 
         );

        $sietedos=array(
          'Nviviendas_agua' => $request->Nviviendas_agua, 'Nviviendas_noagua' => $request->Nviviendas_noagua
         );

        $sietetres=array(
          'desague' => $request->desague, 'deficiencia_desague' => $request->deficiencia_desague
         );

        $sietecuatro=array(
          'vivienda_electrica' => $request->vivienda_electrica, 'vivienda_noelectrica' => $request->vivienda_noelectrica, 'Nhoraselectrico' => $request->Nhoraselectrico, 'deficiencia_electrico' => $request->deficiencia_electrico
         );

        $sietecinco=array(
          'telefoniafija' => $request->telefoniafija, 'telefoniacelular' => $request->telefoniacelular, 'telefoniasatelital' => $request->telefoniasatelital, 'deficiencia_telefonia' => $request->deficiencia_telefonia
        );
        
        $sieteseis=array(
          'serviciointernet' => $request->serviciointernet, 'empresa_proveedora' => $request->empresa_proveedora, 'cabinas_comunidad' => $request->cabinas_comunidad
        );

        $sietesiete=array(
          'via_fluvial' => $request->via_fluvial, 'localidad_venta' => $request->localidad_venta, 'distancia_kmmercado' => $request->distancia_kmmercado,
          'distancia_horasmercado' => $request->distancia_horasmercado, 'via_carretera' => $request->via_carretera, 'distancia_kmcarretera' => $request->distancia_kmcarretera, 'distancia_horascarretera' => $request->distancia_horascarretera, 'tipo_via' => $request->tipo_vía        
        );

        $sieteocho=array(
          'puerto_fluvial' => $request->puerto_fluvial, 'nombre_puerto' => $request->nombre_puerto, 'pista_aterrizaje' => $request->pista_aterrizaje,
          'nombre_pista' => $request->nombre_pista, 'nombre_pista' => $request->nombre_pista,'estado_infraestuctura'=> $request->estado_infraestuctura
        );

        $ochouno=array(
          'nombre_sistriego1' => $request->nombre_sistriego1, 'tipo_sistriego1' => $request->tipo_sistriego1, 'has_irrigadas1' => $request->has_irrigadas1, 'estado_operativosist1' => $request->estado_operativosist1, 
          'nombre_sistriego2' => $request->nombre_sistriego2, 'tipo_sistriego2' => $request->tipo_sistriego2, 'has_irrigadas2' => $request->has_irrigadas2,
          'estado_operativosist2' => $request->estado_operativosist2,
          'nombre_represa1' => $request->nombre_represa1,'capacidad_represa1' => $request->capacidad_represa1,
          'nombre_represa2' => $request->nombre_represa2,'capacidad_represa2' => $request->capacidad_represa2,'deficiencia_represa' => $request->deficiencia_represa
        );

        $ochodos=array(
          'nombre_almacensilo1' => $request->nombre_almacensilo1, 'capacidadalmacenamiento_almacensilo1' => $request->capacidadalmacenamiento_almacensilo1, 'producto_almacensilo1' => $request->producto_almacensilo1, 
          'nombre_almacensilo2' => $request->nombre_almacensilo2, 'capacidadalmacenamiento_almacensilo2' => $request->capacidadalmacenamiento_almacensilo2, 'producto_almacensilo2' => $request->producto_almacensilo2       
        );

        $ochotres=array(
          'nombre_molinosgranos1' => $request->nombre_molinosgranos1, 'capacidad_molinosgranos1' => $request->capacidad_molinosgranos1, 'propietario_molinosgranos1' => $request->propietario_molinosgranos1, 
          'nombre_molinosgranos2' => $request->nombre_molinosgranos2, 'capacidad_molinosgranos2' => $request->capacidad_molinosgranos2, 'propietario_molinosgranos2' => $request->propietario_molinosgranos2        
        );

        $ochocuatro=array(
          'nombre_piscigranjas1' => $request->nombre_piscigranjas1, 'capacidad_piscigranjas1' => $request->capacidad_piscigranjas1, 'especies_piscigranjas1' => $request->especies_piscigranjas1, 'estadooperativo_piscigranjas1' => $request->estadooperativo_piscigranjas1, 'propietario_piscigranjas1' => $request->propietario_piscigranjas1,   
          'nombre_piscigranjas2' => $request->nombre_piscigranjas2, 'capacidad_piscigranjas2' => $request->capacidad_piscigranjas2, 'especies_piscigranjas2' => $request->especies_piscigranjas2, 'estadooperativo_piscigranjas2' => $request->estadooperativo_piscigranjas2, 'propietario_piscigranjas2' => $request->propietario_piscigranjas2      
        );

        $nueveuno=array(
          'problemalimite_comunidad1' => $request->problemalimite_comunidad1, 'motivoproblemalimite_comunidad1' => $request->motivoproblemalimite_comunidad1, 'problemalimite_comunidad2' => $request->problemalimite_comunidad2, 'motivoproblemalimite_comunidad2' => $request->motivoproblemalimite_comunidad2
        );

        $nuevedos=array(
          'problematerritorial_colonos1' => $request->problematerritorial_colonos1, 'motivoterritorial_colonos1' => $request->motivoterritorial_colonos1, 
          'problematerritorial_colonos2' => $request->problematerritorial_colonos2, 'motivoterritorial_colonos2' => $request->motivoterritorial_colonos2 

        );
        
        $nuevetres=array(
          'empresa_denuncio1' => $request->empresa_denuncio1, 'detalle_problemadenuncio1' => $request->detalle_problemadenuncio1,
          'empresa_denuncio2' => $request->empresa_denuncio2, 'detalle_problemadenuncio2' => $request->detalle_problemadenuncio2,
        );

        $nuevecuatro=array(
          'zonas_afectadas' => $request->zonas_afectadas, 'zonas_afectadas_km' => $request->zonas_afectadas_km, 'zonas_afectadas_causa' => $request->zonas_afectadas_causa, 'perdida_silvestre_especies' => $request->perdida_silvestre_especies, 'perdida_silvestre_lugares' => $request->perdida_silvestre_lugares,   
          'perdida_silvestre_causa' => $request->perdida_silvestre_causa, 'perdida_flora_especies' => $request->perdida_flora_especies, 'perdida_flora_lugares' => $request->perdida_flora_lugares, 'perdida_flora_causa' => $request->perdida_flora_causa, 'cuerpo_contaminacionagua' => $request->cuerpo_contaminacionagua, 'causa_contaminacion_cuerposagua' => $request->causa_contaminaciopn_cuerposagua
        );

        $diezuno=array(
          'operatividad_estorganica_eval' => $request->operatividad_estorganica_eval, 'estorganica_dinamizaractividad' => $request->estorganica_dinamizaractividad, 'mujeres_operatividad' => $request->mujeres_operatividad, 'jovenes_operatividad' => $request->jovenes_operatividad, 'personas_operatividad_junta' => $request->personas_operatividad_junta
        );

        $diezdos=array(
          'relacion_cooperacioncomunidad' => $request->relacion_cooperacioncomunidad, 'mejorar_relacioncooperacion' => $request->mejorar_relacioncooperacion, 
        );

    
        $dieztres=array(
          'cooperacion_interiorcomunidad' => $request->relacion_cooperacioncomunidad, 'comunidad_fortaleciendo_debilitando' => $request->comunidad_fortaleciendo_debilitando, 
        );

        $diezcuatro=array(
          'coordinacion_sectorpublico' => $request->coordinacion_sectorpublico, 'coordsectorpublico_porque' => $request->coordsectorpublico_porque, 
          'coordinacion_sectorpublico_provincial' => $request->coordinacion_sectorpublico_provincial, 'coordsectorpublico_provincialporque' => $request->coordsectorpublico_provincialporque, 
          'coordinacion_sectorpublico_distrital' => $request->coordinacion_sectorpublico_distrital, 'coordsectorpublico_distritalporque' => $request->coordsectorpublico_distritalporque, 'mejorar_coordinacionpublico' => $request->mejorar_coordinacionpublico
        );

        $diezcinco=array(
          'coordinacion_ong' => $request->coordinacion_ong, 'coordinacionong_porque' => $request->coordinacionong_porque, 
          'coordinacion_privada' => $request->coordinacion_privada, 'coordinacionprivada_porque' => $request->coordinacionprivada_porque, 
          'coordinacion_iglesia' => $request->coordinacion_iglesia, 'coordinacioniglesia_porque' => $request->coordinacioniglesia_porque
        );

        $diezseis=array(
          'Instituciones_funcionan_jovenes1' => $request->Instituciones_funcionan_jovenes1, 'Instituciones_funcionan_jovenes2' => $request->Instituciones_funcionan_jovenes2,
          'Instituciones_funcionan_mujeres1' => $request->Instituciones_funcionan_mujeres1, 'Instituciones_funcionan_mujeres2' => $request->Instituciones_funcionan_mujeres2,
          'Instituciones_funcionan_3edad1' => $request->Instituciones_funcionan_3edad1, 'Instituciones_funcionan_3edad2' => $request->Instituciones_funcionan_3edad2
        );

        $diezsiete=array(
          'docgestion_comunidad' => $request->docgestion_comunidad, 'plan_empresacomunal' => $request->plan_empresacomunal, 
          'docgestion_comunidad_otro' => $request->docgestion_comunidad_otro
        );

        $diezocho=array(
          'programa_sociales_qali' => $request->programa_sociales_qali, 'programa_sociales_juntos' => $request->programa_sociales_juntos, 
          'programa_sociales_65' => $request->programa_sociales_65,'programa_sociales_otro' => $request->programa_sociales_otro,'problema_programas' => $request->problema_programas
        );

        $total=array('0'=>$unouno,'1'=>$unodos,'2'=>$unotres,'3'=>$dosuno,'4'=>$dosdos,'5'=>$dostres,'6'=>$tresuno,'7'=>$tresdos,'8'=>$trestres,'9'=>$trescuatro,'10'=>$trescinco,'11'=>$cuatrouno,'12'=>$cuatrodos,'13'=>$cuatrotres,'14'=>$cuatrocuatro,'15'=>$cuatrocinco,'16'=>$cuatroseis,'17'=>$cuatrosiete,'18'=>$cuatroocho,'19'=>$cincouno,'20'=>$cincodos,'21'=>$cincotres,'22'=>$cincocuatro,'23'=>$cincocinco,'24'=>$seisuno,'25'=>$seisdos,'26'=>$sieteuno,'27'=>$sietedos,'28'=>$sietetres,'29'=>$sietecuatro,'30'=>$sietecinco,'31'=>$sieteseis,'32'=>$sietesiete,'33'=>$sieteocho,'34'=>$ochouno,'35'=>$ochodos,'36'=>$ochotres,'37'=>$ochocuatro,'38'=>$nueveuno,'39'=>$nuevedos,'40'=>$nuevetres,'41'=>$nuevecuatro,'42'=>$diezuno,'43'=>$diezdos,'44'=>$dieztres,'45'=>$diezcuatro,'46'=>$diezcinco,'47'=>$diezseis,'48'=>$diezsiete,'49'=>$diezocho);

        $position=array();
        $position[0]=1;
        $position[1]=2;
        $position[2]=4;
        $position[3]=5;
        $position[4]=7;
        $position[5]=9;
        $position[6]=10;
        $position[7]=11;
        $position[8]=12;
        $position[9]=13;
        $position[10]=14;
        $position[11]=16;
        $position[12]=17;
        $position[13]=18;
        $position[14]=21;
        $position[15]=22;
        $position[16]=27;
        $position[17]=28;
        $position[18]=29;
        $position[19]=30;
        $position[20]=31;
        $position[21]=32;
        $position[22]=33;
        $position[23]=35;
        $position[24]=36;
        $position[25]=37;
        $position[26]=38;
        $position[27]=39;
        $position[28]=42;
        $position[29]=43;
        $position[30]=44;
        $position[31]=45;
        $position[32]=48;
        $position[33]=66;
        $position[34]=49;
        $position[35]=50;
        $position[36]=51;
        $position[37]=52;
        $position[38]=53;
        $position[39]=54;
        $position[40]=55;
        $position[41]=56;
        $position[42]=58;
        $position[43]=59;
        $position[44]=60;
        $position[45]=61;
        $position[46]=62;
        $position[47]=63;
        $position[48]=64;
        $position[49]=65;
      

        //print_r($unouno);exit();


        for ($i=0; $i <50 ; $i++) { 

          Pollresults::where('resultid',$resut[$position[$i]])->update([
            //'qid' => $position[$i],
            'respuesta' =>json_encode($total[$i]),      
          //'id_usuario_at' => Auth::user()->id
          ]);

        } 

        Session::flash('success','Datos del Usuario actualizado correctamente ...!!!');
        return Redirect::to('encuesta');

      } catch (Exception $e) {
        return \Response::json(array(
          'error' => true,
          'data' => array()),
          500
        );
      }
    }

  public function editarencuesta($id)
  {
    
    $pollresutls = DB::table('poll_resutls')
    ->Where('pollid', '=', $id) 
    ->get();

    //print_r($pollresutls);

    $ar=array();
    $resu=array();

    foreach ($pollresutls as $nro)
    { 
      $qid=$nro->qid;
      $resultid=$nro->resultid;
      $respuesta=$nro->respuesta;

      $array = json_decode($respuesta, true);
      $ar[$qid]=$array; 
      $resu[$qid]=$resultid; 
    }
      
    //print_r($ar);
      $aa=collect($ar);  
      $resu=collect($resu);  

    return  view('encuesta.edit',compact('pollresutls','aa','resu'));


    

  }

  public function store(EncuestaRequest $request)
  {
    try{  
    
       
      //print_r($request->nroencuesta);exit();

      $poll= new Poll;

      $poll->title='Encuesta';
      $poll->user='Admin';
      $poll->id_usuario_at=Auth::user()->id;
      $poll->save();

      //print_r($poll);

      $pollresults= new Pollresults;
    
      //Preguntas del 1//
      $unouno=array('NResolucion_inscripcion' => $request->NResolución_inscripcion, 'Resolucion_titulacion' => $request->Resolucion_titulacion,'Has_titulada' => $request->Has_titulada,'Has_propiedad' => $request->Has_propiedad,'Has_cesion' => $request->Has_cesion,'Has_sintitulacion' => $request->Has_sintitulacion );


      $unodos=array('Resolucion_inscripcion' => $request->Resolución_inscripcion, 'situacion_tramite' => $request->situacion_tramite,'Has_portitular' => $request->Has_portitular);
      $unotres=array('expediente_tramite' => $request->expediente_tramite, 'desde_anio' => $request->desde_anio,'NHas_portitular' => $request->NHas_portitular);

      //Preguntas del dos//
      $dosuno=array('total' => $request->total, 'hombres' => $request->hombres,'mujeres' => $request->mujeres);      
      $dosdos=array('Ntotal_familias' => $request->Ntotal_familias);
      $dostres=array('Ntotal_comuneros' => $request->Ntotal_comuneros,'Ncomuneros_activos' => $request->Ncomuneros_activos,'Ncomuneros_pasivos' => $request->Ncomuneros_pasivos);

      //Preguntas del tres//
      $tresuno=array('Nestudios_univconcluidos' => $request->Nestudios_univconcluidos, 'Nestudios_univcurso' => $request->Nestudios_univcurso,'Nestudios_univconcluIST' => $request->Nestudios_univconcluIST,'Nestudios_univcursoIST' => $request->Nestudios_univcursoIST,'Nestudios_tecconcluotros' => $request->Nestudios_tecconcluotros,'Nestudios_teccurso' => $request->Nestudios_teccurso);
      $tresdos=array('Nombre_institucion' => $request->Nombre_institucion);       
      $trestres=array('ciudades' => $request->ciudades,'buscar_trabajos' => $request->buscar_trabajos);       
      $trescuatro=array('posta' => $request->posta,'diasposta' => $request->diasposta,'Noposta' => $request->Noposta,'distancia' => $request->distancia,'Nkm' => $request->Nkm,'horasviaje' => $request->horasviaje,'promotor_salud' => $request->promotor_salud,'problema_posta' => $request->problema_posta,'medicina' => $request->medicina);
      $trescinco=array('residentes' => $request->residentes,'nombre_institucioncomunero1' => $request->nombre_institucioncomunero1,'nombre_institucioncomunero2' => $request->nombre_institucioncomunero2,'relacion_institucion' => $request->relacion_institucion);       

      //Preguntas del cuatro//
      $cuatrouno=array('producto_descripcion1' => $request->producto_descripcion1,'productos_principales1.1' => $request->productos_principales11,'productos_principales1.2' => $request->productos_principales12,'productos_principales1.3' => $request->productos_principales13,'producto_descripcion2' => $request->producto_descripcion2,'productos_principales2.1' => $request->productos_principales21,'productos_principales2.2' => $request->productos_principales22,'productos_principales2.3' => $request->productos_principales23,
        'producto_descripcion3' => $request->producto_descripcion3,'productos_principales3.1' => $request->productos_principales31,'productos_principales3.2' => $request->productos_principales32,'productos_principales3.3' => $request->productos_principales33);
      
      $cuatrodos=array('Problema1producir' => $request->Problema1producir, 'CProblema1producir' => $request->CProblema1producir,'SProblema1producir' => $request->SProblema1producir,
        'Problema2producir' => $request->Problema2producir, 'CProblema2producir' => $request->CProblema2producir,'SProblema2producir' => $request->SProblema2producir,
        'Problema3producir' => $request->Problema3producir, 'CProblema3producir' => $request->CProblema3producir,'SProblema3producir' => $request->SProblema3producir); 
      $cuatrotres=array('Nproductor_mercado' => $request->Nproductor_mercado, 'lugar_mercado' => $request->lugar_mercado,'feria_local1' => $request->feria_local1,'feria_local2' => $request->feria_local2,'feria_cercana1' => $request->feria_cercana1,'feria_cercana2' => $request->feria_cercana2,'intermediarios1' => $request->intermediarios1,'intermediarios2' => $request->intermediarios2);
      
      $cuatrocuatro=array(
        'Problema1vender' => $request->Problema1vender, 'CProblema1vender' => $request->CProblema1vender,'SProblema1vender' => $request->SProblema1vender,
        'Problema2vender' => $request->Problema2vender, 'CProblema2vender' => $request->CProblema2vender,'SProblema2vender' => $request->SProblema2vender,
        'Problema3vender' => $request->Problema3vender, 'CProblema3vender' => $request->CProblema3vender,'SProblema3vender' => $request->SProblema3vender,
       );
      $cuatrocinco=array(
        'recurso1' => $request->recurso1, 'recurso_formaexplotacion1' => $request->recurso_formaexplotacion1,
        'recurso2' => $request->recurso2, 'recurso_formaexplotacion2' => $request->recurso_formaexplotacion2,
        'recurso3' => $request->recurso3, 'recurso_formaexplotacion3' => $request->recurso_formaexplotacion3,        
       );
      $cuatroseis=array(
        'hierbas' => $request->hierbas, 
        'hierbas1' => $request->hierbas1, 'hierbas2' => $request->hierbas2,
        'hierbas3' => $request->hierbas3,       
       );
      $cuatrosiete=array(
        'nombre_institucion1' => $request->nombre_institucion1, 'periodicidad1' => $request->periodicidad1,
        'nombre_institucion2' => $request->nombre_institucion2, 'periodicidad2' => $request->periodicidad2,
        'nombre_institucion3' => $request->nombre_institucion3, 'periodicidad3' => $request->periodicidad3,
        'infmercado_recibida' => $request->infmercado_recibida, 'infmercado_reciba' => $request->infmercado_reciba,         
       );
      $cuatroocho=array(
        'concesion_maderables' => $request->concesion_maderables, 'concesion_nomaderables' => $request->concesion_nomaderables,
        'manejo_comunidad' => $request->manejo_comunidad      
       );
      //Preguntas del cinco//
      $cincouno=array(
        'productiva1' => $request->productiva1, 'producto1' => $request->producto1,
        'productiva2' => $request->productiva2, 'producto2' => $request->producto2,
        'productiva3' => $request->productiva3, 'producto3' => $request->producto3,
        'problema_cadenaprod' => $request->problema_cadenaprod,      
       );
      $cincodos=array(
        'asociacion1' => $request->asociacion1, 'aproductoa1' => $request->aproductoa1,
        'asociacion2' => $request->asociacion2, 'aproductoa2' => $request->aproductoa2,
        'asociacion3' => $request->asociacion3, 'aproductoa3' => $request->aproductoa3,  
        'problema_asociprod' => $request->problema_asociprod      
       );

      $cincotres=array(
        'empresacomunal1' => $request->empresacomunal1, 'empresaproducto1' => $request->empresaproducto1,
        'empresacomunal2' => $request->empresacomunal2, 'empresaproducto2' => $request->empresaproducto2,
        'empresacomunal3' => $request->empresacomunal3, 'empresaproducto3' => $request->empresaproducto3, 
        'problema_empresacomunal' => $request->problema_empresacomunal ,     
        'sunat' => $request->sunat ,     
        'noempresacomunal' => $request->noempresacomunal,
       );

      $cincocuatro=array(
        'empresamujer1' => $request->empresamujer1, 'empresamujerrubro1' => $request->empresamujerrubro1,
        'empresamujer2' => $request->empresamujer2, 'empresamujerrubro2' => $request->empresamujerrubro2,
        'empresamujer3' => $request->empresamujer3, 'empresamujerrubro3' => $request->empresamujerrubro3,         
        'limitante_asociacion' => $request->limitante_asociacion ,            
       );

      $cincocinco=array(
        'mype1' => $request->mype1, 'rubromype1' => $request->rubromype1,'registromype1' => $request->registromype1,
        'mype2' => $request->mype2, 'rubromype2' => $request->rubromype2,'registromype2' => $request->registromype2,
        'mype3' => $request->mype3, 'rubromype3' => $request->rubromype3,'registromype3' => $request->registromype3,                 
        'problema_mype' => $request->problema_mype,            
       );

      $seisuno=array(
        'institucion_asistenciatecnica1' => $request->institucion_asistenciatecnica1, 'institucion_asistenciatecnica2' => $request->institucion_asistenciatecnica2,'institucion_asistenciatecnica3' => $request->institucion_asistenciatecnica3,
        'formaasistencia1' => $request->formaasistencia1, 'formaasistencia2' => $request->formaasistencia2,'formaasistencia3' => $request->formaasistencia3,
        'deficiencia_asistenciatecnica' => $request->deficiencia_asistenciatecnica           
       );

      $seisdos=array(
        'institucion_financiera1' => $request->institucion_financiera1, 'institucion_financiera2' => $request->institucion_financiera2,'institucion_financiera3' => $request->institucion_financiera3,'deficiencia_financiero' => $request->deficiencia_financiero, 'asistencia_financiera1' => $request->asistencia_financiera1,'asistencia_financiera2' => $request->asistencia_financiera2,  'asistencia_financiera3' => $request->asistencia_financiera3    
       );

      $sieteuno=array(
        'agua' => $request->agua, 'tipo_servicio' => $request->tipo_servicio,'deficiencia_agua' => $request->deficiencia_agua 
       );

      $sietedos=array(
        'Nviviendas_agua' => $request->Nviviendas_agua, 'Nviviendas_noagua' => $request->Nviviendas_noagua
       );

      $sietetres=array(
        'desague' => $request->desague, 'deficiencia_desague' => $request->deficiencia_desague
       );

      $sietecuatro=array(
        'vivienda_electrica' => $request->vivienda_electrica, 'vivienda_noelectrica' => $request->vivienda_noelectrica, 'Nhoraselectrico' => $request->Nhoraselectrico, 'deficiencia_electrico' => $request->deficiencia_electrico
       );

      $sietecinco=array(
        'telefoniafija' => $request->telefoniafija, 'telefoniacelular' => $request->telefoniacelular, 'telefoniasatelital' => $request->telefoniasatelital, 'deficiencia_telefonia' => $request->deficiencia_telefonia
      );
      
      $sieteseis=array(
        'serviciointernet' => $request->serviciointernet, 'empresa_proveedora' => $request->empresa_proveedora, 'cabinas_comunidad' => $request->cabinas_comunidad
      );

      $sietesiete=array(
        'via_fluvial' => $request->via_fluvial, 'localidad_venta' => $request->localidad_venta, 'distancia_kmmercado' => $request->distancia_kmmercado,
        'distancia_horasmercado' => $request->distancia_horasmercado, 'via_carretera' => $request->via_carretera, 'distancia_kmcarretera' => $request->distancia_kmcarretera, 'distancia_horascarretera' => $request->distancia_horascarretera, 'tipo_via' => $request->tipo_vía        
      );

      $sieteocho=array(
        'puerto_fluvial' => $request->puerto_fluvial, 'nombre_puerto' => $request->nombre_puerto, 'pista_aterrizaje' => $request->pista_aterrizaje,
        'nombre_pista' => $request->nombre_pista, 'nombre_pista' => $request->nombre_pista , 'estado_infraestuctura'=> $request->estado_infraestuctura     
      );

      $ochouno=array(
        'nombre_sistriego1' => $request->nombre_sistriego1, 'tipo_sistriego1' => $request->tipo_sistriego1, 'has_irrigadas1' => $request->has_irrigadas1, 'estado_operativosist1' => $request->estado_operativosist1, 
        'nombre_sistriego2' => $request->nombre_sistriego2, 'tipo_sistriego2' => $request->tipo_sistriego2, 'has_irrigadas2' => $request->has_irrigadas2,
        'estado_operativosist2' => $request->estado_operativosist2,
        'nombre_represa1' => $request->nombre_represa1,'capacidad_represa1' => $request->capacidad_represa1,
        'nombre_represa2' => $request->nombre_represa2,'capacidad_represa2' => $request->capacidad_represa2,'deficiencia_represa' => $request->deficiencia_represa
      );

      $ochodos=array(
        'nombre_almacensilo1' => $request->nombre_almacensilo1, 'capacidadalmacenamiento_almacensilo1' => $request->capacidadalmacenamiento_almacensilo1, 'producto_almacensilo1' => $request->producto_almacensilo1, 
        'nombre_almacensilo2' => $request->nombre_almacensilo2, 'capacidadalmacenamiento_almacensilo2' => $request->capacidadalmacenamiento_almacensilo2, 'producto_almacensilo2' => $request->producto_almacensilo2       
      );

      $ochotres=array(
        'nombre_molinosgranos1' => $request->nombre_molinosgranos1, 'capacidad_molinosgranos1' => $request->capacidad_molinosgranos1, 'propietario_molinosgranos1' => $request->propietario_molinosgranos1, 
        'nombre_molinosgranos2' => $request->nombre_molinosgranos2, 'capacidad_molinosgranos2' => $request->capacidad_molinosgranos2, 'propietario_molinosgranos2' => $request->propietario_molinosgranos2        
      );

      $ochocuatro=array(
        'nombre_piscigranjas1' => $request->nombre_piscigranjas1, 'capacidad_piscigranjas1' => $request->capacidad_piscigranjas1, 'especies_piscigranjas1' => $request->especies_piscigranjas1, 'estadooperativo_piscigranjas1' => $request->estadooperativo_piscigranjas1, 'propietario_piscigranjas1' => $request->propietario_piscigranjas1,   
        'nombre_piscigranjas2' => $request->nombre_piscigranjas2, 'capacidad_piscigranjas2' => $request->capacidad_piscigranjas2, 'especies_piscigranjas2' => $request->especies_piscigranjas2, 'estadooperativo_piscigranjas2' => $request->estadooperativo_piscigranjas2, 'propietario_piscigranjas2' => $request->propietario_piscigranjas2      
      );

      $nueveuno=array(
        'problemalimite_comunidad1' => $request->problemalimite_comunidad1, 'motivoproblemalimite_comunidad1' => $request->motivoproblemalimite_comunidad1, 'problemalimite_comunidad2' => $request->problemalimite_comunidad2, 'motivoproblemalimite_comunidad2' => $request->motivoproblemalimite_comunidad2
      );

      $nuevedos=array(
        'problematerritorial_colonos1' => $request->problematerritorial_colonos1, 'motivoterritorial_colonos1' => $request->motivoterritorial_colonos1, 
        'problematerritorial_colonos2' => $request->problematerritorial_colonos2, 'motivoterritorial_colonos2' => $request->motivoterritorial_colonos2 

      );
      
      $nuevetres=array(
        'empresa_denuncio1' => $request->empresa_denuncio1, 'detalle_problemadenuncio1' => $request->detalle_problemadenuncio1,
        'empresa_denuncio2' => $request->empresa_denuncio2, 'detalle_problemadenuncio2' => $request->detalle_problemadenuncio2,
      );

      $nuevecuatro=array(
        'zonas_afectadas' => $request->zonas_afectadas, 'zonas_afectadas_km' => $request->zonas_afectadas_km, 'zonas_afectadas_causa' => $request->zonas_afectadas_causa, 'perdida_silvestre_especies' => $request->perdida_silvestre_especies, 'perdida_silvestre_lugares' => $request->perdida_silvestre_lugares,   
        'perdida_silvestre_causa' => $request->perdida_silvestre_causa, 'perdida_flora_especies' => $request->perdida_flora_especies, 'perdida_flora_lugares' => $request->perdida_flora_lugares, 'perdida_flora_causa' => $request->perdida_flora_causa, 'cuerpo_contaminacionagua' => $request->cuerpo_contaminacionagua, 'causa_contaminacion_cuerposagua' => $request->causa_contaminaciopn_cuerposagua
      );

      $diezuno=array(
        'operatividad_estorganica_eval' => $request->operatividad_estorganica_eval, 'estorganica_dinamizaractividad' => $request->estorganica_dinamizaractividad, 'mujeres_operatividad' => $request->mujeres_operatividad, 'jovenes_operatividad' => $request->jovenes_operatividad, 'personas_operatividad_junta' => $request->personas_operatividad_junta
      );

      $diezdos=array(
        'relacion_cooperacioncomunidad' => $request->relacion_cooperacioncomunidad, 'mejorar_relacioncooperacion' => $request->mejorar_relacioncooperacion, 
      );

  
      $dieztres=array(
        'cooperacion_interiorcomunidad' => $request->relacion_cooperacioncomunidad, 'comunidad_fortaleciendo_debilitando' => $request->comunidad_fortaleciendo_debilitando, 
      );

      $diezcuatro=array(
        'coordinacion_sectorpublico' => $request->coordinacion_sectorpublico, 'coordsectorpublico_porque' => $request->coordsectorpublico_porque, 
        'coordinacion_sectorpublico_provincial' => $request->coordinacion_sectorpublico_provincial, 'coordsectorpublico_provincialporque' => $request->coordsectorpublico_provincialporque, 
        'coordinacion_sectorpublico_distrital' => $request->coordinacion_sectorpublico_distrital, 'coordsectorpublico_distritalporque' => $request->coordsectorpublico_distritalporque, 'mejorar_coordinacionpublico' => $request->mejorar_coordinacionpublico
      );

      $diezcinco=array(
        'coordinacion_ong' => $request->coordinacion_ong, 'coordinacionong_porque' => $request->coordinacionong_porque, 
        'coordinacion_privada' => $request->coordinacion_privada, 'coordinacionprivada_porque' => $request->coordinacionprivada_porque, 
        'coordinacion_iglesia' => $request->coordinacion_iglesia, 'coordinacioniglesia_porque' => $request->coordinacioniglesia_porque
      );

      $diezseis=array(
        'Instituciones_funcionan_jovenes1' => $request->Instituciones_funcionan_jovenes1, 'Instituciones_funcionan_jovenes2' => $request->Instituciones_funcionan_jovenes2,
        'Instituciones_funcionan_mujeres1' => $request->Instituciones_funcionan_mujeres1, 'Instituciones_funcionan_mujeres2' => $request->Instituciones_funcionan_mujeres2,
        'Instituciones_funcionan_3edad1' => $request->Instituciones_funcionan_3edad1, 'Instituciones_funcionan_3edad2' => $request->Instituciones_funcionan_3edad2
      );

      $diezsiete=array(
        'docgestion_comunidad' => $request->docgestion_comunidad, 'plan_empresacomunal' => $request->plan_empresacomunal, 
        'docgestion_comunidad_otro' => $request->docgestion_comunidad_otro
      );

      $diezocho=array(
        'programa_sociales_qali' => $request->programa_sociales_qali, 'programa_sociales_juntos' => $request->programa_sociales_juntos, 
        'programa_sociales_65' => $request->programa_sociales_65,'programa_sociales_otro' => $request->programa_sociales_otro,'problema_programas' => $request->problema_programas
      );

      $total=array('0'=>$unouno,'1'=>$unodos,'2'=>$unotres,'3'=>$dosuno,'4'=>$dosdos,'5'=>$dostres,'6'=>$tresuno,'7'=>$tresdos,'8'=>$trestres,'9'=>$trescuatro,'10'=>$trescinco,'11'=>$cuatrouno,'12'=>$cuatrodos,'13'=>$cuatrotres,'14'=>$cuatrocuatro,'15'=>$cuatrocinco,'16'=>$cuatroseis,'17'=>$cuatrosiete,'18'=>$cuatroocho,'19'=>$cincouno,'20'=>$cincodos,'21'=>$cincotres,'22'=>$cincocuatro,'23'=>$cincocinco,'24'=>$seisuno,'25'=>$seisdos,'26'=>$sieteuno,'27'=>$sietedos,'28'=>$sietetres,'29'=>$sietecuatro,'30'=>$sietecinco,'31'=>$sieteseis,'32'=>$sietesiete,'33'=>$sieteocho,'34'=>$ochouno,'35'=>$ochodos,'36'=>$ochotres,'37'=>$ochocuatro,'38'=>$nueveuno,'39'=>$nuevedos,'40'=>$nuevetres,'41'=>$nuevecuatro,'42'=>$diezuno,'43'=>$diezdos,'44'=>$dieztres,'45'=>$diezcuatro,'46'=>$diezcinco,'47'=>$diezseis,'48'=>$diezsiete,'49'=>$diezocho);

      $position=array();
      $position[0]=1;
      $position[1]=2;
      $position[2]=4;
      $position[3]=5;
      $position[4]=7;
      $position[5]=9;
      $position[6]=10;
      $position[7]=11;
      $position[8]=12;
      $position[9]=13;
      $position[10]=14;
      $position[11]=16;
      $position[12]=17;
      $position[13]=18;
      $position[14]=21;
      $position[15]=22;
      $position[16]=27;
      $position[17]=28;
      $position[18]=29;
      $position[19]=30;
      $position[20]=31;
      $position[21]=32;
      $position[22]=33;
      $position[23]=35;
      $position[24]=36;
      $position[25]=37;
      $position[26]=38;
      $position[27]=39;
      $position[28]=42;
      $position[29]=43;
      $position[30]=44;
      $position[31]=45;
      $position[32]=48;
      $position[33]=66;
      $position[34]=49;
      $position[35]=50;
      $position[36]=51;
      $position[37]=52;
      $position[38]=53;
      $position[39]=54;
      $position[40]=55;
      $position[41]=56;
      $position[42]=58;
      $position[43]=59;
      $position[44]=60;
      $position[45]=61;
      $position[46]=62;
      $position[47]=63;
      $position[48]=64;
      $position[49]=65;
    

      for ($i=0; $i <50 ; $i++) { 
        $pollresults= new Pollresults;   
        $pollresults->qid=$position[$i];
        $pollresults->respuesta=json_encode($total[$i]);
        $pollresults->pollid=$poll->pollid;
        $pollresults->id_usuario_at=Auth::user()->id;
        $pollresults->save();
      }

      //print_r($pollresults);exit();     
      Session::put('success', 'Registro creado correctamente...!!!');
      return redirect()->action('PollController@index');

    }
    catch (\Exception $e) {

      echo $e->getMessage(); 

      // return \Response::json(array(
      //   'error' => true,
      //   'data' => array()),
      //   500
      // );
    }
  }

  public function destroy($id){
   
    $Pollresults = DB::table('poll_resutls')   
    ->Where('pollid', '=', $id);
   
    if( $Pollresults->delete()){

      $Poll = Poll::find($id);
      $Poll->delete();
      Session::flash('success','Datos de la encuesta se han eliminado correctamente ...!!!');
      return Redirect::to('encuesta');
    }
  

  }
}