<div class="col-md-6">
  <div class="panel panel-white">
    <div class="panel-heading clearfix">
      <h4 class="panel-title">Datos Personales</h4>
    </div>
    <div class="panel-body">
      <div class="form-group col-md-4">
          {!!Form::label('dni','DNI:')!!}
          {!!Form::text('dni',null,['class'=>'form-control','placeholder'=>'DNI'])!!}
          <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('dni')!!}</div>
      </div>

      <div class="form-group col-md-8">
          {!!Form::label('nombres','Nombres:')!!}
          {!!Form::text('nombres',null,['class'=>'form-control','placeholder'=>'Ingresa los Nombres del usuario'])!!}
          <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('nombres')!!}</div>
      </div>

      <div class="form-group col-md-8">
          {!!Form::label('apellidos','Apellidos:')!!}
          {!!Form::text('apellidos',null,['class'=>'form-control','placeholder'=>'Ingresa los Apellidos del usuario'])!!}
          <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('apellidos')!!}</div>
      </div>
<!-- 
      <div class="form-group col-md-4">
          {!!Form::label('iniciales','Iniciales:')!!}
          {!!Form::text('iniciales',null,['class'=>'form-control','placeholder'=>'Iniciales del Usuario'])!!}
      </div> -->

      <div class="form-group col-md-6">
          {!!Form::label('cargo','Cargo:')!!}
          {!!Form::text('cargo',null,['class'=>'form-control','placeholder'=>'Ingresa el Cargo'])!!}
      </div>

      <div class="form-group col-md-6">
          {!!Form::label('email','Correo:')!!}
          {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa el Correo del usuario'])!!}
          <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('email')!!}</div>
      </div>




    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="panel panel-white">
    <div class="panel-heading clearfix">
      <h4 class="panel-title">Datos de la Cuenta</h4>
    </div>
    <div class="panel-body">
      <div class="form-group col-md-4">
          {!!Form::label('user','Usuario:')!!}
          {!!Form::text('user',null,['class'=>'form-control','placeholder'=>'Usuario de sesion'])!!}
          <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('user')!!}</div>
      </div>

<!--       <div class="form-group col-md-4">
          {!!Form::label('password','Contraseña:')!!}
          {!!Form::text('password',null,['class'=>'form-control','placeholder'=>'Usuario de sesion'])!!}
          <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('user')!!}</div>
      </div> -->

    <!--   <div class="form-group col-md-4">
          @if (Request::path() == 'create')
            {!!Form::label('password','Contraseña:')!!}
            {!!Form::password('password',['class'=>'form-control','placeholder'=>'Contraseña'])!!}
            <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('password')!!}</div>
          @endif
      </div> -->

      <div class="form-group col-md-4">
        {!!Form::label('id_tipo_usuario','Tipo de Usuario:')!!}
        {!!Form::select('id_tipo_usuario',['1' => 'Admin','2' => 'Comunero'],null,array( 'class' => 'form-control'))!!}
        <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('id_tipo_usuario')!!}</div>
      </div>  

      <div class="form-group col-md-4">
        {!!Form::label('estado','Estado:')!!}
        {!!Form::select('estado',['1' => 'Activo','0' => 'Inactivo'],null,array( 'class' => 'form-control'))!!}
        <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('estado')!!}</div>
      </div>

      <div class="form-group col-md-8">
        {!!Form::label('descripcion','Descripción:')!!}
        {!!Form::textarea('descripcion',null,['class'=>'form-control','placeholder'=>'Ingresa una descripción'])!!}
      </div>
    </div>
  </div>
</div>

