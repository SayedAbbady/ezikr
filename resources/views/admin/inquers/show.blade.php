@extends('admin.layouts.main')

@section('title')
Inqueries
@endsection

@section('content')
<div class="content">
  <div class="row">
    <div class="col-12">
      <div class="card ">
        <div class="card-header">
          <div class="float-left">
            <h5 class="card-title">Inqueries</h5>
            <p class="card-category"> Hurry up to communicate with the customer</p>
          </div>
        </div>
        <div class="card-body ">
          <div class="card mb-3">
            <div class="card-body">
              {{-- <h4 class="card-title">First name:</h4> --}}
              <h4 class="card-title">{{$inquer[0]->i_firstName.' '.$inquer[0]->i_LastName}}</h4>
              <p class="card-text">{{$inquer[0]->i_comment??"Not found"}}</p>
              <p class="card-text">{{$inquer[0]->i_email}}</p>
              <p class="card-text">{{$inquer[0]->i_key.' '.$inquer[0]->i_phone}}</p>
              <p class="card-text">{{$inquer[0]->i_country}}</p>
              <a href="mailto:{{$inquer[0]->i_email}}">
                <button class="btn btn-danger">Send an e-mail</button>
              </a>
              
              <a href="http://wa.me/{{$inquer[0]->i_key.$inquer[0]->i_phone}}">
                <button class="btn btn-success">Send message on whatsapp</button>
              </a>
            </div>
          </div>
          <div class="card-footer ">
            <hr>
            <div class="stats"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection