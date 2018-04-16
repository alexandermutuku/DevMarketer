<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Geosol Consulting | About</title>

      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <!--styles-->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link href="{{ asset('css/styles.css')}}" rel="stylesheet">
      <link rel="stylesheet" href="node_modules/uikit/dist/css/uikit.css">
      <link rel="stylesheet" href=""/>
      <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    </head> <!-- end of the header-->
    <body>

    <section class="hero is-transparent is-fullheight">

      @include('_includes.nav.main_') <!--includes the main navigation -->

      <div class="hero-body">
        <div class="container fullheight">
          <div class="container has-text-left">
              <div class="columns is-vcentered">
                <div class="column is-6 is-offset-1 has-text-left p-r-100">
                  <h1 class="title is-2">
                    The Company
                  </h1>
                  <div class="is-offset-3 p-l-50">
                    <h2 class="subtitle is-4 ">
                      Lorem ipsum dolor sit amet,
                    </h2>
                    <p class="lead">
                      consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>

                  </div>

                  <br>
                  <p class="has-text-right has-text-weight-light"></p>
                </div>
                <div class="column is-5">
                  <div class="columns">
                    <div class="column">
                      <figure class="image is-0.5by1">
                        <img src="http://placehold.it/800x600" alt="Description">
                      </figure>
                      <figure class="image is-0.5by0.5">
                        <img src="http://placehold.it/800x600" alt="Description">
                      </figure>
                      <figure class="image is-2by3">
                        <img src="http://placehold.it/800x600" alt="Description">
                      </figure>
                    </div>

                    <div class="column">
                      <figure class="image is-2by1">
                        <img src="http://placehold.it/800x600" alt="Description">
                      </figure>
                      <figure class="image is-2by3">
                        <img src="http://placehold.it/800x600" alt="Description">
                      </figure>
                      <figure class="image is-2by3">
                        <img src="http://placehold.it/800x600" alt="Description">
                      </figure>
                    </div>
                  </div>
                </div>
              </div>
            {{-- <h1>Here Goes in the content of the Landing page</h1> --}}
          </div> <!--try using the hero page styles -->
        </div>
      </div> <!-- contents of landing page -->

      <div class="section" id='app'>
        <div class="container">
        {{-- <button class="button block" @click="activeTab = 1">Set Music</button> --}}
        <b-tabs v-model="activeTab">
            <b-tab-item label="Pictures" class="is-tab">
              Nunc nec velit nec libero vestibulum eleifendCurabitur pulvinar congue luctus.Nullam hendrerit iaculis augue vitae ornareMaecenas vehicula pulvinar tellus, id sodales felis lobortis eget.Nunc nec velit nec libero vestibulum eleifend.Curabitur pulvinar congue luctus.Nullam hendrerit iaculis augue vitae ornare. Maecenas vehicula pulvinar tellus, id sodales felis lobortis eget.Nunc nec velit nec libero vestibulum eleifend.Curabitur pulvinar congue luctusNullam hendrerit iaculis augue vitae ornareMaecenas vehicula pulvinar tellus, id sodales felis lobortis eget.Nunc nec velit nec libero vestibulum eleifend.Curabitur pulvinar congue luctusNullam hendrerit iaculis augue vitae ornare. Maecenas vehicula pulvinar tellus, id sodales felis lobortis eget.
            </b-tab-item>

            <b-tab-item label="Music">
              NNunc nec velit nec libero vestibulum eleifendCurabitur pulvinar congue luctus.Nullam hendrerit iaculis augue vitae ornareMaecenas vehicula pulvinar tellus, id sodales felis lobortis eget.Nunc nec velit nec libero vestibulum eleifend.Curabitur pulvinar congue luctus.Nullam hendrerit iaculis augue vitae ornare. Maecenas vehicula pulvinar tellus, id sodales felis lobortis eget.Nunc nec velit nec libero vestibulum eleifend.Curabitur pulvinar congue luctusNullam hendrerit iaculis augue vitae ornareMaecenas vehicula pulvinar tellus, id sodales felis lobortis eget.Nunc nec velit nec libero vestibulum eleifend.Curabitur pulvinar congue luctusNullam hendrerit iaculis augue vitae ornare. Maecenas vehicula pulvinar tellus, id sodales felis lobortis eget.
            </b-tab-item>

            <b-tab-item label="Videos">
              Nunc nec velit nec libero vestibulum eleifendCurabitur pulvinar congue luctus.Nullam hendrerit iaculis augue vitae ornareMaecenas vehicula pulvinar tellus, id sodales felis lobortis eget.Nunc nec velit nec libero vestibulum eleifend.Curabitur pulvinar congue luctus.Nullam hendrerit iaculis augue vitae ornare. Maecenas vehicula pulvinar tellus, id sodales felis lobortis eget.Nunc nec velit nec libero vestibulum eleifend.Curabitur pulvinar congue luctusNullam hendrerit iaculis augue vitae ornareMaecenas vehicula pulvinar tellus, id sodales felis lobortis eget.Nunc nec velit nec libero vestibulum eleifend.Curabitur pulvinar congue luctusNullam hendrerit iaculis augue vitae ornare. Maecenas vehicula pulvinar tellus, id sodales felis lobortis eget.
            </b-tab-item>
        </b-tabs>
      </div>
      <h1>Updated for multi-gender dark action, oorah!</h1>


