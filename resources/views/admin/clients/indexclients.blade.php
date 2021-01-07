@extends('admin.layouts.main')
    
@section('title')
  Clients
@endsection

@section('content')
{{-- this model to edit section --}}
  @include('admin.clients.modelEditBg')
{{-- this model to edit section --}}
  <div class="content">
    <div class="row">
      <div class="col-12">
      <div class="card ">
        <div class="card-header">
          <div class="float-left">
            <h5 class="card-title">Clients</h5>
            <p class="card-category">Show all clients and controll them </p>
          </div>
          <div class="float-right">
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
              Edit section background
            </button>
            <a href="{{route('clients.add')}}">
              <button class="btn btn-primary">add new client</button>
            </a>
          </div>
        </div>
        <div class="card-body ">
          <div class="row">
            @if (COUNT($clients) < 1)
              <div class="col-12">
                <div class="alert alert-danger" role="alert">
                  No teacher added <b>Please click </b>in button that in right top to add more
                </div>
              </div>
            @endif
            @foreach ($clients as $item)
            <div class="col-md-4" id="{{$item->cl_id}}">
              <div class="card mb-3">
                <img class="mx-auto" src="{{asset("assets/images/clients/".$item->cl_image)}}" width="50%" alt="Card image cap">
                <div class="card-body">
                <h4 class="card-title">{{$item->cl_name}}</h4>
                <p class="card-text">{{$item->cl_message}}</p>
                <p class="card-text">
                  <small class="text-muted float-left"><b>Last edit:</b>  {{$item->updated_at->toDayDateTimeString()}}</small>
                  <span class="float-right">
                    <a href="{{route('clients.edit',$item->cl_id)}}" class="text-primary px-3">
                      <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>

                    <a href="#" class="deleteClient text-danger" data-id="{{$item->cl_id}}" data-token={{csrf_token()}}>
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
  