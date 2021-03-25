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
        <center>Sección <strong>Ahorros</strong> </center>
      </h2>
    </div>
  </div>

  <div class="accordion container-xs container-md container-lg" id="accordionExample">

    <!-- AHORRO PLAZO FIJO -->
    <div class="card border-light accordionbg">
      <div class="acheaderbg card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne"
        aria-expanded="true" aria-controls="collapseOne">
        <h2 class="mb-0 iright2">
          <strong style="color:#1A6CA7; font-size:16px!important;">AHORRO PLAZO FIJO</strong>
          <!--                    <a class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc iright2"> 
                          </a> -->
        </h2>
      </div>

      <div id="collapseOne" class="collapse show container-md" aria-labelledby="headingOne"
        data-parent="#accordionExample">
        <div class="card-body">
          Deposita en soles a un plazo determinado, y recibirás un título valor emitido por Cooperativa de Ahorro y
          Crédito Possible a tu nombre. Recibirás intereses superiores a los de una cuenta de ahorros y estos serán
          calculados de acuerdo al monto depositado y al tiempo que hayas decidido solicitar tu certificado.
        </div>
        <hr style="background-color: #F6F6FC;">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

          <li class="nav-item">
            <a class="nav-link md-opjjpmhoiojifppkkcdabiobhakljdgm_doc active btn-light" id="pills-contact-tab"
              data-toggle="pill" href="#pills-contact1" role="tab" aria-controls="pills-contact1"
              aria-selected="true"><strong>Tasas y Tarifas</strong></a>
          </li>

          <li class="nav-item" style="background-color: rgb(238, 247, 235);">
            <a class="nav-link md-opjjpmhoiojifppkkcdabiobhakljdgm_doc btn-light" id="pills-home-tab" data-toggle="pill"
              href="#pills-home1" role="tab" aria-controls="pills-home1"
              aria-selected="false"><strong>Beneficios</strong></a>
          </li>
          <li class="nav-item" style="background-color: rgb(238, 247, 235);">
            <a class="nav-link md-opjjpmhoiojifppkkcdabiobhakljdgm_doc btn-light" id="pills-profile-tab"
              data-toggle="pill" href="#pills-profile1" role="tab" aria-controls="pills-profile1"
              aria-selected="false"><strong>Requisitos</strong></a>
          </li>

          <!--<li class="nav-item">
                            <a class="nav-link" id="pills-transparencia-tab" data-toggle="pill" href="#pills-trasparencia" role="tab" aria-controls="pills-contact" aria-selected="false">Transparencia</a>
                          </li>-->
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade" id="pills-home1" role="tabpanel" aria-labelledby="pills-home-tab">
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><a style="color: #1A6CA7;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Crece tu dinero con altas tasas de interes</li>
              <li class="list-group-item"><a style="color: #1A6CA7;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Renovación automatica de contrato.</li>


            </ul>
          </div>
          <div class="tab-pane fade" id="pills-profile1" role="tabpanel" aria-labelledby="pills-profile-tab">
            <ul class="list-group list-group-flush">
              <li class="list-group-item" style="background-color: white!important;color: #1A6CA7;"><strong>Personas
                  Naturales</strong></li>
              <li class="list-group-item"><a style="color: #1A6CA7;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Monto mínimo de apertura de S/. 500.00</li>
              <li class="list-group-item"><a style="color: #1A6CA7;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Documento Nacional de Identidad (DNI)</li>
              <li class="list-group-item" style="background-color: white!important;color: #1A6CA7;"><strong>Personas
                  Jurídicas</strong></li>
              <li class="list-group-item"><a style="color: #1A6CA7;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Monto mínimo de apertura de S/. 500.00</li>
              <li class="list-group-item"><a style="color: #1A6CA7;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Ficha RUC - Registro Único del Contribuyente</li>
              <li class="list-group-item"><a style="color: #1A6CA7;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> DNI del representante legal</li>
            </ul>
          </div>
          <div class="tab-pane fade active show" id="pills-contact1" role="tabpanel"
            aria-labelledby="pills-contact-tab">
            <p>&nbsp;&nbsp;Las tasas depende del plazo que elija:</p>
            <table class="table table-responsive-sm">
              <thead style="background-color: #1A6CA7;color:white;">
                <tr>
                  <th scope="col">Importe desde:</th>
                  <th scope="col">180 DIAS</th>
                  <th scope="col">360 DIAS</th>
                  <th scope="col">540 DIAS</th>
                  <th scope="col">720 DIAS</th>
                </tr>
              </thead>
              <tbody>
                <tr style="background-color: #f0f4f5">
                  <th scope="row">S/. 500.00 a S/. 4,999.00</th>
                  <td>3.50 %</td>
                  <td>10.80 %</td>
                  <td>17.00 %</td>
                  <td>25.00 %</td>
                </tr>
                <tr style="background-color: white;">
                  <th scope="row">S/. 5,000.00 a S/. 9,999.00</th>
                  <td>3.90 %</td>
                  <td>11.20 %</td>
                  <td>17.50 %</td>
                  <td>25.20 %</td>
                </tr>
                <tr style="background-color: #f0f4f5">
                  <th scope="row">S/. 10,000.00 a S/. 14,999.00</th>
                  <td>4.20 %</td>
                  <td>11.90 %</td>
                  <td>18.00 %</td>
                  <td>25.90 %</td>
                </tr>
                <tr style="background-color: white;">
                  <th scope="row">S/. 15,000.00 a S/. 19,999.00</th>
                  <td>4.70 %</td>
                  <td>13.30 %</td>
                  <td>18.50 %</td>
                  <td>26.00 %</td>
                </tr>
                <tr style="background-color: #f0f4f5">
                  <th scope="row">S/. 20,000.00 a S/. 30,999.00</th>
                  <td>4.90 %</td>
                  <td>14.00 %</td>
                  <td>19.00 %</td>
                  <td>26.50 %</td>
                </tr>
                <tr style="background-color: white;">
                  <th scope="row">S/. 31,000.00 a S/. 40,999.00</th>
                  <td>5.10 %</td>
                  <td>16.00 %</td>
                  <td>19.50 %</td>
                  <td>27.00 %</td>
                </tr>
                <tr style="background-color: #f0f4f5">
                  <th scope="row">S/. 41,000.00 a S/. 60,999.00</th>
                  <td>5.50 %</td>
                  <td>16.50 %</td>
                  <td>20.00 %</td>
                  <td>27.50 %</td>
                </tr>
                <tr style="background-color: white;">
                  <th scope="row">S/. 61,000.00 a S/. 80.999.00</th>
                  <td>5.90 %</td>
                  <td>17.00 %</td>
                  <td>20.50 %</td>
                  <td>28.00 %</td>
                </tr>
                <tr style="background-color: #f0f4f5">
                  <th scope="row">S/. 81,000.00 a S/. 99.999.00</th>
                  <td>6.00 %</td>
                  <td>17.50 %</td>
                  <td>21.00 %</td>
                  <td>28.50 %</td>
                </tr>
                <tr style="background-color: white;">
                  <th scope="row">S/. 100,000.00 a más</th>
                  <td>6.90 %</td>
                  <td>18.50 %</td>
                  <td>22.00 %</td>
                  <td>30.00 %</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!--<div class="tab-pane fade" id="pills-trasparencia" role="tabpanel" aria-labelledby="pills-transparencia-tab">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"><strong>Documentos</strong></li>
                              <li class="list-group-item">Resolución S.B.S N° 5120-2019</li>
                              <li class="list-group-item">Estatuto de Possible</li>
                              <li class="list-group-item">Solicitud de Ingreso</li>
                             
                            </ul>
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item"><strong>Varios</strong></li>
                              <li class="list-group-item">Tarifario de tasas de interés pasivas</li>
                              <li class="list-group-item">Reglamento general de créditos y cobranzas</li>
                              
                              <li class="list-group-item">Comunicados</li>
                              
    
                            </ul>
                          </div>-->
        </div>

      </div>
    </div>
    <!-- AHORRO MOVIL -->
    <div class="card border-light accordionbg">
      <div class="card-header acheaderbg" id="headingTwo" style="background-color:#F0FDFC;cursor:pointer;"
        data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <h2 class="mb-0">
          <strong style="color:#1A6CA7; font-size:16px!important;">AHORRO MOVIL</strong>
          <a class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc iright2"> </a>
        </h2>
      </div>

      <div id="collapseTwo" class="collapse container-md" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="card-body">
          Deposita en soles a un plazo determinado, y recibirás un título valor emitido por Cooperativa de Ahorro y
          Crédito Possible a tu nombre. Recibirás intereses superiores a los de una cuenta de ahorros y estos serán
          calculados de acuerdo al monto depositado y al tiempo que hayas decidido solicitar tu certificado.
        </div>
        <hr style="background-color: #F6F6FC;">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

          <li class="nav-item" style="background-color: #f0f5ff;">
            <a class="nav-link md-opjjpmhoiojifppkkcdabiobhakljdgm_doc active btn-light" id="pills-contact-tab"
              data-toggle="pill" href="#pills-contact2" role="tab" aria-controls="pills-contact2"
              aria-selected="true"><strong>Tasas y Tarifas</strong></a>
          </li>

          <li class="nav-item" style="background-color: #f0f5ff;">
            <a class="nav-link md-opjjpmhoiojifppkkcdabiobhakljdgm_doc btn-light" id="pills-home-tab" data-toggle="pill"
              href="#pills-home2" role="tab" aria-controls="pills-home2"
              aria-selected="false"><strong>Beneficios</strong></a>
          </li>
          <li class="nav-item" style="background-color: #f0f5ff;">
            <a class="nav-link md-opjjpmhoiojifppkkcdabiobhakljdgm_doc btn-light" id="pills-profile-tab"
              data-toggle="pill" href="#pills-profile2" role="tab" aria-controls="pills-profile2"
              aria-selected="false"><strong>Requisitos</strong></a>
          </li>
        </ul>
        <div class="tab-content container" id="pills-tabContent">
          <div class="tab-pane fade" id="pills-home2" role="tabpanel" aria-labelledby="pills-home-tab">
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><a style="color: #1A6CA7;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Pagamos intereses desde S/.1 ahorrado a más.</li>
              <li class="list-group-item"><a style="color: #1A6CA7;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Crece tu dinero con altas tasas de interes</li>
              <li class="list-group-item"><a style="color: #1A6CA7;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Ahorra en el tiempo que tengas y el monto que quieras.</li>
              <li class="list-group-item"><a style="color: #1A6CA7;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Apertura tu cuenta gratis.</li>
              <li class="list-group-item"><a style="color: #1A6CA7;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Retira tu dinero cuando quieras.</li>
              <li class="list-group-item"><a style="color: #1A6CA7;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Renovación automatica de contrato.</li>

            </ul>
          </div>
          <div class="tab-pane fade" id="pills-profile2" role="tabpanel" aria-labelledby="pills-profile-tab">
            <ul class="list-group list-group-flush">
              <li class="list-group-item" style="background-color: white!important;color: #1A6CA7;"><strong>Personas
                  Naturales</strong></li>
              <li class="list-group-item"><a style="color: #1A6CA7;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Monto mínimo de apertura de S/. 500.00</li>
              <li class="list-group-item"><a style="color: #1A6CA7;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Documento Nacional de Identidad (DNI)</li>
              <li class="list-group-item" style="background-color: white!important;color: #1A6CA7;"><strong>Personas
                  Jurídicas</strong></li>
              <li class="list-group-item"><a style="color: #1A6CA7;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Monto mínimo de apertura de S/. 500.00</li>
              <li class="list-group-item"><a style="color: #1A6CA7;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> Ficha RUC - Registro Único del Contribuyente</li>
              <li class="list-group-item"><a style="color: #1A6CA7;" class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i
                    class="fas fa-check"></i></a> DNI del representante legal</li>
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

  </div>




  <!-- Clientes -->