<div class="lightpage">

<div class="sexytabs">

  <ul>
    <li><a href="#Beyonce">
      <span>Bootylicious</span></a></li>
    <li><a href="#Fergie">
      <span>Fergalicious</span></a></li>
    <li><a href="#Rihanna">
      <span>Umbrella?</span></a></li>
  </ul>

  <div class="contents">
  <div id="Beyonce">
    <h2>Beyonce</h2>
    <img src="http://thumbs.hotnewhiphop.com/public/article/600_1359954424_17651c4dc1a8d1c5ba1c472544c51114.jpeg">
    <p>American Apparel locavore iPhone wayfarers put a bird on it.  Whatever McSweeney's Banksy letterpress Marfa.  Drinking vinegar PBR synth, tote bag kale chips typewriter shabby chic mlkshk.  Twee Wes Anderson semiotics Blue Bottle Tumblr, locavore ennui squid.  Blog tofu paleo try-hard mustache bicycle rights DIY.  Forage quinoa DIY master cleanse.  Freegan tote bag squid keffiyeh, sriracha try-hard tousled gentrify McSweeney's pickled pork belly Neutra literally.</p>

    <p>Actually synth Thundercats, pug direct trade wayfarers Schlitz. Gluten-free beard pickled wolf, vinyl cliche paleo authentic brunch Blue Bottle chambray keffiyeh Marfa 8-bit post-ironic. Lo-fi fixie occupy small batch. Salvia keytar cliche, occupy Brooklyn disrupt Helvetica gluten-free art party stumptown freegan gastropub cred. Freegan Truffaut keffiyeh Terry Richardson lo-fi, hoodie ennui. Readymade deep v selvage, tote bag church-key authentic flexitarian craft beer four loko biodiesel. VHS hashtag small batch drinking vinegar, wolf distillery YOLO post-ironic narwhal sustainable.</p>

  </div>

  <div id="Fergie">
    <h2>Fergie</h2>
    <img src="https://si0.twimg.com/profile_images/3282720177/1cfde8d5260721552f31a26cff5ccc22.png">
    <p>Bushwick semiotics meh artisan, whatever gastropub pop-up narwhal Cosby sweater stumptown VHS synth kogi art party McSweeney's.  Helvetica locavore actually cray paleo.  +1 PBR gentrify, direct trade  narwhal tattooed polaroid Helvetica readymade wolf Tumblr authentic try-hard hella.  Try-hard 90's gentrify art party.  Helvetica Intelligentsia +1, banjo try-hard tote bag organic fashion axe gluten-free chambray stumptown Echo Park beard.  Craft beer DIY beard, roof party tofu plaid sustainable Tonx.  Small batch letterpress salvia sartorial deep v ugh, High Life aesthetic hoodie Neutra Vice freegan flannel.</p>

  </div>

  <div id="Rihanna">
    <h2>Rihanna</h2>
    <img src="http://s1.evcdn.com/images/block/I0-001/001/867/008-9.jpeg_/rihanna-08.jpeg">
    <p>Chambray typewriter Odd Future, cliche Wes Anderson High Life Banksy cred bespoke Intelligentsia ethnic. YOLO gluten-free blog kale chips. Cliche Shoreditch church-key direct trade banjo ugh, forage pug meh typewriter yr chillwave wayfarers small batch. Trust fund Carles forage disrupt photo booth. Truffaut lo-fi Schlitz, Blue Bottle hoodie synth Thundercats. Actually cliche put a bird on it kitsch, ethical Thundercats synth drinking vinegar gluten-free lomo try-hard direct trade. Chambray viral you probably haven't heard of them salvia, ugh Pitchfork Terry Richardson selvage master cleanse.</p>

  </div>
  </div>
</div>

</div>


<div class="darkpage">

