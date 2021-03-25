@section('grupop')
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
            <center><img class="card-img-top" src="{{asset('img/logo-shahua.png')}}"  style="width: 220px;"></center>
           </div>
          </div>
        </div>     
        <div class="item">
          <div class="card">
           <div class="card-body">
            <center><img class="card-img-top" src="{{asset('img/logo-lumar.png')}}" style="width: 220px;"></center>
           </div>
          </div>
        </div>
        <div class="item">
          <div class="card">          
           <div class="card-body">          
            <center><img class="card-img-top" src="{{asset('img/logo-sand.png')}}"  style="width: 220px;"></center>
           </div>
          </div>
        </div>
        <div class="item">
          <div class="card">             
           <div class="card-body">             
            <center><img class="card-img-top" src="{{asset('img/logo-roman.png')}}" style="width: 220px;"></center>
           </div>
          </div>
        </div>    
        <div class="item">
          <div class="card">              
           <div class="card-body">              
            <center><img class="card-img-top" src="{{asset('img/logo-skies.png')}}"style="width: 220px;"></center>
           </div>
          </div>
        </div>             
      <!-- </div> -->
    </div>

    <script type="text/javascript" src="{{asset('js/script.js')}}"></script>    
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
@endsection
@yield('js')  
