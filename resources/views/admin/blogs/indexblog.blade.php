@extends('admin.layouts.main')
    
@section('title')
  Blogs
@endsection

@section('content')
  <div class="content">
    <div class="row">
      <div class="col-12">
      <div class="card ">
        <div class="card-header">
          <div class="float-left">
            <h5 class="card-title">Blogs</h5>
            <p class="card-category">Show all Blogs </p>
          </div>
          <div class="float-right">
            <a href="{{route('blogs.add')}}">
              <button class="btn btn-primary">add new blog</button>
            </a>
          </div>
        </div>
        <div class="card-body ">
          <div class="row">
            @if (COUNT($blogs) < 1)
              <div class="col-12">
                <div class="alert alert-danger" role="alert">
                  No blogs added <b>Please click </b>in button that in right top to add more
                </div>
              </div>
            @endif
            @foreach ($blogs as $item)
            <div class="col-md-4" id="{{$item->id}}">
              <div class="card mb-3">
                <img class="mx-auto" src="{{asset("assets/images/blogs/".$item->blogs_image)}}" width="50%" alt="Card image cap">
                <div class="card-body">
                <h4 class="card-title">{{$item->blogs_tilte}}</h4>
                <p class="card-text">{!!Str::limit($item->blogs_text,150,'.....')!!}</p>
                <p class="card-text">
                  <small class="text-muted float-left"><b>Last edit:</b>  {{$item->updated_at->toDayDateTimeString()}}</small>
                  <span class="float-right">
                    <a href="{{route('blogs.show',$item->id)}}" class="text-success">
                      <i class="fa fa-eye" aria-hidden="true"></i>
                    </a>
                    <a href="{{route('blogs.edit',$item->id)}}" class="text-primary px-3">
                      <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>

                    <a href="#" class="deleteblog text-danger" data-id="{{$item->id}}" data-token={{csrf_token()}}>
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
  