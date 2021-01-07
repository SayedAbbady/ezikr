@extends('user.layouts.main')
@section('title')
    {{$blogs[0]->blogs_tilte}}
@endsection
@section('content')

    <!-- START HOMEPAGE DESIGN AREA -->
    <header class="single-blog-area">
        @include('user.navbar')
        <div class="single-blog-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>single blog</h2>
                        <span class="title-divider">
                            <i class="fa fa-diamond" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- / END HOMEPAGE DESIGN AREA -->
    {{-- {{$allBlogs}} --}}
    <!-- START SINGLE BLOG POST DESIGN AREA -->
    <div class="single-blogarea section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!-- START POST DESIGN AREA -->
                    <div class="single-blog-details wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s" data-wow-offset="0">
                        <h3 class="text-left">{{$blogs[0]->blogs_tilte}}</h3>
                        <img src="{{asset('assets/images/blogs/'.$blogs[0]->blogs_image)}}" class="img-responsive" alt="">
                        <div class="single-blog-meta-container">
                            <div class="post-meta-block">
                                <div class="post-date"><a href="#"><i class="fa fa-calendar"></i> 
                                    {{ date('j F Y',strtotime($blogs[0]->created_at))}}
                                </a></div>
                                <div class="post-comment"><a href="#"><i class="fa fa-comment"></i> {{COUNT($comments)}}</a></div>
                            </div>
                        </div>
                        <p></p>
                        {!!$blogs[0]->blogs_text!!}
                    </div>
                    <!-- / END POST DESIGN AREA -->
                    @if (COUNT($comments) != '0')
                    
                    <!-- START COMMENT DESIGN AREA -->
                    <div class="comment-section wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s" data-wow-offset="0">
                        <hr>
                        <h4>Recent Comments</h4>
                        @foreach ($comments as $item)
                        <div class="single-comment">
                            <div class="row">
                                <div class="col-md-3 text-center text-sm-left">
                                    <img src="{{asset("assets/images/blogs/".$item->co_image)}}" alt="blog" class="rounded img-thumbnail">
                                    <h6 class="text-muted text-md-center text-sm-left">{{$item->co_name}}</h6>
                                </div>
                                <div class="col-md-9">
                                    <h6 class="text-muted"><i class="fa fa-calendar"></i>  {{ date('j F Y g:i a',strtotime($item->created_at))}}</h6>
                                    <p>{{$item->co_text}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <!-- / END COMMENT DESIGN AREA -->
                    @endif

                    <!-- START COMMENT DESIGN AREA -->
                    
                    <div class="contact-form wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s" data-wow-offset="0">
                        <hr>
                        <h3 class="contact-title">Give your comment Here</h3>
                        <div class="row">
                            <div class="col-md-12">
                    <div class="contact-form">
                        <div class="row">
                            <form method="post" enctype="multipart/form-data" id="comment-Id-Form-Send-9G6B8">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type="hidden" name="username" value="{{$blogs[0]->id}}">
                                <div class="form-group col-md-6">
                                    <p>Name</p>
                                    <input type="text" name="name" class="form-control comment" required="required">
                                    <small class="text-danger errorClass font-weight-bold" id="nameErrors"></small>
                                </div>
                                <div class="form-group col-md-6">
                                    <p>Phone</p>
                                    <input type="text" name="phone" class="form-control comment"  required="required">
                                    <small class="text-danger errorClass font-weight-bold" id="phoneErrors"></small>
                                </div>
                                <div class="form-group col-md-12">
                                    <p>Email</p>
                                    <input type="email" name="email" class="form-control comment"  required="required">
                                    <small class="text-danger errorClass font-weight-bold" id="emailErrors"></small>
                                </div>
                                <div class="form-group col-md-12">
                                    <p>message</p>
                                    <textarea rows="6" name="message" class="form-control comment"  required="required"></textarea>
                                    <small class="text-danger errorClass font-weight-bold" id="messageErrors"></small>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit">add comment</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                        </div>
                    </div>
                    <!-- / END COMMENT DESIGN AREA -->
                </div>
                <!-- START SIDEBAR DESIGN AREA -->
                <div class="col-md-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s" data-wow-offset="0">
                    <div class="search single-sidebar">
                        <input type="text" class=" form-control" placeholder="Search...">
                    </div>
                    {{-- <div class="recent-post single-sidebar">
                        <h4>
                            Recent Post
                            <span class="title-divider">
                                <i class="fa fa-diamond" aria-hidden="true"></i>
                            </span>
                        </h4>
                        <div class="recent-single">
                            <a href="#"><img src="assets/images/blog/blog1.jpg" class="img-responsive" alt="image">
                            </a>
                            <a href="#"><h4>Blog Title Here</h4></a>
                            <span><h6 class="text-muted"><i class="fa fa-user-secret"></i> Admin.  <i class="fa fa-calendar"></i> 15 Feb 2017. <i class="fa fa-comment"></i> 3.</h6></span>
                        </div>
                        <div class="recent-single">
                            <a href="#"><img src="assets/images/blog/blog2.jpg" class="img-responsive" alt="image">
                            </a>
                            <a href="#"><h4>Blog Title Here</h4></a>
                            <span><h6 class="text-muted"><i class="fa fa-user-secret"></i> Admin.  <i class="fa fa-calendar"></i> 14 Feb 2017. <i class="fa fa-comment"></i> 5.</h6></span>
                        </div>
                    </div> --}}
                    <div class="categories single-sidebar">
                        <h4>
                            Related Blogs
                            <span class="title-divider">
                                <i class="fa fa-diamond" aria-hidden="true"></i>
                            </span>
                        </h4>
                        <ul>
                            @foreach ($allBlogs as $item)
                                <li><a href="{{route('blog',$item->blogs_slug)}}"><i class="fa fa-hand-o-right"></i> {{$item->blogs_tilte}}</a></li>
                            @endforeach

                        </ul>
                    </div>
                </div>
                <!-- / END START SIDEBAR DESIGN AREA -->
            </div>
        </div>
    </div>
    <!-- / END SINGLE BLOG POST DESIGN AREA -->

      
@endsection