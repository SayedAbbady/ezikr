@extends('admin.layouts.main')
    
@section('title')
  Edit teachers
@endsection

@section('content')
  <div class="content">
    <div class="row">
      <div class="col-md-6">
        <div class="card ">
          <div class="card-header">
            <h5 class="card-title">Teachers</h5>
            <p class="card-category">Edit teacher </p>
          </div>
          <div class="card-body ">
              
            <form enctype="multipart/form-data" accept-charset="utf-8" method="POST" id="teacherEdit">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="id" value="{{ $teachers[0]->t_id }}">
              <input type="hidden" name="bg" value="{{ $teachers[0]->t_image }}">
              <div class="form-row">
                <div class="form-group col-md-12">
                  
                  <label for="">Name</label>
                  <input type="text" class="form-control sliderUpload-main" name="name" value="{{$teachers[0]->t_name}}" placeholder="Name">
                  <small class="text-danger errorClass font-weight-bold" id="nameErrors"></small>
                </div>
                <div class="form-group col-md-12">
                  <label for="inputPassword4">Job title</label>
                  <input type="text" class="form-control sliderUpload-main" name="jobTitle" value="{{$teachers[0]->t_jobTitle}}" placeholder="Job title">
                  <small class="text-danger errorClass font-weight-bold" id="jobTitleErrors"></small>
                </div>
              </div>
              <div class="form-group input-File-Custom">
                <label for="">Select Image</label>
                <input type="file" name="file" id="file" class="input-file sliderUpload-main">
                  <label for="file" class="btn btn-tertiary js-labelFile">
                    <i class="icon fa fa-check"></i>
                    <span class="js-fileName ">{{$teachers[0]->t_image??'Choose a file'}}</span>
                  </label>
                  <small class="text-danger errorClass font-weight-bold" id="fileErrors"></small>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            
            <div class="card-footer ">
              <hr>
              <div class="stats"><b><i class="fa fa-history"></i> Last edit:</b>  {{$teachers[0]->updated_at->toDayDateTimeString()}}
            </div>
          </div>
        </div>
      </div>
    </div>

    </div>
  </div>
    
@endsection
  