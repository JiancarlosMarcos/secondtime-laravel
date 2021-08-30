@extends('template/principal')
@section('contenido')  
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="{{ asset('media/4.jpg'); }}" class="d-block w-100">
            </div>
            <div class="carousel-item">
            <img src="{{ asset('media/5.jpg'); }}" class="d-block w-100">
            </div>
            <div class="carousel-item">
            <img src="{{ asset('media/6.jpg'); }}" class="d-block w-100">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <main class="">
        <div class="container py-5">
                <div class="row mb-5 pb-5">
                    <div class="col d-flex justify-content-center">
                        <div class="my-product">
                            <div class="prudct-img">
                                <img src="{{asset('media/pcgamer.png');}}" class="b-bottom">
                            </div>
                            <div class="product-contenido">
                                <div class="precio">
                                    <h4 class="precio-dsct d-flex justify-content-center"><span>s/</span>2300</h4>
                                    <h3 class="precio-final d-flex justify-content-center"><span>s/</span>2500</h4>                                
                                </div>
                                <div class="descripcion">
                                    <p>Computadora Gammer profesional con...</p>
                                </div>
                                <a href="#" class="btn-comprar btn d-flex justify-content-center">Comprar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <div class="my-product">
                            <div class="prudct-img">
                                <img src="{{asset('media/pcgamer.png');}}" class="b-bottom">
                            </div>
                            <div class="product-contenido">
                                <div class="precio">
                                    <h4 class="precio-dsct d-flex justify-content-center"><span>s/</span>2300</h4>
                                    <h3 class="precio-final d-flex justify-content-center"><span>s/</span>2500</h4>                                
                                </div>
                                <div class="descripcion">
                                    <p>Computadora Gammer profesional con...</p>
                                </div>
                                <a href="#" class="btn-comprar btn d-flex justify-content-center">Comprar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <div class="my-product">
                            <div class="prudct-img">
                                <img src="{{asset('media/pcgamer.png');}}" class="b-bottom">
                            </div>
                            <div class="product-contenido">
                                <div class="precio">
                                    <h4 class="precio-dsct d-flex justify-content-center"><span>s/</span>2300</h4>
                                    <h3 class="precio-final d-flex justify-content-center"><span>s/</span>2500</h4>                                
                                </div>
                                <div class="descripcion">
                                    <p>Computadora Gammer profesional con...</p>
                                </div>
                                <a href="#" class="btn-comprar btn d-flex justify-content-center">Comprar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <div class="my-product">
                            <div class="prudct-img">
                                <img src="{{asset('media/pcgamer.png');}}" class="b-bottom">
                            </div>
                            <div class="product-contenido">
                                <div class="precio">
                                    <h4 class="precio-dsct d-flex justify-content-center"><span>s/</span>2300</h4>
                                    <h3 class="precio-final d-flex justify-content-center"><span>s/</span>2500</h4>                                
                                </div>
                                <div class="descripcion">
                                    <p>Computadora Gammer profesional con...</p>
                                </div>
                                <a href="#" class="btn-comprar btn d-flex justify-content-center">Comprar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <div class="my-product">
                            <div class="prudct-img">
                                <img src="{{asset('media/pcgamer.png');}}" class="b-bottom">
                            </div>
                            <div class="product-contenido">
                                <div class="precio">
                                    <h4 class="precio-dsct d-flex justify-content-center"><span>s/</span>2300</h4>
                                    <h3 class="precio-final d-flex justify-content-center"><span>s/</span>2500</h4>                                
                                </div>
                                <div class="descripcion">
                                    <p>Computadora Gammer profesional con...</p>
                                </div>
                                <a href="#" class="btn-comprar btn d-flex justify-content-center">Comprar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <div class="my-product">
                            <div class="prudct-img">
                                <img src="{{asset('media/pcgamer.png');}}" class="b-bottom">
                            </div>
                            <div class="product-contenido">
                                <div class="precio">
                                    <h4 class="precio-dsct d-flex justify-content-center"><span>s/</span>2300</h4>
                                    <h3 class="precio-final d-flex justify-content-center"><span>s/</span>2500</h4>                                
                                </div>
                                <div class="descripcion">
                                    <p>Computadora Gammer profesional con...</p>
                                </div>
                                <a href="#" class="btn-comprar btn d-flex justify-content-center">Comprar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <div class="my-product">
                            <div class="prudct-img">
                                <img src="{{asset('media/pcgamer.png');}}" class="b-bottom">
                            </div>
                            <div class="product-contenido">
                                <div class="precio">
                                    <h4 class="precio-dsct d-flex justify-content-center"><span>s/</span>2300</h4>
                                    <h3 class="precio-final d-flex justify-content-center"><span>s/</span>2500</h4>                                
                                </div>
                                <div class="descripcion">
                                    <p>Computadora Gammer profesional con...</p>
                                </div>
                                <a href="#" class="btn-comprar btn d-flex justify-content-center">Comprar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <div class="my-product">
                            <div class="prudct-img">
                                <img src="{{asset('media/pcgamer.png');}}" class="b-bottom">
                            </div>
                            <div class="product-contenido">
                                <div class="precio">
                                    <h4 class="precio-dsct d-flex justify-content-center"><span>s/</span>2300</h4>
                                    <h3 class="precio-final d-flex justify-content-center"><span>s/</span>2500</h4>                                
                                </div>
                                <div class="descripcion">
                                    <p>Computadora Gammer profesional con...</p>
                                </div>
                                <a href="#" class="btn-comprar btn d-flex justify-content-center">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>   
        </div>
    </main>
@endsection
