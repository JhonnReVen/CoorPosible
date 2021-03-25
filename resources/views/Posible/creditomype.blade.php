@extends('layouts.header')

@section('content')
<main class="opacidad opacidad2">

  <div class="home">
    <div class="home_background_container prlx_parent">
      <div class="home_background prlx"
        style="background-image: url(&quot;img/seccioncreditos.jpg&quot;); transform: translate(0%, -15.7377%) translate3d(0px, 0px, 0px);">
      </div>
    </div>
    <div class="bloquelugar">
      <h2>
        <center>Presta <strong></strong> MYPE</center>
      </h2>
    </div>
  </div>

  <!-- ACORDION DE SOCIO -->
  <div class="accordion container-xs container-md container-lg">

    <!-- SOCIO KIDS -->
    <div class="card border-light  container-md">

      <div class="card-body">
        <div class="row row-fluid">
          <div class="col-lg-11">
            <p><strong class="titulobase">¿COMO FUNCIONA?</strong></p>

          </div>
        </div>
      </div>

      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <div id="collapseThree" class="collapse show container-md" aria-labelledby="headingThree"
          data-parent="#accordionExample">
          <div class="card-body">
            Deposita en soles a un plazo determinado, y recibirás un título valor emitido por Cooperativa de Ahorro y
            Crédito Possible a tu nombre. Recibirás intereses superiores a los de una cuenta de ahorros y estos serán
            calculados de acuerdo al monto depositado y al tiempo que hayas decidido solicitar tu certificado.
          </div>
          <hr style="background-color:#F6F6FC;">
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

            <li class="nav-item" style="background-color: #f0f5ff;">
              <a class="nav-link md-opjjpmhoiojifppkkcdabiobhakljdgm_doc active btn-light" id="pills-contact-tab"
                data-toggle="pill" href="#pills-contact3" role="tab" aria-controls="pills-contact3"
                aria-selected="true"><strong>Tasas y Tarifas</strong></a>
            </li>

            <li class="nav-item" style="background-color: #f0f5ff;">
              <a class="nav-link md-opjjpmhoiojifppkkcdabiobhakljdgm_doc btn-light" id="pills-home-tab"
                data-toggle="pill" href="#pills-home3" role="tab" aria-controls="pills-home3"
                aria-selected="false"><strong>Beneficios</strong></a>
            </li>
            <li class="nav-item" style="background-color: #f0f5ff;">
              <a class="nav-link md-opjjpmhoiojifppkkcdabiobhakljdgm_doc btn-light" id="pills-profile-tab"
                data-toggle="pill" href="#pills-profile3" role="tab" aria-controls="pills-profile3"
                aria-selected="false"><strong>Requisitos</strong></a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade" id="pills-home3" role="tabpanel" aria-labelledby="pills-home-tab">
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><a style="color: #1A6CA7;"
                    class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i class="fas fa-check"></i></a> Crece tu dinero con
                  altas tasas de interes</li>
                <li class="list-group-item"><a style="color: #1A6CA7;"
                    class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i class="fas fa-check"></i></a> Renovación
                  automatica de contrato.</li>


              </ul>
            </div>
            <div class="tab-pane fade" id="pills-profile3" role="tabpanel" aria-labelledby="pills-profile-tab">
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><a style="color: #1A6CA7;"
                    class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i class="fas fa-check"></i></a> Ser Socio de la
                  Coopac Possible</li>
                <li class="list-group-item"><a style="color: #1A6CA7;"
                    class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i class="fas fa-check"></i></a> Documento Nacional
                  de Identidad (DNI)</li>
                <li class="list-group-item"><a style="color: #1A6CA7;"
                    class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i class="fas fa-check"></i></a> Recibo de Servicio
                  (Agua,Luz)</li>
                <li class="list-group-item"><a style="color: #1A6CA7;"
                    class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i class="fas fa-check"></i></a> Ceritificado de
                  Depósito Vigente</li>
              </ul>
            </div>
            <div class="tab-pane fade show active" id="pills-contact3" role="tabpanel"
              aria-labelledby="pills-contact-tab">
              <p>&nbsp;&nbsp;Las tasas depende del plazo que elija:</p>
              <table class="table table-responsive-sm">
                <thead style="background-color: #1A6CA7;color:white;">
                  <tr>
                    <th scope="col">Monto desde:</th>
                    <th scope="col" colspan="2" style="text-align: center;    border: 2px solid;">PLAZOS</th>
                    <th scope="col" colspan="2" style="text-align: center;    border: 2px solid;">TEM</th>
                    <th scope="col" colspan="2" style="text-align: center;    border: 2px solid;">TEA</th>
                  </tr>
                </thead>
                <tbody>
                  <tr style="background-color: #f0f4f5">
                    <th></th>
                    <td style="background-color: #248ad3;color: white;"><strong>MÍNIMO</strong></td>
                    <td style="background-color: #248ad3;color: white;"><strong>MÁXIMO</strong></td>
                    <td style="background-color: #248ad3;color: white;"><strong>MÍNIMO</strong></td>
                    <td style="background-color: #248ad3;color: white;"><strong>MÁXIMO</strong></td>
                    <td style="background-color: #248ad3;color: white;"><strong>MÍNIMO</strong></td>
                    <td style="background-color: #248ad3;color: white;"><strong>MÁXIMO</strong></td>
                  </tr>
                  <tr style="background-color: #f0f4f5">
                    <th scope="row">S/. 300.00 a S/. 1,000.00</th>
                    <td>6</td>
                    <td>24</td>
                    <td>4.50 %</td>
                    <td>6.00 %</td>
                    <td>69.59 %</td>
                    <td>101.22%</td>
                  </tr>
                  <tr style="background-color: white;">
                    <th scope="row">S/. 1,001.00 a S/. 3,000.00</th>
                    <td>6</td>
                    <td>24</td>
                    <td>4.30 %</td>
                    <td>6.00 %</td>
                    <td>65.73 %</td>
                    <td>101.22%</td>
                  </tr>
                  <tr style="background-color: #f0f4f5">
                    <th scope="row">S/. 3,001.00 a S/. 5,000.00</th>
                    <td>6</td>
                    <td>24</td>
                    <td>4.10 %</td>
                    <td>6.00 %</td>
                    <td>61.96 %</td>
                    <td>101.22%</td>
                  </tr>
                  <tr style="background-color: white;">
                    <th scope="row">S/. 5,001.00 a S/. 10,000.00</th>
                    <td>6</td>
                    <td>24</td>
                    <td>3.90 %</td>
                    <td>6.00 %</td>
                    <td>58.27 %</td>
                    <td>101.22%</td>
                  </tr>
                  <tr style="background-color: #f0f4f5;">
                    <th scope="row">S/. 5,001.00 a S/. 10,000.00</th>
                    <td>6</td>
                    <td>24</td>
                    <td>3.80 %</td>
                    <td>6.00 %</td>
                    <td>56.45 %</td>
                    <td>101.22%</td>
                  </tr>
                  <tr style="background-color: white;">
                    <th scope="row">S/. 10,001.00 a S/. 15,000.00</th>
                    <td>6</td>
                    <td>24</td>
                    <td>3.70 %</td>
                    <td>6.00 %</td>
                    <td>54.65 %</td>
                    <td>101.22%</td>
                  </tr>
                  <tr style="background-color: #f0f4f5;">
                    <th scope="row">S/. 15,001.00 a S/. 20,000.00</th>
                    <td>6</td>
                    <td>24</td>
                    <td>3.90 %</td>
                    <td>6.00 %</td>
                    <td>58.27 %</td>
                    <td>101.22%</td>
                  </tr>
                  <tr style="background-color: white;">
                    <th scope="row">S/. 20,001.00 a S/. 30,000.00</th>
                    <td>6</td>
                    <td>24</td>
                    <td>3.50 %</td>
                    <td>6.00 %</td>
                    <td>51.11 %</td>
                    <td>101.22%</td>
                  </tr>
                  <tr style="background-color: #f0f4f5;">
                    <th scope="row">S/. 30,001.00 a S/. 50,000.00</th>
                    <td>6</td>
                    <td>24</td>
                    <td>3.30 %</td>
                    <td>6.00 %</td>
                    <td>47.64 %</td>
                    <td>101.22%</td>
                  </tr>
                  <tr style="background-color: white;">
                    <th scope="row">S/. 50,001.00 a S/. 70,000.00</th>
                    <td>6</td>
                    <td>24</td>
                    <td>3.20 %</td>
                    <td>6.00 %</td>
                    <td>45.93 %</td>
                    <td>101.22%</td>
                  </tr>
                  <tr style="background-color: #f0f4f5;">
                    <th scope="row">S/. 70,001.00 a S/. 100,000.00</th>
                    <td>6</td>
                    <td>24</td>
                    <td>3.10 %</td>
                    <td>6.00 %</td>
                    <td>44.25 %</td>
                    <td>101.22%</td>
                  </tr>
                </tbody>
              </table>
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