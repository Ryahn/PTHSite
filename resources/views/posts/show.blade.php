@extends('layout.app') @section('content')
<!--Banner-->
<figure>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="banner_wrapper">
                    <h1>{{ $post->title }}</h1>
                    <div class="my-4">
                        <ul class="list-inline text-white">
                            <li class="list-inline-item">
                                <i class="fas fa-calendar"></i>
                                {{ $post->created_at->diffForHumans() }}
                            </li>
                            @if($post->created_at != $post->updated_at)
                            <li class="list-inline-item">
                                <i class="fas fa-edit"></i>
                                {{ $post->updated_at->diffForHumans() }}
                            </li>
                            @endif
                            <li class="list-inline-item">
                                <i class="fas fa-comments"></i>
                                {{ count($post->comments) }}
                            </li>
                            <li class="list-inline-item">
                                <i class="fas fa-thumbs-up"></i>
                                12 likes
                            </li>
                        </ul>
                        <!-- /.list-inline -->
                    </div>
                    <!-- /.my-4 -->
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
                    <p class="mt-4">
                        <a href="javascript:" class="site-btn-red">
                            <span class="fas fa-thumbs-up"></span>
                            Like
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</figure>
<!--End-->

<!--Content-->
<section>
    <div class="container">
        <div class="row about">
            <div class="col-lg-12 padding30">
                <div class="content-line-image"></div>
                {{-- <img src="{{ asset('images/line2.png') }}" class="img-fluid" /> --}}
            </div>
        </div>
        <!-- .row -->
        <div class="row about mb-5 blog-item-description">
            <div class="col-sm-12">
                <div class="text-center mb-5">
                    <img src="{{ asset('images/banner.jpg') }}" alt="" class="img-fluid border">
                </div>
                <!-- /.text-center mb-5 -->

                <p>{{ $post->body }}</p>
            </div>
            <div class="col-sm-12 padding30">
                <img src="{{ asset('images/line2.png') }}" class="img-fluid" />
            </div>
            <!-- /.col-sm-12 -->
            <div class="col-sm-8">
                <h2 class="text-white">Comments ({{ count($post->comments) }})</h2>
                <div class="card mb-5 site-card-transparent">
                    <div class="card-body px-0">
                        <form action="javascript:">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label for="">Email address</label>
                                <input type="text" class="form-control">
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label for="">Comment</label>
                                <textarea name="" id="" rows="5" class="form-control" placeholder="Write something here"></textarea>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <button class="site-btn-red">Comment</button>
                            </div>
                            <!-- /.form-group -->
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card mb-5 -->
                @if (!empty($post->comments) && count($post->comments) > 0)
                @include('posts.partial.comment_replies')
                @endif
                <!-- /.comments -->
            </div>
            <!-- /.col-sm-8 -->
        </div>
        <!-- /.row about mb-5 blog-item-excert -->
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