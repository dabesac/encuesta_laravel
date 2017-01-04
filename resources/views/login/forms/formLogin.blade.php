{!! Form::open(['route'=>'login.store', 'method' => 'POST', 'class'=>'m-t-md']) !!}
  <div class="form-group" >

  </div>
  <input type="hidden" name="_token" value={!! csrf_token() !!} >

  <div class="form-group relative-w">
    {!!Form::text('usuario',null,array('class'=>'form-control','placeholder'=>'Usuario','required'=>'required'))!!}
    <i class="fa fa-user input-abs-icon"></i>
  </div>

  <div class="form-group relative-w">
    {!!Form::password('password',array('class'=>'form-control','placeholder'=>'Password','required'=>'required'))!!}
    <i class="fa fa-lock input-abs-icon"></i>
  </div>

  <button type="submit" class="btn btn-primary  btn-rounded btn-block">
     Ingresar
    <i class="fa fa-arrow-right"></i>
  </button>

  <div class="form-group relative-w">
    <!-- <a href="forgot" class="display-block text-center m-t-md text-sm">Cambiar Contraseña?</a> -->
  </div>

  <div class="no-account-yet">
    <p class="text-center m-t-xs text-sm">2016 &copy; Gobierno Regional</p>
  </div>
{!! Form::close() !!}