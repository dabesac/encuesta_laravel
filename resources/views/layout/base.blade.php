<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="SISTRAM" content="">
    <link rel="icon" href="/favicon.ico">
    <title>SISTEMA GOBIERNO REGIONAL</title>
    <!-- Styles -->
    @section('styles')
      {!! Html::style('assets/css/app.css') !!}      
    @show
  </head>
  <body class="glossed">

    @yield('base')

    <!-- JavaScript -->
    @section('scripts')
      {!! Html::script('assets/js/jquery.min.js') !!}
      {!! Html::script('assets/js/jquery-ui.min.js') !!}
      {!! Html::script('assets/js/bootstrap/tab.js') !!}
      {!! Html::script('assets/js/bootstrap/dropdown.js') !!}
      <!-- {!! Html::script('assets/js/bootstrap/tooltip.js') !!} -->
      {!! Html::script('assets/js/bootstrap/collapse.js') !!}
      {!! Html::script('assets/js/bootstrap/scrollspy.js') !!}
      {!! Html::script('assets/js/bootstrap/transition.js') !!}

      {!! Html::script('assets/js/plugins/jquery.pnotify.js') !!}
      {!! Html::script('assets/js/plugins/jquery.sparkline.min.js') !!}
      {!! Html::script('assets/js/plugins/mwheelIntent.js') !!}
      {!! Html::script('assets/js/plugins/mousewheel.js') !!}
      {!! Html::script('assets/js/bootstrap/tab.js') !!}
 <!--      {!! Html::script('assets/js/bootstrap/dropdown.js') !!}     
      {!! Html::script('assets/js/bootstrap/collapse.js') !!}
      {!! Html::script('assets/js/bootstrap/scrollspy.js') !!}
      {!! Html::script('assets/js/plugins/bootstrap-datepicker.js') !!}
      {!! Html::script('assets/js/bootstrap/transition.js') !!}
      {!! Html::script('assets/js/plugins/jquery.knob.js') !!}
      {!! Html::script('assets/js/plugins/jquery.flot.min.js') !!}
      {!! Html::script('assets/js/plugins/fullcalendar.js') !!}
      {!! Html::script('assets/js/plugins/chosen.jquery.min.js') !!}
      {!! Html::script('assets/js/plugins/jquery.timepicker.min.js') !!}
      {!! Html::script('assets/js/plugins/daterangepicker.js') !!}
      {!! Html::script('assets/js/plugins/colpick.js') !!}
      {!! Html::script('assets/js/plugins/moment.min.js') !!} -->
      {!! Html::script('assets/js/bootstrap/modal.js') !!}
      {!! Html::script('assets/js/plugins/raphael-min.js') !!}
      {!! Html::script('assets/js/plugins/morris-0.4.3.min.js') !!}
      {!! Html::script('assets/js/plugins/justgage.1.0.1.min.js') !!}
      {!! Html::script('assets/js/plugins/jquery.maskedinput.min.js') !!}
      {!! Html::script('assets/js/plugins/jquery.maskmoney.js') !!}
      {!! Html::script('assets/js/plugins/summernote.js') !!}
      {!! Html::script('assets/js/plugins/dropzone-amd-module.js') !!}
      {!! Html::script('assets/js/plugins/jquery.validate.min.js') !!}
      {!! Html::script('assets/js/plugins/jquery.bootstrap.wizard.min.js') !!}
      {!! Html::script('assets/js/plugins/jscrollpane.min.js') !!}
      

      <!-- {!! Html::script('assets/js/plugins/datatables/bootstrap.datatables.js') !!} -->
      <!-- {!! Html::script('assets/js/application.js') !!} -->
    <!--   {!! Html::script('assets/js/template_js/forms.js') !!} -->

    @show
  </body>
</html>