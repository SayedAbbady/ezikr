<!-- START WHY CHOOSE US DESIGN AREA -->
    <div class="why-chhose-us-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 why-choose-us-title">
                    <div class="section-title">
                        <h2>why choose us?</h2>
                        <span class="title-divider">
                            <i class="fa fa-diamond" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 d-none d-md-block">
                    <div class="why-image ">
                        <img src="{{asset('assets/images/chooseus/'.$chooseusFirst->w_image)}}" alt="">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        @foreach ($chooseus as $item)
                        <!-- START SINGLE WHY CHOOSE DESIGN AREA -->
                        <div class="col-md-6">
                            <div class="content-grid clearfix">
                                <div class="icon-holder">
                                    <div class="chid-pernt">
                                        <div class="child">    
                                            <div class="about-icon">{!! $item->w_icon !!}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-box">
                                    <h3>{{$item->w_title}}</h3>
                                    <p>{{$item->w_description}}</p>
                                </div>
                            </div>
                        </div>
                        <!-- / END SINGLE WHY CHOOSE DESIGN AREA -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / END WHY CHOOSE US DESIGN AREA -->
