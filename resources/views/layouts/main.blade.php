<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <script src="https://www.googletagmanager.com/gtag/js?id=G-82X6D7FLZN" async=""></script><script>function gtag(){dataLayer.push(arguments)}window.dataLayer=window.dataLayer||[],gtag("js",new Date),gtag("config","G-82X6D7FLZN")</script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="📌 Hey there, I’m Brayan Manzano! First of all, thanks for visiting my personal website. I’m a Mexican ICT Engineer, Frontend, Backend Developer." name="description">
    <meta content="Brayan Manzano,Web Developer,HTML,CSS,JavaScript,Laravel, MySQL,PHP, Desarrollador web, base de datos" name="keywords">
    <meta content="Brayan Manzano" name="author">
    <meta content="Brayan Manzano Web Developer" property="og:title">
    <meta content="https://brayanmanzano.dev" property="og:url">
    <link href="https://brayanmanzano.dev" rel="canonical">
    <link rel="alternate" href="https://brayanmanzano.dev" hreflang="es-mx">
    <meta name="robots" content="index,follow">
    <meta content="website" property="og:type">
    <meta content="{{asset('apple-touch-icon.png')}}" property="og:image">
    <meta content="Brayan Manzano Web Developer." property="og:description">
    <title>Brayan Manzano</title>
    <link rel="shortcut icon" href="favicon.ico" type="{{asset('favicon.ico')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon-16x16.png')}}">
    <meta name="msapplication-TileColor" content="#807FE2">
    <meta name="theme-color" content="#807FE2">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/spectre.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/spectre-exp.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/spectre-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <div class="cursor"></div>

  @include('layouts.partials.navbar')
  @include('layouts.partials.partialNav')
  

  <div class="page-container">
    
    <header class="header-bmc">
      <div class="logo-bmc">
        <a class="btn btn-link" href="{{url('/')}}">
          <img src="{{asset('images/BMC.png')}}" alt="Brayan Manzano" width="100" height="100">
        </a>
      </div>
    </header>

    @if (Session::has('success'))
      <div class="container grid-xs">
        <div class="columns">
          <div class="toast toast-primary text-center">
            <button class="btn btn-clear float-left" onclick="closeToast(this)"></button>
            {{ Session::get('success') }}
          </div>
        </div>
      </div>
    @endif

    @error('email')
    <div class="container grid-xs">
      <div class="columns">
        <div class="toast toast-my-error text-center">
          <button class="btn btn-clear float-left" onclick="closeToast(this)"></button>
          {{ $message }}
        </div>
      </div>
    </div>
    @enderror

    @yield('content')

    @include('components.footer')

  </div>

 
 
   
  <script src="{{asset('js/index.js')}}"></script> 
  <script src="{{asset('js/cursor.js')}}"></script>
  <script>
    function closeToast(toast) {
      toast.parentNode.remove();
    }
  </script>  
  @stack('js')
</body>

</html>
