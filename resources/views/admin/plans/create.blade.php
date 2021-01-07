@extends('admin.layouts.main')
    
@section('title')
  Add Plan
@endsection

@section('content')
  <div class="content">
    <div class="row">
      <div class="col-md-6 col-12">
        <div class="card ">
          <div class="card-header">
            <h5 class="card-title">Plans</h5>
            <p class="card-category">Add new plans </p>
          </div>
          <div class="card-body ">
              
            <form enctype="multipart/form-data" accept-charset="utf-8" method="POST" id="planAdd">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-row">
                <div class="form-group col-md-12">
                  
                  <label for="">Title</label>
                  <input type="text" class="form-control plan-main" name="title" placeholder="Title">
                  <small class="text-danger errorClass font-weight-bold" id="titleErrors"></small>
                </div>
                <div class="form-group col-md-12">
                  <label for="inputPassword4">price</label>
                  <input type="number" class="form-control plan-main" name="price" placeholder="Price">
                  <small class="text-danger errorClass font-weight-bold" id="priceErrors"></small>
                </div>
                <div class="form-group col-md-12">
                  <label for="inputPassword4">Featuers</label>
                  <textarea name="planfeature" class="plan-main" id='summernote' cols="30" rows="10"></textarea>
                  <small class="text-danger errorClass font-weight-bold" id="planfeatureErrors"></small>
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
  