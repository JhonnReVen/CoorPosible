<footer class="opacidad">

  <div class="bloquefinfo  container-fluid" style="justify-content: center;">
    <hr>
    <div class="card-group" style="margin-bottom: 10px;">

      <div class="card">
        <div class="card-body">
          <ul class="list-group list-group-flush">
            <li class="list-group-item card-title">Cooperativa possible</li>
            <li class="list-group-item"><a href="{{route('nosotros')}}"> Nosotros</a></li>
            <li class="list-group-item"><a href=""> Historia y equipo</a></li>
            <li class="list-group-item"><a href=""> Transparencia</a></li>
            <li class="list-group-item"><a href="{{route('grupo')}}"> Grupo possible</a></li>
          </ul>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <ul class="list-group list-group-flush">
            <li class="list-group-item card-title">Otros servicios</li>
            <li class="list-group-item"><a href=""> Bolsa de trabajo</a></li>
            <li class="list-group-item"><a href=""> Actualiza tus datos</a></li>
          </ul>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <ul class="list-group list-group-flush">
            <li class="list-group-item card-title">Información de interés</li>
            <li class="list-group-item"><a href=""> Noticias possible</a></li>
            <li class="list-group-item"><a href="{{route('plansocio')}}"> ¿Quieres ser un socio</a>?</li>
            <li class="list-group-item"><a href=""> ¿Quieres adquirir un producto?</a></li>
          </ul>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <ul class="list-group list-group-flush">
            <li class="list-group-item card-title">Contacto</li>
            <li class="list-group-item"><a href="{{route('agencias')}}"> Ubícanos</a></li>
            <li class="list-group-item"><a href="mailto:consultas@coopacpossible.com"> consultas@coopacpossible.com</a>
            </li>
            <li class="list-group-item"><a href="tel:(051)-602082"> Llámanos: (051)-602082</a></li>
            <li class="list-group-item fab fa-whatsapp"><a
                href="https://api.whatsapp.com/send?phone=51960359420&amp;text=%C2%A1Bienvenido%20a Possible!"
                target="_blank"> 960359420</a></li>

          </ul>
        </div>
      </div>

    </div>
  </div>

  <div class="bloquefe container">
    <div class="bloquefe1">
      &copy; Cooperativa Possible ©2020. Todos los Derechos Reservados
    </div>
    <div class="bloquefe2">
      <a href="https://www.facebook.com/CoopacPossible/" target="_blank"><i class="fab fa-facebook-f"></i></a>
      <a href=""><i class="fab fa-instagram"></i></a>
      <a href=""><i class="fab fa-twitter"></i></a></div>
  </div>

</footer>

<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>

@yield('js')