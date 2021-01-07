@extends('admin.layouts.main')
    
@section('title')
  Edit plan
@endsection

@section('content')
  <div class="content">
    <div class="row">
      <div class="col-md-6">
        <div class="card ">
          <div class="card-header">
            <h5 class="card-title">plans</h5>
            <p class="card-category">Edit plan </p>
          </div>
          <div class="card-body ">
              
            <form enctype="multipart/form-data" accept-charset="utf-8" method="POST" id="planEdit">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="id" value="{{ $plans[0]->pl_id }}">
              <div class="form-row">
                <div class="form-group col-md-12">
                  
                  <label for="">Title</label>
                  <input type="text" class="form-control plan-main" name="title" value="{{$plans[0]->pl_title}}" placeholder="Title">
                  <small class="text-danger errorClass font-weight-bold" id="titleErrors"></small>
                </div>
                <div class="form-group col-md-12">
                  <label for="inputPassword4">Price</label>
                  <input type="number" class="form-control sliderUpload-main" name="price" value="{{$plans[0]->pl_money}}" placeholder="Price">
                  <small class="text-danger errorClass font-weight-bold" id="priceErrors"></small>
                </div>
                <div class="form-group col-md-12">
                  <label for="inputPassword4">Featuers</label>
                  <textarea name="planfeature" class="plan-main" id='summernoteedit' cols="30" rows="10">
                    {{$plans[0]->pl_features}}
                  </textarea>
                  {{-- <input type="text" class="form-control plan-main" name="fe" placeholder="Description"> --}}
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
  