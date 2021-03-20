@extends('layouts.header')

@section('content')

<div class="row homecrl " style="height:600px!important ;">
  <div class="content-lading col-md-6 text-center"
    style="background-image: url(&quot;img/fondo.jpg&quot;); padding-top: 200px">
    <div class="title-slider" style="color:#fff">Ahorra inteligente con Possible</div>
    <a href="{{asset('ahorrainteligente')}}" class="btn btn-slider">INFORMATE COMO HACERLO</a>
  </div>
  <div class="col-md-6 p-0 m-0">
    <img src="{{ asset('img/ahorro-int.jpg') }}" style="max-height: 600px ">
  </div>
</div>

<!-- CAROUSEL -->
{{-- <div id="carouselExampleCaptions" class="carousel slide opacidad" data-ride="carousel">
  <ol class=" carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner homecrl">
    <div class="carousel-item active carousel_container crlx_parent">
      <div class="d-block caraousel_background crlx"
        style="background-image: url(&quot;img/ahorros.jpg&quot;); transform: translate(0%, -15.7377%) translate3d(0px, 15%, 0px);"
        alt="..."></div>
      <div class="carousel-caption d-none d-md-block caopleft">
        <div class="title-slider">Ahorra inteligente con Possible</div>
        <br>
        <a href="{{asset('ahorrainteligente')}}" class="btn btn-slider">Informate como hacerlo</a>
</div>
</div>
<div class="carousel-item  carousel_container crlx_parent">
  <div class="d-block caraousel_background crlx"
    style="background-image: url(&quot;img/credito.jpg&quot;); transform: translate(0%, -15.7377%) translate3d(0px, 15%, 0px);"
    alt="..."></div>
  <div class="carousel-caption d-none d-md-block caopleft">
    <div class="title-slider">¿Necesitas un credito? Aprovecha nuestras tasas</div>
    <br>
    <a href="{{asset('simuladorcredito')}}" class="btn btn-slider">Simula tu credito</a>
  </div>
</div>
<div class="carousel-item carousel_container crlx_parent">
  <div class="d-block caraousel_background crlx"
    style="background-image: url(&quot;img/FondoMachuPicchu.png&quot;); transform: translate(0%, -15.7377%) translate3d(0px, 15%, 0px);"
    alt="..."></div>
  <div class="carousel-caption d-none d-md-block caopleft">

    <br>

  </div>
</div>
</div>
<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
  <i class="fas fa-chevron-left fa-4x" style="color:#ffffff; text-shadow: 0px 2px 3px rgba(243, 7, 7, 0.493);"></i>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
  <i class="fas fa-chevron-right fa-4x" style="color:#ffffff; text-shadow: 0px 2px 3px rgba(255, 0, 0, 0.493);"></i>
  <span class="sr-only">Next</span>
</a>
</div> --}}

