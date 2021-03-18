@extends('layouts.header')

@section('content')

<main class="opacidad2" style="position: relative!important; padding-bottom: 0px!important;">

  <div class="become opacidad" style="position: relative;">

    <div class="row" id="agencias">
      <div class="tituloagencias">
        <img src="img/cargando.gif" alt="...">
      </div>

      <div id="btnmaxagencias"><i class="fas fa-expand"></i></div>
      <div class="contenedoragecias" id="idcontenedoragencias">


        <div class="cbtnverlugares" id="btnverlugares"><i class="fas fa-caret-left"></i></div>

        <!-- RESOLUCION MENOR O IGUAL DE 508PX-->
        <div class="infoagencias">
          <div class="card-header selectlugar">Nuestras Agencias
            <span class="masinfolugares">Selecciona un lugar para más detalles</span></div>
          <div id="btnminlugares"><i class="fas fa-minus"></i></div>
          <div id="btninfoagencias"><i class="fas fa-angle-up"></i></div>
          <ul class="list-group list-group-flush lugar show" id="juliaca">
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="fas fa-map-marker-alt"></i></a>
                Dirección: </strong> Jr. Sucre N° 802</li>
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="fas fa-phone"></i></a> Telefono:
              </strong> -</li>
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="fas fa-mobile-alt"></i></a> Celular:
              </strong><a style="text-decoration: none;" href="tel:910 32 86 45">910 32 86 45</a></li>
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="far fa-address-book"></i></a> Jefe
                de Agencia: </strong>Juan Kevin Quispe Condori</li>
          </ul>
          <ul class="list-group list-group-flush lugar" id="huamachuco">
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="fas fa-map-marker-alt"></i></a>
                Dirección: </strong> Jr. Ramón Castilla N° 224</li>
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="fas fa-phone"></i></a> Telefono:
              </strong> -</li>
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="fas fa-mobile-alt"></i></a> Celular:
              </strong> <a style="text-decoration: none;" href="tel:931 96 86 24">931 96 86 24</a></li>
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="far fa-address-book"></i></a> Jefe
                de Agencia: </strong> Wilmer Leider Rodríguez Barrios</li>
          </ul>
          <ul class="list-group list-group-flush lugar" id="putina">
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="fas fa-map-marker-alt"></i></a>
                Dirección: </strong> Jr. Mariano Melgar S/N</li>
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="fas fa-phone"></i></a> Telefono:
              </strong> -</li>
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="fas fa-mobile-alt"></i></a> Celular:
              </strong> <a style="text-decoration: none;" href="tel:931 22 26 53">931 22 26 53</a></li>
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="far fa-address-book"></i></a> Jefe
                de Agencia: </strong> Lizbeth Madeleine Calisaya Quispe</li>
          </ul>
          <ul class="list-group list-group-flush lugar" id="yunguyo">
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="fas fa-map-marker-alt"></i></a>
                Dirección: </strong> Jr. Javier Heraud N° 165/li>
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="fas fa-phone"></i></a> Telefono:
              </strong> -</li>
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="fas fa-mobile-alt"></i></a> Celular:
              </strong> <a style="text-decoration: none;" href="tel:935 67 11 90">935 67 11 90</a></li>
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="far fa-address-book"></i></a> Jefe
                de Agencia: </strong> Janeth Vilma Vela Choque</li>
          </ul>
          <ul class="list-group list-group-flush lugar" id="huancane">
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="fas fa-map-marker-alt"></i></a>
                Dirección: </strong> Jr. Lima N° 640</li>
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="fas fa-phone"></i></a> Telefono:
              </strong> -</li>
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="fas fa-mobile-alt"></i></a> Celular:
              </strong> <a style="text-decoration: none;" href="tel:922 98 96 94">922 98 96 94</a></li>
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="far fa-address-book"></i></a> Jefe
                de Agencia: </strong> Ubaldo Rayden Ccama Arostegui</li>
          </ul>
          <ul class="list-group list-group-flush lugar" id="chimbote">
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="fas fa-map-marker-alt"></i></a>
                Dirección: </strong> Av. Francisco Bolognesi N° 555</li>
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="fas fa-phone"></i></a> Telefono:
              </strong> <a style="text-decoration: none;" href="tel:(043) 417207">(043) - 417207</a></li>
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="fas fa-mobile-alt"></i></a> Celular:
              </strong> <a style="text-decoration: none;" href="tel:970 95 13 02">970 95 13 02</a></li>
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="far fa-address-book"></i></a> Jefe
                de Agencia: </strong> Tereza Polo Briceño</li>
          </ul>
        </div>

        <div class="nav nav-pills lugares owl-lugares owl-carousel owl-theme" id="v-pills-tab1" role="tablist"
          aria-orientation="horizontal">

          <a class="item nav-link  btn-light selectlugar" id="v-pills-juliaca-tab1" data-toggle="pill"
            href="#v-pills-juliaca" role="tab" aria-controls="v-pills-juliaca" aria-selected="true">Juliaca</a>

          <a class="item nav-link  btn-light selectlugar" id="v-pills-huamachuco-tab1" data-toggle="pill"
            href="#v-pills-huamachuco" role="tab" aria-controls="v-pills-huamachuco"
            aria-selected="false">Huamachuco</a>

          <a class="item nav-link  btn-light selectlugar " id="v-pills-putina-tab1" data-toggle="pill"
            href="#v-pills-putina" role="tab" aria-controls="v-pills-putina" aria-selected="false">Putina</a>

          <a class="item nav-link  btn-light selectlugar" id="v-pills-yunguyo-tab1" data-toggle="pill"
            href="#v-pills-yunguyo" role="tab" aria-controls="v-pills-yunguyo" aria-selected="false">Yunguyo</a>

          <a class="item nav-link  btn-light selectlugar" id="v-pills-huancane-tab1" data-toggle="pill"
            href="#v-pills-huancane" role="tab" aria-controls="v-pills-huancane" aria-selected="false">Huancané</a>

          <a class="item nav-link btn-light selectlugar" id="v-pills-chimbote-tab1" data-toggle="pill"
            href="#v-pills-chimbote" role="tab" aria-controls="v-pills-chimbote" aria-selected="false">Chimbote</a>

        </div>
        <!-- RESOLUCION MAYOR DE 508px WIDTH -->
        <div class="nav nav-pills lugares" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <div class="card-header selectlugar">Nuestras Agencias
            <span class="masinfolugares">Selecciona un lugar para más detalles</span></div>

          <a class="nav-link btn-light selectlugar" id="v-pills-juliaca-tab" data-toggle="pill" href="#v-pills-juliaca"
            role="tab" aria-controls="v-pills-juliaca" aria-selected="true">Juliaca</a>

          <ul class="list-group list-group-flush lugar" id="juliaca1">
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="fas fa-map-marker-alt"></i></a>
                Dirección: </strong> Jr. Sucre N° 802</li>
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="fas fa-phone"></i></a> Telefono:
              </strong> -</li>
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="fas fa-mobile-alt"></i></a> Celular:
              </strong><a style="text-decoration: none;" href="tel:910 32 86 45">910 32 86 45</a></li>
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="far fa-address-book"></i></a> Jefe
                de Agencia: </strong>Juan Kevin Quispe Condori</li>
          </ul>

          <a class="nav-link btn-light selectlugar" id="v-pills-huamachuco-tab" data-toggle="pill"
            href="#v-pills-huamachuco" role="tab" aria-controls="v-pills-huamachuco"
            aria-selected="false">Huamachuco</a>

          <ul class="list-group list-group-flush lugar" id="huamachuco2">
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="fas fa-map-marker-alt"></i></a>
                Dirección: </strong> Jr. Ramón Castilla N° 224</li>
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="fas fa-phone"></i></a> Telefono:
              </strong> -</li>
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="fas fa-mobile-alt"></i></a> Celular:
              </strong> <a style="text-decoration: none;" href="tel:931 96 86 24">931 96 86 24</a></li>
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="far fa-address-book"></i></a> Jefe
                de Agencia: </strong> Wilmer Leider Rodríguez Barrios</li>
          </ul>

          <a class="nav-link btn-light selectlugar" id="v-pills-putina-tab" data-toggle="pill" href="#v-pills-putina"
            role="tab" aria-controls="v-pills-putina" aria-selected="false">Putina</a>

          <ul class="list-group list-group-flush lugar" id="putina3">
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="fas fa-map-marker-alt"></i></a>
                Dirección: </strong> Jr. Mariano Melgar S/N</li>
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="fas fa-phone"></i></a> Telefono:
              </strong> -</li>
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="fas fa-mobile-alt"></i></a> Celular:
              </strong> <a style="text-decoration: none;" href="tel:931 22 26 53">931 22 26 53</a></li>
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="far fa-address-book"></i></a> Jefe
                de Agencia: </strong> Lizbeth Madeleine Calisaya Quispe</li>
          </ul>

          <a class="nav-link btn-light selectlugar" id="v-pills-yunguyo-tab" data-toggle="pill" href="#v-pills-yunguyo"
            role="tab" aria-controls="v-pills-yunguyo" aria-selected="false">Yunguyo</a>

          <ul class="list-group list-group-flush lugar" id="yunguyo4">
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="fas fa-map-marker-alt"></i></a>
                Dirección: </strong> Jr. Javier Heraud N° 165/li>
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="fas fa-phone"></i></a> Telefono:
              </strong> -</li>
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="fas fa-mobile-alt"></i></a> Celular:
              </strong> <a style="text-decoration: none;" href="tel:935 67 11 90">935 67 11 90</a></li>
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="far fa-address-book"></i></a> Jefe
                de Agencia: </strong> Janeth Vilma Vela Choque</li>
          </ul>

          <a class="nav-link btn-light selectlugar" id="v-pills-huancane-tab" data-toggle="pill"
            href="#v-pills-huancane" role="tab" aria-controls="v-pills-huancane" aria-selected="false">Huancané</a>

          <ul class="list-group list-group-flush lugar" id="huancane5">
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="fas fa-map-marker-alt"></i></a>
                Dirección: </strong> Jr. Lima N° 640</li>
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="fas fa-phone"></i></a> Telefono:
              </strong> -</li>
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="fas fa-mobile-alt"></i></a> Celular:
              </strong> <a style="text-decoration: none;" href="tel:922 98 96 94">922 98 96 94</a></li>
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="far fa-address-book"></i></a> Jefe
                de Agencia: </strong> Ubaldo Rayden Ccama Arostegui</li>
          </ul>

          <a class="nav-link btn-light selectlugar" id="v-pills-chimbote-tab" data-toggle="pill"
            href="#v-pills-chimbote" role="tab" aria-controls="v-pills-chimbote" aria-selected="false">Chimbote</a>

          <ul class="list-group list-group-flush lugar" id="chimbote6">
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="fas fa-map-marker-alt"></i></a>
                Dirección: </strong> Av. Francisco Bolognesi N° 555</li>
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="fas fa-phone"></i></a> Telefono:
              </strong> <a style="text-decoration: none;" href="tel:(043) 417207">(043) - 417207</a></li>
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="fas fa-mobile-alt"></i></a> Celular:
              </strong> <a style="text-decoration: none;" href="tel:970 95 13 02">970 95 13 02</a></li>
            <li class="list-group-item"><strong style="color:#1A6CA7;"><a><i class="far fa-address-book"></i></a> Jefe
                de Agencia: </strong> Tereza Polo Briceño</li>
          </ul>

        </div>
      </div>
      <!-- <div class="col-lg-8 order-2 order-lg-1 p-3 mapas" style="border: 2px dotted #1A6CA7"> -->
      <div class="mapas">
        <div class="tab-content" id="v-pills-tabContent">

          <div class="tab-pane fade show active seleccionmapa" id="v-pills-inicio" role="tabpanel"
            aria-labelledby="v-pills-inicio-tab">
            <div class="row">
              <div class="col-lg-12">
                <iframe class="mapainicio"
                  src="https://www.google.com/maps/d/embed?mid=1cX1hP65GnM7Wl2xXvYDG58PE8T1hUUMW"></iframe>
              </div>
            </div>
          </div>

          <div class="tab-pane fade seleccionmapa" id="v-pills-juliaca" role="tabpanel"
            aria-labelledby="v-pills-juliaca-tab">
            <div class="row">
              <div class="col-lg-12">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d961.234814268317!2d-70.12805140260286!3d-15.487699171392421!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9167f3c1ff2f024b%3A0xca32e6cb75a631fd!2sSucre%20802%2C%20Juliaca%2021101!5e0!3m2!1ses-419!2spe!4v1576778573349!5m2!1ses-419!2spe"></iframe>
              </div>
            </div>
          </div>

          <div class="tab-pane fade seleccionmapa" id="v-pills-huamachuco" role="tabpanel"
            aria-labelledby="v-pills-huamachuco-tab">
            <div class="row">
              <div class="col-lg-12">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2350.320708109811!2d-78.04951569501134!3d-7.8160004710419235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91ade4eea759ab2b%3A0x3e1df006001afab3!2sJr%20Ram%C3%B3n%20Castilla%20224%2C%20Huamachuco%2013301!5e0!3m2!1ses-419!2spe!4v1576778625120!5m2!1ses-419!2spe"></iframe>
              </div>
            </div>
          </div>
          <div class="tab-pane fade seleccionmapa" id="v-pills-putina" role="tabpanel"
            aria-labelledby="v-pills-putina-tab">

            <div class="row">
              <div class="col-lg-12">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1621.0005843602794!2d-69.86237217510256!3d-14.914186136642941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9167b2647f169811%3A0xf053f1d633a1de59!2sSan%20Antonio%20de%20Putina%2021340!5e0!3m2!1ses-419!2spe!4v1576783180173!5m2!1ses-419!2spe"></iframe>
              </div>
            </div>
          </div>
          <div class="tab-pane fade seleccionmapa" id="v-pills-yunguyo" role="tabpanel"
            aria-labelledby="v-pills-yunguyo-tab">

            <div class="row">
              <div class="col-lg-12">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15322.426233269473!2d-69.08945562045085!3d-16.240654234828504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915c2d634d2ef175%3A0x712dc997df97e829!2sYunguyo!5e0!3m2!1ses-419!2spe!4v1576784877055!5m2!1ses-419!2spe"></iframe>
              </div>
            </div>
          </div>
          <div class="tab-pane fade seleccionmapa" id="v-pills-huancane" role="tabpanel"
            aria-labelledby="v-pills-huancane-tab">

            <div class="row">
              <div class="col-lg-12">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3850.179006811519!2d-69.7638287846097!3d-15.203367112746788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9167a1ff2708b885%3A0x49afa0f30996be23!2sLima%2C%20Huancan%C3%A9%2021316!5e0!3m2!1ses-419!2spe!4v1576784558594!5m2!1ses-419!2spe"></iframe>
              </div>
            </div>
          </div>
          <div class="tab-pane fade seleccionmapa" id="v-pills-chimbote" role="tabpanel"
            aria-labelledby="v-pills-chimbote-tab">

            <div class="row">
              <div class="col-lg-12">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d492.48205081691304!2d-78.59309132114689!3d-9.076843471346441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91ab8160887f9485%3A0x3fe4b5a470b60e67!2sLa%20Panader%C3%ADa%20II!5e0!3m2!1ses-419!2spe!4v1576777982905!5m2!1ses-419!2spe"></iframe>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
  <!-- <br>  -->
  <!-- Lugares-fin-->

</main>


@endsection