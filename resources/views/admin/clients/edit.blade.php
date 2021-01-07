@extends('admin.layouts.main')
    
@section('title')
  Edit clients
@endsection

@section('content')
  <div class="content">
    <div class="row">
      <div class="col-md-6">
        <div class="card ">
          <div class="card-header">
            <h5 class="card-title">Clients</h5>
            <p class="card-category">Edit client </p>
          </div>
          <div class="card-body ">
              
            <form enctype="multipart/form-data" accept-charset="utf-8" method="POST" id="clientEdit">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="id" value="{{ $clients[0]->cl_id }}">
              <input type="hidden" name="bg" value="{{ $clients[0]->cl_image }}">
              <div class="form-row">
                <div class="form-group col-md-12">
                  
                  <label for="">Name</label>
                  <input type="text" class="form-control sliderUpload-main" name="name" value="{{$clients[0]->cl_name}}" placeholder="Name">
                  <small class="text-danger errorClass font-weight-bold" id="nameErrors"></small>
                </div>
                <div class="form-group col-md-12">
                  <label for="inputPassword4">Message</label>
                  <input type="text" class="form-control sliderUpload-main" name="message" value="{{$clients[0]->cl_message}}" placeholder="Message">
                  <small class="text-danger errorClass font-weight-bold" id="messageErrors"></small>
                </div>
              </div>
              <div class="form-group input-File-Custom">
                <label for="">Select Image</label>
                <input type="file" name="newFile" id="file" class="input-file sliderUpload-main">
                  <label for="file" class="btn btn-tertiary js-labelFile">
                    <i class="icon fa fa-check"></i>
                    <span class="js-fileName ">{{$clients[0]->cl_image??'Choose a file'}}</span>
                  </label>
                  <small class="text-danger errorClass font-weight-bold" id="newFileErrors"></small>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            
            <div class="card-footer ">
              <hr>
              <div class="stats"><b><i class="fa fa-history"></i> Last edit:</b>  {{$clients[0]->updated_at->toDayDateTimeString()}}
            </div>
          </div>
        </div>
      </div>
    </div>

    </div>
  </div>
    
@endsection
  