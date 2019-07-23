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
                  <th>Customer Address</th>
                  <th>Customer Name</th>
                  <th>Receiver Address</th>
                  <th>Receiver Name</th>
                  <th>Pickup Date</th>
                  <th>Total Price</th>
                  <th>Status</th>
                  <th width='80'>Actions</th>
               </tr>
            </thead>
            <tbody>
               @foreach ($shipments as $shipment)
               <tr>
               <td>{{$shipment->id}}</td>
                  <td>{{$shipment->shipmentNum}}</td>
                  <td>{{$shipment->customer['address']}}</td>
                  <td>{{$shipment->customer['name']}}</td>
                  <td>{{$shipment->recevier['address']}}</td>
                  <td>{{$shipment->recevier['name']}}</td>
                  <td>{{$shipment->pickupDate}}</td>
                  <td>{{$shipment->price}}</td>
                  <td>{{$shipment->state['state']}}</td>
                  <td style="display: flex;">
                     <a href="/dashboard/shipments/{{$shipment->id}}/edit" class="btn btn-xs btn-success mr-2">
                        <i class="fa fa-edit"></i>
                     </a>
                     <form class="m-0" action="/dashboard/shipments/{{$shipment->id}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-xs btn-danger">
                           <i class="fa fa-times"></i>
                        </button>
                     </form>
                  </td>
               </tr>
               @endforeach
            </tbody>
         </table>
         <!-- Print Btn -->
         <div id="subHold">
               <a href="{{route('ShipmentExport')}}"><button name="button" class="btn btn-lg btn-success px-4">Print</button></a>
         </div>
         @endif
      </div>
   </div>
</div>
@endsection