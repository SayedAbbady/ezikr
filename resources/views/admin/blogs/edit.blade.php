@extends('admin.layouts.main')
    
@section('title')
  Edit blog
@endsection

@section('content')
  <div class="content">
    <div class="row">
      <div class="col-lg-6 col-12">
        <div class="card ">
          <div class="card-header">
            <h5 class="card-title">Blogs</h5>
            <p class="card-category">Edit this blog </p>
          </div>
          <div class="card-body ">
              
            <form enctype="multipart/form-data" accept-charset="utf-8" method="POST" id="blogEdit">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="id" value="{{ $blogs[0]->id }}">
              <input type="hidden" name="bg" value="{{ $blogs[0]->blogs_image }}">
              <div class="form-row">
                <div class="form-group col-md-12">
                  
                  <label for="">Blog title</label>
                  <input type="text" class="form-control plan-main" name="title" placeholder="Title" value="{{$blogs[0]->blogs_tilte}}">
                  <small class="text-danger errorClass font-weight-bold" id="titleErrors"></small>
                </div>
                <div class="form-group input-File-Custom">
                  <label for="">Select image</label>
                  <input type="file" name="file" id="file" class="input-file plan-main">
                    <label for="file" class="btn btn-tertiary js-labelFile">
                      <i class="icon fa fa-check"></i>
                      <span class="js-fileName ">{{$blogs[0]->blogs_image??'Choose a file'}}</span>
                    </label>
                    <small class="text-danger errorClassSeo font-weight-bold" id="fileErrors"></small>
                </div>
                <div class="form-group col-md-12">
                  <label for="inputPassword4">Blog description</label>
                  <textarea name="description" style="background: white" class="plan-main" id='summernote' cols="30" rows="10">
                    {{$blogs[0]->blogs_text}}
                  </textarea>
                  <small class="text-danger errorClass font-weight-bold" id="descriptionErrors"></small>
                </div>
              </div>
              
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            
            <div class="card-footer ">
              <hr>
              <div class="stats">
            </div>
          </div>
        </div>
      </div>
    </div>

    </div>
  </div>
    
@endsection
  