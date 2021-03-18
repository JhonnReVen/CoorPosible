@extends('layouts.header')

@section('content')
<main class="opacidad opacidad2">

  <div class="home">
    <div class="home_background_container prlx_parent">
      <div class="home_background prlx"
        style="background-image: url(&quot;img/politicas.jpg&quot;); transform: translate(0%, -15.7377%) translate3d(0px, 0px, 0px);">
      </div>
    </div>
    <div class="bloquelugar">
      <h2>
        <center>Políticas de <strong></strong>Possible </center>
      </h2>
    </div>
  </div>
  <div class="contenedor">
    <aside>
      <h3 class="titulo">Temas</h3>
      <div class="indice">
        <a href="#tittle1">Seguridad al Cliente</a>
        <a href="#tittle2">Tarjetas de Debito</a>
        <a href="#tittle3">Tarjetas de Credito</a>
        <a href="#tittle4">Operaciones en Internet</a>
      </div>
    </aside>
    <div class="contenido">
      <div class="post">
        <h1 class="titulo" id="tittle1">Seguridad al Cliente</h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod scelerisque erat tincidunt hendrerit.
          Cras lobortis id diam sit amet consectetur. Suspendisse non pulvinar justo, ac commodo velit. Quisque maximus
          dolor ac magna molestie, sit amet commodo velit congue. Maecenas non dolor ut elit malesuada congue. Phasellus
          euismod nisi pharetra ante rutrum dignissim. Ut eget tortor ut sapien egestas sollicitudin. Aenean pulvinar
          varius augue, ac euismod tortor faucibus at. In commodo sodales turpis nec vehicula. Mauris luctus, risus non
          iaculis porttitor, felis eros sagittis enim, sed ultricies lacus magna quis urna.
        </p>
      </div>
      <div class="post">
        <h1 class="titulo" id="tittle2">Tarjetas de Debito</h1>
        <p>
          Ut sit amet vehicula lectus, nec vestibulum purus. Nulla a nibh magna. Pellentesque commodo commodo sapien eu
          sagittis. Aenean luctus mauris sit amet quam ornare, eu ultricies nunc auctor. Nulla volutpat purus eu
          venenatis facilisis. Nulla risus nisl, rhoncus vitae pulvinar nec, viverra eu odio. Duis nisi quam, gravida
          sed imperdiet sed, viverra fermentum turpis. Cras non iaculis augue, nec scelerisque nibh. Sed auctor dolor
          mi, sit amet placerat tellus sagittis eu. Curabitur nec luctus dolor. Ut congue rutrum vehicula. Ut viverra
          tincidunt nunc, vitae cursus nulla scelerisque aliquam.
        </p>
      </div>
      <div class="post">
        <h1 class="titulo" id="tittle3">Tarjetas de Credito</h1>
        <p>
          Aliquam congue nibh in urna porta blandit. Mauris nec mi elit. Duis ligula quam, suscipit nec hendrerit ac,
          efficitur pulvinar tortor. Quisque venenatis leo ac hendrerit molestie. Quisque malesuada, enim ut feugiat
          finibus, sem mi faucibus enim, vel rhoncus ante justo in nibh. Duis sit amet ipsum tempus, pellentesque ex
          sed, mollis erat. Sed metus nibh, tincidunt vel laoreet eget, bibendum at est.
        </p>
      </div>
      <div class="post">
        <h1 class="titulo" id="tittle4">Operaciones en Internet</h1>
        <p>
          Nullam ullamcorper tincidunt laoreet. Donec sapien sapien, egestas id justo et, tincidunt accumsan ipsum.
          Etiam molestie lectus a consectetur condimentum. Donec malesuada at sapien eu viverra. Integer rutrum libero
          vitae est semper malesuada. Quisque convallis enim et erat aliquam, a facilisis nunc posuere. Nulla ultrices,
          turpis in pulvinar feugiat, dolor enim interdum mauris, vitae egestas purus orci vel nibh. Aliquam eleifend
          est ac eleifend dictum. Nunc condimentum tincidunt placerat. Praesent varius ornare quam vitae placerat. Donec
          justo sapien, pretium vitae vestibulum at, molestie eu ipsum. Proin non turpis eget risus egestas ornare in
          nec tortor. Sed commodo lectus vitae tortor blandit, id auctor mauris tempus. Aliquam erat volutpat.
        </p>
      </div>
    </div>
  </div>
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