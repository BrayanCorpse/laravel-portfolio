<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brayan Manzano</title>
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

  <div class="page-container">
    @yield('content')
  </div>
   
  <script src="{{asset('js/index.js')}}"></script> 
  <script src="{{asset('js/cursor.js')}}"></script>
  @stack('js')
</body>

</html>
