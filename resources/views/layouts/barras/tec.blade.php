<li><a href="#"><span class="glyphicon glyphicon-user"></span> Perfil de Tecnico</a></li>
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
        {{ Auth::user()->name }} {{ Auth::user()->lname }} <span class="caret"></span>
    </a>

    <ul class="dropdown-menu" role="menu">
        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
    </ul>
</li>