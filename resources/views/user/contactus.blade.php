<!-- START CONTACT DESIGN AREA -->
    <section id="contact" class="contact-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>contact us</h2>
                        <span class="title-divider">
                            <i class="fa fa-diamond" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row contact-form-design-area wow fadeInUp">
                <!-- START CONTACT FORM DESIGN AREA -->
                <div class="col-md-8">
                    <div class="contact-form">
                        <div class="row">
                            <form method="POST" id="inquireForm">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group col-md-6">
                                    <p>First name*</p>
                                    <input type="text" name="first_name" class="form-control chooseus-main" >
                                    <small class="text-danger errorClass font-weight-bold" id="first-nameErrors"></small>

                                </div>
                                <div class="form-group col-md-6">
                                    <p>Last name*</p>
                                    <input type="text" name="last_name" class="form-control chooseus-main" >
                                    <small class="text-danger errorClass font-weight-bold" id="last-nameErrors"></small>

                                </div>
                                <div class="form-group col-md-12">
                                    <p>Email*</p>
                                    <input type="text" name="email" class="form-control chooseus-main" >
                                    <small class="text-danger errorClass font-weight-bold" id="emailErrors"></small>

                                </div>
                                <div class="form-group col-md-6">
                                    <p>Country*</p>
                                    <select name="country" id="" class="form-control chooseus-main" >
                                        @foreach ($countries as $item)
                                        <option value="{{$item->name}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                    <small class="text-danger errorClass font-weight-bold" id="countryErrors"></small>
                                </div>
                                <div class="form-group col-md-6">
                                    <p>Phone*</p>
                                    <input type="tel" id="phone" name="phone" class="form-control chooseus-main" >
                                    <small class="text-danger errorClass font-weight-bold" id="phoneErrors"></small>

                                </div>
                                <div class="form-group col-md-12">
                                    <p>message <span style="font-family: arial;text-transform: lowercase;letter-spacing: 0.5px;color: gray">[optional]</span></p>
                                    <textarea rows="6" name="message" class="form-control chooseus-main"></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button type="submit" id="btnToSubmit">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /END  CONTACT DETAILS DESIGN AREA -->
                <div class="col-md-4">
                    <!-- START CONTACT DETAILS DESIGN AREA -->
                    <div class="contact-details-area wow fadeInUp" data-wow-delay=".2s">
                        <div class="col-md-12 contact-no">
                            <a href="http://wa.me/+2{{$about->a_phone}}" target="_blank">
                            <div class="single-contact-details text-center">
                                <span class="lnr lnr-phone-handset"></span>
                                <h4>phone</h4>
                                    <p class="text-muted">{{$about->a_phone}}</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-12">
                            <a href="mailto:{{$about->a_email}}">
                                <div class="single-contact-details text-center">
                                    <span class="lnr lnr-envelope"></span>
                                    <h4>E-mail</h4>
                                    <p class="text-muted">{{$about->a_email}}</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-12">
                            <div class="single-contact-details text-center">
                                <span class="lnr lnr-map-marker"></span>
                                <h4>Address</h4>
                                <p class="text-muted">Egypt, Giza</p>
                            </div>
                        </div>
                    </div>
                    <!-- / END CONTACT DETAILS DESIGN AREA -->
                </div>
            </div>
        </div>
    </section>
    <!-- / END CONTACT DESIGN AREA -->