<main class="opacidad">
  <!-- SERVICIOS -->
  <section style="background:white; height: 300px!important;">
    <h2 style=" text-align: center; padding-top:46px!important; color: #1A4088;">Nuestros servicios</h2>
    <div class="owl-one owl-carousel owl-theme container-lg mt-3">
      <div class="item" style="height: 170px!important;">
        <div class="row carousel-caption" id="caop">
          <i class="col fas fa-piggy-bank fa-5x" style="color: #1A4088;"></i>
          <div class="col">
            <h5 class="catt">Ahorra en Possible</h5>
            <a href="{{route('ahorros')}}" class="btn btn-link" type="submit">ver más</a>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="row carousel-caption" id="caop">
          <i class="col fas fa-hand-holding-usd fa-5x" style="color: #1A4088;"></i>
          <div class="col" style="padding-top: 10px;">
            <h5 class="catt">Crédito</h5>
            <a href="{{route('seccioncreditos')}}" class="btn btn-link" type="submit">ver más</a>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="row carousel-caption" id="caop" style="padding-top: 24px;">
          <i class="col fas fa-calculator fa-5x" style="color: #1A4088;"></i>
          <div class="col" style="padding-top: 8px;">
            <h5 class="catt">Simulador</h5>
            <a href="{{route('simuladorahorro')}}" class="btn btn-link">ver más</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- PRODUCTOS-->
  <section class="seccion2">
    <h2 style="color: white;">Productos Recomendados para tí</h2>
    <h6 style=" text-align: center; padding-top:9px!important; color:white!important;">Aquí encontrarás productos a tu
      medida</h6>

    <img src="img/fondo-productos.jpg" alt="" class="fondoproductos">
    <div class="owl-two owl-carousel owl-theme" style="margin-top: 50px;">

      <div class="item" data-hash="creditos" style="height: 350px!important; ">
        <div class="card mb-3" style="height: 350px;">
          <div class="row no-gutters" style="justify-content: flex-end!important;">
            <div class="col-md-12" style="position: absolute;">
              <div class="imgcarousel" style="background-image:url(&quot;img/proprestadiario.png&quot;);"> </div>
            </div>
            <div class="col-md-12 col-lg-6">
              <div class="card-body">
                <h5 class="card-title mb-3" style="font-weight:bold;">Presta diario</h5>
                <h6 class="card-text mb-3" style="text-align: justify!important;">Puedes generar obtención de dinero de
                  una manera instantánea……</h6>
                <a class="btn btn-outline-light" href="credito.php?credito=1" type="submit">Conoce más</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="item" data-hash="creditos1" style="height: 350px!important; ">
        <div class="card mb-3" style="height:350px;">
          <div class="row no-gutters" style="justify-content: flex-end!important;">
            <div class="col-md-12" style=" position: absolute; ">
              <div class="imgcarousel card-img" style="background-image:url(&quot;img/progarantiaplafij.jpg&quot;);">
              </div>
            </div>
            <div class="col-md-12 col-lg-6">
              <div class="card-body">
                <h5 class="card-title mb-3" style="font-weight:bold;">Con garantia plazo fijo</h5>
                <h6 class="card-text mb-3" style="text-align: justify!important;">Prestamo de dinero con cuotas e
                  intereses a tu alcance……</h6>
                <a class="btn btn-outline-light" href="credito.php?credito=2" type="submit">Conoce más</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="item" data-hash="ahorros" style="height: 350px!important; ">
        <div class="card mb-3" style="height:350px;">
          <div class="row no-gutters" style="justify-content: flex-end!important;">
            <div class="col-md-12" style=" position: absolute; ">
              <div class="imgcarousel card-img" style="background-image:url(&quot;img/proahorromovil.jpg&quot;);">
              </div>
            </div>
            <div class="col-md-12  col-lg-6">
              <div class="card-body">
                <h5 class="card-title mb-3" style="font-weight:bold;">Ahorro movil</h5>
                <h6 class="card-text mb-3" style="text-align: justify!important;">Ahorra constantemente con los mejores
                  beneficios para ti……</h6>
                <a class="btn btn-outline-light" href="ahorros.php?ahorro=1" type="submit">Conoce más</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item" data-hash="ahorros1" style="height: 350px!important; ">
        <div class="card mb-3" style="height:350px;">
          <div class="row no-gutters" style="justify-content: flex-end!important;">
            <div class="col-md-12" style=" position: absolute;">
              <div class="imgcarousel card-img" style="background-image:url(&quot;img/proahorroaplafij.png&quot;);">
              </div>
            </div>
            <div class="col-md-12 col-lg-6">
              <div class="card-body">
                <h5 class="card-title mb-3" style="font-weight:bold;">Ahorro plazo fijo</h5>
                <h6 class="card-text mb-3" style="text-align: justify!important;">Ahorra a un plazo determinado con las
                  mejores tasas de interés……</h6>
                <a class="btn btn-outline-light" href="ahorros.php?ahorro=2" type="submit">Conoce más</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div style="display:flex; justify-content: flex-start!important; margin-top: 20px;">
      <a class="btn-selectpro active" style="color:white;" href="#creditos">Créditos</a>
      <a class="btn-selectpro1" style="color:white;" href="#ahorros">Ahorros</a>
    </div>


  </section>

  <!-- NOTICIAS-->
  <section
    style="height:auto; background:#F2F5F8; text-align: center; padding-bottom: 25px; padding-top:50px!important;font-size: 16px!important; color: #1A6CA7!important;">
    <h3 style="color: #1A6CA7;">Possible te informa</h3>
    <h5 style="color:   #a8a8a8;">Porque también queremos verte informado.</h5>

    <div class="container">
      <div class="card-group" id="noticias"
        style="margin: 40px 0 10px 0!important;min-height:300px!important;justify-content: center!important;">
        <div class="card">
          <img src="img/noticiaahorro.jpg" class="card-img-top" alt="..." style="height: 180px!important;">
          <div class="card-body">
            <h5 class="card-title">Conoce como ahorrar</h5>
            <p class="card-text">Conoce la mejor manera de gestionar tu dinero con possible…</p>
          </div>
          <div class="card-footer bg-transparent" style="height: 4rem; border-top: 1px solid transparent!important;">
            <a>Leer el articulo <i class="fas fa-book-reader"></i></a>
          </div>
        </div>
        <div class="card">
          <img src="img/noticiainvertir.png" class="card-img-top" alt="..." style="height: 180px!important;">
          <div class="card-body">
            <h5 class="card-title">Conoce como invertir</h5>
            <p class="card-text">Conoce la mejor manera de gestionar tu dinero con possible…</p>
          </div>
          <div class="card-footer bg-transparent" style="height: 4rem; border-top: 1px solid transparent!important;">
            <a>Leer el articulo <i class="fas fa-book-reader"></i></a>
          </div>
        </div>
        <div class="card">
          <img src="img/notciaviaje.png" class="card-img-top" alt="..." style="height: 180px!important;">
          <div class="card-body">
            <h5 class="card-title">¿Tu viaje soñado?</h5>
            <p class="card-text">El mejor destino, en ese lugar anhelado, puede ser possible…</p>
          </div>
          <div class="card-footer bg-transparent" style="height: 4rem; border-top: 1px transparent!important;">
            <a>Leer el articulo <i class="fas fa-book-reader"></i></a>
          </div>
        </div>
      </div>
      <div class="noticias">
        <a>Ver todas las noticias <i class="fas fa-caret-right"></i></a>
      </div>
    </div>

  </section>
  {{-- Seccion Facebook --}}

  @include('Posible.Section.facebook')

  <!-- aboutempresa -->

  <section
    style="position: relative; height:auto; background:#F2F5F8; text-align: center;padding-bottom: 10px; padding-top:60px!important;font-size: 16px!important; color: #1A6CA7!important;">

    <div class="aboutempresa row row-cols-lg-4 row-cols-md-3 row-cols-sm-1 row-cols-1"
      style="justify-content: center!important;">
      <div class="col">
        <a href="agencias.php"><i class="fas fa-map-marker-alt fa-6x" style="background:#F29103;"></i>Ubícanos</a>
        <span>Encuéntranos en el lugar más cercano a ti.</span>
      </div>
      <div class="col">
        <a href=""><i class="fas fa-question fa-6x" style="background:#C80065;"></i>Preguntas frecuentes</a>
        <span>Aquí puedes resolver tus dudas.</span>
      </div>
      <div class="col">
        <a href="https://api.whatsapp.com/send?phone=51960359420&amp;text=%C2%A1Bienvenido%20a Possible!"
          target="_blank"><i class="fa fa-phone fa-6x" style="background:#86BD24;"></i>Contáctanos</a>
        <span>Si tienes alguna consulta comunícanos.</span>
      </div>
      <div class="col">
        <a href=""><i class="fas fa-shield-alt fa-6x" style="background:#2d3740;"></i>Transparencia</a>
        <span>Información corroborable sobre nuestras actividades para el usuario.</span>
      </div>
    </div>

  </section>
</main>
@endsection