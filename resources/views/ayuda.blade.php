@extends('layouts.app')

@section('content')
 <section id="content"><div class="ic"></div>
            <div class="container_12">
                <article class="a2">
                    <div class="wrapper">
                        <div class="col-11">
                            <h3>¿Cómo podemos ayudarte?</h3>
                            <div class="adress">
                            </div>
                            @if (Auth::guest())
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="widgets">
                                        <div class="container">
                                            <h2>Módulo de soporte</h2>
                                            <p>Realice click sobre el tema correspondiente:</p>
                                            <div class="panel-group" id="accordionadmin">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordionadmin" href="#collapseadmin7">Gestionar usuarios</a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseadmin7" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <h5> * Instrucciones para insertar equipos:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción del menú lateral de equipos.</li>
                                                                <li class="list-group-item">Pulse la opción de agregar.</li>
                                                                <li class="list-group-item">Rellene el formulario y luego pulse aceptar.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>El equipo debe tener una adecuada descripción para realizar una asignación de equipos adecuadas.</p>
                                                            <h5> * Instrucciones para editar equipos:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción del menú lateral de equipos.</li>
                                                                <li class="list-group-item">Pulse la opción de editar.</li>
                                                                <li class="list-group-item">Rellene el formulario solo con los campos que desee modificar y luego pulse aceptar.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>El equipo debe tener su talla correspondiente.</p>
                                                            <h5> * Instrucciones para eliminar equipos:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción del menú lateral de equipos.</li>
                                                                <li class="list-group-item">Pulse la opción de eliminar.</li>
                                                                <li class="list-group-item">Verifique la opción en la ventana emergente.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>Eliminar un equipo puede significar que un alumnno se quede sin su asignación.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordionadmin" href="#collapseadmin1">Gestionar equipos</a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseadmin1" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <h5> * Instrucciones para insertar equipos:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción del menú lateral de equipos.</li>
                                                                <li class="list-group-item">Pulse la opción de agregar.</li>
                                                                <li class="list-group-item">Rellene el formulario y luego pulse aceptar.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>El equipo debe tener una adecuada descripción para realizar una asignación de equipos adecuadas.</p>
                                                            <h5> * Instrucciones para editar equipos:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción del menú lateral de equipos.</li>
                                                                <li class="list-group-item">Pulse la opción de editar.</li>
                                                                <li class="list-group-item">Rellene el formulario solo con los campos que desee modificar y luego pulse aceptar.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>El equipo debe tener su talla correspondiente.</p>
                                                            <h5> * Instrucciones para eliminar equipos:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción del menú lateral de equipos.</li>
                                                                <li class="list-group-item">Pulse la opción de eliminar.</li>
                                                                <li class="list-group-item">Verifique la opción en la ventana emergente.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>Eliminar un equipo puede significar que un alumnno se quede sin su asignación.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            @if(Auth::user()->rol_user == 1 and Auth::user()->rol_tec == 1)
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="widgets">
                                        <div class="container">
                                            <h2>Módulo de soporte de tecnicos y usuarios</h2>
                                            <p>Realice click sobre el tema correspondiente:</p>
                                            <div class="panel-group" id="accordionadmin">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordionadmin" href="#collapseadmin7">Gestionar usuarios</a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseadmin7" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <h5> * Instrucciones para insertar equipos:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción del menú lateral de equipos.</li>
                                                                <li class="list-group-item">Pulse la opción de agregar.</li>
                                                                <li class="list-group-item">Rellene el formulario y luego pulse aceptar.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>El equipo debe tener una adecuada descripción para realizar una asignación de equipos adecuadas.</p>
                                                            <h5> * Instrucciones para editar equipos:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción del menú lateral de equipos.</li>
                                                                <li class="list-group-item">Pulse la opción de editar.</li>
                                                                <li class="list-group-item">Rellene el formulario solo con los campos que desee modificar y luego pulse aceptar.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>El equipo debe tener su talla correspondiente.</p>
                                                            <h5> * Instrucciones para eliminar equipos:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción del menú lateral de equipos.</li>
                                                                <li class="list-group-item">Pulse la opción de eliminar.</li>
                                                                <li class="list-group-item">Verifique la opción en la ventana emergente.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>Eliminar un equipo puede significar que un alumnno se quede sin su asignación.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordionadmin" href="#collapseadmin1">Gestionar equipos</a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseadmin1" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <h5> * Instrucciones para insertar equipos:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción del menú lateral de equipos.</li>
                                                                <li class="list-group-item">Pulse la opción de agregar.</li>
                                                                <li class="list-group-item">Rellene el formulario y luego pulse aceptar.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>El equipo debe tener una adecuada descripción para realizar una asignación de equipos adecuadas.</p>
                                                            <h5> * Instrucciones para editar equipos:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción del menú lateral de equipos.</li>
                                                                <li class="list-group-item">Pulse la opción de editar.</li>
                                                                <li class="list-group-item">Rellene el formulario solo con los campos que desee modificar y luego pulse aceptar.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>El equipo debe tener su talla correspondiente.</p>
                                                            <h5> * Instrucciones para eliminar equipos:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción del menú lateral de equipos.</li>
                                                                <li class="list-group-item">Pulse la opción de eliminar.</li>
                                                                <li class="list-group-item">Verifique la opción en la ventana emergente.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>Eliminar un equipo puede significar que un alumnno se quede sin su asignación.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @elseif (Auth::user()->rol_tec == 1)
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="widgets">
                                        <div class="container">
                                            <h2>Módulo de soporte de tecnicos</h2>
                                            <p>Realice click sobre el tema correspondiente:</p>
                                            <div class="panel-group" id="accordionadmin">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordionadmin" href="#collapseadmin7">Gestionar usuarios</a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseadmin7" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <h5> * Instrucciones para insertar equipos:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción del menú lateral de equipos.</li>
                                                                <li class="list-group-item">Pulse la opción de agregar.</li>
                                                                <li class="list-group-item">Rellene el formulario y luego pulse aceptar.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>El equipo debe tener una adecuada descripción para realizar una asignación de equipos adecuadas.</p>
                                                            <h5> * Instrucciones para editar equipos:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción del menú lateral de equipos.</li>
                                                                <li class="list-group-item">Pulse la opción de editar.</li>
                                                                <li class="list-group-item">Rellene el formulario solo con los campos que desee modificar y luego pulse aceptar.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>El equipo debe tener su talla correspondiente.</p>
                                                            <h5> * Instrucciones para eliminar equipos:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción del menú lateral de equipos.</li>
                                                                <li class="list-group-item">Pulse la opción de eliminar.</li>
                                                                <li class="list-group-item">Verifique la opción en la ventana emergente.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>Eliminar un equipo puede significar que un alumnno se quede sin su asignación.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordionadmin" href="#collapseadmin1">Gestionar equipos</a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseadmin1" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <h5> * Instrucciones para insertar equipos:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción del menú lateral de equipos.</li>
                                                                <li class="list-group-item">Pulse la opción de agregar.</li>
                                                                <li class="list-group-item">Rellene el formulario y luego pulse aceptar.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>El equipo debe tener una adecuada descripción para realizar una asignación de equipos adecuadas.</p>
                                                            <h5> * Instrucciones para editar equipos:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción del menú lateral de equipos.</li>
                                                                <li class="list-group-item">Pulse la opción de editar.</li>
                                                                <li class="list-group-item">Rellene el formulario solo con los campos que desee modificar y luego pulse aceptar.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>El equipo debe tener su talla correspondiente.</p>
                                                            <h5> * Instrucciones para eliminar equipos:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción del menú lateral de equipos.</li>
                                                                <li class="list-group-item">Pulse la opción de eliminar.</li>
                                                                <li class="list-group-item">Verifique la opción en la ventana emergente.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>Eliminar un equipo puede significar que un alumnno se quede sin su asignación.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @elseif(Auth::user()->rol_user == 1)
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="widgets">
                                        <div class="container">
                                            <h2>Módulo de soporte de usuarios</h2>
                                            <p>Realice click sobre el tema correspondiente:</p>
                                            <div class="panel-group" id="accordionadmin">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordionadmin" href="#collapseadmin7">Gestionar equipos</a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseadmin7" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <h5> * Instrucciones para insertar equipos:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción del menú lateral de equipos.</li>
                                                                <li class="list-group-item">Pulse la opción de agregar.</li>
                                                                <li class="list-group-item">Rellene el formulario y luego pulse aceptar.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>El equipo debe tener una adecuada descripción para realizar una asignación de equipos adecuadas.</p>
                                                            <h5> * Instrucciones para editar equipos:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción del menú lateral de equipos.</li>
                                                                <li class="list-group-item">Pulse la opción de editar.</li>
                                                                <li class="list-group-item">Rellene el formulario solo con los campos que desee modificar y luego pulse aceptar.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>El equipo debe tener su talla correspondiente.</p>
                                                            <h5> * Instrucciones para eliminar equipos:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción del menú lateral de equipos.</li>
                                                                <li class="list-group-item">Pulse la opción de eliminar.</li>
                                                                <li class="list-group-item">Verifique la opción en la ventana emergente.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>Eliminar un equipo puede significar que un alumnno se quede sin su asignación.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordionadmin" href="#collapseadmin1">Gestionar equipos</a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseadmin1" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <h5> * Instrucciones para insertar equipos:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción del menú lateral de equipos.</li>
                                                                <li class="list-group-item">Pulse la opción de agregar.</li>
                                                                <li class="list-group-item">Rellene el formulario y luego pulse aceptar.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>El equipo debe tener una adecuada descripción para realizar una asignación de equipos adecuadas.</p>
                                                            <h5> * Instrucciones para editar equipos:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción del menú lateral de equipos.</li>
                                                                <li class="list-group-item">Pulse la opción de editar.</li>
                                                                <li class="list-group-item">Rellene el formulario solo con los campos que desee modificar y luego pulse aceptar.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>El equipo debe tener su talla correspondiente.</p>
                                                            <h5> * Instrucciones para eliminar equipos:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción del menú lateral de equipos.</li>
                                                                <li class="list-group-item">Pulse la opción de eliminar.</li>
                                                                <li class="list-group-item">Verifique la opción en la ventana emergente.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>Eliminar un equipo puede significar que un alumnno se quede sin su asignación.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="widgets">
                                        <div class="container">
                                            <h2>Módulo de soporte</h2>
                                            <p>Realice click sobre el tema correspondiente:</p>
                                            <div class="panel-group" id="accordionadmin">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordionadmin" href="#collapseadmin7">Gestionar equipos</a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseadmin7" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <h5> * Instrucciones para insertar equipos:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción del menú lateral de equipos.</li>
                                                                <li class="list-group-item">Pulse la opción de agregar.</li>
                                                                <li class="list-group-item">Rellene el formulario y luego pulse aceptar.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>El equipo debe tener una adecuada descripción para realizar una asignación de equipos adecuadas.</p>
                                                            <h5> * Instrucciones para editar equipos:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción del menú lateral de equipos.</li>
                                                                <li class="list-group-item">Pulse la opción de editar.</li>
                                                                <li class="list-group-item">Rellene el formulario solo con los campos que desee modificar y luego pulse aceptar.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>El equipo debe tener su talla correspondiente.</p>
                                                            <h5> * Instrucciones para eliminar equipos:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción del menú lateral de equipos.</li>
                                                                <li class="list-group-item">Pulse la opción de eliminar.</li>
                                                                <li class="list-group-item">Verifique la opción en la ventana emergente.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>Eliminar un equipo puede significar que un alumnno se quede sin su asignación.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endif                       
                        </div>
                    </div>
                </article>
            </div>
        </section>
@endsection
