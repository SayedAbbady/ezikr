@extends('admin.layouts.main')
    
@section('title')
  Edit program
@endsection

@section('content')
  <div class="content">
    <div class="row">
      <div class="col-md-6">
        <div class="card ">
          <div class="card-header">
            <h5 class="card-title">Programs</h5>
            <p class="card-category">Edit program </p>
          </div>
          <div class="card-body ">
              
            <form enctype="multipart/form-data" accept-charset="utf-8" method="POST" id="programEdit">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="id" value="{{ $programs[0]->p_id }}">
              <input type="hidden" name="bg" value="{{ $programs[0]->p_icon }}">
              <div class="form-row">
                <div class="form-group col-md-12">
                  
                  <label for="">Title</label>
                  <input type="text" class="form-control sliderUpload-main" name="title" value="{{$programs[0]->p_title}}" placeholder="Title">
                  <small class="text-danger errorClass font-weight-bold" id="titleErrors"></small>
                </div>
                <div class="form-group col-md-12">
                  <label for="inputPassword4">Description</label>
                  <input type="text" class="form-control sliderUpload-main" name="description" value="{{$programs[0]->p_description}}" placeholder="Description">
                  <small class="text-danger errorClass font-weight-bold" id="descriptionErrors"></small>
                </div>
              </div>
              <div class="form-group input-File-Custom">
                <label for="">Select Image</label>
                <input type="file" name="file" id="file" class="input-file sliderUpload-main">
                  <label for="file" class="btn btn-tertiary js-labelFile">
                    <i class="icon fa fa-check"></i>
                    <span class="js-fileName ">{{$programs[0]->p_icon??'Choose a file'}}</span>
                  </label>
                  <small class="text-danger errorClass font-weight-bold" id="fileErrors"></small>
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
  