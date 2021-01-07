<!-- START SERVICES DESIGN AREA -->
    <section id="programs" class="service-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>our Programs</h2>
                        <span class="title-divider">
                            <i class="fa fa-diamond" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($program as $item)
                <!-- START SINGLE SERVICES DESIGN AREA -->
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-service text-center">
                        {{-- <span class="fa fa-search"></span> --}}
                        <span class="">
                            <img src="{{asset('assets/images/programs/'.$item->p_icon)}}" style="width:30%" alt="">
                        </span>
                        <h4>{{$item->p_title}}</h4>
                        <p>{{$item->p_description}}</p>
                    </div>
                </div>
                <!-- / END SINGLE SERVICES DESIGN AREA -->
                @endforeach
            </div>
        </div>
    </section>
    <!-- / END SERVICES DESIGN AREA -->