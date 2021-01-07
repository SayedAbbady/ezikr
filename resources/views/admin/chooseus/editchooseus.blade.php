@extends('admin.layouts.main')
    
@section('title')
  Edit choose us
@endsection

@section('content')
  <div class="content">
    <div class="row">
      <div class="col-md-6">
        <div class="card ">
          <div class="card-header">
            <h5 class="card-title">Choose us</h5>
            <p class="card-category">Edit one item of choose us </p>
          </div>
          <div class="card-body ">
              
            <form enctype="multipart/form-data" accept-charset="utf-8" method="POST" id="chooseusEdit">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="id" value="{{ $chooseus[0]->w_id }}">
              <div class="form-row">
                <div class="form-group col-md-12">
                  
                  <label for="">Title</label>
                  <input type="text" class="form-control sliderUpload-main" name="title" value="{{$chooseus[0]->w_title}}" placeholder="Title">
                  <small class="text-danger errorClass font-weight-bold" id="titleErrors"></small>
                </div>
                <div class="form-group col-md-12">
                  <label for="inputPassword4">Description</label>
                  <input type="text" class="form-control sliderUpload-main" name="description" value="{{$chooseus[0]->w_description}}" placeholder="Description">
                  <small class="text-danger errorClass font-weight-bold" id="descriptionErrors"></small>
                </div>
                <div class="form-group col-md-12">
                  <label for="">Icon</label>
                  <input type="text" class="form-control sliderUpload-main" name="icon" value="{{$chooseus[0]->w_icon}}" placeholder="Icon">
                  <small class="text-danger errorClass font-weight-bold" id="iconErrors"></small>
                </div>
              </div>
              
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            
            <div class="card-footer ">
              <hr>
              <div class="stats"><b><i class="fa fa-history"></i> Last edit:</b>  {{$chooseus[0]->updated_at->toDayDateTimeString()}}
            </div>
          </div>
        </div>
      </div>
    </div>

    </div>
  </div>
    
@endsection
  