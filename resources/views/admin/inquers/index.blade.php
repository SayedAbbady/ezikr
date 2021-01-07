@extends('admin.layouts.main')

@section('title')
Inqueries
@endsection

@section('content')
<div class="content">
  <div class="card ">
    <div class="card-header">
      <div class="float-left">
        <h5 class="card-title">Inqueries</h5>
        <p class="card-category">Show all Inqueries </p>
      </div>
    </div>
    <div class="card-body">
      @if (COUNT($inquers) < 1) 
      <div class="">
        <div class="alert alert-danger" role="alert">
          No Inqueries yet
        </div>
      </div>
      @endif
    <div class="">
      <div class="">
        <table class="table table-hover">
          <thead class=" text-primary">
            <tr>
              <th> # </th>
              <th> Name </th>
              <th> Email </th>
              <th> Phone </th>
              <th> Time </th>
              <th> Action </th>
            </tr>
          </thead>
          <tbody>
            @php $i=0;@endphp
            @foreach ($inquers as $item)
            <tr class="{{$item->seen=='0'?"table-active":""}}">
              <td> {{++$i}} </td>
              <td> {{$item->i_firstName.' '.$item->i_LastName}} </td>
              <td> {{$item->i_email}} </td>
              <td> {{$item->i_phone}} </td>
              <td> {{$item->created_at->toDayDateTimeString()}} </td>
              <td> <a href="{{route('inquers.open',$item->i_id)}}" class="btn btn-success"><span class="lnr lnr-enter"></span> open</a> </td>
            </tr>
            @endforeach
        </table>
      </div>
    </div>
  </div>
  <div class="card-footer ">
    <hr>
    <div class="stats"></div>
  </div>
</div>
</div>
@endsection