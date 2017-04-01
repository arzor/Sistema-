    <li>
    <form action="/buscador" method="POST" role="search">
        {{ csrf_field() }}
        <div class="form-group">
            <input style="width:300px;" id="search" type="text" class="form-control" placeholder="Realice su Consulta aqui">
        </div>
        <div id="container">
        </div>
        <button type="submit" class="btn btn-default col-lg-12 col-md-12 col-sm-12"><span class="glyphicon glyphicon-search"></span> Buscar</button>
    </form>
    </li>
<li><a href="/vista"><span class="glyphicon glyphicon-user"></span> Perfil de Tecnico</a></li>
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
        {{ Auth::user()->name }} {{ Auth::user()->lname }} <span class="caret"></span>
    </a>

    <ul class="dropdown-menu" role="menu">
      <li><a href="/servicio"><span class="glyphicon glyphicon-list-alt"></span>servicios</a></li>
          <li><a href="/ayuda"><span class="glyphicon glyphicon-exclamation-sign"></span>Ayuda</a></li>
          <li><a href="/contactenos/create"><span class="glyphicon glyphicon-earphone"></span>Contactenos</a>
    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
    </ul>
</li>