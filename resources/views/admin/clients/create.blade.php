@extends('admin.layouts.main')
    
@section('title')
  Add client
@endsection

@section('content')
  <div class="content">
    <div class="row">
      <div class="col-md-6">
        <div class="card ">
          <div class="card-header">
            <h5 class="card-title">Clients</h5>
            <p class="card-category">Add new clients  </p>
          </div>
          <div class="card-body ">
              
            <form enctype="multipart/form-data" accept-charset="utf-8" method="POST" id="clientAdd">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-row">
                <div class="form-group col-md-12">
                  
                  <label for="">Name</label>
                  <input type="text" class="form-control client-main" name="name" placeholder="Name">
                  <small class="text-danger errorClass font-weight-bold" id="nameErrors"></small>
                </div>
                <div class="form-group col-md-12">
                  <label for="inputPassword4">Message</label>
                  <input type="text" class="form-control client-main" name="message" placeholder="Message">
                  <small class="text-danger errorClass font-weight-bold" id="messageErrors"></small>
                </div>
              </div>
              <div class="form-group input-File-Custom">
                <label for="">Select Image</label>
                <input type="file" name="newFile" id="file" class="input-file client-main">
                  <label for="file" class="btn btn-tertiary js-labelFile">
                    <i class="icon fa fa-check"></i>
                    <span class="js-fileName ">Choose a file</span>
                  </label>
                  <small class="text-danger errorClass font-weight-bold" id="newFileErrors"></small>
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
  