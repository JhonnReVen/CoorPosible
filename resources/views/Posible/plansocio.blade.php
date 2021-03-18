@extends('layouts.header')

@section('content')
<main class="opacidad opacidad2">

  <div class="home">
    <div class="home_background_container prlx_parent">
      <div class="home_background prlx"
        style="background-image: url(&quot;img/plansocio.jpg&quot;); transform: translate(0%, -15.7377%) translate3d(0px, 0px, 0px);">
      </div>
    </div>
    <div class="bloquelugar">
      <h2>
        <center><strong></strong>Plan Socio</center>
      </h2>
    </div>
  </div>

  <!-- ACORDION DE SOCIO -->
  <div class="accordion ccontainer-xs container-md container-lg" id="accordionExample">
    <!-- SOCIO KIDS -->
    <div class="card border-light accordionbg">
      <div class="acheaderbg card-header collapsed" id="headingOne" style="background-color:#F0FDFC;cursor:pointer;"
        data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
        <h2 class="mb-0 iright2">
          <strong style="color:#269C99; font-size:16px!important;">SOCIO KIDS</strong>
          <a class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc">
          </a>
        </h2>
      </div>

      <div id="collapseOne" class="container-md collapse" aria-labelledby="headingOne" data-parent="#accordionExample"
        style="">
        <div class="card-body">
          <div class="row row-fluid">
            <div class="col-lg-9 col-sm-7">
              <p><strong class="titulobase">¿QUIEN ES?</strong></p>
              <p>Socio que se encuentra en el rango de 6 a 15 años de edad, con capacidad y disposición de ahorrar y
                generar en ellos una cultura sana en el orden de las fianzas</p>
            </div>
            <div class="col-lg-3 col-sm-5">
              <center><img class="img-fluid imagensocio" src="img/socio-kids.jpg"></center>
            </div>
          </div>
        </div>
        <hr style="background-color: #A7EDEB;">

        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

          <li class="nav-item" style="background-color: rgb(238, 247, 235);">
            <a class="nav-link md-opjjpmhoiojifppkkcdabiobhakljdgm_doc active btn-light" id="pills-beneficio-tab"
              data-toggle="pill" href="#pills-beneficios1" role="tab" aria-controls="pills-beneficios1"
              aria-selected="true"><strong>Beneficios</strong></a>
          </li>

          <li class="nav-item" style="background-color: rgb(238, 247, 235);">
            <a class="nav-link md-opjjpmhoiojifppkkcdabiobhakljdgm_doc btn-light" id="pills-requisitos1-tab"
              data-toggle="pill" href="#pills-requisitos1" role="tab" aria-controls="pills-requisitos"
              aria-selected="false"><strong>Requisitos</strong></a>
          </li>
          <li class="nav-item" style="background-color: rgb(238, 247, 235);">
            <a class="nav-link md-opjjpmhoiojifppkkcdabiobhakljdgm_doc btn-light" id="pills-condiciones-tab"
              data-toggle="pill" href="#pills-condiciones1" role="tab" aria-controls="pills-condiciones1"
              aria-selected="false"><strong>Condiciones</strong></a>
          </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade" id="pills-requisitos1" role="tabpanel" aria-labelledby="pills-requisitos-tab">
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Copia de DNI del socio.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Copia de DNI del apoderado.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Copia de recibo de servicios.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Copia de recibo de servicios.</li>

            </ul>
          </div>
          <div class="tab-pane fade" id="pills-condiciones1" role="tabpanel" aria-labelledby="pills-condiciones-tab">
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Aportará el monto de S/ 20.00 mensual durante un año, de manera
                puntual.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Al término del contrato el socio puede renovar contrato y continuar
                como socio.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> En caso el socio se retira antes de tiempo, o deja de pagar; perderá
                todos los beneficios.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> A los socios que son ganadoras del sorteo de la beca para academia y
                balones, no se le devolverá el aporte de todo el año.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Si no usa ningún beneficio, al término del contrato se devolverá todo
                el aporte que hizo.</li>
            </ul>
          </div>
          <div class="tab-pane fade active show" id="pills-beneficios1" role="tabpanel"
            aria-labelledby="pills-beneficio-tab">
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Sorteo de una beca para academia de verano, en una de las disciplinas
                Futbol, Vóley, Natación, Música, teatro, Danza.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Sorteo de Balones Futbol y vóley.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Acceso a créditos a una tasa mínima a partir del tercer mes previa
                evaluación.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Acceso a ahorros (ahorro a plazo fijo y ahorro móvil), a altas tasas
                de interés.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Si no usa ningún beneficio, al término del contrato se devolverá todo
                el aporte que hizo.</li>
            </ul>
          </div>
        </div>
      </div>

    </div>

    <!-- SOCIO UNIVERSITARIO -->
    <div class="card border-light accordionbg">
      <div class="acheaderbg card-header collapsed" id="headingTwo" style="background-color:#F0FDFC;cursor:pointer;"
        data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        <h2 class="mb-0 i iright2">
          <strong style="color:#269C99; font-size:16px!important;">SOCIO UNIVERSITARIO</strong>
          <a class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc">
          </a>
        </h2>
      </div>

      <div id="collapseTwo" class="container-md collapse" aria-labelledby="headingTwo" data-parent="#accordionExample"
        style="">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-9 col-sm-7">
              <p><strong class="titulobase">¿QUIEN ES?</strong></p>
              <p>Socio que está cursando estudios superiores, ya sea en universidad o instituto. Es un socio con
                disposición de ahorrar y generar en ellos una cultura sana en el orden de las fianzas.</p>
            </div>
            <div class="col-lg-3 col-sm-5">
              <center class="mb-0 "><img class="img-fluid imagensocio" src="img/socio-universitario.jpg"></center>
            </div>
          </div>
        </div>
        <hr style="background-color: #A7EDEB;">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

          <li class="nav-item" style="background-color: rgb(238, 247, 235);">
            <a class="nav-link active md-opjjpmhoiojifppkkcdabiobhakljdgm_doc btn-light" id="pills-beneficios-tab"
              data-toggle="pill" href="#pills-beneficios2" role="tab" aria-controls="pills-beneficios2"
              aria-selected="false"><strong>BENEFICIOS</strong></a>
          </li>

          <li class="nav-item" style="background-color: rgb(238, 247, 235);">
            <a class="nav-link md-opjjpmhoiojifppkkcdabiobhakljdgm_doc btn-light" id="pills-requisitos-tab"
              data-toggle="pill" href="#pills-requisitos2" role="tab" aria-controls="pills-requisitos2"
              aria-selected="true"><strong>REQUISITOS</strong></a>
          </li>
          <li class="nav-item" style="background-color: rgb(238, 247, 235);">
            <a class="nav-link md-opjjpmhoiojifppkkcdabiobhakljdgm_doc btn-light" id="pills-condiciones-tab"
              data-toggle="pill" href="#pills-condiciones2" role="tab" aria-controls="pills-condiciones2"
              aria-selected="false"><strong>CONDICIONES</strong></a>
          </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade" id="pills-requisitos2" role="tabpanel" aria-labelledby="pills-requisitos-tab">
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Copia de DNI del socio.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Copia de recibo de servicios.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Constancia de matricula.</li>
            </ul>
          </div>
          <div class="tab-pane fade" id="pills-condiciones2" role="tabpanel" aria-labelledby="pills-condiciones-tab">
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Aportará el monto de S/ 20.00 mensual durante un año, de manera
                puntual.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Al término del contrato el socio puede renovar contrato y continuar
                como socio.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> En caso el socio se retira antes de tiempo, o deja de pagar; perderá
                todos los beneficios, incluyendo la devolución de su aporte.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Si no usa ningún beneficio, al término del contrato se devolverá todo
                el aporte que hizo.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Si en socio se retrasa en pagar en las fechas indicadas, tendrá una
                mora (según lo especificado en el cronograma de pagos).</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Los socios ganadores de los sorteos, a ellos no se le devolverá el
                aporte dado.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> El beneficio del asesoramiento de tesis consta de 1 sesión mensual
                mínima, incluye revisiones y avances.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> El socio que utiliza los beneficios de asesoramiento, no se le
                devolverá el aporte dado.</li>
            </ul>
          </div>
          <div class="tab-pane fade show active" id="pills-beneficios2" role="tabpanel"
            aria-labelledby="pills-beneficios-tab">
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Asesoramiento de Tesis.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Sorteo de Capacitaciones.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Sorteo de cursos de Excel, Office.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Acceso a créditos a una tasa mínima a partir del tercer mes previa
                evaluación.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Acceso a ahorros (ahorro a plazo fijo y ahorro móvil), a altas tasas
                de interés.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- SOCIO EMPRENDEDOR -->
    <div class="card border-light accordionbg">
      <div class="acheaderbg card-header collapsed" id="headingThree" style="background-color:#F0FDFC;cursor:pointer;"
        data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        <h2 class="mb-0 iright2">
          <strong style="color:#269C99; font-size:16px!important;">SOCIO EMPRENDEDOR</strong>
          <a class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc">
          </a>
        </h2>
      </div>

      <div id="collapseThree" class="container-md collapse" aria-labelledby="headingThree"
        data-parent="#accordionExample" style="">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-9 col-sm-7">
              <p><strong class="titulobase">¿QUIEN ES?</strong></p>
              <p>Socio que tiene ganas de superación y emprende un negocio, tiene como meta dar oportunidad a otros,
                superación personal y aportar en la economía de nuestro entorno, es un socio con disposición de ahorrar
                y generar en ellos una cultura sana en el orden de las fianzas.</p>
            </div>
            <div class="col-lg-3 col-sm-5">
              <center class="mb-0 "><img class="img-fluid imagensocio" src="img/socio-emprendedor.jpg"></center>
            </div>
          </div>
        </div>
        <hr style="background-color: #A7EDEB;">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

          <li class="nav-item" style="background-color: rgb(238, 247, 235);">
            <a class="nav-link active md-opjjpmhoiojifppkkcdabiobhakljdgm_doc btn-light" id="pills-beneficios-tab"
              data-toggle="pill" href="#pills-beneficios3" role="tab" aria-controls="pills-beneficios3"
              aria-selected="false"><strong>BENEFICIOS</strong></a>
          </li>

          <li class="nav-item" style="background-color: rgb(238, 247, 235);">
            <a class="nav-link md-opjjpmhoiojifppkkcdabiobhakljdgm_doc btn-light" id="pills-requisitos-tab"
              data-toggle="pill" href="#pills-requisitos3" role="tab" aria-controls="pills-requisitos3"
              aria-selected="true"><strong>REQUISITOS</strong></a>
          </li>
          <li class="nav-item" style="background-color: rgb(238, 247, 235);">
            <a class="nav-link md-opjjpmhoiojifppkkcdabiobhakljdgm_doc btn-light" id="pills-condiciones-tab"
              data-toggle="pill" href="#pills-condiciones3" role="tab" aria-controls="pills-condiciones3"
              aria-selected="false"><strong>CONDICIONES</strong></a>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade" id="pills-requisitos3" role="tabpanel" aria-labelledby="pills-requisitos-tab">
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Copia de DNI del socio</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Copia de recibo de servicios.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Giro de Negocio.</li>
            </ul>
          </div>
          <div class="tab-pane fade" id="pills-condiciones3" role="tabpanel" aria-labelledby="pills-condiciones-tab">
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Aportará el monto de S/ 20.00 mensual durante un año, de manera
                puntual.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Al término del contrato el socio puede renovar contrato y continuar
                como socio.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> En caso el socio se retira antes de tiempo, o deja de pagar; perderá
                todos los beneficios, incluyendo la devolución de su aporte.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Si no usa ningún beneficio, al término del contrato se devolverá todo
                el aporte que hizo.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Si en socio se retrasa en pagar en las fechas indicadas, tendrá una
                mora (según lo especificado en el cronograma de pagos).</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Los beneficios de los asesoramientos consta de 1 sesión mensual
                mínima, incluye revisiones y avances.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> El socio que utiliza los beneficios de asesoramiento, no se le
                devolverá el aporte dado.</li>
            </ul>
          </div>
          <div class="tab-pane fade show active" id="pills-beneficios3" role="tabpanel"
            aria-labelledby="pills-beneficios-tab">
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Asesoramiento para constitución de empresa.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Asesoramiento de marca de tu negocio.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Asesoramiento de Pagina de Facebook.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Asesoramiento de inventario.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Asesoramiento de plan de ventas.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Acceso a créditos a una tasa mínima a partir del tercer mes previa
                evaluación.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Acceso a ahorros (ahorro a plazo fijo y ahorro móvil), a altas tasas
                de interés.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- SOCIO MYPE -->
    <div class="card border-light accordionbg">
      <div class="acheaderbg card-header collapsed" id="headingFour" style="background-color:#F0FDFC;cursor:pointer;"
        data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        <h2 class="mb-0 iright2">
          <strong style="color:#269C99; font-size:16px!important;">SOCIO MYPE</strong>
          <a class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc">
          </a>
        </h2>
      </div>

      <div id="collapseFour" class="container-md collapse" aria-labelledby="headingFour" data-parent="#accordionExample"
        style="">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-9 col-sm-7">
              <p><strong class="titulobase">¿QUIEN ES?</strong></p>
              <p>Socio que ya emprendió la enorme responsabilidad de generar ingresos con sus propios conocimiento y da
                la oportunidad a otros que se desarrollen. Es un socio con disposición de ahorrar y generar en ellos una
                cultura sana en el orden de las fianzas.</p>
            </div>
            <div class="col-lg-3 col-sm-5">
              <center class="mb-0 "><img class="img-fluid imagensocio" src="img/socio-mype.jpg"></center>
            </div>
          </div>
        </div>
        <hr style="background-color: #A7EDEB;">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

          <li class="nav-item" style="background-color: rgb(238, 247, 235);">
            <a class="nav-link active md-opjjpmhoiojifppkkcdabiobhakljdgm_doc btn-light" id="pills-beneficios-tab"
              data-toggle="pill" href="#pills-beneficios4" role="tab" aria-controls="pills-beneficios4"
              aria-selected="false"><strong>BENEFICIOS</strong></a>
          </li>

          <li class="nav-item" style="background-color: rgb(238, 247, 235);">
            <a class="nav-link md-opjjpmhoiojifppkkcdabiobhakljdgm_doc btn-light" id="pills-requisitos-tab"
              data-toggle="pill" href="#pills-requisitos4" role="tab" aria-controls="pills-requisitos4"
              aria-selected="true"><strong>REQUISITOS</strong></a>
          </li>
          <li class="nav-item" style="background-color: rgb(238, 247, 235);">
            <a class="nav-link md-opjjpmhoiojifppkkcdabiobhakljdgm_doc btn-light" id="pills-condiciones-tab"
              data-toggle="pill" href="#pills-condiciones4" role="tab" aria-controls="pills-condiciones4"
              aria-selected="false"><strong>CONDICIONES</strong></a>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade" id="pills-requisitos4" role="tabpanel" aria-labelledby="pills-requisitos-tab">
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Copia de DNI del socio</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Copia de recibo de servicios.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Ficha RUC.</li>
            </ul>
          </div>
          <div class="tab-pane fade" id="pills-condiciones4" role="tabpanel" aria-labelledby="pills-condiciones-tab">
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Aportará el monto de S/ 20.00 mensual durante un año, de manera
                puntual.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Al término del contrato el socio puede renovar contrato y continuar
                como socio.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> En caso el socio se retira antes de tiempo, o deja de pagar; perderá
                todos los beneficios, incluyendo la devolución de su aporte.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Si no usa ningún beneficio, al término del contrato se devolverá todo
                el aporte que hizo.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Si en socio se retrasa en pagar en las fechas indicadas, tendrá una
                mora (según lo especificado en el cronograma de pagos).</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> El socio que fue ganador del Tours, no se le devolverá el aporte dado.
              </li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Los beneficios de los asesoramientos consta de 1 sesión mensual
                mínima, incluye revisiones y avances.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> El socio que utiliza los beneficios de asesoramiento, no se le
                devolverá el aporte dado.</li>
            </ul>
          </div>
          <div class="tab-pane fade show active" id="pills-beneficios4" role="tabpanel"
            aria-labelledby="pills-beneficios-tab">
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Sorteo de un tours.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Asesoramiento de marca de tu negocio.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Asesoramiento de inventario.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Asesoramiento de plan de ventas.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Acceso a créditos a una tasa mínima a partir del tercer mes previa
                evaluación.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Acceso a ahorros (ahorro a plazo fijo y ahorro móvil), a altas tasas
                de interés.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- SOCIO SUPER MAMÁ Y PAPÁ -->
    <div class="card border-light accordionbg">
      <div class="acheaderbg card-header" id="headingFive" style="background-color:#F0FDFC;cursor:pointer;"
        data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
        <h2 class="mb-0 iright2">
          <strong style="color:#269C99; font-size:16px!important;">SOCIO SUPER MAMÁ Y PAPÁ</strong>
          <a class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc">
          </a>
        </h2>
      </div>

      <div id="collapseFive" class="collapse container-md" aria-labelledby="headingFive"
        data-parent="#accordionExample">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-9 col-sm-7">
              <p><strong class="titulobase">¿QUIEN ES?</strong></p>
              <p>Socio que tiene la dicha de ser padre, con disposición de ahorrar y generar en ellos una cultura sana
                en el orden de las fianzas; y enseñar a sus hijos los mismo.</p>
            </div>
            <div class="col-lg-3 col-sm-5">
              <center class="mb-0 "><img class="img-fluid imagensocio" src="img/socio-mamapapa.jpg"></center>
            </div>
          </div>
        </div>
        <hr style="background-color: #A7EDEB;">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

          <li class="nav-item" style="background-color: rgb(238, 247, 235);">
            <a class="nav-link active md-opjjpmhoiojifppkkcdabiobhakljdgm_doc btn-light" id="pills-beneficios-tab"
              data-toggle="pill" href="#pills-beneficios5" role="tab" aria-controls="pills-beneficios5"
              aria-selected="false"><strong>BENEFICIOS</strong></a>
          </li>

          <li class="nav-item" style="background-color: rgb(238, 247, 235);">
            <a class="nav-link md-opjjpmhoiojifppkkcdabiobhakljdgm_doc btn-light" id="pills-requisitos-tab"
              data-toggle="pill" href="#pills-requisitos5" role="tab" aria-controls="pills-requisitos5"
              aria-selected="true"><strong>REQUISITOS</strong></a>
          </li>
          <li class="nav-item" style="background-color: rgb(238, 247, 235);">
            <a class="nav-link md-opjjpmhoiojifppkkcdabiobhakljdgm_doc btn-light" id="pills-condiciones-tab"
              data-toggle="pill" href="#pills-condiciones5" role="tab" aria-controls="pills-condiciones5"
              aria-selected="false"><strong>CONDICIONES</strong></a>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade" id="pills-requisitos5" role="tabpanel" aria-labelledby="pills-requisitos-tab">
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Copia de DNI del socio</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Copia de recibo de servicios.</li>
            </ul>
          </div>
          <div class="tab-pane fade" id="pills-condiciones5" role="tabpanel" aria-labelledby="pills-condiciones-tab">
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Aportará el monto de S/ 20.00 mensual durante un año, de manera
                puntual.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> En caso el socio se retira antes de tiempo, o deja de pagar; perderá
                todos los beneficios.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Si no usa ningún beneficio, al término del contrato se devolverá todo
                el aporte que hizo.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Si en socio se retrasa en pagar en las fechas indicadas, tendrá una
                mora (según lo especificado en el cronograma de pagos).</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> A la persona que es ganadora del sorteo del SALON SPA, no se le
                devolverá el aporte.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> El acreedor del sorteo del SALÓN SPA completo será 3 sesiones al año.
                El sorteo se realizara después del año del aporte del socio.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Los descuentos de productos de primera necesidad son en los mercados
                de Progreso, 2 de Mayo, La perla y otros.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Los socios que usan los productos de primera necesidad, puedes usarlo
                a partir del tercer mes de ser socio.</li>
            </ul>
          </div>
          <div class="tab-pane fade show active" id="pills-beneficios5" role="tabpanel"
            aria-labelledby="pills-beneficios-tab">
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Descuentos de productos de primera necesidad a un 15%.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Sorteo de un SALÓN SPA.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Acceso a créditos a una tasa mínima a partir del tercer mes previa
                evaluación.</li>
              <li class="list-group-item"><a style="color: #269c99;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Acceso a ahorros (ahorro a plazo fijo y ahorro móvil), a altas tasas
                de interés.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </div>


  <!-- Clientes -->
  <div class="grupop section_title text-center">
    <b></b>
    <h1> Grupo Possible</h1>
  </div>

  <div class="card card-group container border-light">
    <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4" style="justify-content: center;">

      <!-- img1 -->
      <div class="card-body">
        <center><img class="card-img-top" src="img/logo-lumar.png" alt="https://unsplash.com/@michaeldam"></center>
      </div>
      <!-- img2 -->
      <div class="card-body">
        <center><img class="card-img-top" src="img/logo-roman.png" alt="https://unsplash.com/@michaeldam"></center>
      </div>
      <!-- img3 -->
      <div class="card-body">
        <center><img class="card-img-top" src="img/logo-sand.png" alt="https://unsplash.com/@michaeldam"></center>
      </div>
      <!-- img4 -->
      <div class="card-body">
        <center><img class="card-img-top" src="img/logo-shahua.png" alt="https://unsplash.com/@michaeldam"></center>
      </div>
      <div class="card-body">
        <center><img class="card-img-top" src="img/logo-skies.png" alt="https://unsplash.com/@michaeldam"></center>
      </div>
    </div>
  </div>
</main>
@endsection