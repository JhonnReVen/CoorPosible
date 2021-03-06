@extends('layouts.header')

@section('content')

<main class="opacidad opacidad2">

    <div class=" bns--section position-relative" data-ga-seccion="banner principal">

        <div class="slider__item ">
            <div class="image_block"
                style="background-image: url(&quot;img/campañaahorra.jpeg&quot;); transform: translate(0%, -15.7377%) translate3d(0px, 15%, 0px);"
                alt="ASDASDAS"></div>
            <div class="color_block bg-red">
                <br><br>
                <h2>Cuenta Ahorro Inteligente</h2>
                <!--<p>Aprovecha nuestra campaña para poder obtener la primera cuenta de Possible</p>-->
                <p class="open-text"><strong>Ábrela aquí:</strong></p>
                <div id="btn-container" class="btn-container">
                    <a class=" btn btn-white" href="#indice">Sacar cuenta</a>

                    <a class=" btn btn-white  fab fa-whatsapp"
                        href="https://api.whatsapp.com/send?phone=51960359420&amp;text=%C2%A1Bienvenido%20a Possible, estamos para resolver todas tus dudas!"
                        target="_blank"> Contacta con un asesor</a></div>
            </div>

        </div>

    </div>

    <div class="contenedor">
        <aside>
            <h3 id="indice" class="titulo">Temas</h3>
            <div class="indice">
                <a href="#tittle1">Seguridad al Cliente</a>
                <a href="#tittle2">Tarjetas de Debito</a>
                <a href="#tittle3">Tarjetas de Credito</a>
                <a href="#tittle4">Operaciones en Internet</a>
            </div>
        </aside>
        <div class="contenido" id="#indice">
            <div class="post">
                <h1 class="titulo" id="tittle1">Seguridad al Cliente</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod scelerisque erat tincidunt
                    hendrerit. Cras lobortis id diam sit amet consectetur. Suspendisse non pulvinar justo, ac commodo
                    velit. Quisque maximus dolor ac magna molestie, sit amet commodo velit congue. Maecenas non dolor ut
                    elit malesuada congue. Phasellus euismod nisi pharetra ante rutrum dignissim. Ut eget tortor ut
                    sapien egestas sollicitudin. Aenean pulvinar varius augue, ac euismod tortor faucibus at. In commodo
                    sodales turpis nec vehicula. Mauris luctus, risus non iaculis porttitor, felis eros sagittis enim,
                    sed ultricies lacus magna quis urna.
                </p>
            </div>
            <div class="post">
                <h1 class="titulo" id="tittle2">Tarjetas de Debito</h1>
                <p>
                    Ut sit amet vehicula lectus, nec vestibulum purus. Nulla a nibh magna. Pellentesque commodo commodo
                    sapien eu sagittis. Aenean luctus mauris sit amet quam ornare, eu ultricies nunc auctor. Nulla
                    volutpat purus eu venenatis facilisis. Nulla risus nisl, rhoncus vitae pulvinar nec, viverra eu
                    odio. Duis nisi quam, gravida sed imperdiet sed, viverra fermentum turpis. Cras non iaculis augue,
                    nec scelerisque nibh. Sed auctor dolor mi, sit amet placerat tellus sagittis eu. Curabitur nec
                    luctus dolor. Ut congue rutrum vehicula. Ut viverra tincidunt nunc, vitae cursus nulla scelerisque
                    aliquam.
                </p>
            </div>
            <div class="post">
                <h1 class="titulo" id="tittle3">Tarjetas de Credito</h1>
                <p>
                    Aliquam congue nibh in urna porta blandit. Mauris nec mi elit. Duis ligula quam, suscipit nec
                    hendrerit ac, efficitur pulvinar tortor. Quisque venenatis leo ac hendrerit molestie. Quisque
                    malesuada, enim ut feugiat finibus, sem mi faucibus enim, vel rhoncus ante justo in nibh. Duis sit
                    amet ipsum tempus, pellentesque ex sed, mollis erat. Sed metus nibh, tincidunt vel laoreet eget,
                    bibendum at est.
                </p>
            </div>
            <div class="post">
                <h1 class="titulo" id="tittle4">Operaciones en Internet</h1>
                <p>
                    Nullam ullamcorper tincidunt laoreet. Donec sapien sapien, egestas id justo et, tincidunt accumsan
                    ipsum. Etiam molestie lectus a consectetur condimentum. Donec malesuada at sapien eu viverra.
                    Integer rutrum libero vitae est semper malesuada. Quisque convallis enim et erat aliquam, a
                    facilisis nunc posuere. Nulla ultrices, turpis in pulvinar feugiat, dolor enim interdum mauris,
                    vitae egestas purus orci vel nibh. Aliquam eleifend est ac eleifend dictum. Nunc condimentum
                    tincidunt placerat. Praesent varius ornare quam vitae placerat. Donec justo sapien, pretium vitae
                    vestibulum at, molestie eu ipsum. Proin non turpis eget risus egestas ornare in nec tortor. Sed
                    commodo lectus vitae tortor blandit, id auctor mauris tempus. Aliquam erat volutpat.
                </p>
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