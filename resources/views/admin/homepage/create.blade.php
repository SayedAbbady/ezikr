@extends('admin.layouts.main')
    
@section('title')
  SEO
@endsection

@section('content')
  <div class="content">
    <div class="row">
      <div class="col-md-6">
      <div class="card ">
        <div class="card-header">
          <h5 class="card-title">Home page & Slider</h5>
          <p class="card-category">Add title and description with image to make a slider </p>
        </div>
        <div class="card-body ">
            
          <form enctype="multipart/form-data" accept-charset="utf-8" method="POST" id="sliderUpload">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-row">
              <div class="form-group col-md-12">
                
                <label for="">Title</label>
                <input type="text" class="form-control sliderUpload-main" name="title" placeholder="Title">
                <small class="text-danger errorClass font-weight-bold" id="titleErrors"></small>
              </div>
              <div class="form-group col-md-12">
                <label for="inputPassword4">Description</label>
                <input type="text" class="form-control sliderUpload-main" name="description" placeholder="Description">
                <small class="text-danger errorClass font-weight-bold" id="descriptionErrors"></small>
              </div>
            </div>
            <div class="form-group input-File-Custom">
              <label for="">Select Background</label>
              <input type="file" name="file" id="file" class="input-file sliderUpload-main">
                <label for="file" class="btn btn-tertiary js-labelFile">
                  <i class="icon fa fa-check"></i>
                  <span class="js-fileName ">Choose a file</span>
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

    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title">SEO tages</h5>
          <p class="card-category">SEO tages you must full all </p>
        </div>
        <div class="card-body ">
          <form enctype="multipart/form-data" accept-charset="utf-8" method="POST" id="SeoUpload">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
            <div class="form-group input-File-Custom">
              <label for="">Select Icon</label>
              <input type="file" name="fileicon" id="file" class="input-file sliderUpload-mainSeo">
                <label for="file" class="btn btn-tertiary js-labelFile">
                  <i class="icon fa fa-check"></i>
                  <span class="js-fileName ">{{$homepage->h_icon??"Choose a file"}}</span>
                </label>
                <small class="text-danger errorClassSeo font-weight-bold" id="fileErrors"></small>
            </div>
            <div class="form-group">
              <label for="inputAddress">Keywords (help google to see you)</label>
              <input type="text" class="form-control" name="keywords" placeholder="Keywords-1 ,Keywords-2 ,Keywords-3 ,..." value="{{$homepage->h_seoKeywords}}">
            </div>
            <div class="form-group input-File-Custom">
              <label for="">Select Logo</label>
              <input type="file" name="filelogo" id="file" class="input-file sliderUpload-mainSeo">
                <label for="file" class="btn btn-tertiary js-labelFile">
                  <i class="icon fa fa-check"></i>
                  <span class="js-fileName ">{{$homepage->h_logo??"Choose a file"}}</span>
                </label>
                <small class="text-danger errorClassSeo font-weight-bold" id="fileErrors"></small>
            </div>

            <div class="form-group">
              <label for="inputAddress">Website description</label>
              <input type="text" class="form-control" name="webdescription" placeholder="description" value="{{$homepage->h_seoDescription}}">
            </div>
            
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
        <div class="card-footer ">
          <hr>
          <div class="stats">
            <i class="fa fa-history"></i> <b>Last edit:</b>  {{$homepage->updated_at->toDayDateTimeString()}}
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
    
@endsection
  