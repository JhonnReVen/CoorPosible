@extends('layouts.header')

@section('content')
<main class="opacidad opacidad2">
  <!DOCTYPE html>
  <div class="home">
    <div class="home_background_container prlx_parent">
      <div class="home_background prlx"
        style="background-image: url(&quot;img/nosotros.jpg&quot;); transform: translate(0%, -15.7377%) translate3d(0px, 0px, 0px);">
      </div>
    </div>
    <div class="bloquelugar">
      <h2>
        <center><strong></strong>Nosotros</center>
      </h2>
    </div>
  </div>
  <!-- PAGINA NOSOTROS -->

  <div class="accordion container-xs container-fluid" id="accordionNosotros" style="font-size: 16px;">

    <div id="collapseNosotros" class="collapse show " aria-labelledby="headingTwo" data-parent="#accordionNosotros">

      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

        <li class="nav-item" style="background-color: #f0f5ff;">
          <a class="nav-link  active btn-light" id="pills-contact-tab" data-toggle="pill" href="#pills-contact2"
            role="tab" aria-controls="pills-contact2" aria-selected="true">Propósito</a>
        </li>

        <li class="nav-item" style="background-color: #f0f5ff;">
          <a class="nav-link  btn-light" id="pills-home-tab" data-toggle="pill" href="#pills-home2" role="tab"
            aria-controls="pills-home2" aria-selected="false">Valores</a>
        </li>
        <!-- <li class="nav-item" style="background-color: #f0f5ff;">
                                   <a class="nav-link  btn-light" id="pills-profile-tab" data-toggle="pill" href="#pills-profile2" role="tab" aria-controls="pills-profile2" aria-selected="false"><strong>Requisitos</strong></a>
                                 </li>                           -->
      </ul>
      <div class="tab-content container" id="pills-tabContent">

        <div class="tab-pane fade active show" id="pills-contact2" role="tabpanel" aria-labelledby="pills-contact-tab">
          <!-- <div class="container-sm container-md container-lg wealing"> -->
          <div class="card-group">

            <!--         <div class="col-lg-4 col-md">
                               -->
            <div class="card card mb-3 bg-transparent border-light mb-3">
              <div class="card-header bg-transparent  text-center">
                <h5 style="color: #1a6ca7;"><i class="fas fa-users"></i> ¿Quienes somos?</h5>
              </div>
              <center style="background-color: #ffff;"><img src="img/quienessomos.png"
                  style="width:85%; height:179px; margin-top: 25px;"></center>
              <div class="card-body" style="background-color: #ffff;min-height:8rem; text-align: justify;">
                <p class="card-text" style="padding: 0% 4% 0% 4%;">
                  Somos la mejor opción de Ahorros en el país. Aseguramos brindar los mejores resultados a nuestros
                  clientes, además apoyamos el emprendimiento con nuestra presencia en el sector estudiantil y muy
                  pronto estaremos lanzando nuestro plan de ayuda social.
                </p>
              </div>
              <div class="card-footer bg-transparent " style="height: 3rem;">
              </div>
            </div>
            <!--         </div>
                               -->
            <!--         <div class="col-lg-4 col-md">
                               -->
            <div class="card card mb-3 bg-transparent border-light">
              <div class="card-header bg-transparent  text-center">
                <h5 style="color: #1a6ca7;"><i class="fas fa-graduation-cap"></i> Misión</h5>
              </div>
              <center style="background-color: #ffff;"><img src="img/mision.png"
                  style="width: 85%; height: 179px;margin-top: 25px;"></center>
              <div class="card-body" style="text-align: justify;background-color: #ffff;min-height: 8rem;">
                <p class="card-text" style=" padding: 0% 4% 0% 4%;">Asegurar un crecimiento mutuo entre nosotros y
                  nuestros clientes, asegurando que los resultados satisfagan a ambas partes.</p>
              </div>
              <div class="card-footer bg-transparent " style="height: 3rem;">
              </div>
            </div>
            <!--         </div>
                               -->
            <!--         <div class="col-lg-4 col-md">
                               -->
            <div class="card card mb-3 bg-transparent border-light">
              <div class="card-header bg-transparent text-center ">
                <h5 style="color: #1a6ca7;"><i class="fas fa-binoculars"></i> Visión</h5>
              </div>
              <center style="background-color: #ffff;"><img class="imgc" id="imgc" src="img/vision.png"></center>
              <div class="card-body" style="text-align: justify;background-color: #ffff;min-height: 8rem;">
                <p class="card-text textwth" id="textwth">Ser reconocidos como la entidad financiera número uno y la más
                  importante en ahorros a plazo fijo del Perú.</p>
              </div>
              <div class="card-footer bg-transparent " style="height: 3rem;">
              </div>
            </div>
            <!--         </div>
                               -->

          </div>
          <!-- </div> -->
        </div>

        <div class="tab-pane fade" id="pills-home2" role="tabpanel" aria-labelledby="pills-home-tab">
          <div class="wrapper container">
            <ul class="list-group list-group-flush card">
              <li class="list-group-item" style="color: #1A6CA7;"><strong>Tu bienestar</strong></li>
              <li class="list-group-item"><a style="color: #1A6CA7;"></a> Estamos enfocados constantemente en cada uno
                de ustedes, porque eres lo primero. Siempre con la implementación de buenas prácticas de la excelencia
                para tu éxito.</li>
              <li class="list-group-item" style="color: #1A6CA7;"><strong>Humanismo</strong></li>
              <li class="list-group-item"><a style="color: #1A6CA7;"></a> Es el componente que nos permite compartir
                nuestros sueños y ganas de salir adelante y estar cada vez más unidos para así brindar el mejor trato
                entre nuestros colaboradores y nuestro público.</li>
              <li class="list-group-item" style="color: #1A6CA7;"><strong>Resposabilidad</strong></li>
              <li class="list-group-item"><a style="color: #1A6CA7;"></a> Ofrecemos el respeto y la dedicación para dar
                lo mejor de nosotros para tú beneficio.</li>
              <li class="list-group-item" style="color: #1A6CA7;"><strong>Integridad</strong></li>
              <li class="list-group-item"><a style="color: #1A6CA7;"></a> Optamos por las mejores prácticas y
                transparencia constante para brindarte los más confiables y mejores procesos que lleven al desarrollo de
                todos.</li>
            </ul>
            <div class="img-valores card" style="background-image: url(&quot;img/valores.jpg&quot;);"></div>
          </div>
        </div>

        <!-- <div class="tab-pane fade active show" id="pills-contact2" role="tabpanel" aria-labelledby="pills-contact-tab">

                                 </div> -->
      </div>
    </div>
  </div>

  <!-- Hisotoria -->
  <section class="historia">
    <!-- <div class=""> -->
    <h3>Nuestra Historia</h3>

    <div class="owl-historia owl-carousel owl-theme">

      <div class="item">
        <div class="card mb-3">
          <div class="row">
            <div class="col-lg-12 contImgHistoria">
              <div class="card-img" style="background-image:url(&quot;img/historia-inicio.jpg&quot;);"> </div>
            </div>
            <div class="col-lg-12 contText">
              <div class="card-body">
                <h5 class="card-title mb-4" style="font-weight:bold;"><i class="fas fa-spa"></i> El inicio</h5>
                <div class="card-text">
                  La cooperativa de ahorro y crédito Possible, nace como un proyecto potencial de mejora en
                  Huamachuco,región La Libertad.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="card mb-3">
          <div class="row">
            <div class="col-lg-12 contImgHistoria">
              <div class="card-img" style="background-image:url(&quot;img/historia-principios3.jpg&quot;);"> </div>
            </div>
            <div class="col-lg-12 contText">
              <div class="card-body">
                <h5 class="card-title mb-4" style="font-weight:bold;"><i class="fas fa-heartbeat"></i> Nuestros ideales
                </h5>
                <div class="card-text">
                  Ante la situación actual del sector financiero, en el que no se entregan resultados efectivos, la idea
                  es brindar tasas con una alta retribución y grandes beneficios económicos, a la inversión del cliente.
                  Siendo respaldados por el grupo Possible al que pertenece esta empresa, grupo que tiene un buen
                  poderío económico en varios rubros.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="card mb-3">
          <div class="row">
            <div class="col-lg-12 contImgHistoria">
              <div class="card-img" style="background-image:url(&quot;img/historia-transcurso.jpg&quot;);"> </div>
            </div>
            <div class="col-lg-12 contText">
              <div class="card-body">
                <h5 class="card-title mb-4" style="font-weight:bold;"><i class="fas fa-briefcase"></i> En el transcurso
                </h5>
                <div class="card-text">
                  La empresa inicia de la manera más humilde, pero con un gran empeño por llevar acabo su ideal, en el
                  transcurso logra resultados efectivos, por ello luego se consolida como marca en Juliaca, Puno. A
                  partir de allí empieza crecer en el sur, y luego a instalarse en el norte, con miras a crecer allí
                  también.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="card mb-3">
          <div class="row">
            <div class="col-lg-12 contImgHistoria">
              <div class="card-img" style="background-image:url(&quot;img/historia-actualidad.jpg&quot;);"> </div>
            </div>
            <div class="col-lg-12 contText">
              <div class="card-body">
                <h5 class="card-title mb-4" style="font-weight:bold;"><i class="fas fa-building"></i> En la actualidad
                </h5>
                <div class="card-text">
                  Hoy en día se puede decir que somos la empresa con las mas altas tasas en el tema de ahorro, y con una
                  gran accesibilidad (crediticia, planificadora) para el apoyo a las diferentes etapas de la vida
                  económica del cliente, para: los más pequeños del hogar, la universidad, padres de familia, viajes,
                  etc...
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="barPlayStop">
      <a class="btn active" id="btn-play"><i class="fas fa-play"></i></a>
      <a class="btn" id="btn-stop"><i class="fas fa-pause"></i></a>
    </div>
    <!-- </div> -->
  </section>
</main>

@endsection