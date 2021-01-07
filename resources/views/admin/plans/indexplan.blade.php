@extends('admin.layouts.main')
    
@section('title')
  Plans
@endsection

@section('content')
  <div class="content">
    <div class="row">
      <div class="col-12">
      <div class="card ">
        <div class="card-header">
          <div class="float-left">
            <h5 class="card-title">Plans</h5>
            <p class="card-category">Show all Plans</p>
          </div>
          <div class="float-right">
            <a href="{{route('plans.add')}}">
              <button class="btn btn-primary">add new Plan</button>
            </a>
          </div>
        </div>
        <div class="card-body ">
          <div class="row">
            @if (COUNT($plans) < 1)
              <div class="col-12">
                <div class="alert alert-danger" role="alert">
                  No plans added <b>Please click </b>in button that in right top to add more
                </div>
              </div>
            @endif
            @foreach ($plans as $item)
            <div class="col-md-4" id="{{$item->pl_id}}">
              <div class="card mb-3">
                <div class="card-body">
                <h4 class="card-title">{{$item->pl_title}}</h4>
                <p class="card-text">{{$item->pl_money}} / month</p>
                <div class="card-text text-center">{!!$item->pl_features!!}</div>
                <p class="card-text">
                  <small class="text-muted float-left"><b>Last edit:</b>  {{$item->updated_at->toDayDateTimeString()}}</small>
                  <span class="float-right">
                    <a href="{{route('plans.edit',$item->pl_id)}}" class="text-primary px-3">
                      <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>

                    <a href="#" class="deletePlan text-danger" data-id="{{$item->pl_id}}" data-token={{csrf_token()}}>
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
  