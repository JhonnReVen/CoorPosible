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
        <center>Presta <strong></strong> Diario</center>
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
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade" id="pills-home1" role="tabpanel" aria-labelledby="pills-home-tab">
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><a style="color: #1A6CA7;"
                    class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i class="fas fa-check"></i></a> Crece tu dinero con
                  altas tasas de interes</li>
                <li class="list-group-item"><a style="color: #1A6CA7;"
                    class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i class="fas fa-check"></i></a> Renovación
                  automatica de contrato.</li>


              </ul>
            </div>
            <div class="tab-pane fade" id="pills-profile1" role="tabpanel" aria-labelledby="pills-profile-tab">
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
                    class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc"><i class="fas fa-check"></i></a> Documentos del
                  Ingreso Percibido (Dependiente: Boletas de Pago,Recibos por Honoarios; Independientes:
                  Boletas,Facturas,Cuadernos de Movimientos)</li>
              </ul>
            </div>
            <div class="tab-pane fade active show" id="pills-contact1" role="tabpanel"
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
                    <th scope="row">S/. 300.00 a S/. 999.00</th>
                    <td>1</td>
                    <td>1</td>
                    <td>10.00 %</td>
                    <td>14.00 %</td>
                    <td>214.00 %</td>
                    <td>382.00 %</td>
                  </tr>
                  <tr style="background-color: white;">
                    <th scope="row">S/. 1,000.00 a S/. 2,999.00</th>
                    <td>1</td>
                    <td>1</td>
                    <td>10.50 %</td>
                    <td>14.00 %</td>
                    <td>231.00 %</td>
                    <td>382.00 %</td>
                  </tr>
                  <tr style="background-color: #f0f4f5">
                    <th scope="row">S/. 3,000.00 a S/. 4,999.00</th>
                    <td>1</td>
                    <td>1</td>
                    <td>11.00 %</td>
                    <td>14.00 %</td>
                    <td>250.00 %</td>
                    <td>382.00 %</td>
                  </tr>
                  <tr style="background-color: white;">
                    <th scope="row">S/. 5,000.00 a S/. 10,000.00</th>
                    <td>1</td>
                    <td>1</td>
                    <td>11.50 %</td>
                    <td>14.00 %</td>
                    <td>269.00 %</td>
                    <td>382.00 %</td>
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