<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Geosol Consulting | Home </title>

      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <!--styles-->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link href="{{ asset('css/styles.css')}}" rel="stylesheet">

    </head> <!-- end of the header-->

    <body id='app'>
    <section class="hero is-transparent is-fullheight thetop">
      @include('_includes.nav.main_') <!--includes the main navigation -->
      <div class="hero-body">
        <div class="container fullheight">
          <div class="container has-text-left">
            <div class="column is-6 is-offset-2">
              <h1 class="title is-2 has-text-left">Locate and develop groundwater resources sustainbly</h1>
              <hr>
              <h2 class="subtitle m-t-20">Where do i drill?, How deep do I drill?, How much water can I abstract ? , What is it's quality? </h2>
              <br>
              <a href="">
                <div data-wipe="DISCOVER MORE" class="has-text-weight-light">
                  <span class="btn">DISCOVER MORE</span>
                </div>
              </a>
            </div>
            {{-- <h1>Here Goes in the content of the Landing page</h1> --}}
          </div> <!--try using the hero page styles -->
        </div>
      </div> <!-- contents of landing page -->
    </section> <!--end of section-->


    <div class="hero-body">
      <div class="container has-text-centered">
        <div class="columns is-vcentered">
          <div class="column is-5">
            {{-- <figure class="image is-4by3">
              <img src="http://placehold.it/800x600" alt="Description">
            </figure> --}}
          </div>
          <div class="column is-6 is-offset-1 has-text-right p-r-100">
            <h1 class="title is-2 has-text-right">
              What make us unique ?
            </h1>
            <hr>
            <h2 class="subtitle is-4 m-t-20 is-italic">
              Highly specialised
            </h2>
            <p class="lead ">
              We are highly specialised, we talk, eat, drink and sleep groundwater resources. In short in we are strictly a technical consultancy specialised in groundwater consultancy. We have learned overtime that this specialization has allowed us to focus on “core issues” and clearly understand trends impacting groundwater resources and evolved service offerings that address the shifting needs.
            </p>
            <br>
            <a href="">
              <div data-wipe="DISCOVER MORE" class="has-text-weight-light">
                <span class="btn">DISCOVER MORE</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div><!--end of section-->

    <div class="hero-body">
      <div class="has-text-centered">
        <div class="columns is-vcentered">
          <div class="column is-6 is-offset-1 has-text-left p-r-100">
            <h1 class="title is-2  has-text-left p-t-20">
              A diverse journey
            </h1>
            <hr>
            <h2 class="subtitle is-4 m-t-20">
              Solving diverse challenges
            </h2>
            <p class="lead">
              consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <br>
            <a href="">
              <div data-wipe="DISCOVER MORE" class="has-text-weight-light">
                <span class="btn">DISCOVER MORE</span>
              </div>
            </a>
          </div>
          <div class="column is-5">
            <div class="columns">
              <div class="column">
                <figure class="image is-0.5by1">
                  <img src="/img/pic_2.png" alt="Description">
                </figure>
                <figure class="image is-0.5by0.5 p-t-10">
                  <img src="/img/pic_1.png" alt="Description">
                </figure>
                <figure class="image is-2by3 p-t-10">
                  <img src="/img/pic_2.png" alt="Description">
                </figure>
              </div>

              <div class="column">
                <figure class="image is-0.5by0.5">
                  <img src="/img/pic_1.png" alt="Description">
                </figure>
                <figure class="image is-2by3 p-t-10 m-r-20">
                  <img src="/img/pic_2.png" alt="Description">
                </figure>
                <figure class="image is-2by3 p-t-10">
                  <img src="/img/pic_1.png" alt="Description">
                </figure>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> <!--end of section -->

<div class="hero-body">
<div class="container">
  <div class="tile is-ancestor">
    <div class="tile is-4 is-parent">
    <a href="">
      <article class="tile is-child gray post">
        <figure class="image is-0.5by1">
          <img src="/img/pic_3.png" alt="Description">
        </figure>
        <span class="post__date" href="">22nd January 2018 </span>
        <h2 class="post__title">Etiam ante tortor, faucibus sit amet gravida eget, accumsan et metus. Morbi sem metus, suscipit ac </h2>
      </article>
    </a>
    </div>

    <div class="tile is-vertical is-parent">
      <a href="">
      <article class="tile is-child gray post">
        <figure class="image is-0.5by1">
          <img src="/img/pic_2.png" alt="Description">
        </figure>
        <span class="post__date" href="">22nd January 2018 </span>
        <h2 class="post__title">Etiam ante tortor, faucibus sit amet gravida eget, accumsan et metus. Morbi sem metus, suscipit ac </h2>
      </article>
     </a>
    <a href="">
      <article class="tile is-child gold post">
        <figure class="image is-0.5by1">
          <img src="/img/pic_1.png" alt="Description">
        </figure>
        <span class="post__date" href="">22nd January 2018 </span>
        <h2 class="post__title">Etiam ante tortor, faucibus sit amet gravida eget, accumsan et metus. Morbi sem metus, suscipit ac </h2>
      </article>
    </a>
    </div>

    <div class="tile is-parent">
    <a href="">
      <article class="tile is-child gray post">
        <figure class="image is-0.5by1">
          <img src="/img/pic_1.png" alt="Description">
        </figure>
        <span class="post__date" href="">22nd January 2018 </span>
        <h2 class="post__title">Etiam ante tortor, faucibus sit amet gravida eget, accumsan et metus. Morbi sem metus, suscipit ac </h2>
      </article>
    </a>
    </div>
  </div>
  </div>
  </div>
    @include('_includes.footer')<!--includes the footer -->

  </body>
  <script>
      export default {
          data() {
              return {
                  activeTab: 0
              }
          }
      }
  </script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/jquery-3.3.1.js')}}"></script>  <!--for dev only -->
</html>
