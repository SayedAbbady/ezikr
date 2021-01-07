<!-- START BLOG DESIGN AREA -->
    <section id="blog" class="blog-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>our Latest News</h2>
                        <span class="title-divider">
                            <i class="fa fa-diamond" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                
                
                @foreach ($blogs as $item)
                <div class="col-md-4 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-blog">
                        <div class="meta-block-container">
                            <a title="Blog" href="single-blog.html">
                                <img alt="blog" src="{{asset('assets/images/blogs/'.$item->blogs_image)}}">
                            </a>
                            <div class="post-meta-block">
                                <div class="post-date"><a href="#"><i class="fa fa-calendar"></i> {{$item->created_at}}</a></div>
                                <div class="post-comment">
                                    <a href="#">
                                        <i class="fa fa-comment"></i> 
                                        @php
                                            $comments = App\Models\Blogs::find($item->id)->comments;
                                            echo COUNT($comments);
                                        @endphp
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-description text-center">
                            <a href="single-blog.html"><h3>{{$item->blogs_title}}</h3></a>
                            {!! Str::limit($item->blogs_text, 150, ' ......') !!}
                        </div>
                        <footer class="text-center">
                            <a href="{{route('blog',$item->blogs_slug)}}" class="read-more">Read more</a>

                        </footer>
                    </div>
                </div>
                @endforeach
               
            </div>
        </div>
    </section>
    <!-- / END BLOG DESIGN AREA -->
