@extends('admin.layouts.main')
    
@section('title')
  About us
@endsection

@section('content')
  <div class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card ">
            <div class="card-header">
              <h5 class="card-title">About us section</h5>
              <p class="card-category">Edit and read about us section</p>
            </div>
            <div class="card-body ">
              <form enctype="multipart/form-data" accept-charset="utf-8" method="POST" id="aboutUsEdit">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="id" value="{{$about->a_id}}">
                <input type="hidden" name="bg" value="{{$about->a_image}}">
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="">Title</label>
                    <input type="text" class="form-control sliderUpload-main" value="{{$about->a_title}}" name="title" placeholder="Title">
                    <small class="text-danger errorClass font-weight-bold" id="titleErrors"></small>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="">Email</label>
                    <input type="email" class="form-control sliderUpload-main" value="{{$about->a_email}}" name="email" placeholder="Email">
                    <small class="text-danger errorClass font-weight-bold" id="emailErrors"></small>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="">Phone</label>
                    <input type="text" class="form-control sliderUpload-main" value="{{$about->a_phone}}" name="phone" placeholder="Phone">
                    <small class="text-danger errorClass font-weight-bold" id="phoneErrors"></small>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="">Facebook</label>
                    <input type="text" class="form-control sliderUpload-main" value="{{$about->a_facebook}}" name="facebook" placeholder="Facebook">
                    <small class="text-danger errorClass font-weight-bold" id="facebookErrors"></small>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Number of courses</label>
                    <input type="text" class="form-control sliderUpload-main" value="{{$about->a_numOfCourses}}" name="courses" placeholder="Courses">
                    <small class="text-danger errorClass font-weight-bold" id="coursesErrors"></small>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Number of teacher</label>
                    <input type="text" class="form-control sliderUpload-main" value="{{$about->a_numOfTeachers}}" name="teachers" placeholder="Teachers">
                    <small class="text-danger errorClass font-weight-bold" id="teachersErrors"></small>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Number of student</label>
                    <input type="text" class="form-control sliderUpload-main" value="{{$about->a_numOfStudents}}" name="students" placeholder="Students">
                    <small class="text-danger errorClass font-weight-bold" id="studentsErrors"></small>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Number of session</label>
                    <input type="text" class="form-control sliderUpload-main" value="{{$about->a_numOfSessions}}" name="sessions" placeholder="Sessions">
                    <small class="text-danger errorClass font-weight-bold" id="sessionsErrors"></small>
                  </div>
                </div>
                <div class="form-group input-File-Custom">
                  <label for="">Select Background</label>
                  <input type="file" name="file" id="file" class="input-file sliderUpload-main">
                    <label for="file" class="btn btn-tertiary js-labelFile">
                      <i class="icon fa fa-check"></i>
                      <span class="js-fileName ">{{$about->a_image??"Choose a file"}}</span>
                    </label>
                    <small class="text-danger errorClass font-weight-bold" id="fileErrors"></small>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="inputPassword4">Description</label>
                    <textarea id="editor1" class="form-control sliderUpload-main" rows="10" name="description" placeholder="Description">
                      {{$about->a_description}}
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
        <div class="col-md-6">
          <div class="card">

            <img src="{{asset("assets/images/about/".$about->a_image)}}" width="100%" alt="image">
          </div>
        </div>
      </div>
      
  </div>

  
    
@endsection
  