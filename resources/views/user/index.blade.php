@extends('user.layouts.main')
@section('title')
    Zikr
@endsection
@section('content')

    <!-- START HOMEPAGE DESIGN AREA -->
    <header id="home" class="welcome-area">
        @include('user.navbar')
        
        @include('user.slider')
    </header>
    <!-- / END HOMEPAGE DESIGN AREA -->


    @include('user.aboutus')
    

    @include('user.programs')

    
    @include('user.teachers')

    
    @include('user.bookBtn')

    @include('user.chooseus')
    

    @include('user.clients')

    @include('user.price')
    

    @include('user.blogs.indexBlog')
    

    @include('user.contactus')
    
    @include('user.footer')

    @include('user.component.upButton')

@endsection
    