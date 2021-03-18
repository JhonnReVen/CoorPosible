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
        <center>SIMULA <strong></strong>TU AHORRO</center>
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
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h2>Eliga el plazo que desee</h2>
                <form>
                  <input type="radio" id="3Mes" name="Grupo"> 3 Meses<br>
                  <input type="radio" id="6Mes" name="Grupo"> 6 Meses<br>
                  <input type="radio" id="12Mes" name="Grupo"> 12 Meses<br>
                  <input type="radio" id="18Mes" name="Grupo"> 18 Meses<br>
                  <input type="radio" id="24Mes" name="Grupo"> 24 Meses<br>

                  <h2> Ingrese el monto a depositar:</h2>
                  <input id="valor" type="number" onkeyUp="calcular();">
                </form>
                <br>
                <span id="intereses"></span>
                <br><br>
                <span id="result"></span>
                <br><br>
                <span id="total"></span>
                <br><br>
              </div>
            </div>
          </div>

          <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
          </script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
          </script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
          </script>
          </body>

          </html>

          <!-- Clientes -->
          <div class="grupop section_title text-center">
            <b></b>
            <h2 style="color: #1A6CA7;"> Grupo Possible</h2>
          </div>

          <div class="card card-group container border-light">
            <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4" style="justify-content: center;">

              <!-- img1 -->
              <div class="card-body">
                <center><img class="card-img-top" src="img/logo-lumar.png" alt="https://unsplash.com/@michaeldam">
                </center>
              </div>
              <!-- img2 -->
              <div class="card-body">
                <center><img class="card-img-top" src="img/logo-roman.png" alt="https://unsplash.com/@michaeldam">
                </center>
              </div>
              <!-- img3 -->
              <div class="card-body">
                <center><img class="card-img-top" src="img/logo-sand.png" alt="https://unsplash.com/@michaeldam">
                </center>
              </div>
              <!-- img4 -->
              <div class="card-body">
                <center><img class="card-img-top" src="img/logo-shahua.png" alt="https://unsplash.com/@michaeldam">
                </center>
              </div>
              <div class="card-body">
                <center><img class="card-img-top" src="img/logo-skies.png" alt="https://unsplash.com/@michaeldam">
                </center>
              </div>
            </div>
          </div>
</main>

@endsection