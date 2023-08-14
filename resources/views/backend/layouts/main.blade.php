<!DOCTYPE html>
<html class="light" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="{{asset('apple-touch-icon.png')}}" property="og:image">
    <title>BMC | PANEL</title>
    <link rel="shortcut icon" href="{{asset('favicons/favicon.ico')}}" type="favicon.ico">
    <link rel="stylesheet" href="{{asset('css/spectre.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/spectre-exp.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/spectre-icons.min.css')}}">
    <link rel="stylesheet"    href="{{asset('css/backIndex.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

@php
    $words = explode(" ", Auth::user()->name);
    $initials = implode("", array_map(function($w) { return $w[0]; }, $words));
@endphp


<body id="body-pd">

    @if (session('status'))
       <div class="container grid-xs">
        <div class="columns">
          <div class="toast toast-primary text-center">
            <button class="btn btn-clear float-right" onclick="closeToast(this)"></button>
              {{ Session::get('status') }}
          </div>
        </div>
      </div>
    @endif

    @if (session('error'))
       <div class="container grid-xs">
        <div class="columns">
          <div class="toast toast-error text-center" style="background: #DD1838;">
            <button class="btn btn-clear float-right" onclick="closeToast(this)"></button>
              {{ Session::get('error') }}
          </div>
        </div>
      </div>
    @endif

    <div class="chip user-float">
        <figure class="avatar avatar-sm" data-initial="{{ $initials }}" ></figure>
        {{ Auth::user()->name }}
    </div>
  <div class="l-navbar" id="navbar">
    <nav class="nav">
        <div>
            <div class="nav__brand">
                <i class='bx bx-menu-alt-left nav__toggle' id="nav-toggle"></i>
                <a href="#" class="nav__logo">
                    <figure class="avatar avatar-md" data-initial="{{ $initials }}"
                            style="background: #807FE2;">
                    </figure>
                </a>
            </div>
            <div class="nav__list">
                <a href="{{ route('bmcpanel') }}" class="nav__link active">
                    <i class='bx bx-home-alt nav__icon'></i>
                    <span class="nav__name">Dashboard</span>
                </a>

                <div class="nav__link collapse">
                    <i class='bx bx-palette nav__icon'></i>
                    <span class="nav__name">Palettes</span>

                    <i class='bx bx-down-arrow collapse__link'></i>

                    <ul class="collapse__menu">
                        <a href="{{ route('createPalette') }}" class="collapse__sublink">
                            Create
                        </a>
                        <a href="{{ route('showPalette') }}" class="collapse__sublink">
                            List
                        </a>
                    </ul>
                </div>

                <div class="nav__link collapse">
                    <i class='bx bx-color-fill nav__icon'></i>
                    <span class="nav__name">Shades</span>

                    <i class='bx bx-down-arrow collapse__link'></i>

                    <ul class="collapse__menu">
                        <a href="{{ route('createShade') }}" class="collapse__sublink">
                            Create
                        </a>
                        <a href="{{ route('showShade') }}" class="collapse__sublink">
                            List
                        </a>
                    </ul>
                </div>

                {{-- <a href="#" class="nav__link">
                    <i class='bx bx-cog nav__icon'></i>
                    <span class="nav__name">Settings</span>
                </a> --}}

                <div class="nav__link collapse">
                    <i class='bx bx-user-plus nav__icon'></i>
                    <span class="nav__name">Users</span>

                    <i class='bx bx-down-arrow collapse__link'></i>

                    <ul class="collapse__menu">
                        <a href="{{ route('register') }}" class="collapse__sublink">
                            Create
                        </a>
                    </ul>
                </div>

                <div class="nav__link collapse">
                    <i class='bx bx-image nav__icon'></i>
                    <span class="nav__name">Covers</span>

                    <i class='bx bx-down-arrow collapse__link'></i>

                    <ul class="collapse__menu">
                        <a href="{{ route('createCover') }}" class="collapse__sublink">
                            Create
                        </a>
                        <a href="{{ route('showCover') }}" class="collapse__sublink">
                            List
                        </a>
                    </ul>
                </div>

            </div>
        </div>

        <a href="{{ route('logout') }}" class="nav__link" 
            onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
            <i class='bx bx-log-out-circle nav__icon'></i>
            <span class="nav__name">Log Out</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" 
                method="POST" 
                style="display: none;">
            @csrf @method('POST')
        </form>
    </nav>
  </div>

  <main class="">
    <h1 class="name__section">@yield('name__section', 'BMC Panel')</h1>
    @yield('content')
  </main>

  <script src="{{ asset('js/backIndex.js') }}"></script>
  <script>
    function closeToast(toast) {
      toast.parentNode.remove();
    }
  </script>  
  @stack('js')

</body>

</html>
