<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">


</head>

<body class="bg">
  @include('layout.inc.nav')
  <!--End-->

  @yield('content')

  <!--Footer-->
  <footer>
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <h3>Site Info</h3>
            <ul>
              <li>
                <a href="#">Duis seo neque auctor</a>
              </li>
              <li>
                <a href="#">consectetur est sed</a>
              </li>
              <li>
                <a href="#">accumsan est</a>
              </li>
              <li>
                <a href="#">duis sed neque auctor</a>
              </li>
              <li>
                <a href="#">consectetur est seo</a>
              </li>
              <li>
                <a href="#">accumsan est</a>
              </li>
            </ul>
          </div>
          <div class="col-sm-3">
            <h3>News & Events</h3>
            <ul>
              <li>
                <a href="#">Duis seo neque auctor</a>
              </li>
              <li>
                <a href="#">consectetur est sed</a>
              </li>
              <li>
                <a href="#">accumsan est</a>
              </li>
              <li>
                <a href="#">duis sed neque auctor</a>
              </li>
              <li>
                <a href="#">consectetur est seo</a>
              </li>
              <li>
                <a href="#">accumsan est</a>
              </li>
            </ul>
          </div>
          <div class="col-sm-3">
            <h3>shop</h3>
            <ul>
              <li>
                <a href="#">Duis seo neque auctor</a>
              </li>
              <li>
                <a href="#">consectetur est sed</a>
              </li>
              <li>
                <a href="#">accumsan est</a>
              </li>
              <li>
                <a href="#">duis sed neque auctor</a>
              </li>
              <li>
                <a href="#">consectetur est seo</a>
              </li>
              <li>
                <a href="#">accumsan est</a>
              </li>
            </ul>
          </div>
          <div class="col-sm-3">
            <h3>utilties</h3>
            <ul>
              <li>
                <a href="#">Duis seo neque auctor</a>
              </li>
              <li>
                <a href="#">consectetur est sed</a>
              </li>
              <li>
                <a href="#">accumsan est</a>
              </li>
              <li>
                <a href="#">duis sed neque auctor</a>
              </li>
              <li>
                <a href="#">consectetur est seo</a>
              </li>
              <li>
                <a href="#">accumsan est</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row copy">
        <div class="col-lg-12 text-center">
          &copy; <span id="copyright"></span> Part-Time Heroes. All rights reserved<br>
          <div id="tmdc" data-toggle="tooltip" data-placement="top" title='Star Citizen&trade; is a trademark of <a href="https://cloudimperiumgames.com/">CIG</a>. Copyright &copy; CIG - All Rights Reserved.<br>
            Camelot Unchained&trade; is a trademark of <a href="http://citystateentertainment.com/">CSE</a>. Copyright &copy; CSE - All Rights Reserved.<br>
            Elder Scrolls Online&trade; is a trademark of <a href="http://www.zenimaxonline.com/">Zenimax Online</a>. Copyright &copy; Zenimax Online - All Rights Reserved.'>Trademarks &amp; Disclaimers</div>
        </div>
      </div>
    </div>
  </footer>
  <!--End-->
  <script src="{{ asset('js/app.js') }}"></script>
  <script>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip(
        {
          html: true,
          delay: {
            "show": 100,
            "hide": 3500
          }
          }
        );
    });
    $('#copyright').append('2017-'+new Date().getFullYear());
  </script>
</body>

</html>