<nav class="navbar has-shadow">
  <div class="container">
    <div class="navbar-brand">
      <a class="navbar-start m-t-5 m-b-5" href="{{route('home')}}">
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
        <a href="#" class="navbar-item">
          </i>Profile
        </a>
        <a href="#" class="navbar-item">
          </i>Notificatios
        </a>
        <a href="{{route('manage.dashboard')}}"class="navbar-item">
          Manage
        </a>
        <hr class="navbar-divider">
        <a href="#" class="navbar-item">
          Logout
        </a>
        </div>
      </div>
      @endif
    </div>

  </div>
</nav>
