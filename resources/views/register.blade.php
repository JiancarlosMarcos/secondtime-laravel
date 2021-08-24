@extends('template/principal')
@section('contenido')    
    <div class="container">
        <div class="div-form-acceso">
            <div class="form-acceso">
                <h3 class="_titulo">Registrarse</h3>
                <input type="email" placeholder="example@dominio.com">
                <input type="password" placeholder="password">
                <a href="#" class="btn">Registrarse</a>
                <span class="_secundario"><a href="{{ route('login')}}">Iniciar Sessión</a></span>
            </div>
        </div>
    </div>
@endsection