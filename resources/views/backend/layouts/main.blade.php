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

<body id="body-pd">
  <div class="l-navbar" id="navbar">
    <nav class="nav">
        <div>
            <div class="nav__brand">
                <i class='bx bx-menu-alt-left nav__toggle' id="nav-toggle"></i>
                <a href="#" class="nav__logo">BMC Panel</a>
            </div>
            <div class="nav__list">
                <a href="{{ route('bmcpanel') }}" class="nav__link active">
                    <i class='bx bx-home-alt nav__icon'></i>
                    <span class="nav__name">Dashboard</span>
                </a>
                <a href="{{ route('createPalette') }}" class="nav__link">
                    <i class='bx bx-message-square nav__icon'></i>
                    <span class="nav__name">Palettes</span>
                </a>

                <div  class="nav__link collapse">
                    <i class='bx bx-folder nav__icon'></i>
                    <span class="nav__name">Projects</span>

                    <i class='bx bx-down-arrow collapse__link'></i>

                    <ul class="collapse__menu">
                        <a href="#" class="collapse__sublink">Data</a>
                        <a href="#" class="collapse__sublink">Group</a>
                        <a href="#" class="collapse__sublink">Members</a>
                    </ul>
                </div>

                <a href="#" class="nav__link">
                    <i class='bx bxs-doughnut-chart nav__icon'></i>
                    <span class="nav__name">Analytics</span>
                </a>
                <div class="nav__link collapse">
                    <i class='bx bx-user-plus nav__icon'></i>
                    <span class="nav__name">Team</span>

                    <i class='bx bx-down-arrow collapse__link'></i>

                    <ul class="collapse__menu">
                        <a href="#" class="collapse__sublink">Data</a>
                        <a href="#" class="collapse__sublink">Group</a>
                        <a href="#" class="collapse__sublink">Members</a>
                    </ul>
                </div>
                <a href="#" class="nav__link">
                    <i class='bx bx-cog nav__icon'></i>
                    <span class="nav__name">Settings</span>
                </a>
            </div>
        </div>

        <a href="#" class="nav__link">
            <i class='bx bx-log-out-circle nav__icon'></i>
            <span class="nav__name">Log Out</span>
        </a>
    </nav>
  </div>

  <main>
    <h1 class="name__section">@yield('name__section', 'BMC Panel')</h1>
    @yield('content')
  </main>

  <script src="{{ asset('js/backIndex.js') }}"></script>
  @stack('js')

</body>

</html>
