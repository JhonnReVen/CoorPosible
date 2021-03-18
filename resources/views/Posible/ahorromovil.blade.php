@extends('layouts.header')

@section('content')
<main class="opacidad opacidad2">

  <div class="home">
    <div class="home_background_container prlx_parent">
      <div class="home_background prlx"
        style="background-image: url(&quot;img/seccionahorros.jpg&quot;); transform: translate(0%, -15.7377%) translate3d(0px, 0px, 0px);">
      </div>
    </div>
    <div class="bloquelugar">
      <h2>
        <center>Ahorro <strong></strong> Movil</center>
      </h2>
    </div>
  </div>

  <!-- ACORDION DE SOCIO -->
  <div class="accordion container-xs container-md container-lg">
    <div class="card border-light  container-md">

      <div class="card-body">
        <div class="row row-fluid">
          <div class="col-lg-11">
            <p><strong class="titulobase">¿COMO FUNCIONA?</strong></p>

          </div>
        </div>
      </div>

      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <div id="collapseOne" class="collapse show container-md" aria-labelledby="headingOne"
          data-parent="#accordionExample">
          <div class="card-body">
            Deposita en soles a un plazo determinado, y recibirás un título valor emitido por Cooperativa de Ahorro y
            Crédito Possible a tu nombre. Recibirás intereses superiores a los de una cuenta de ahorros y estos serán
            calculados de acuerdo al monto depositado y al tiempo que hayas decidido solicitar tu certificado.
          </div>
          <hr style="background-color:#F6F6FC;">
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

            <li class="nav-item">
              <a class="nav-link md-opjjpmhoiojifppkkcdabiobhakljdgm_doc active btn-light" id="pills-contact-tab"
                data-toggle="pill" href="#pills-contact1" role="tab" aria-controls="pills-contact1"
                aria-selected="true"><strong>Tasas y Tarifas</strong></a>
            </li>

            <li class="nav-item" style="background-color: rgb(238, 247, 235);">
              <a class="nav-link md-opjjpmhoiojifppkkcdabiobhakljdgm_doc btn-light" id="pills-home-tab"
                data-toggle="pill" href="#pills-home1" role="tab" aria-controls="pills-home1"
                aria-selected="false"><strong>Beneficios</strong></a>
            </li>
            <li class="nav-item" style="background-color: rgb(238, 247, 235);">
              <a class="nav-link md-opjjpmhoiojifppkkcdabiobhakljdgm_doc btn-light" id="pills-profile-tab"
                data-toggle="pill" href="#pills-profile1" role="tab" aria-controls="pills-profile1"
                aria-selected="false"><strong>Requisitos</strong></a>
            </li>
          </ul>
          <div class="tab-content container" id="pills-tabContent">
            <div class="tab-pane fade" id="pills-home2" role="tabpanel" aria-labelledby="pills-home-tab">
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><a style="color: #1A6CA7;"
                    class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i class="fas fa-check"></i></a> Pagamos intereses
                  desde S/.1 ahorrado a más.</li>
                <li class="list-group-item"><a style="color: #1A6CA7;"
                    class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i class="fas fa-check"></i></a> Crece tu dinero con
                  altas tasas de interes</li>
                <li class="list-group-item"><a style="color: #1A6CA7;"
                    class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i class="fas fa-check"></i></a> Ahorra en el tiempo
                  que tengas y el monto que quieras.</li>
                <li class="list-group-item"><a style="color: #1A6CA7;"
                    class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i class="fas fa-check"></i></a> Apertura tu cuenta
                  gratis.</li>
                <li class="list-group-item"><a style="color: #1A6CA7;"
                    class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i class="fas fa-check"></i></a> Retira tu dinero
                  cuando quieras.</li>
                <li class="list-group-item"><a style="color: #1A6CA7;"
                    class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i class="fas fa-check"></i></a> Renovación
                  automatica de contrato.</li>
              </ul>
            </div>
            <div class="tab-pane fade" id="pills-profile2" role="tabpanel" aria-labelledby="pills-profile-tab">
              <ul class="list-group list-group-flush">
                <li class="list-group-item" style="background-color: white!important;color: #1A6CA7;"><strong>Personas
                    Naturales</strong></li>
                <li class="list-group-item"><a style="color: #1A6CA7;"
                    class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i class="fas fa-check"></i></a> Monto mínimo de
                  apertura de S/. 500.00</li>
                <li class="list-group-item"><a style="color: #1A6CA7;"
                    class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i class="fas fa-check"></i></a> Documento Nacional
                  de Identidad (DNI)</li>
                <li class="list-group-item" style="background-color: white!important;color: #1A6CA7;"><strong>Personas
                    Jurídicas</strong></li>
                <li class="list-group-item"><a style="color: #1A6CA7;"
                    class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i class="fas fa-check"></i></a> Monto mínimo de
                  apertura de S/. 500.00</li>
                <li class="list-group-item"><a style="color: #1A6CA7;"
                    class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i class="fas fa-check"></i></a> Ficha RUC -
                  Registro Único del Contribuyente</li>
                <li class="list-group-item"><a style="color: #1A6CA7;"
                    class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i class="fas fa-check"></i></a> DNI del
                  representante legal</li>
              </ul>
            </div>
            <div class="tab-pane fade active show" id="pills-contact2" role="tabpanel"
              aria-labelledby="pills-contact-tab">
              <p>&nbsp;&nbsp;Las tasas depende del que elija:</p>
              <table class="table table-responsive-sm">
                <thead style="background-color: #1A6CA7;color:white;">
                  <tr>
                    <th scope="col">Importe desde:</th>
                    <th scope="col">90 DIAS</th>
                    <th scope="col">180 DIAS</th>
                    <th scope="col">360 DIAS</th>
                    <th scope="col">540 DIAS</th>
                    <th scope="col">720 DIAS</th>
                  </tr>
                </thead>
                <tbody>
                  <tr style="background-color: #f0f4f5">
                    <th scope="row">S/. 20.00 a S/. 99.00</th>
                    <td>1.50 %</td>
                    <td>1.90 %</td>
                    <td>7.00 %</td>
                    <td>17.60 %</td>
                    <td>18.00 %</td>
                  </tr>
                  <tr style="background-color: white;">
                    <th scope="row">S/. 100.00 a S/. 499.00</th>
                    <td>1.90 %</td>
                    <td>2.30 %</td>
                    <td>7.60 %</td>
                    <td>18.00 %</td>
                    <td>19.50 %</td>
                  </tr>
                  <tr style="background-color: #f0f4f5">
                    <th scope="row">S/. 500.00 a S/. 999.00</th>
                    <td>2.30 %</td>
                    <td>2.80 %</td>
                    <td>8.00 %</td>
                    <td>19.20 %</td>
                    <td>20.00 %</td>
                  </tr>
                  <tr style="background-color: white;">
                    <th scope="row">S/. 1,000.00 a S/. 4,999.00</th>
                    <td>2.80 %</td>
                    <td>3.80 %</td>
                    <td>8.60 %</td>
                    <td>19.80 %</td>
                    <td>20.80 %</td>
                  </tr>
                  <tr style="background-color: #f0f4f5">
                    <th scope="row">S/. 5,000.00 a S/. 9,999.00</th>
                    <td>3.80 %</td>
                    <td>4.20 %</td>
                    <td>9.50 %</td>
                    <td>21.50 %</td>
                    <td>22.00 %</td>
                  </tr>
                  <tr style="background-color: white;">
                    <th scope="row">S/. 10,000.00 a S/. 19,999.00</th>
                    <td>4.30 %</td>
                    <td>4.50 %</td>
                    <td>10.20 %</td>
                    <td>22.00 %</td>
                    <td>23.60 %</td>
                  </tr>
                  <tr style="background-color: #f0f4f5">
                    <th scope="row">S/. 20,000.00 a S/. 50,999.00</th>
                    <td>4.80 %</td>
                    <td>5.00 %</td>
                    <td>11.00 %</td>
                    <td>23.50 %</td>
                    <td>25.00 %</td>
                  </tr>
                  <tr style="background-color: white;">
                    <th scope="row">S/. 60,000.00 a S/. 100,999.00</th>
                    <td>5.30 %</td>
                    <td>5.50 %</td>
                    <td>12.80 %</td>
                    <td>24.00 %</td>
                    <td>26.00 %</td>
                  </tr>
                  <tr style="background-color: #f0f4f5">
                    <th scope="row">S/. 110,000.00 a S/. 500,999.00</th>
                    <td>6.00 %</td>
                    <td>6.60 %</td>
                    <td>13.50 %</td>
                    <td>25.00 %</td>
                    <td>28.00 %</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

        </div>
    </div>
    <!-- Clientes -->
    <div class="grupop section_title text-center">
      <b></b>
      <h2 style="color: #1A6CA7;"> Grupo Possible</h2>
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