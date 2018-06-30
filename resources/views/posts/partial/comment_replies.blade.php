@foreach($post->comments as $comment)
                <div class="comments">
                    <div class="media border-bottom py-4 comment">
                        <img class="mr-3 site-media-img-sm border" src="{{ asset('images/m1.jpg') }}" alt="Generic placeholder image">
                        <div class="media-body">
                                <ul class="list-inline text-white">
                                    <li class="list-inline-item">
                                            <h5 class="mt-0 text-red">{{ $comment->user->name }}</h5>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fas fa-calendar"></i>
                                        {{ $comment->created_at->diffForHumans() }}
                                    </li>
                                    @if($comment->created_at != $comment->updated_at)
                                    <li class="list-inline-item">
                                        <i class="fas fa-edit"></i>
                                        {{ $comment->updated_at->diffForHumans() }}
                                    </li>
                                    @endif
                                    <li class="list-inline-item">
                                        <i class="fas fa-thumbs-up"></i>
                                        12 likes
                                    </li>
                                    <li class="list-inline-item float-right">
                                        <a href="javascript:" class="site-btn-red comment-like">
                                            <span class="fas fa-thumbs-up"></span>
                                            Like
                                        </a>
                                    </li>
                                </ul>
                                <!-- /.list-inline -->
                            {{ $comment->body }}
                        </div>
                    </div>
                </div>
                @endforeach