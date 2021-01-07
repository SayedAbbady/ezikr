@extends('admin.layouts.main')
    
@section('title')
  Choose us
@endsection

@section('content')
  <div class="content">
    <div class="row">
      <div class="col-md-6">
        <div class="card ">
          <div class="card-header">
            <h5 class="card-title">Why choose us</h5>
            <p class="card-category">Add new option to make people choose us  </p>
          </div>
          <div class="card-body ">
              
            <form enctype="multipart/form-data" accept-charset="utf-8" method="POST" id="chooseusAdd">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-row">
                <div class="form-group col-md-12">
                  
                  <label for="">Title</label>
                  <input type="text" class="form-control chooseus-main" name="title" placeholder="Title">
                  <small class="text-danger errorClass font-weight-bold" id="titleErrors"></small>
                </div>
                <div class="form-group col-md-12">
                  <label for="">Description</label>
                  <input type="text" class="form-control chooseus-main" name="description" placeholder="Description">
                  <small class="text-danger errorClass font-weight-bold" id="descriptionErrors"></small>
                </div>
                <div class="form-group col-md-12">
                  <label for="">Icon</label>
                  <input type="text" class="form-control chooseus-main" name="icon" placeholder="Icon [html tag]">
                  <small class="text-danger errorClass font-weight-bold" id="iconErrors"></small>
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
  