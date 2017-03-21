@extends('layouts.app')

@section('content')
 <section id="content"><div class="ic"></div>
            <div class="container_12">
                <article class="a2">
                    <div class="wrapper">
                        <div class="col-11">
                            <h3>Direccion</h3>
                            <div class="adress">
                                <div class="dt">
                                    Estamos en la Av. Bolívar Norte Centro Comercial Los Bucares Center PB. Local 38. Valencia Edo. Carabobo Venezuela
                                </div>
                                <div class="extra-wrap">
                                    <div class="dd">Telófono: +(241) 8780432</div>
                                    <div class="dd">Móvil: +(414) 8739614 </div>
                                    <div class="dd">Correo: <a href="#">TecnologyGenerations</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <h3>Para mayor información llene el siguiente formulario</h3>
                            <form id="contact-form" name="contact-form" method="post">
                              <fieldset>
                                <label class="name">Nombre (Campo obligatorio)
                                    <input style="height:29px; padding:6px 5px;" type="text" name="fname" requiered >
                                </label>
                                <label class="phone">Teléfono
                                    <input style="height:29px; padding:6px 5px;" type="text" name="fphone" requiered  >
                                </label>
                                <label class="email">Correo (Campo obligatorio)
                                  <input style="height:29px; padding:6px 5px;" type="email" name="femail" requiered  >
                                </label>
                                <label class="message">Mensaje (Campo obligatorio)
                                  <textarea style="color: white;" requiered name="fmessage" requiered ></textarea>
                                </label>
                                <div class="btns">
                                    <a class="button" onClick="document.getElementById('contact-form').reset()">Limpiar</a>
                                    <a class="button" onClick="validateForm()">Enviar</a> 
                                </div>
                                <span style="color: green;"id="mensaje"></span><i style="color: green;" id="check" class=""> </i>
                              </fieldset>
                            </form>
                        </div>
                    </div>
                </article>
            </div>
        </section>
@endsection