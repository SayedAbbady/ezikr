@extends('admin.layouts.main')
    
@section('title')
  Choose us
@endsection

@section('content')
{{-- this model to edit section --}}
  @include('admin.chooseus.modelEditBg')
{{-- this model to edit section --}}
  <div class="content">
    <div class="row">
      <div class="col-12">
      <div class="card ">
        <div class="card-header">
          <div class="float-left">
            <h5 class="card-title">choose us</h5>
            <p class="card-category">Show all option that we give user to choose us </p>
          </div>
          <div class="float-right">
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
              Edit section background
            </button>
            <a href="{{route('chooseus.add')}}">
              <button class="btn btn-primary">add new option</button>
            </a>
          </div>
        </div>
        <div class="card-body ">
          <div class="row">
            @if (COUNT($chooseus) < 1)
              <div class="col-12">
                <div class="alert alert-danger" role="alert">
                  No teacher added <b>Please click </b>in button that in right top to add more
                </div>
              </div>
            @endif
            @foreach ($chooseus as $item)
            <div class="col-md-4" id="{{$item->w_id}}">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-2">
                      <h4 class="card-title">
                        {!!$item->w_icon!!}
                      </h4>
                    </div>
                    <div class="col-md-9">
                      <h4 class="card-title">{{$item->w_title}}</h4>
                      <p class="card-text">{{$item->w_description}}</p>
                    </div>
                  </div>
                <p class="card-text mt-5">
                  <small class="text-muted float-left"><b>Last edit:</b>  {{$item->updated_at->toDayDateTimeString()}}</small>
                  <span class="float-right">
                    <a href="{{route('chooseus.edit',$item->w_id)}}" class="text-primary px-3">
                      <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>

                    <a href="#" class="deleteChooseus text-danger" data-id="{{$item->w_id}}" data-token={{csrf_token()}}>
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
  