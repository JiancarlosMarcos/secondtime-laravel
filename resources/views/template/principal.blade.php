<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css'); }}">
    <title>plantilla maestra</title>
</head>
<body>
<header class="my-header bg-principal">
<div class="container p-y-2 grid gap-1 col-12">
    <div class="span-2 span-md-3 span-sm-12 span-pk-12">
        <a href="{{ route('home')}}">SecondTime</a>
    </div>
    <form action="" class="span-7 span-md-6 span-sm-12 span-pk-12">
        <input type="search" placeholder="buscar...">
        <buttom type="submit" value="buscar">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"> <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg>            
        </buttom>
    </form>
    <div class="span-3 span-md-3 span-sm-12 span-pk-12">
        <a href="{{ route('login')}}" class="btn my-btn-s m-x">Acceso</a>
        <a href="{{ route('registro')}}" class="btn my-btn-p bg-white m-x">Registrate</a>
    </div>
</div>
</header>
    <nav class="my-nav bg-white">
        <div class="container p-y-1">
            <a href="{{ route('tienda')}}" class="">Hogar</a>
            <a href="{{ route('tienda')}}" class="p-x">Electrodomesticos</a>
            <a href="{{ route('tienda')}}" class="p-x">Electronica</a>
            <a href="{{ route('tienda')}}" class="p-x">Gadgets</a>
            <a href="{{ route('tienda')}}" class="p-x">Clulares</a>
            <a href="{{ route('tienda')}}" class="p-x">Computadoras</a>
            <a href="{{ route('tienda')}}" class="p-x">Ropa</a>
            <a href="{{ route('tienda')}}" class="p-x">Libros</a>
        </div>
    </nav>    
    <div class="container-fluid">
        @yield('contenido')
    </div>
    <footer>
        <div class="my-footer container-fluid">
            <div class="d-flex justify-content-center b-bottom">
                <a href="{{ route('home')}}">Home</a>
                <a href="">Preguntas frecuentes</a>
                <a href="#">Politicas de privacidad</a>
                <a href="{{ route('terminos')}}">Terminos y condiciones</a>
                <a href="#">Contacto</a>
            </div>
            <div class="d-flex justify-content-center">
                <span>© 2021 SecondTime</span>
            </div>
        </div>
    </footer>
</body>
</html>