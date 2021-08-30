@extends('template/principal')
@section('contenido')
<div class="container-fluid">
    <div class="container py-5">
        <h3>¿Cuanto pago por vender?</h3>
        <p>Para tu comodidad y para que le saques el mayor provecho a nuestro sistema tenemos los siguientes planes:</p>

        <div class="container">
            <h4>Plan Gratuito</h4>
            <p>Solo necesitas 
                <a href="{{route('registro')}}">Registrarte</a>
                y elegir el plan gratuito.            
            </p>
            <p>Beneficios:</p>
            <ul>
                <li>No pagas mensualmente, ni por subir tus productos</li>
                <li>Puedes subir hasta 5 productos al mes</li>
            </ul>
            <p>Restricciones:</p>
            <ul>
                <li>El precio de los productos que subes no pueden superara los 500 soles.</li>
            </ul>
        </div>
        <div class="container">
            <h4>Plan Premium</h4>
            <p>Solo necesitas 
                <a href="{{route('registro')}}">Registrarte</a>
                y elegir el plan premium.            
            </p>
            <p>Beneficios:</p>
            <ul>
                <li>Puedes subir hasta 15 productos al mes</li>
            </ul>
            <p>Restricciones:</p>
            <ul>
                <li>El precio de los productos que subes no pueden superara los 1500 soles.</li>
            </ul>
        </div>
        <div class="container">
            <h4>Plan Empresarial</h4>
            <p>Solo necesitas 
                <a href="{{route('registro')}}">Registrarte</a>
                y elegir el plan Empresarial.            
            </p>
            <p>Beneficios:</p>
            <ul>
                <li>Puedes subir todos los productos que quieras</li>
                <li>No pagas mensualidad, solo una comision del 13% del precio final del producto publicado</li>
            </ul>
            <p>Restricciones:</p>
            <ul>
                <li>El costo minimo de cada producto subido debe ser mayor a 200 soles.</li>
            </ul>
        </div>
    </div>

</div>
@endsection