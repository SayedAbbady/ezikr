@extends('admin.layouts.main')
    
@section('title')
  Edit slider
@endsection

@section('content')
  <div class="content">
    <div class="row">
      <div class="col-md-6">
      <div class="card ">
        <div class="card-header">
          <h5 class="card-title">Edit  </h5>
          <p class="card-category">Add title and description with image to make a slider </p>
        </div>
        <div class="card-body ">
            
          <form enctype="multipart/form-data" accept-charset="utf-8" method="POST" id="editSlider">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="id" value="{{$homepage[0]->h_id}}">
            <input type="hidden" name="bg" value="{{$homepage[0]->h_background}}">
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="">Title</label>
                <input type="text" class="form-control sliderUpload-main" name="title" placeholder="Title" value="{{$homepage[0]->h_title}}">
                <small class="text-danger errorClass font-weight-bold" id="titleErrors"></small>
              </div>
              <div class="form-group col-md-12">
                <label for="inputPassword4">Description</label>
                <input type="text" class="form-control sliderUpload-main" name="description" placeholder="Description" value="{{$homepage[0]->h_description}}">
                <small class="text-danger errorClass font-weight-bold" id="descriptionErrors"></small>
              </div>
            </div>
            <div class="form-group input-File-Custom">
              <label for="">Select Background</label>
              <input type="file" name="file" id="file" class="input-file sliderUpload-main">
                <label for="file" class="btn btn-tertiary js-labelFile">
                  <i class="icon fa fa-check"></i>
                  <span class="js-fileName ">{{$homepage[0]->h_background??"Choose a file"}}</span>
                </label>
                <small class="text-danger errorClass font-weight-bold" id="fileErrors"></small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          
          <div class="card-footer ">
            <hr>
            <div class="stats">
              <i class="fa fa-history"></i> <b>Last edit:</b>  {{$homepage[0]->updated_at->toDayDateTimeString()}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    
@endsection
  