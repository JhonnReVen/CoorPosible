@extends('layouts.header')

@section('content')
<div class="home opacidad">
  <div class="home_background_container prlx_parent">
    <div class="home_background prlx"
      style="background-image: url(&quot;img/grupopossible.jpg&quot;); transform: translate(0%, -15.7377%) translate3d(0px, 0px, 0px);">
    </div>
  </div>
  <div class="bloquelugar">
    <h2>
      <center>Grupo<strong></strong> Possible</center>
    </h2>
  </div>
</div>

<main class="opacidad opacidad2 grupop">
  <!-- Clientes -->

  <div class="container-md descripcion">
    <div class="card-group">
      <!--         <div class="col-lg-4 col-md">
         -->
      <div class="card bg-transparent border-light mb-3">
        <div class="card-header mt-3">
          <i class="fas fa-praying-hands fa-2x mb-3"></i>
          <h4> UNA CORPORACIÓN PARA TÍ</h4>
        </div>
        <!-- <center style="background-color: #ffff;"><img src="img/quienessomos.png" style="width:85%; height:179px; margin-top: 25px;"></center> -->
        <div class="card-body">
          <p class="card-text" style="padding: 0% 4% 0% 4%;">
            Somos un grupo de empresas de capitales peruanos con el propósito de incursionar en diversos sectores del
            mercado. Nos encontramos en constante crecimiento y desarrollo aplicando los más altos estándares de trabajo
            para brindar la mejor atención, servicios y productos.
          </p>
        </div>

        <div class="img-corporacion" style="background-image: url(&quot;img/grupo-corporacion.jpg&quot;);"></div>

        <div class="card card-intern mb-3 bg-transparent border-light col-sm-10 col-md-8 col-lg-6"
          style="min-width:auto!important; position: absolute; z-index: 100; bottom: 10px; align-self: center;">
          <div class="card-header mt-4">
            <i class="fas fa-trophy fa-2x mb-3"></i>
            <h4 class="title-intern"> ASEGURAMOS TU BENEFICIO</h4>
          </div>
          <!-- <center style="background-color: #ffff;"><img src="img/mision.png" style="width: 85%; height: 179px;margin-top: 25px;"></center> -->
          <div class="card-body">
            <p class="card-text" style=" padding: 0% 4% 0% 4%;">
              Contamos con el respaldo de grupo Possible, al que tenemos el orgullo de pertenecer, para brindar las
              mejores tasas y beneficios económicos.
            </p>
          </div>
        </div>

      </div>
      <!--         </div>
         -->
      <!--         <div class="col-lg-4 col-md">
         -->

    </div>
  </div>


  <section class="grupo-socios"
    style=" background-image: url(&quot;img/grupo-fondosocios.jpg&quot;)!important; height: 800px !important;">
    <div class="card-header" style="background: transparent;">
      <h4> Nuestros socios</h4>
    </div>

    <div class="wrapper-socios">

      <div class="owl-grsocios owl-carousel owl-theme container">
        <!-- socio2 -->
        <div class="item">
          <div class="card mb-3">
            <div class="col-lg-12 contImgSocios">
              <img class="card-img-top" src="img/logo-skies.png" alt="">
            </div>
            <div class="col-lg-12 contText">
              <div class="card-body">
                <h5 class="card-title mb-4" style="font-weight:bold;"><i class="fas fa-user-friends"></i> Sector
                  recursos</h5>
                <div class="card-text">
                  Plataforma de beneficios y negocios para generar rentabiliadad.
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- socio3 -->
        <div class="item">
          <div class="card mb-3">
            <div class="col-lg-12 contImgSocios">
              <img class="card-img-top" src="img/logo-lumar.png" alt="">
            </div>
            <div class="col-lg-12 contText">
              <div class="card-body">
                <h5 class="card-title mb-4" style="font-weight:bold;"><i class="fas fa-tshirt"></i> Sector textilería
                </h5>
                <div class="card-text">
                  Servicios de confexión de prendas de vestir, estandarizado y a medida.
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- socio4 -->
        <div class="item">
          <div class="card mb-3">
            <div class="col-lg-12 contImgSocios">
              <img class="card-img-top" src="img/logo-shahuindo1.png" alt="">
            </div>
            <div class="col-lg-12 contText">
              <div class="card-body">
                <h5 class="card-title mb-4" style="font-weight:bold;"><i class="fas fa-snowplow"></i> Sector comercio
                </h5>
                <div class="card-text">
                  Servicio de venta de cosas
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- socio5 -->
        <div class="item">
          <div class="card mb-3">
            <div class="col-lg-12 contImgSocios">
              <img class="card-img-top" src="img/logo-roman.png" alt="">
            </div>
            <div class="col-lg-12 contText">
              <div class="card-body">
                <h5 class="card-title mb-4" style="font-weight:bold;"><i class="fas fa-utensils"></i> Sector alimentos
                </h5>
                <div class="card-text">
                  Servicio restaurante de comida por región.
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- -->
        <div class="item">
          <div class="card mb-3">
            <div class="col-lg-12 contImgSocios">
              <img class="card-img-top" src="img/logo-sand.png" alt="">
            </div>
            <div class="col-lg-12 contText">
              <div class="card-body">
                <h5 class="card-title mb-4" style="font-weight:bold;"><i class="fas fa-utensils"></i> Sector delivery
                </h5>
                <div class="card-text">
                  Servicio de reparto de cosas
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>
  </section>


</main>
@endsection