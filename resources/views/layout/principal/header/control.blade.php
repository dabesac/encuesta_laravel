<div class="page-header">
  <div class="header-links hidden-xs">
<!--       <div class="dropdown hidden-sm hidden-xs">
        <a href="#" data-toggle="dropdown" class="header-link"><i class="fa fa-bolt"></i> Alertas Usuario
          <span class="badge alert-animated">
            
          </span>
        </a>
        <ul class="dropdown-menu dropdown-inbar dropdown-wide">
        
        </ul>
      </div> -->

    <div class="dropdown">
      <a href="#" class="header-link clearfix" data-toggle="dropdown">
        <div class="avatar">
          <img src="/assets/images/{!! Auth::user()->user !!}.jpg"   alt="">
        </div>
        <div class="user-name-w">
          {!! Auth::user()->nombres !!} {!! Auth::user()->apellidos !!} <i class="fa fa-caret-down"></i>
        </div>
      </a>
      <ul class="dropdown-menu dropdown-inbar">
     
        @if ((Auth::user()->id_tipo_usuario)==1)
          <li><a href="/usuario"><i class="fa fa-cog"></i> Usuarios</a></li>
        @endif        
        <li><a href="/encuesta"><i class="fa fa-cog"></i> Encuestas</a></li>
        <li><a href="/logout"><i class="fa fa-power-off"></i> Salir</a></li>
      </ul>
    </div>
  </div>

  <h1 class="panel-title">Encuesta Gobierno Regional Pasco</h1>

    <!--    <a class="logo hidden-xs" href=""><i class="fa fa-cogs"></i></a> -->
  <h1>
   
  </h1>
  
   
</div>