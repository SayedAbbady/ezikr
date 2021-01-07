@extends('admin.layouts.main')
    
@section('title')
  SEO
@endsection

@section('content')
  <div class="content">
    <div class="row">
      <div class="col-12">
      <div class="card ">
        <div class="card-header">
          <div class="float-left">
            <h5 class="card-title">Home page & Slider</h5>
            <p class="card-category">Show all slider (Title - Description - images) </p>
          </div>
          <div class="float-right">
            <a href="{{route('seo')}}">
              <button class="btn btn-primary">add new slider & edit seo</button>
            </a>
          </div>
        </div>
        <div class="card-body ">
          <div class="row">
            @if (COUNT($homepage) < 1)
              <div class="col-12">
                <div class="alert alert-danger" role="alert">
                  No slider added <b>Please click </b>in button that in right top to add more
                </div>
              </div>
            @endif
            @foreach ($homepage as $item)
            <div class="col-md-4" id="{{$item->h_id}}">
              <div class="card mb-3">
                <img class="card-img-top" src="{{asset("assets/images/slider/".$item->h_background)}}" alt="Card image cap">
                <div class="card-body">
                <h4 class="card-title">{{$item->h_title}}</h4>
                <p class="card-text">{{$item->h_description}}</p>
                <p class="card-text">
                  <small class="text-muted float-left">Last updated 3 mins ago</small>
                  <span class="float-right">
                    <a href="{{route('editSlider',$item->h_id)}}" class="text-primary px-3">
                      <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>

                    <a href="#" class="deleteSlider text-danger" data-id="{{$item->h_id}}" data-token={{csrf_token()}}>
                      <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </a>
                  </span>
                </p>
              </div>
            </div>
          </div>
          @endforeach
          </div>
          
          <div class="card-footer ">
            <hr>
            <div class="stats">
          </div>
        </div>
      </div>
    </div>
  </div>

  </div>
    
@endsection
  