<!-- START TEAM DESIGN AREA -->
    <section id="team" class="team-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>our teachers</h2>
                        <span class="title-divider">
                            <i class="fa fa-diamond" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($teacher as $item)
                <!-- START SINGLE TEAM DESIGN AREA -->
                <div class="col-md-4 col-sm-12 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-team">
                        <div class="div-image-custom">
                            <img src="{{asset('assets/images/teachers/'.$item->t_image)}}" alt="">
                        </div>
                        <div class="team-description text-center">
                            <h4>{{$item->t_name}}</h4>
                            <h6 class="text-muted">{{$item->t_jobTitle}}</h6>
                        </div>
                    </div>
                </div>
                <!-- / END SINGLE TEAM DESIGN AREA -->
                @endforeach
                
                
            </div>
        </div>
    </section>
    <!-- / END TEAM DESIGN AREA -->