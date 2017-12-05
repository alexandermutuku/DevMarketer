<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DevMarketer</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
      <nav class="navbar has-shadow">
        <div class="container">
          <div class="navbar-brand">
            <a class="navbar-start" href="{{route('home')}}">
              <img src="{{asset('images/devmarketer-logo.png')}}" alt="DevMarketer Logo">
            </a>
            <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-20">Learn</a>
            <a href="#" class="navbar-item is-tab is-hidden-mobile">Discuss</a>
            <a href="#" class="navbar-item is-tab is-hidden-mobile">Share</a>

          </div>

          <div class="navbar-end" style="overflow: visible;">
            @if (Auth::guest())
            <a href="{{route('login')}}" class="navbar-item is-tab">Login</a>
            <a href="{{route('register')}}" class="navbar-item is-tab">Join The Community</a>
            @else
            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link">
                Hey Alex
              </a>

            <div class="navbar-dropdown">
              <a class="navbar-item">
                </i>Profile
              </a>
              <a class="navbar-item">
                </i>Notificatios
              </a>
              <a class="navbar-item">
                Settings
              </a>
              <hr class="navbar-divider">
              <a class="navbar-item">
                Logout
              </a>
              </div>
            </div>

            {{-- <button class="navbar navbar-item is-open is-tab">
              Hey alex <span class="icon"><i class="fa fa-caret-down"></i></span>
              <ul class="nav-bar-dropdown-menu is-tab">
                <li><a href="#">Profile</a> </li>
                <li><a href="#">Notifications</a></li>
                <li><a href="#">Settings</a></li>
                <li class="separator"></li>
                <li><a href="#">Logout</a></li>
              </ul>
            </button> --}}

            @endif
          </div>

        </div>
      </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
