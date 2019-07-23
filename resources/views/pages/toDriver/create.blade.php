@extends('layouts.app')

@extends('layouts.sidebar')
@section('content')
<!-- form -->
<form method="POST" class="center" action="/deshboard/toDriver">
   @csrf
   <h2 class="font-weight-bold text-primary">{{ __('Add Shipment to Driver :') }}</h2>
   <!-- select shipment & driver -->
   <div class="form-row">
      <!-- Select shipment -->
      <div class="input-group mb-3 col-md-6">
         <div class="input-group-prepend">
            <label class="input-group-text" for="selectShipment">Shipment</label>
         </div>
         <select class="custom-select" id="selectShipment" name="shipment">
            <option selected>Select...</option>
            @foreach ($shipments as $shipment)
            <option value="{{$shipment->id}}">{{$shipment->shipmentNum}}</option>
            @endforeach
         </select>
      </div>
      <!-- select driver -->
      <div class="input-group mb-3 col-md-6">
         <div class="input-group-prepend">
            <label class="input-group-text" for="selectDriver">Driver</label>
         </div>
         <select class="custom-select" id="selectDriver" name="driver">
            <option selected>Select...</option>
            @foreach ($drivers as $driver)
            <option value="{{$driver->id}}">{{$driver->name}}</option>
            @endforeach
         </select>
      </div>
   </div>
   <!-- submit btn -->
   <div id="subHold">
      <button class="btn btn-primary m-auto mb-2">Add</button>
   </div>
</form>
@endsection