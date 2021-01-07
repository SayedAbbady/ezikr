<div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="{{asset("assets/images/logo.png")}}">
          </div>
        </a>
        <a href="#" class="simple-text logo-normal">
          Zikr Cpanel
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="{{ strpos(Request::path(),'home') ? 'active' : ''}}">
            <a href="{{route('adminhome')}}">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="{{ strpos(Request::path(),'seo') ? 'active' : ''}}">
            <a href="{{route('addseo')}}">
              <i class="nc-icon nc-diamond"></i>
              <p>Home page</p>
            </a>
          </li>
          <li class="{{ strpos(Request::path(),'about-us') ? 'active' : ''}}">
            <a href="{{route('about')}}">
              <i class="nc-icon nc-pin-3"></i>
              <p>About us</p>
            </a>
          </li>
          <li class="{{ strpos(Request::path(),'programs') ? 'active' : ''}}">
            <a href="{{route("programs")}}">
              <i class="nc-icon nc-single-copy-04"></i>
              <p>Programs</p>
            </a>
          </li>
          <li class="{{ strpos(Request::path(),'teachers') ? 'active' : ''}}">
            <a href="{{route('teachers')}}">
              <i class="nc-icon nc-tap-01"></i>
              <p>Teachers</p>
            </a>
          </li>
          <li class="{{ strpos(Request::path(),'choose-us') ? 'active' : ''}}">
            <a href="{{route('chooseus')}}">
              <i class="nc-icon nc-bell-55"></i>
              <p>why us?</p>
            </a>
          </li>
          <li class="{{ strpos(Request::path(),'blog') ? 'active' : ''}}">
            <a href="{{route('blogs')}}">
              <i class="nc-icon nc-chart-pie-36"></i>
              <p>Blogs</p>
            </a>
          </li>
          <li class="{{ strpos(Request::path(),'clients') ? 'active' : ''}}">
            <a href="{{ route('clients')}} ">
              <i class="nc-icon nc-single-02"></i>
              <p>our clients</p>
            </a>
          </li>
          <li class="{{ strpos(Request::path(),'inquers') ? 'active' : ''}}">
            <a href="{{ route('inquers')}}" >
              
                <i class="nc-icon nc-tile-56"></i>
                <span>inquers</span>
                @if ($notifi != 0)
                <span class="float-right numOfNotif">{{$notifi}}</span>
                @endif
              
            </a>
          </li>
          <li class="{{ strpos(Request::path(),'plans') ? 'active' : ''}}">
            <a href="{{route('plans')}}">
              <i class="nc-icon nc-trophy"></i>
              <p>Plans</p>
            </a>
          </li>
          
          
          <li class="{{ strpos(Request::path(),'staff') ? 'active' : ''}}">
            <a href="{{route('staff')}}">
              <i class="nc-icon nc-caps-small"></i>
              <p>Admins</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>