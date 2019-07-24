@extends('layouts.app')

@extends('layouts.sidebar')
@section('content')
<!-- form -->
<form method="POST" class="center" action="/dashboard/shipments/todriver/{{$shipment->id}}">
   @method('patch')
   @csrf
   <h2 class="font-weight-bold text-primary">{{ __('Add Shipment to Driver :') }}</h2>
   <!-- select shipment & driver -->
   <div class="form-row">
      <!-- select driver -->
      <div class="input-group mb-3 col-md-6">
         <div class="input-group-prepend">
            <label class="input-group-text" for="selectDriver">Driver</label>
         </div>
         <select class="custom-select {{$errors->has('driver_id') ? 'is-invalid' : ''}}" id="selectDriver" name="driver_id">
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