<div class="sexytabs dark">

  <ul>
    <li><a href="#Gosling">
      <span>Jottings</span></a></li>
    <li><a href="#Timberlake">
      <span>Benefits</span></a></li>
    <li><a href="#Lautner">
      <span>Furry?</span></a></li>
  </ul>

  <div class="contents">
  <div id="Gosling">
    <h2>Gosling</h2>
    <img src="http://imworld.aufeminin.com/story/20130805/ryan-gosling-56940_s96cx345cy200.jpg">
    <p>American Apparel locavore iPhone wayfarers put a bird on it.  Whatever McSweeney's Banksy letterpress Marfa.  Drinking vinegar PBR synth, tote bag kale chips typewriter shabby chic mlkshk.  Twee Wes Anderson semiotics Blue Bottle Tumblr, locavore ennui squid.  Blog tofu paleo try-hard mustache bicycle rights DIY.  Forage quinoa DIY master cleanse.  Freegan tote bag squid keffiyeh, sriracha try-hard tousled gentrify McSweeney's pickled pork belly Neutra literally.</p>

    <p>Actually synth Thundercats, pug direct trade wayfarers Schlitz. Gluten-free beard pickled wolf, vinyl cliche paleo authentic brunch Blue Bottle chambray keffiyeh Marfa 8-bit post-ironic. Lo-fi fixie occupy small batch. Salvia keytar cliche, occupy Brooklyn disrupt Helvetica gluten-free art party stumptown freegan gastropub cred. Freegan Truffaut keffiyeh Terry Richardson lo-fi, hoodie ennui. Readymade deep v selvage, tote bag church-key authentic flexitarian craft beer four loko biodiesel. VHS hashtag small batch drinking vinegar, wolf distillery YOLO post-ironic narwhal sustainable.</p>

  </div>

  <div id="Timberlake">
    <h2>Timberlake</h2>
    <img src="http://imalbum.aufeminin.com/album/D20121228/894767_Z5RAJN1HEXWRQGYCFUTKD8AVQ8ZMXS_justin-timberlake_H124540_S.jpg">
    <p>Bushwick semiotics meh artisan, whatever gastropub pop-up narwhal Cosby sweater stumptown VHS synth kogi art party McSweeney's.  Helvetica locavore actually cray paleo.  +1 PBR gentrify, direct trade  narwhal tattooed polaroid Helvetica readymade wolf Tumblr authentic try-hard hella.  Try-hard 90's gentrify art party.  Helvetica Intelligentsia +1, banjo try-hard tote bag organic fashion axe gluten-free chambray stumptown Echo Park beard.  Craft beer DIY beard, roof party tofu plaid sustainable Tonx.  Small batch letterpress salvia sartorial deep v ugh, High Life aesthetic hoodie Neutra Vice freegan flannel.</p>

  </div>

  <div id="Lautner">
    <h2>Lautner</h2>
    <img src="https://fbexternal-a.akamaihd.net/safe_image.php?d=AQBvPhI8Zh8E1VfV&w=155&h=114&url=http%3A%2F%2Ffiles-cdn.formspring.me%2Fprofile%2F20110812%2Fn4e45d53be5a76_medium.jpg">
    <p>Chambray typewriter Odd Future, cliche Wes Anderson High Life Banksy cred bespoke Intelligentsia ethnic. YOLO gluten-free blog kale chips. Cliche Shoreditch church-key direct trade banjo ugh, forage pug meh typewriter yr chillwave wayfarers small batch. Trust fund Carles forage disrupt photo booth. Truffaut lo-fi Schlitz, Blue Bottle hoodie synth Thundercats. Actually cliche put a bird on it kitsch, ethical Thundercats synth drinking vinegar gluten-free lomo try-hard direct trade. Chambray viral you probably haven't heard of them salvia, ugh Pitchfork Terry Richardson selvage master cleanse.</p>

  </div>
  </div>
</div>


</div>

    </div>

    <div class="container">
      <div class="timeline">
        <div class="callout left">
          <div class="content">
            <h2>2017</h2>
            <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
          </div>
        </div>
        <div class="callout right">
          <div class="content">
            <h2>2016</h2>
            <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
          </div>
        </div>
        <div class="callout left">
          <div class="content">
            <h2>2015</h2>
            <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
          </div>
        </div>
        <div class="callout right">
          <div class="content">
            <h2>2012</h2>
            <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
          </div>
        </div>
        <div class="callout left">
          <div class="content">
            <h2>2011</h2>
            <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
          </div>
        </div>
        <div class="callout right">
          <div class="content">
            <h2>2007</h2>
            <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
          </div>
        </div>
      </div>
    </div>
  </section> <!--end of section-->

    <div class="hero-body">
      <div class="container">
        <div class="columns is-vcentered">
          <div class="column is-6">
            {{-- <figure class="image is-4by3">
              <img src="http://placehold.it/800x600" alt="Description">
            </figure> --}}
            <button class="accordion">Section 1</button>
            <div class="panel">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button class="accordion">Section 2</button>
            <div class="panel">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button class="accordion">Section 3</button>
            <div class="panel">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          </div>
          <div class="column is-6 has-text-right">
            <h1 class="title is-2">
              Our Approach
            </h1>
            <h2 class="subtitle is-4 m-t-20">
              Lorem ipsum dolor sit amet,
            </h2>
            <p class="lead ">
              consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <br>
            <p class="has-text-right has-text-weight-light">
              <a  href="" class="is-medium is-info is-outlined">
                DISCOVER MORE
              </a>
            </p>
          </div>
        </div>
      </div>
    </div><!--end of hero-body-->

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