<div class="section_title text-center">
  <h2 style="color:#1a6ca7"> Grupo Possible</h2>
</div>
<!-- <div class="card card-group container border-light"> -->
  <div class="owl-socios owl-carousel owl-theme container-md pb-4 container_lg">
    <!-- <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4" style="justify-content: center;"> -->
      
        <div class="item">
          <div class="card">
           <div class="card-body">
            <center><img class="card-img-top" src="{{asset('img/logo-shahua.png')}}"  style="width: 230px;"></center>
           </div>
          </div>
        </div>     
        <div class="item">
          <div class="card">
           <div class="card-body">
            <center><img class="card-img-top" src="{{asset('img/logo-lumar.png')}}" style="width: 230px;"></center>
           </div>
          </div>
        </div>
        <div class="item">
          <div class="card">          
           <div class="card-body">          
            <center><img class="card-img-top" src="{{asset('img/logo-sand.png')}}"  style="width: 230px;"></center>
           </div>
          </div>
        </div>
        <div class="item">
          <div class="card">             
           <div class="card-body">             
            <center><img class="card-img-top" src="{{asset('img/logo-roman.png')}}" style="width: 230px;"></center>
           </div>
          </div>
        </div>    
        <div class="item">
          <div class="card">              
           <div class="card-body">              
            <center><img class="card-img-top" src="{{asset('img/logo-skies.png')}}"style="width: 230px;"></center>
           </div>
          </div>
        </div>             
      <!-- </div> -->
    </div>
</main>

@endsection