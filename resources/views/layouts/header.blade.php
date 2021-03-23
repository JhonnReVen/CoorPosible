<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport"
    content="width=device-width, initial.scale=1, user-scalable=no, maxium-scale=1.0, minium-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <meta name="description" content="Posible Empresarial">
  <link href="{{asset('css/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/css/principal.css')}}" rel="stylesheet">
  <link href="{{asset('css/css/complement.css')}}" rel="stylesheet">
  <link href="{{asset('css/css/dimensions.css')}}" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400&display=swap"
    rel="stylesheet">
  <link href="{{asset('ext/fontawesome/css/all.css')}}" rel="stylesheet">
  <link href="{{asset('css/css/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/css/owl.theme.default.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/css/main.cssversion=3.6.11.css')}}" rel="stylesheet" type="text/css">

  @yield('css')

  <div id="fb-root"></div>

  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v10.0"
    nonce="WAbTGl7Z"></script>
</head>

<body>

  @include('layouts.nav')

  @yield('content')

  @include('layouts.footer')


</body>

</html>