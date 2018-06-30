<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">


    </head>
    <body class="bg">
<header>
  <div class="top-bar">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="d-none d-md-block">
            <div class="social">
              <ul class="list-inline mb-0">
              <li class="list-inline-item"><a href="#" class="text-white"><i class="fab fa-facebook-f"></i></a></li>
              <li class="list-inline-item"><a href="#" class="text-white"><i class="fab fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="#" class="text-white"><i class="fab fa-google"></i></a></li>
              <li class="list-inline-item"><a href="#" class="text-white"><i class="fab fa-youtube"></i></a></li>
              <li class="list-inline-item mr-5">
                <a href="#"><img src="images/top-button.jpg" class="img-fluid"/></a>
              </li><!-- /.list-inline-item -->
              <li class="list-inline-item">
                <a href="#"><img src="images/top-button2.jpg" class="img-fluid"/></a>
              </li><!-- /.list-inline-item -->
              <li class="list-inline-item">
              <input type="text" placeholder="Search">
              <i class="fa fa-search mt-2"></i>
              </li><!-- /.list-inline-item -->
            </ul>
            </div><!-- /.social -->
          </div><!-- /.d-none d-md-block -->
          <div class="d-md-none">
            <div class="row">
              <div class="col-6">
                <ul class="list-inline mb-0 mt-1">
                  <li class="list-inline-item"><a href="#" class="text-white"><i class="fab fa-facebook-f"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="text-white"><i class="fab fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="text-white"><i class="fab fa-google"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="text-white"><i class="fab fa-youtube"></i></a></li>
                </ul>
              </div><!-- /.col-6 -->
              <div class="col-6">
                <input type="text" placeholder="Search">
                <i class="fa fa-search mt-2"></i>
              </div><!-- /.col-6 -->
            </div><!-- /.row -->
            <div class="float-left">
              <a href="#"><img src="images/top-button.jpg" class="img-fluid"/></a>
            </div><!-- /.float-left -->
            <div class="float-right">
              <a href="#"><img src="images/top-button2.jpg" class="img-fluid"/></a>
            </div><!-- /.float-right -->
          </div><!-- /.d-md-none -->
        </div>
      </div>
    </div><!-- /.container -->
  </div><!-- /.topbar -->
  <!--Navigation -->
  <nav>
    <div class="container">
      <div class="row">
        <div id="menuzord" class="menuzord red"> <a href="javascript:void(0)" class="menuzord-brand"><img src="images/logo.png" class="img-fluid logo"/></a>
          <ul class="menuzord-menu">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Fresh News</a></li>
            <li><a href="#">All Matches</a></li>
            <li><a href="#">our teams</a></li>
            <li><a href="#">about us</a></li>
            <li><a href="#">our team</a></li>
            <li><a href="#">sponsors</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</header>
<!--End-->

<!--Banner-->
<figure class="mb-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-md-2">
        <div class="banner_wrapper">
          <h1 class="mt-3">Aliquam lobortis velit ac massa convallis, interdum pretium lorem ornare.</h1>
          <p>Suspendisse pretium dolor sit amet dolor congue dignissim ligula.</p>
          <button>Login</button>
          <button>Sign up</button>
        </div>
      </div>
    </div>
  </div>
</figure>
<!--End-->

<!--Breaking News-->
<section>
  <div class="news">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="update_bar">
            <div class="update_heading">
              <h3>Latest Update</h3>
            </div>
            <div class="update_text">
              <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
                <ul class="list-line mb-0 mt-1">
                  <li class="list-inline-item">
                    <a href="#" class="tag">UPDATE TAG</a> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                  </li>
                  <li class="list-inline-item">
                    <a href="#" class="tag">UPDATE TAG</a> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                  </li>
                </ul><!-- /.list-line -->
              </marquee>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--End-->
<!--Category-->
<article class="pb-5 mt-4">
  <div class=" container">
    <div class="row">
      <div class="col-md-3">
        <div class="box"> <img src="images/img1.jpg" class="img-fluid"/>
          <div class="content">
            <div class="tag"><a href="#">UPDATE TAG</a></div>
            <p>It is a long established fact that a reader will be distracted by the readable </p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="box"> <img src="images/img2.jpg" class="img-fluid"/>
          <div class="content">
            <div class="tag"><a href="#">UPDATE TAG</a></div>
            <p>It is a long established fact that a reader will be distracted by the readable </p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="box"> <img src="images/img3.jpg" class="img-fluid"/>
          <div class="content">
            <div class="tag"><a href="#">UPDATE TAG</a></div>
            <p>It is a long established fact that a reader will be distracted by the readable </p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="box"> <img src="images/img4.jpg" class="img-fluid"/>
          <div class="content">
            <div class="tag"><a href="#">UPDATE TAG</a></div>
            <p>It is a long established fact that a reader will be distracted by the readable </p>
          </div>
        </div>
      </div>
      <div class="col-12">
        <img src="images/line2.png" class="img-fluid"/>
      </div><!-- /.col-12 -->
    </div><!-- /.row -->
  </div>
