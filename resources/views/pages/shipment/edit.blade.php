@extends('layouts.app')

@extends('layouts.sidebar')
@section('content')
<!--creat shipment form -->
<form method="POST" class="center" action="/dashboard/shipments/{{$shipment->id}}">
  @method('patch')
  @csrf
  <!-- Customer -->
  <div id="customer row">
    <!-- select Customer -->
    <div class="customerSelect col-lg-6">
      <h2 class="font-weight-bold text-primary">{{ __('Customer :') }}</h2>
      <label for="id_label_single">
        Select Customer :
      </label>
      <select class="js-example-basic-single js-states form-control {{$errors->has('customer_id') ? 'is-invalid' : ''}}"
        id="customerSelect" value="{{$shipment->customer_id}}" name="customer_id">
        <option selected disabled>Customer Name</option>
        @foreach ($customers as $customer)
        <option value="{{$customer->id}}">{{$customer->name}}</option>
        @endforeach
      </select>
      @if($errors->has('customer_id'))
      <span class="invalid-feedback" role="alert">
        <strong>{{$errors->first('customer_id')}}</strong>
      </span>
      @endif
    </div>
  </div>
  <!--Devider-->
  <hr class="sidebar-divider my-4">
  <!-- reciever-->
  <div id="reciever">
    <!-- reciever info -->
    <div class="reciverInfo">
      <h2 class="font-weight-bold text-primary">{{ __('Reciever :') }}</h2>
      <!-- company name -->
      <div class="form-group">
        <label for="companyName">Company Name<span class="text-red">*</span></label>
        <input type="text" value="{{$shipment->recevier['companyName']}}"
          class="form-control {{$errors->has('companyName') ? 'is-invalid' : ''}}" placeholder="Enter Receiver Company"
          name="companyName" id="companyName">
        @if($errors->has('companyName'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('companyName') }}</strong>
        </span>
        @endif
      </div>
      <!-- reciver account no. -->
      <div class="form-group">
        <label for="accountNum">Account Number<span class="text-red">*</span></label>
        <input type="text" value="{{$shipment->recevier['accountNum']}} "
          class="form-control {{$errors->has('accountNum') ? 'is-invalid' : ''}}" placeholder="Enter Account Number"
          name="accountNum" id="accountNum">
        @if($errors->has('accountNum'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('accountNum') }}</strong>
        </span>
        @endif
      </div>
      <div class="form-row">
        <!-- receiver name -->
        <div class="form-group col-md-6">
          <label for="name">Receiver Name<span class="text-red">*</span></label>
          <input type="text" value="{{$shipment->recevier['name']}}"
            class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" placeholder="Enter Receiver Name"
            name="name" id="name">
          @if($errors->has('name'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('name') }}</strong>
          </span>
          @endif
        </div>
        <!-- receiver no. -->
        <div class="form-group col-md-6">
          <label for="mobile">Receiver Number<span class="text-red">*</span></label>
          <input type="number" value="{{$shipment->recevier['mobile']}}"
            class="form-control {{$errors->has('mobile') ? 'is-invalid' : ''}}" placeholder="Enter Receiver Number"
            name="mobile" id="mobile">
          @if($errors->has('mobile'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('mobile') }}</strong>
          </span>
          @endif
        </div>
      </div>
      <!-- reciver address -->
      <div class="form-row">
        {{-- adrress --}}
        <div class="form-group col-md-8">
          <label for="address">Address<span class="text-red">*</span></label>
          <input type="text" value="{{$shipment->recevier['address']}} "
            class="form-control {{$errors->has('address') ? 'is-invalid' : ''}}" placeholder="Address..." name="address"
            id="address">
          @if($errors->has('address'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('address') }}</strong>
          </span>
          @endif
        </div>
        <!-- zip no. -->
        <div class="form-group col-md-4">
          <label for="postal">Zip</label>
          <input placeholder="Zip Code" type="text" value="{{$shipment->recevier['postal']}} "
            class="form-control {{$errors->has('postal') ? 'is-invalid' : ''}}" id="postal" name="postal">
          @if($errors->has('postal'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('postal') }}</strong>
          </span>
          @endif
        </div>
      </div>
    </div>
  </div>
  <!--Devider-->
  <hr class="sidebar-divider my-4">
  <!--shipment-->
  <div id="shipment">
    <!-- shipment info -->
    <div class="shipmentInfo">
      <h2 class="font-weight-bold text-primary">{{ __('Shipment :') }}</h2>
      <!-- shipment number -->
      <div class="form-group">
        <label for="shipmentNum">Shipment Number<span class="text-red">*</span></label>
        <input type="number" value="{{$shipment->shipmentNum}}"
          class="form-control {{$errors->has('shipmentNum') ? 'is-invalid' : ''}}" placeholder="Enter Shipment Number"
          name="shipmentNum" id="shipmentNum">
        @if($errors->has('shipmentNum'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('shipmentNum') }}</strong>
        </span>
        @endif
      </div>
      <!-- type of shipment -->
      <div class="form-group">
        <label for="type">Type of shipment<span class="text-red">*</span></label>
        <input type="text" value="{{$shipment->type}} "
          class="form-control {{$errors->has('type') ? 'is-invalid' : ''}}" placeholder="Shipment type" name="type"
          id="type">
        @if($errors->has('type'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('type') }}</strong>
        </span>
        @endif
      </div>
      <!-- width weight qantity -->
      <div class="form-row">
        <!-- Shipment weight -->
        <div class="form-group col-md-6">
          <label for="weight">Shipment Weight</label>
          <input placeholder="Weight" value="{{$shipment->weight}}" type="text"
            class="form-control {{$errors->has('weight') ? 'is-invalid' : ''}}" id="weight" name="weight">
          @if($errors->has('weight'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('weight') }}</strong>
          </span>
          @endif
        </div>
        <!-- Shipment width x height -->
        <div class="form-group col-md-4">
          <label for="width">Width x Height</label>
          <input placeholder="Width x Height" value="{{$shipment->width}} "
            class="form-control {{$errors->has('width') ? 'is-invalid' : ''}}" type="text" name="width" id="width">
          @if($errors->has('width'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('width') }}</strong>
          </span>
          @endif
        </div>
        <!-- Shipment Quantity -->
        <div class="form-group col-md-2">
          <label for="quantity">Quantity</label>
          <input placeholder="Quantity" type="text" value="{{$shipment->quantity}}"
            class="form-control {{$errors->has('quantity') ? 'is-invalid' : ''}}" id="quantity" name="quantity">
          @if($errors->has('quantity'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('quantity') }}</strong>
          </span>
          @endif
        </div>
      </div>
      <!-- payment method & price & total price -->
      <div class="form-row">
        <!-- payment method -->
        <div class="form-group col-md-6">
          <label for="paymentMethod">Payment Method</label>
          <select name="paymentMethod" id="paymentMethod" value="{{$shipment->paymentMethod}}"
            class="form-control {{$errors->has('paymentMethod') ? 'is-invalid' : ''}}">
            <option selected disabled>Select State ...</option>
            <option value="express">Express</option>
            <option value="fawry">Fawry</option>
            <option value="fawry-express">Fawry Express</option>
          </select>
          @if($errors->has('paymentMethod'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('paymentMethod') }}</strong>
          </span>
          @endif
        </div>
        <!-- Shipment price -->
        <div class="form-group col-md-6">
          <label for="price">Shipment price</label>
          <input placeholder="Price" value="{{$shipment->price}}"
            class="form-control {{$errors->has('price') ? 'is-invalid' : ''}}" type="number" name="price" id="price">
          @if($errors->has('price'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('price') }}</strong>
          </span>
          @endif
        </div>
      </div>
      <!-- dates and shipment state-->
      <div class="form-row">
        <!-- pickup date -->
        <div class="form-group col-md-6">
          <label for="pickupDate">Pickup date</label>
          <input type="date" name="pickupDate" value="{{$shipment->pickupDate}}" id="pickupDate"
            class="form-control {{$errors->has('pickupDate') ? 'is-invalid' : ''}}">
          @if($errors->has('pickupDate'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('pickupDate') }}</strong>
          </span>
          @endif
        </div>
        <!-- Shipment state -->
        <div class="form-group col-md-6">
          <label for="state_id">Shipment state</label>
          <select placeholder="state" value="{{$shipment->state_id}}"
            class="form-control {{$errors->has('state_id') ? 'is-invalid' : ''}}" id="state_id" name="state_id">
            <option selected disabled>Select State ...</option>
            @foreach ($shipmentStates as $shipmentState)
            <option value="{{$shipmentState->id}}">{{$shipmentState->state}}</option>
            @endforeach
          </select>
          @if($errors->has('state_id'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('state_id') }}</strong>
          </span>
          @endif
        </div>
      </div>
      <!-- comment -->
      <div class="form-group">
        <label for="shipment-comment">Comment</label>
        <textarea class="form-control" placeholder="Comment" id="shipment-comment" rows="1"
          name="shipment-comment"></textarea>
      </div>
    </div>
  </div>
  <!-- Submit button -->
  <div id="subHold">
    <button class="btn btn-primary m-auto" type="submit">Create</button>
  </div>
  <!--Ektbii entii submit ya hala xD-->
</form>
@endsection