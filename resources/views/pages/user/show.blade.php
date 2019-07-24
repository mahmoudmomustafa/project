@extends('layouts.app')

@extends('layouts.sidebar')
@section('content')
<!-- Data table  -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">List Of Shipments</h6>
  </div>
  <div class="card-body">
    @if (session('message'))
    <div class="alert alert-info">
      {{ session('message')}}
    </div>
    @endif
    <div class="table-responsive">
      @if (!$shipments->count())
      <div class="alert alert-danger">
        <strong>No record</strong>
      </div>
      @else
      <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-dark">
          <tr>
            <th width='40'>ID</th>
            <th>AWB Number</th>
            <th>Customer Name</th>
            <th>From</th>
            <th>To</th>
            <th>Receiver Name</th>
            <th>Pickup Date</th>
            <th>Total Price</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($shipments as $shipment)
          <tr>
            <td>{{$shipment->id}}</td>
            <td>{{$shipment->shipmentNum}}</td>
            <td>{{$shipment->customer['name']}}</td>
            <td>{{$shipment->customer['address']}}</td>
            <td>{{$shipment->recevier['address']}}</td>
            <td>{{$shipment->recevier['name']}}</td>
            <td>{{$shipment->pickupDate}}</td>
            <td>{{$shipment->price}}</td>
            <td>{{$shipment->state['state']}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      @endif
    </div>
  </div>
</div>
@endsection