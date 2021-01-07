@extends('admin.layouts.main')
    
@section('title')
  Programs
@endsection

@section('content')
  <div class="content">
    <div class="row">
      <div class="col-12">
      <div class="card ">
        <div class="card-header">
          <div class="float-left">
            <h5 class="card-title">Programs</h5>
            <p class="card-category">Show all Programs (Title - Description - images) </p>
          </div>
          <div class="float-right">
            <a href="{{route('programs.add')}}">
              <button class="btn btn-primary">add new program</button>
            </a>
          </div>
        </div>
        <div class="card-body ">
          <div class="row">
            @if (COUNT($programs) < 1)
              <div class="col-12">
                <div class="alert alert-danger" role="alert">
                  No programs added <b>Please click </b>in button that in right top to add more
                </div>
              </div>
            @endif
            @foreach ($programs as $item)
            <div class="col-md-4" id="{{$item->p_id}}">
              <div class="card mb-3">
                <img class="mx-auto" src="{{asset("assets/images/programs/".$item->p_icon)}}" width="50%" alt="Card image cap">
                <div class="card-body">
                <h4 class="card-title">{{$item->p_title}}</h4>
                <p class="card-text">{{$item->p_description}}</p>
                <p class="card-text">
                  <small class="text-muted float-left"><b>Last edit:</b>  {{$item->updated_at->toDayDateTimeString()}}</small>
                  <span class="float-right">
                    <a href="{{route('programs.edit',$item->p_id)}}" class="text-primary px-3">
                      <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>

                    <a href="#" class="deleteProgram text-danger" data-id="{{$item->p_id}}" data-token={{csrf_token()}}>
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
  