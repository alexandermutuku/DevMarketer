
  <nav class="navbar is-fixed-top">
    <div class="navbar navbar-menu is-hidden-desktop is-fixed-top thetop" id="navMenu">
      <div class="navbar-brand navbar-item m-l-100 m-t-30">
          {{-- <a href=""><img src="/img/logo.jpg" alt="LOGO" width="112" height="112"></a> --}}
      </div> <!--end navbar brand is hidden -->

    <div class="container is-fullscreen m-t-30">
          <navbar-item class="vertical m-l-100 m-t-10">
            <ul>
              <li><a href="/">HOME</a></li>
              <hr>
              <li><a href="{{route('service')}}">WHAT WE DO</a></li>
              <hr>
              <li><a href="">OUR STORY</a>
                <hr>
                <ul>
                  <div class=""><!--start of line flow down-->
                    <div class="" id="cool"></div>
                  </div> <!--end of line flow down-->

                  <div class="m-l-20">
                      <li><a href="{{route('about')}}">ABOUT</a></li>
                      <li><a href="{{route('blog')}}">BLOG</a></li>
                      <li><a href="{{route('project')}}">PROJECTS</a></li>
                  </div>
                </ul>
              </li>
              <li><a href="{{route('contact')}}">CONTACT</a></li>
              <hr>
            </ul>
          </navbar-item>
          <navbar-item class="vertical demopadding">
            <div class='icon social fb'><i class='fa fa-facebook'></i></div>
            <div class='icon social in'><i class='fa fa-instagram'></i></div>
            <div class='icon social tw'><i class='fa fa-twitter'></i></div>
            <div class='icon social in'><i class='fa fa-linkedin'></i></div>
          </navbar-item>
    </div>

    <div class="m-t-100 m-l-100 m-r-100">
      <hr>
      <div class="columns">
        <div class="column has-text-weight-light">
          {{-- <a href="{{route('contact')}}"> Contact</a><a href="">Careers</a><a href=""> Terms</a> --}}
          <div class="flex-center position-ref full-height" id="app">
              @if (Route::has('login'))
                  <div class="top-right links">
                      @if (Auth::check())
                          <a href="{{ url('/home') }}">Home</a>
                      @else
                          <a href="{{ url('/login') }}">Login</a>
                          <a href="{{ url('/register') }}">Register</a>
                      @endif
                  </div>
              @endif
          </div>
        </div>
        <div class="column has-text-right has-text-weight-light">
          <p>Copyright © 2018 Geosol Consulting</p>
        </div>
      </div>
    </div>
  </div>


  <div class="navbar-menu navbar-end">
      <div class="navbar-brand navbar-item m-l-100 m-t-10 ">
            <a href="/"><img src="img/logo.jpg" alt="LOGO"></a>
      </div> <!--end navbar display the logo alone-->
      <div class="navbar-burger navbar-item burger m-r-100 m-t-30" data-target="navMenu">
  				<span></span>
  				<span></span>
  				<span></span>
  		</div>
  </div><!--end burger visible on all devicec-->
</nav> <!--end navbar -->
