@extends('template/principal')
@section('contenido')
    <div class="container">
        <div class="div-form-acceso">
            <div class="form-acceso">
                <h3 class="_titulo">Inicio de sesión</h3>
                <input type="email" placeholder="example@dominio.com">
                <input type="password" placeholder="password">
                <a href="" class="btn">Ingresar</a>
                <span class="_secundario"><a href="{{ route('registro')}}">Registrarse</a></span>
            </div>
        </div>
    </div>
@endsection