@extends('admin.layouts.main')
    
@section('title')
  Add program
@endsection

@section('content')
  <div class="content">
    <div class="row">
      <div class="col-md-6">
        <div class="card ">
          <div class="card-header">
            <h5 class="card-title">Programs</h5>
            <p class="card-category">Add new programs and courses </p>
          </div>
          <div class="card-body ">
              
            <form enctype="multipart/form-data" accept-charset="utf-8" method="POST" id="programAdd">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-row">
                <div class="form-group col-md-12">
                  
                  <label for="">Title</label>
                  <input type="text" class="form-control programAdd-main" name="title" placeholder="Title">
                  <small class="text-danger errorClass font-weight-bold" id="titleErrors"></small>
                </div>
                <div class="form-group col-md-12">
                  <label for="inputPassword4">Description</label>
                  <input type="text" class="form-control programAdd-main" name="description" placeholder="Description">
                  <small class="text-danger errorClass font-weight-bold" id="descriptionErrors"></small>
                </div>
              </div>
              <div class="form-group input-File-Custom">
                <label for="">Select Image</label>
                <input type="file" name="file" id="file" class="input-file programAdd-main">
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

    </div>
  </div>
    
@endsection
  