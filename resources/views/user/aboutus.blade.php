<!-- START ABOUT US DESIGN AREA -->
    <section id="about" class="about-us-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>About us</h2>
                        <span class="title-divider">
                            <i class="fa fa-diamond" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- START ABOUT US TEXT DESIGN AREA -->
                <div class="col-md-6">
                    <img class="wow fadeInUp" src="{{asset("assets/images/about/".$about->a_image)}}" style="width:100%" alt="">
                </div>
                <div class="col-md-6 text-left">
                    <div class="about-text wow fadeInUp" data-wow-delay=".2s">
                        <h2 class="">{{$about->a_title}}</h2>
                        <p class="">{!!$about->a_description!!}</p>
                    </div>
                </div>
                
                <!-- / END ABOUT US TEXT DESIGN AREA -->
            </div>
            <!-- START FUN FACTS DESIGN AREA -->
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-project-complete">
                        <span class="fa fa-mouse-pointer"></span>
                        <h2 class="counter-num"> {{$about->a_numOfCourses}}</h2>
                        <h6 class="text-muted">Current courses</h6>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-project-complete">
                        <span class="fa fa-smile-o"></span>
                        <h2 class="counter-num"> {{$about->a_numOfStudents}}</h2>
                        <h6 class="text-muted">Students</h6>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-project-complete">
                        
                        <span class="fa fa-graduation-cap" aria-hidden="true"></span>
                        <h2 class="counter-num"> {{$about->a_numOfTeachers}}</h2>
                        <h6 class="text-muted">Teachers</h6>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-project-complete">
                        
                        <span class="fa fa-comments-o" aria-hidden="true"></span>
                        <h2 class="counter-num"> {{$about->a_numOfSessions}}</h2>
                        <h6 class="text-muted">Sessions</h6>
                    </div>
                </div>
            </div>
            <!-- /END FUN FACTS DESIGN AREA -->
        </div>
    </section>
    <!-- / END ABOUT US DESIGN AREA -->