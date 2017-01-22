<li>
    <form class="navbar-form navbar-static-top">
        <div class="form-group">
            <input style="width:300px;" id="search" type="text" class="form-control" placeholder="Realice su Consulta aqui">
        </div>
        <div id="container">
        </div>
        <button type="submit" class="btn btn-default col-lg-12 col-md-12 col-sm-12"><span class="glyphicon glyphicon-search"></span> Buscar</button>
    </form>
</li>
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
        <span class="glyphicon glyphicon-cog"></span> {{ Auth::user()->name }} {{ Auth::user()->lname }} <span class="caret"></span>
    </a>

    <ul class="dropdown-menu" role="menu">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Perfil</a></li>
        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
    </ul>
</li>