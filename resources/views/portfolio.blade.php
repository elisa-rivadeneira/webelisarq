@extends('layouts.app')

@section('js')


@endsection
@section('content')


    <div class=" row col-12 p-3 justify-content-center align-items-center minh-100" >
        <div class="row col-12 justify-content-center  align-items-center  ">
            <h2>Portfolio de Sistemas Desarrollados</h2>
        </div>

        <div class="card m-4 " style="width: 18rem;">
                <img class="card-img-top" src="images/emisioncertificados.png" alt="Card image cap">
                <div class="card-body tarjetasbody">
                    Sistema que emite certificados de Protocolos de Sistema Puesta a Tierra. Se puede añadir diferentes ingenieros con sus respectivas firmas, asì como registrar tambièn diferentes telurómetros, los cuales se indican al momento de crear un nuevo certificado.
                <br>
                    <i>user: admin@admin.com<br>
                        password: password</i><br>



                </div>

            <a href="http://pozoatierra.herokuapp.com/dashboard" class="btn btn-primary">Ingresar</a>
            </div>


<div class="card m-4" style="width: 18rem;">
                <img class="card-img-top" src="images/sistemarestaurantes.png" alt="Card image cap">
                <div class="card-body tarjetasbody">
Sistema que permite el registro de nuevas órdenes, creación de menús, con entradas y platos de fondos, establecer el inventario mediante el registro de compras. Tambien tiene un panel para la cocina, en la que se ven los menus ordenados.Así mismo tiene un resumen de ventas y costos diarios.
                   <br> <i>user: admin@admin.com<br>
                        password: password</i><br>
            </div>
    <a href="http://restsys.herokuapp.com/" class="btn btn-primary">Ingresar</a>


</div>



    </div>

    <div class=" row col-12 p-3 justify-content-center align-items-center" >
        <div class="card p-5 align-center text-white bg-primary" >
          <div style="text-align: center"> Si deseas conocer más sobre los sistemas desarrollados,<br>y saber en qué modo puedo ayudarte, <br>por favor contáctame a erivadeneiraq@uni.pe</div>
        </div>
    </div>


@endsection