</article>
<!--End-->
<!--Latest News-->
<section >
  <div class="container">
    <div class="row latest">
      <div class="col-md-8">
        <h2>Latest News</h2>
        <div class="box"> <img src="images/img5.jpg" class="img-fluid"/>
          <div class="content">
            <div class="date">- May 7th, 2018, </div>
            <div class="title">Aliquam lobortis velit ac massa convallis, interdum pretium lorem ornare.</div>
            <p><a href="#">Read More</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <h2>Events</h2>
        <div class="right-box"> <i><img src="images/img6.jpg" class="img-fluid"/></i>
          <p>It is a long established fact that a reader will be distracted by the readable</p>
        </div>
        <div class="right-box"> <i><img src="images/img7.jpg" class="img-fluid"/></i>
          <p>It is a long established fact that a reader will be distracted by the readable</p>
        </div>
        <div class="right-box"><a href="#">View all</a></div>
      </div>
      <div class="col-12">
        <img src="images/line2.png" class="img-fluid"/>
      </div><!-- /.col-12 -->
    </div>
  </div>
</section>
<!--End-->

<!--Active Member-->
<aside class="padding30">
  <div class="container">
    <div class="row ">
      <div class="col-md-9 col-sm-9">
        <h2>Active Members</h2>
      </div>
      <div class="col-md-3 col-sm-3 text-right">
        <img src="images/donation.jpg" class="img-fluid pull-right"/>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="member">
          <div class="row">
            <div class="col-5"><img src="images/m1.jpg" class="img-fluid"/></div>
            <div class="col-7">
              <div class="title">John Doe</div>
              <p>Distracted by th readable</p>
              <p><a href="#">Details</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="member">
          <div class="row">
            <div class="col-5"><img src="images/m2.jpg" class="img-fluid"/></div>
            <div class="col-7">
              <div class="title">John Doe</div>
              <p>Distracted by th readable</p>
              <p><a href="#">Details</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="member">
          <div class="row">
            <div class="col-5"><img src="images/m3.jpg" class="img-fluid"/></div>
            <div class="col-7">
              <div class="title">John Doe</div>
              <p>Distracted by th readable</p>
              <p><a href="#">Details</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="member">
          <div class="row">
            <div class="col-5"><img src="images/m4.jpg" class="img-fluid"/></div>
            <div class="col-7">
              <div class="title">John Doe</div>
              <p>Distracted by th readable</p>
              <p><a href="#">Details</a></p>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.row -->
  </div>
</aside>
<!--End-->

<!--Footer-->
<footer>
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <h3>Site Info</h3>
          <ul>
            <li><a href="#">Duis seo neque auctor</a></li>
            <li><a href="#">consectetur est sed</a></li>
            <li><a href="#">accumsan est</a></li>
            <li><a href="#">duis sed neque auctor</a></li>
            <li><a href="#">consectetur est seo</a></li>
            <li><a href="#">accumsan est</a></li>
          </ul>
        </div>
        <div class="col-sm-3">
          <h3>News & Events</h3>
          <ul>
            <li><a href="#">Duis seo neque auctor</a></li>
            <li><a href="#">consectetur est sed</a></li>
            <li><a href="#">accumsan est</a></li>
            <li><a href="#">duis sed neque auctor</a></li>
            <li><a href="#">consectetur est seo</a></li>
            <li><a href="#">accumsan est</a></li>
          </ul>
        </div>
        <div class="col-sm-3">
          <h3>shop</h3>
          <ul>
            <li><a href="#">Duis seo neque auctor</a></li>
            <li><a href="#">consectetur est sed</a></li>
            <li><a href="#">accumsan est</a></li>
            <li><a href="#">duis sed neque auctor</a></li>
            <li><a href="#">consectetur est seo</a></li>
            <li><a href="#">accumsan est</a></li>
          </ul>
        </div>
        <div class="col-sm-3">
          <h3>utilties</h3>
          <ul>
            <li><a href="#">Duis seo neque auctor</a></li>
            <li><a href="#">consectetur est sed</a></li>
            <li><a href="#">accumsan est</a></li>
            <li><a href="#">duis sed neque auctor</a></li>
            <li><a href="#">consectetur est seo</a></li>
            <li><a href="#">accumsan est</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class=" container">
    <div class="row copy">
      <div class="col-lg-12 text-center">
        copyright 2018. All rights reserved | duis sed neque auctor, consectetur est sed, accumsan est
      </div>
    </div>
  </div>
</footer>
<!--End-->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
