
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <!-- START LOGO DESIGN AREA -->
                        <div class="logo">
                            <a href="index.html">
                                <img src="{{asset('assets/images/seo/'.($seotags->h_logo??''))}}" alt="logo">
                            </a>
                        </div>
                        <!-- END LOGO DESIGN AREA -->
                    </div>
                    <div class="col-md-9">
                        <!-- START MENU DESIGN AREA -->
                        <div class="mainmenu">
                            <div class="navbar navbar-nobg">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active"><a class="smoth-scroll" href="#home">Home <div class="ripple-wrapper"></div></a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#about">About</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#programs">programs</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#client">clients</a>
                                        </li>
                                        
                                        <li><a class="smoth-scroll" href="#pricing">Pricing</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#blog">blog</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#contact">contact</a>
                                        </li>
                                        @if (Auth::check())
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ Auth::logout() }}">Log out</a>
                                            </li>
                                            @else
                                        <li><a class="smoth-scroll" href="{{route('adminhome')}}">login</a>
                                        </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- END MENU DESIGN AREA -->
                    </div>
                </div>
            </div>
        </div>