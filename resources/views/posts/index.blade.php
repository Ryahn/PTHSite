@extends('layout.app') @section('content')
<!--Banner-->
<figure>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-offset-2">
                <div class="banner_wrapper">
                    <h1>Privacy Policy</h1>
                    <p>In elementum tempor libero sit amet volutpat. quisque condimentum dui vel tortor dignissim rhoncus nunc
                        lacinia maximus magna facilisis eleifend</p>
                </div>
            </div>
        </div>
    </div>
</figure>
<!--End-->
<!--breadcrumb-->
<figcaption>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb">
                    <li>Home</li>
                    <li>
                        <span>Privacy Policy</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</figcaption>
<!--End-->
<!--Content-->
<!--Latest News-->
<section>
    <div class="container">
        <div class="row latest">
            <div class="content-line-image"></div>
            <div class="col">
                @if (!empty($posts) && count($posts) > 0)
                @foreach ($posts as $post)
                <div class="row about mb-5 blog-item-excert">
                    <div class="col-sm-5">
                        <img src="{{ asset('images/about2.jpg') }}" class="img-fluid img">
                    </div>
                    <div class="col-sm-7">
                        <h1>{{ $post->title }}</h1>
                        <div class="my-4">
                            <ul class="list-inline text-white">
                                <li class="list-inline-item text-white">
                                    <h5 class="mt-0 text-red"><i class="fas fa-pencil-alt text-white"></i> {{ $post->user->name }}</h5>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fas fa-calendar"></i>
                                    {{ $post->created_at->diffForHumans() }}
                                </li>
                                <li class="list-inline-item">
                                    <i class="fas fa-comments"></i>
                                    {{ count($post->comments) }} comments
                                </li>
                                <li class="list-inline-item">
                                    <i class="fas fa-thumbs-up"></i>
                                    12 likes
                                </li>
                            </ul>
                            <!-- /.list-inline -->
                        </div>
                        <!-- /.my-4 -->
                        <p class="mb-4">{{ str_limit($post->body, $limit = 150, $end = '...') }}</p>
                        <p class="mb-4">
                            <a href="/posts/{{ $post->id }}" class="site-btn-red">Continue reading...</a>
                            <a href="javascript:" class="site-btn-red">
                                <span class="fas fa-thumbs-up"></span>
                                Like
                            </a>
                        </p>
                        <div>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <span class="text-white">Tags:</span>
                                </li>
                                <!-- /.list-inline-item -->
                                <li class="list-inline-item">
                                    <a href="javascript:">
                                        <span class="badge site-blog-tag">design</span>
                                    </a>
                                </li>
                                <!-- /.list-inline-item -->
                                <li class="list-inline-item">
                                    <a href="javascript:">
                                        <span class="badge site-blog-tag">writing</span>
                                    </a>
                                </li>
                                <!-- /.list-inline-item -->
                                <li class="list-inline-item">
                                    <a href="javascript:">
                                        <span class="badge site-blog-tag">development</span>
                                    </a>
                                </li>
                                <!-- /.list-inline-item -->
                                <li class="list-inline-item">
                                    <a href="javascript:">
                                        <span class="badge site-blog-tag">production</span>
                                    </a>
                                </li>
                                <!-- /.list-inline-item -->
                            </ul>
                            <!-- /.list-inline -->
                        </div>
                        <!-- /.py-3 -->
                    </div>
                </div>
                @endforeach
                    {{ $posts->links() }}
                @else
                    <div class="text-center mb-5 text-white" style="padding-top:60px;">No Posts Found</div>
                @endif
            </div>
            <div class="col-12">
                <div class="content-line-image"></div>
            </div>
            <!-- /.col-12 -->
        </div>
    </div>
</section>
<!--End-->
<!--End-->
@endsection