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
        </div>
        <div class="card-body ">
          <div class="card mb-3">
            <img class="mx-auto" src="{{asset("assets/images/blogs/".$blogs[0]->blogs_image)}}" width="50%" alt="Card
            image cap">
            <div class="card-body">
              <h4 class="card-title">{{$blogs[0]->blogs_tilte}}</h4>
              <p class="card-text">{{Str::limit($blogs[0]->blogs_text,150,'.....')}}</p>
              <p class="card-text">
                <small class="text-muted float-left"><b>Last edit:</b>
                  {{$blogs[0]->updated_at->toDayDateTimeString()}}</small>
                <span class="float-right">

                  <a href="{{route('blogs.edit',$blogs[0]->id)}}" class="text-primary px-3">
                    <i class="fa fa-pencil" aria-hidden="true"></i> Edit 
                  </a>

                </span>
              </p>
            </div>
            <div class="card-body">
              <h4 class="card-title">Comments</h4>
              @foreach ($comments as $item)
                <div class="card-text" id='{{$item->id}}'>
                  <div class="row">
                    <div class="col-md-3 text-center">
                      <img src="{{asset('assets/images/blogs/'.$item->co_image)}}" alt="image" width="100px" class="rounded img-thumbnail">
                      <p class="card-text">{{$item->co_name}}</p>
                    </div>
                    <div class="col-md-9">
                      <div>
                        <h6 class="text-muted float-left"><i class="fa fa-calendar"></i>  {{ date('j F Y - g:i a',strtotime($item->created_at))}}</h6>
                        <a href="#" class="float-right deletecomment text-danger" data-id="{{$item->id}}" data-token={{csrf_token()}}>
                          <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </a>
                      </div>
                      <div class="clearfix"></div>
                      <p class="card-text ">{{$item->co_text}}</p>
                      
                    </div>
                  </div>
                  <hr>
                </div>
              @endforeach
                

            </div>
          </div>


          <div class="card-footer ">
            <hr>
            <div class="stats">
              <form method="post" enctype="multipart/form-data" id="comment-Id-Form-Send-9G6B8">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="username" value="{{$blogs[0]->id}}">
                <div class="form-group col-6">
                    {{-- <p>Name</p> --}}
                    <input type="hidden" name="name" class="form-control comment" value="Admin" required="required">
                    <small class="text-danger errorClass font-weight-bold" id="nameErrors"></small>
                </div>
                <div class="form-group col-6">
                    {{-- <p>Phone</p> --}}
                    <input type="hidden" name="phone" value="0101253665478" class="form-control comment"  required="required">
                    <small class="text-danger errorClass font-weight-bold" id="phoneErrors"></small>
                </div>
                <div class="form-group col-md-12">
                    {{-- <p>Email</p> --}}
                    <input type="hidden" name="email" value="ezikr@gmail.com" class="form-control comment"  required="required">
                    <small class="text-danger errorClass font-weight-bold" id="emailErrors"></small>
                </div>
                <div class="form-group col-md-12">
                    <h5 class="card-title">Add comment</h5>
                    <textarea rows="6" name="message" class="form-control comment"  required="required"></textarea>
                    <small class="text-danger errorClass font-weight-bold" id="messageErrors"></small>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">add comment</button>
                </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  @endsection