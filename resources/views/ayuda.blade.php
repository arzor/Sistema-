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
                                            <h2>Módulo de ayuda</h2>
                                            <p>Realice click sobre el tema correspondiente:</p>
                                            <div class="panel-group" id="accordionadmin">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordionadmin" href="#collapseadmin7">Usuarios</a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseadmin7" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <h5> * Instrucciones para registrarse</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción registrarse del menú.</li>
                                                                <li class="list-group-item">Seleccione como quiere registrarse como usuario.</li>
                                                                <li class="list-group-item">Rellene el formulario y luego pulse aceptar.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>Debe rellenar todos los campos obligatorios para registrarse.</p>
                                                            <h5> * Instrucciones para realizar solicitudes:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción solicitudes del menú.</li>
                                                                <li class="list-group-item">se desplegara el menu de solicitar servicios.</li>
                                                                <li class="list-group-item"> Dar Click al boton de crear y rellene el formulario con todos los datos.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>Dar los datos correctos para mejor comunicacion con los tecnicos.</p>
                                                            <h5> * Instrucciones para opciones de solicitud:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Al crear sus solicitud de servicio se mostrara esta y sus opciones a realizar.</li>
                                                                <li class="list-group-item">Tiene 3 opciones disponibles Ver, Actualizar, Eliminar.</li>
                                                                <li class="list-group-item">Selecione la que desea ejecutar.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>Al selecionar una de las opciones se le preguntara si esta seguro de esa opcion.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordionadmin" href="#collapseadmin1">Tecnicos</a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseadmin1" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <h5> * Instrucciones para registrarse:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción registrarse del menú.</li>
                                                                <li class="list-group-item">Pulse el boton de tecnicos.</li>
                                                                <li class="list-group-item">Rellene el formulario y luego pulse registrar.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>Debe rellenar todos los datos obligartios.</p>
                                                            <h5> * Instrucciones para ofrecer servicios:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción servicios del menú.</li>
                                                                <li class="list-group-item">Pulse la opción de crear servicio para ofrecer su servicio.</li>
                                                                <li class="list-group-item">Rellene el formulario con todos los datos que se piden y pulse ofrecer.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>Dar todos los datos correctos para mejor comunicacion con los usuaruarios.</p>
                                                            <h5> * Instrucciones para aceptar solicitudes:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione del menu principal alguna de las solicitudes que se muestran y presiones ver solicitud para ver los datos de esta.</li>
                                                                <li class="list-group-item">luego pulse el boton aceptar solicitud.</li>
                                                                <li class="list-group-item">Listo se le mandara un correo al usuario para confirmarle que su solicitud fue aceptada.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>Si ninguna de las solicitudes desplagadas es de su intires puede usar el buscador para mayor facilidad para aceptar servicios.</p>
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
                                            <h2>Módulo de ayuda</h2>
                                            <p>Realice click sobre el tema correspondiente:</p>
                                            <div class="panel-group" id="accordionadmin">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordionadmin" href="#collapseadmin7">Usuarios</a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseadmin7" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <h5> * Instrucciones para registrarse</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción registrarse del menú.</li>
                                                                <li class="list-group-item">Seleccione como quiere registrarse como usuario.</li>
                                                                <li class="list-group-item">Rellene el formulario y luego pulse aceptar.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>Debe rellenar todos los campos obligatorios para registrarse.</p>
                                                            <h5> * Instrucciones para realizar solicitudes:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción solicitudes del menú.</li>
                                                                <li class="list-group-item">se desplegara el menu de solicitar servicios.</li>
                                                                <li class="list-group-item"> Dar Click al boton de crear y rellene el formulario con todos los datos.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>Dar los datos correctos para mejor comunicacion con los tecnicos.</p>
                                                            <h5> * Instrucciones para opciones de solicitud:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Al crear sus solicitud de servicio se mostrara esta y sus opciones a realizar.</li>
                                                                <li class="list-group-item">Tiene 3 opciones disponibles Ver, Actualizar, Eliminar.</li>
                                                                <li class="list-group-item">Selecione la que desea ejecutar.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>Al selecionar una de las opciones se le preguntara si esta seguro de esa opcion.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordionadmin" href="#collapseadmin1">Tecnicos</a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseadmin1" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <h5> * Instrucciones para registrarse:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción registrarse del menú.</li>
                                                                <li class="list-group-item">Pulse el boton de tecnicos.</li>
                                                                <li class="list-group-item">Rellene el formulario y luego pulse registrar.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>Debe rellenar todos los datos obligartios.</p>
                                                            <h5> * Instrucciones para ofrecer servicios:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción servicios del menú.</li>
                                                                <li class="list-group-item">Pulse la opción de crear servicio para ofrecer su servicio.</li>
                                                                <li class="list-group-item">Rellene el formulario con todos los datos que se piden y pulse ofrecer.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>Dar todos los datos correctos para mejor comunicacion con los usuaruarios.</p>
                                                            <h5> * Instrucciones para aceptar solicitudes:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione del menu principal alguna de las solicitudes que se muestran y presiones ver solicitud para ver los datos de esta.</li>
                                                                <li class="list-group-item">luego pulse el boton aceptar solicitud.</li>
                                                                <li class="list-group-item">Listo se le mandara un correo al usuario para confirmarle que su solicitud fue aceptada.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>Si ninguna de las solicitudes desplagadas es de su intires puede usar el buscador para mayor facilidad para aceptar servicios.</p>
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
                                            <h2>Módulo de ayuda</h2>
                                            <p>Realice click sobre el tema correspondiente:</p>
                                            <div class="panel-group" id="accordionadmin">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordionadmin" href="#collapseadmin7">Usuarios</a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseadmin7" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <h5> * Instrucciones para registrarse</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción registrarse del menú.</li>
                                                                <li class="list-group-item">Seleccione como quiere registrarse como usuario.</li>
                                                                <li class="list-group-item">Rellene el formulario y luego pulse aceptar.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>Debe rellenar todos los campos obligatorios para registrarse.</p>
                                                            <h5> * Instrucciones para realizar solicitudes:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción solicitudes del menú.</li>
                                                                <li class="list-group-item">se desplegara el menu de solicitar servicios.</li>
                                                                <li class="list-group-item"> Dar Click al boton de crear y rellene el formulario con todos los datos.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>Dar los datos correctos para mejor comunicacion con los tecnicos.</p>
                                                            <h5> * Instrucciones para opciones de solicitud:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Al crear sus solicitud de servicio se mostrara esta y sus opciones a realizar.</li>
                                                                <li class="list-group-item">Tiene 3 opciones disponibles Ver, Actualizar, Eliminar.</li>
                                                                <li class="list-group-item">Selecione la que desea ejecutar.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>Al selecionar una de las opciones se le preguntara si esta seguro de esa opcion.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordionadmin" href="#collapseadmin1">Tecnicos</a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseadmin1" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <h5> * Instrucciones para registrarse:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción registrarse del menú.</li>
                                                                <li class="list-group-item">Pulse el boton de tecnicos.</li>
                                                                <li class="list-group-item">Rellene el formulario y luego pulse registrar.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>Debe rellenar todos los datos obligartios.</p>
                                                            <h5> * Instrucciones para ofrecer servicios:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción servicios del menú.</li>
                                                                <li class="list-group-item">Pulse la opción de crear servicio para ofrecer su servicio.</li>
                                                                <li class="list-group-item">Rellene el formulario con todos los datos que se piden y pulse ofrecer.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>Dar todos los datos correctos para mejor comunicacion con los usuaruarios.</p>
                                                            <h5> * Instrucciones para aceptar solicitudes:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione del menu principal alguna de las solicitudes que se muestran y presiones ver solicitud para ver los datos de esta.</li>
                                                                <li class="list-group-item">luego pulse el boton aceptar solicitud.</li>
                                                                <li class="list-group-item">Listo se le mandara un correo al usuario para confirmarle que su solicitud fue aceptada.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>Si ninguna de las solicitudes desplagadas es de su intires puede usar el buscador para mayor facilidad para aceptar servicios.</p>
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
                                            <h2>Módulo de ayuda</h2>
                                            <p>Realice click sobre el tema correspondiente:</p>
                                            <div class="panel-group" id="accordionadmin">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordionadmin" href="#collapseadmin7">Usuarios</a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseadmin7" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <h5> * Instrucciones para registrarse</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción registrarse del menú.</li>
                                                                <li class="list-group-item">Seleccione como quiere registrarse como usuario.</li>
                                                                <li class="list-group-item">Rellene el formulario y luego pulse aceptar.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>Debe rellenar todos los campos obligatorios para registrarse.</p>
                                                            <h5> * Instrucciones para realizar solicitudes:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción solicitudes del menú.</li>
                                                                <li class="list-group-item">se desplegara el menu de solicitar servicios.</li>
                                                                <li class="list-group-item"> Dar Click al boton de crear y rellene el formulario con todos los datos.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>Dar los datos correctos para mejor comunicacion con los tecnicos.</p>
                                                            <h5> * Instrucciones para opciones de solicitud:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Al crear sus solicitud de servicio se mostrara esta y sus opciones a realizar.</li>
                                                                <li class="list-group-item">Tiene 3 opciones disponibles Ver, Actualizar, Eliminar.</li>
                                                                <li class="list-group-item">Selecione la que desea ejecutar.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>Al selecionar una de las opciones se le preguntara si esta seguro de esa opcion.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordionadmin" href="#collapseadmin1">Tecnicos</a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseadmin1" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <h5> * Instrucciones para registrarse:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción registrarse del menú.</li>
                                                                <li class="list-group-item">Pulse el boton de tecnicos.</li>
                                                                <li class="list-group-item">Rellene el formulario y luego pulse registrar.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>Debe rellenar todos los datos obligartios.</p>
                                                            <h5> * Instrucciones para ofrecer servicios:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción servicios del menú.</li>
                                                                <li class="list-group-item">Pulse la opción de crear servicio para ofrecer su servicio.</li>
                                                                <li class="list-group-item">Rellene el formulario con todos los datos que se piden y pulse ofrecer.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>Dar todos los datos correctos para mejor comunicacion con los usuaruarios.</p>
                                                            <h5> * Instrucciones para aceptar solicitudes:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione del menu principal alguna de las solicitudes que se muestran y presiones ver solicitud para ver los datos de esta.</li>
                                                                <li class="list-group-item">luego pulse el boton aceptar solicitud.</li>
                                                                <li class="list-group-item">Listo se le mandara un correo al usuario para confirmarle que su solicitud fue aceptada.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>Si ninguna de las solicitudes desplagadas es de su intires puede usar el buscador para mayor facilidad para aceptar servicios.</p>
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
                                            <h2>Módulo de ayuda</h2>
                                            <p>Realice click sobre el tema correspondiente:</p>
                                            <div class="panel-group" id="accordionadmin">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordionadmin" href="#collapseadmin7">Usuarios</a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseadmin7" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <h5> * Instrucciones para registrarse</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción registrarse del menú.</li>
                                                                <li class="list-group-item">Seleccione como quiere registrarse como usuario.</li>
                                                                <li class="list-group-item">Rellene el formulario y luego pulse aceptar.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>Debe rellenar todos los campos obligatorios para registrarse.</p>
                                                            <h5> * Instrucciones para realizar solicitudes:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción solicitudes del menú.</li>
                                                                <li class="list-group-item">se desplegara el menu de solicitar servicios.</li>
                                                                <li class="list-group-item"> Dar Click al boton de crear y rellene el formulario con todos los datos.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>Dar los datos correctos para mejor comunicacion con los tecnicos.</p>
                                                            <h5> * Instrucciones para opciones de solicitud:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Al crear sus solicitud de servicio se mostrara esta y sus opciones a realizar.</li>
                                                                <li class="list-group-item">Tiene 3 opciones disponibles Ver, Actualizar, Eliminar.</li>
                                                                <li class="list-group-item">Selecione la que desea ejecutar.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>Al selecionar una de las opciones se le preguntara si esta seguro de esa opcion.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordionadmin" href="#collapseadmin1">Tecnicos</a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseadmin1" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <h5> * Instrucciones para registrarse:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción registrarse del menú.</li>
                                                                <li class="list-group-item">Pulse el boton de tecnicos.</li>
                                                                <li class="list-group-item">Rellene el formulario y luego pulse registrar.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>Debe rellenar todos los datos obligartios.</p>
                                                            <h5> * Instrucciones para ofrecer servicios:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione la opción servicios del menú.</li>
                                                                <li class="list-group-item">Pulse la opción de crear servicio para ofrecer su servicio.</li>
                                                                <li class="list-group-item">Rellene el formulario con todos los datos que se piden y pulse ofrecer.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>Dar todos los datos correctos para mejor comunicacion con los usuaruarios.</p>
                                                            <h5> * Instrucciones para aceptar solicitudes:</h5>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Seleccione del menu principal alguna de las solicitudes que se muestran y presiones ver solicitud para ver los datos de esta.</li>
                                                                <li class="list-group-item">luego pulse el boton aceptar solicitud.</li>
                                                                <li class="list-group-item">Listo se le mandara un correo al usuario para confirmarle que su solicitud fue aceptada.</li>
                                                            </ul>
                                                            <h5>Nota:</h5>
                                                            <p>Si ninguna de las solicitudes desplagadas es de su intires puede usar el buscador para mayor facilidad para aceptar servicios.</p>
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
