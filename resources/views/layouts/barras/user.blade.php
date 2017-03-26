
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
        <span class="glyphicon glyphicon-cog"></span> {{ Auth::user()->name }} {{ Auth::user()->lname }} <span class="caret"></span>
    </a>

    <ul class="dropdown-menu" role="menu">
        <li><a href="/vista"><span class="glyphicon glyphicon-user"></span>Perfil</a></li>
        <li><a href="/tecnico"><span class="glyphicon glyphicon-book"></span>solicitudes</a></li>
          <li><a href="/"><span class="glyphicon glyphicon-wrench"></span>opciones</a></li>
          <li><a href="/ayuda"><span class="glyphicon glyphicon-exclamation-sign"></span>Ayuda</a></li>
          <li><a href="/contactenos/create"><span class="glyphicon glyphicon-earphone"></span>Contactenos</a></li>
        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
    </ul>

</li>