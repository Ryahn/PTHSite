@extends('layout.app')

@section('content')

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
          <div class="box"> <img src="{{ asset('images/img1.jpg') }}" class="img-fluid"/>
            <div class="content">
              <div class="tag"><a href="#">UPDATE TAG</a></div>
              <p>It is a long established fact that a reader will be distracted by the readable </p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="box"> <img src="{{ asset('images/img2.jpg') }}" class="img-fluid"/>
            <div class="content">
              <div class="tag"><a href="#">UPDATE TAG</a></div>
              <p>It is a long established fact that a reader will be distracted by the readable </p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="box"> <img src="{{ asset('images/img3.jpg') }}" class="img-fluid"/>
            <div class="content">
              <div class="tag"><a href="#">UPDATE TAG</a></div>
              <p>It is a long established fact that a reader will be distracted by the readable </p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="box"> <img src="{{ asset('images/img4.jpg') }}" class="img-fluid"/>
            <div class="content">
              <div class="tag"><a href="#">UPDATE TAG</a></div>
              <p>It is a long established fact that a reader will be distracted by the readable </p>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="content-line-image"></div>
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
          <div class="box"> <img src="{{ asset('images/img5.jpg') }}" class="img-fluid"/>
            <div class="content">
              <div class="date">- May 7th, 2018, </div>
              <div class="title">Aliquam lobortis velit ac massa convallis, interdum pretium lorem ornare.</div>
              <p><a href="#">Read More</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h2>Events</h2>
          <div class="right-box"> <i><img src="{{ asset('images/img6.jpg') }}" class="img-fluid"/></i>
            <p>It is a long established fact that a reader will be distracted by the readable</p>
          </div>
          <div class="right-box"> <i><img src="{{ asset('images/img7.jpg') }}" class="img-fluid"/></i>
            <p>It is a long established fact that a reader will be distracted by the readable</p>
          </div>
          <div class="right-box"><a href="#">View all</a></div>
        </div>
        <div class="col-12">
          <img src="{{ asset('images/line2.png') }}" class="img-fluid"/>
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
          <button href="#" class="donation pull-right btn">Donation</button>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="member">
            <div class="row">
              <div class="col-5"><img src="{{ asset('images/m1.jpg') }}" class="img-fluid"/></div>
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
              <div class="col-5"><img src="{{ asset('images/m2.jpg') }}" class="img-fluid"/></div>
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
              <div class="col-5"><img src="{{ asset('images/m3.jpg') }}" class="img-fluid"/></div>
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
              <div class="col-5"><img src="{{ asset('images/m4.jpg') }}" class="img-fluid"/></div>
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

@endsection