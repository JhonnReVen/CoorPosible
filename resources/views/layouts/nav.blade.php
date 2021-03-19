<header>
    <div class="topheader container-fluid">
        <a href="tel:(051)-602082"><i class="fa fa-phone"></i> 978 451244</a>
        <a href="mailto:consultas@posibleempresarial"><i class="fa fa-envelope"></i> consultas@posibleempresarial</a>
        <a href="https://www.google.com/maps/d/viewer?mid=1cX1hP65GnM7Wl2xXvYDG58PE8T1hUUMW&ll=-10.145912665384733%2C-76.19778168839068&z=6"
            target="_blank" onclick="menumclick2(0)" class="btnLinkout"><i class="fa fa-map-marker"></i> Nuestras
            agencias</a>
        <!--<a href="faq.php"  onclick="menumclick2(1)" class="btnLinkout"><i class="fa fa-question-circle"></i> Preguntas frecuentes</a>-->
    </div>
    <!-- Menu de navegacion-->
    <nav class="fixed-top">
        <a href="{{route('index')}}" class="navbar-brand  "><img class="imagenlogo" id="imagenlogoid"
                src="{{ asset('img/logo/logo.png') }}" alt="logo"></a>

        <!-- Boton y fondo de busqueda -->
        <div class="btn-buscar" id="idbtn-buscar"><i class="fas fa-search fa-rotate-90"></i></div>
        <div class="font-buscar" id="idfontbuscar">
            <div class="input-group col-md-6 offset-md-3">
                <input type="text" class="form-control" id="busqueda" placeholder="Buscar..."
                    aria-label="Buscar según necesidades" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-light" type="button" id="button-addon2"><i
                            class="fas fa-search fa-rotate-90"></i></button>
                </div>
            </div>
        </div>
        <!--Boton de registro -->
        <div class="icono btnposs" id="btnpossid"><i class="fas fa-user" style="padding-right:6px;"></i><span>Mi
                possible</span></div>
        <!-- Boton para abrir menu responsive -->
        <div class="icono" id="icon"><i class="fas fa-bars"></i></div>
        <!-- Bloque contendor menu en modo desktop y responsive-->
        <div class="bloque" id="bloques">

            <div class="bloque1">

                <!-- SUBMENU CONTENEDOR DESKTOP -->
                <!-- CREDITOS -->
                {{-- <div class="dropdown" id="dropdownid">
                    <a class="btnbar icon dropbtn selection ileft" id="edropbtn"
                        href="{{route('seccioncreditos')}}">Creditos</a>
                <div class="dropdown-content">
                    <div class="container smaling">
                        <div class="card-group">

                            <div class="card mb-3 bg-transparent"
                                style="width: 60rem!important; border: transparent!important;">
                                <div class="card-header bg-transparent text-center"
                                    style="border: transparent!important;">
                                    <div class="smtitle" style="color: #1a6ca7;"> Presta Diario</div>
                                </div>
                                <div class="card-body" style="min-height:2rem; text-align: justify;">
                                    <p class="card-text ">
                                        Deposita en soles a un plazo determinado aprovechando la tasa tasa de
                                        nuestra TEM y TEA
                                    </p>
                                </div>
                                <center>
                                    <img src="img/creditodiario.jpg" class="smimg">
                                    <a href="{{route('prestadiario')}}" onclick="menumclick(0)" class="btn-sm">Ver
                                        más</a>
                                </center>

                                <div class="card-footer bg-transparent"
                                    style="height: 2rem; border: transparent!important;">
                                </div>
                            </div>

                            <div class="card mb-3 bg-transparent"
                                style="width:8rem!important; border: transparent!important;">
                                <div class="card-header bg-transparent text-center"
                                    style="border: transparent!important;">
                                    <div class="smtitle" style="color: #1a6ca7;"> Credito a plazo fijo</div>
                                </div>
                                <div class="card-body" style="text-align: justify;min-height: 2rem;">
                                    <p class="card-text">
                                        Socio que está
                                        cursando estudios
                                        superiores, ya sea en
                                        universidad o instituto,
                                        a través del ahorro.</p>
                                </div>
                                <center>
                                    <img src="img/creditoplazofijo.jpg" class="smimg">
                                    <a href="{{route('creditofijo')}}" onclick="menumclick(0)" class="btn-sm">Ver
                                        más</a>
                                </center>

                                <div class="card-footer bg-transparent"
                                    style="height: 2rem; border: transparent!important;">
                                </div>
                            </div>

                            <div class="card mb-3 bg-transparent"
                                style="width: 8rem!important;border: transparent!important;">
                                <div class="card-header bg-transparent text-center"
                                    style="border: transparent!important;">
                                    <div class="smtitle" style="color: #1A6CA7"> Presta MYPE</div>
                                </div>
                                <div class="card-body" style="text-align: justify;min-height: 2rem;">
                                    <p class="card-text">
                                        Socio que tiene la dicha
                                        de ser padre, que busca
                                        una cultura sana en el
                                        orden de las fianzas; a
                                        través del ahorro.
                                    </p>
                                </div>
                                <center>
                                    <img class="smimg" src="img/creditomype.jpg">
                                    <a href="{{route('creditomype')}}" onclick="menumclick(0)" class="btn-sm">Ver
                                        más</a>
                                </center>
                                <div class="card-footer bg-transparent"
                                    style="height: 2rem; border: transparent!important;">
                                </div>
                            </div>



                        </div>
                    </div>

                </div>
            </div> --}}
            <!-- AHORROS -->

            <div class="dropdown" id="dropdownid2">
                <a class="btnbar icon dropbtn ileft" id="edropbtn">AHORROS</a>

                <div class="dropdown-content">
                    <div class="triangulo"></div>
                    <div class="container smaling">

                        <div class="card-group">

                            <div class="card bg-transparent"
                                style="padding-left:1rem; padding-right:1rem; border: transparent!important;">
                                <div class="card-header bg-transparent text-center"
                                    style="border: transparent!important;">
                                    <div class="smtitle" style="color: #1a4088;">
                                        <img src="{{ asset('img/svg/ahorro.svg') }}" style="max-width: 20%" alt="">
                                        Ahorro plazo fijo</div>
                                </div>
                                {{-- <div class="card-body" style="min-height:2rem; text-align: justify;">
                                    <p class="card-text ">
                                        Socio que tiene ganas de
                                        superación y emprende un
                                        negocio. Con disposición al
                                        ahorro y generar una sana
                                        cultura financiera.
                                    </p>
                                </div>
                                <center>
                                    <img src="img/ahorroplazofijo.jpg" class="smimg">
                                    <a href="{{route('ahorrofijo')}}" onclick="menumclick(1)" class="btn-sm">Ver
                                más</a>
                                </center> --}}

                                {{-- <div class="card-footer bg-transparent"
                                    style="height: 2rem; border: transparent!important;">
                                </div> --}}
                            </div>

                            <div class="card  bg-transparent"
                                style="padding-left:2rem; padding-right:2rem; border: transparent!important;">
                                <div class="card-header bg-transparent text-center"
                                    style="border: transparent!important;">
                                    <div class="smtitle" style="color: #1A6CA7;">
                                        <img src="{{ asset('img/svg/hucha.svg') }}" style="max-width: 20%;: " alt="">
                                        Ahorro movil</div>
                                </div>
                                {{-- <div class="card-body" style="text-align: justify;min-height: 2rem;">
                                    <p class="card-text">
                                        Socio que ya emprendió la
                                        enorme responsabilidad de
                                        generar ingresos . Y que
                                        busca generar una
                                        saludable cultura financiera.</p>
                                </div>
                                <center>
                                    <img src="img/ahorromovil.jpg" class="smimg">
                                    <a href="{{route('ahorromovil')}}" onclick="menumclick(1)" class="btn-sm">Ver
                                más</a>
                                </center>

                                <div class="card-footer bg-transparent"
                                    style="height: 2rem; border: transparent!important;">
                                </div> --}}
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!-- NOSOTROS -->
            <a class="btnbar" href="{{route('nosotros')}}">NOSOTROS</a>
            <!-- GRUPO POSS -->
            <a class="btnbar" href="{{route('grupo')}}">GRUPO POSIBLE</a>
            <!-- CAMPAÑAS -->
            <a class="btnbar" href="{{route('index')}}">CAMPAÑAS</a>

        </div>

        <div class="bloquem">

            <div class="container">

                <!-- <div class="" style="height: 200px;"> -->
                <!-- <div id="collapseOne" class="collapse show container-xs" aria-labelledby="headingOne" > -->
                <div class="card-body nav-color">
                    <!-- style="margin-bottom: 50px;" -->
                    <ul class="nav nav-pills card-header bloqmnav" id="pills-tab" role="tablist">

                        <li class="nav-item" id="bloqmnav-item" style="background-color: rgb(238, 247, 235);">
                            <!-- <a class="nav-link active btn-osm" id="pills-personas-tab"  data-toggle="pill" href="#pills-personas1, index.php" onclick="location.href='index.php'" role="tab" aria-controls="pills-personas" aria-selected="true">Personas</a> -->
                            <a class="nav-link active btn-osm" id="pills-personas-tab" data-toggle="pill"
                                href="#pills-credito1, index.php" onclick="menumclick(0)" role="tab"
                                aria-controls="pills-personas" aria-selected="true">Creditos</a>
                        </li>

                        <li class="nav-item" id="bloqmnav-item" style="background-color: rgb(238, 247, 235);">
                            <a class="nav-link btn-osm" id="pills-empresas-tab" data-toggle="pill"
                                href="#pills-ahorro1, empresas.php" onclick="menumclick(1)" role="tab"
                                aria-controls="pills-empresas" aria-selected="false">Ahorro</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade" id="pills-ahorro1" role="tabpanel"
                            aria-labelledby="pills-empresas-tab">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><a href="{{('ahorromovil')}}">Ahorro Movil</a> </li>
                                <li class="list-group-item"><a href="{{('ahorrofijo')}}" class="">Ahorro Plazo
                                        Fijo</a> </li>

                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-credito1" role="tabpanel"
                            aria-labelledby="pills-empresas-tab">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><a href="{{route('prestadiario')}}">Presta Diario</a>
                                </li>
                                <li class="list-group-item"><a href="{{route('creditofijo')}}" class="">Garantia
                                        Plazo Diario</a>
                                </li>
                                <li class="list-group-item"><a href="{{route('creditomype')}}" class="">Presta
                                        MYPE</a> </li>

                            </ul>
                        </div>
                        <div class="tab-pane fade active show" id="pills-credito1" role="tabpanel"
                            aria-labelledby="pills-personas-tab">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><a href="{{route('prestadiario')}}" class="">Presta
                                        Diario</a> </li>
                                <li class="list-group-item"><a href="{{route('creditofijo')}}" class="">Garantia
                                        Plazo Diario</a>
                                </li>
                                <li class="list-group-item"><a href="{{route('creditomype')}}" class="">Presta
                                        MYPE</a> </li>
                        </div>
                    </div>
                </div>


            </div>

            <div class="bloquem1">
                <a href=""><i class="fa fa-sign-in-alt"></i> Registrarse</a>
                <a href="{{route('nosotros')}}"> Nosotros</a>
                <a href="{{route('grupo')}}"></i>Grupo possible</a>
            </div>

            <div class="bloquem2">
                <a href="tel:(051)-602082"><i class="fa fa-phone"></i> (051)-602082</a>
                <a href="mailto:consultas@posibleempresarial"><i class="fa fa-envelope"></i> contactanos</a>
                <a href="https://www.google.com/maps/d/viewer?mid=1cX1hP65GnM7Wl2xXvYDG58PE8T1hUUMW&ll=-10.145912665384733%2C-76.19778168839068&z=6"
                    target="_blank"><i class="fa fa-map-marker"></i> Agencias</a>
            </div>

            <div class="bloque2">
                <a class="btnposs" href="tel:(051)-602082"><i class="fa fa-user"></i>Mi possible</a>
                <a class="btnreg" href="{{'auth.register'}}"><i class="fa fa-sign-in-alt "></i>Registrarse</a>
            </div>

            <div class="bloque3">
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </nav>
</header>