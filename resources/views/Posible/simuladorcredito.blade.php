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
        <center>SIMULA <strong></strong>TU CREDITO</center>
      </h2>
    </div>
  </div>

  <div class="accordion container-xs container-md container-lg">
    <div class="card border-light  container-md">
      <div class="card-body">
        <div class="row row-fluid">
          <div class="col-lg-11">
            <p><strong class="titulobase">¿COMO FUNCIONA?</strong></p>
          </div>
          <h2 class="main-page-title first">Credito deseado</h2>

        </div>

        <p class="page-information">Ingresa el monto que esperas que se te sea prestado <strong> y simula la devolución
            segun el plazo y el monto</strong></p>
        <div id="tablero">
          <form action="javascript:calculacredito(this.form)">
            <div class="input-group mb-3">
              <!--    <label for=""><strong>Capital:</strong></label> -->
              <div class="input-group-text">
                <input class="form-check-input mt-0" type="radio" name="plazo" value="12" checked>Anual<br>
              </div>
              <br>

              <div class="input-group-text">
                <input class="form-check-input mt-0 pt-5" type="radio" name="plazo" value="1">Mensual<br>
              </div>
            </div>

            <input class="form-control" type="text" name="capital" value="0" size="10" maxlength="10"
              onkeypress="return validar(event,true)" onBlur="desenfoque(this)"
              onFocus="if(this.value==0){this.value=''}"><br>

            <strong>Interés:</strong>
            <input class="texto" type="text" name="intereses" value="0" size="4" maxlength="4"
              onkeypress="return validar(event,true)" onBlur="desenfoque(this)"
              onFocus="if(this.value==0){this.value=''}">%<br>


            <strong>Nº de cuotas:</strong>
            <input class="texto" onkeypress="return validar(event)" type="text" name="cuotas" value="0" size="3"
              maxlength="3" onBlur="desenfoque(this)" onFocus="if(this.value==0){this.value=''}"><br>


            <input type="submit" name="calcular" id="calcular" value="Calcular">
          </form>
        </div>

        <div id="table"></div>


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