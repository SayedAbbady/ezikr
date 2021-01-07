<!-- START TESTIMONIAL DESIGN AREA -->
    <section id="client" class="testimonial-area section-padding" data-stellar-background-ratio="0.6" style="background-image: url('assets/images/clients/{{$client[0]->cl_background}}')">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title white-title">
                        <h2>our clients</h2>
                        <span class="title-divider">
                            <i class="fa fa-diamond" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="testimonial-list wow fadeInUp">
                    @foreach ($client as $item)
                        <!-- START SINGLE TESTIMONIAL DESIGN AREA -->
                        <div class="single-testimonial text-center">
                            <img src="{{asset('assets/images/clients/'.$item->cl_image)}}" class="img-circle" alt="">
                            <h6 class="text-muted">{{$item->cl_name}}</h6>
                            <p>{{$item->cl_message}}</p>
                        </div>
                        <!-- / END SINGLE TESTIMONIAL DESIGN AREA -->
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- / END TESTIMONIAL DESIGN AREA -->
