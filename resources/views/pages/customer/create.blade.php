@extends('layouts.app')

@extends('layouts.sidebar')
@section('content')
<!--creat customer form -->
<form method="POST" class="center" action="/dashboard/customers">
  @csrf
  <!-- Customer info -->
  <h2 class="font-weight-bold text-primary">{{ __('Create New Customer :') }}</h2>
  <!-- Customer account -->
  <div class="form-row">
    <!-- account name -->
    <div class="form-group col-md-6">
      <label for="accountName">Account Name<span class="text-red">*</span></label>
      <input type="text" class="form-control {{ $errors->has('accountName') ? ' is-invalid' : '' }}"
        placeholder="Enter Account Name" name="accountName" id="accountName">
      @if($errors->has('accountName'))
      <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('accountName') }}</strong>
      </span>
      @endif
    </div>
    <!-- account no. -->
    <div class="form-group col-md-6">
      <label for="accountNum">Account Number<span class="text-red">*</span></label>
      <input type="text" class="form-control {{ $errors->has('accountNum') ? ' is-invalid' : '' }}"
        placeholder="Enter Account Number" name="accountNum" id="accountNum">
      @if($errors->has('accountNum'))
      <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('accountNum') }}</strong>
      </span>
      @endif
    </div>
  </div>
  <!-- customer name & no. -->
  <div class="form-row">
    <!-- customer name -->
    <div class="form-group col-md-6">
      <label for="name">Full Name<span class="text-red">*</span></label>
      <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
        placeholder="Enter Full Name" name="name" id="name">
      @if($errors->has('name'))
      <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('name') }}</strong>
      </span>
      @endif
    </div>
    <!-- customer phone number -->
    <div class="form-group col-md-6">
      <label for="phone">Phone Number<span class="text-red">*</span></label>
      <input type="number" class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}"
        placeholder="Enter Phone Number" name="phone" id="phone">
      @if($errors->has('phone'))
      <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('phone') }}</strong>
      </span>
      @endif
    </div>
  </div>
  <!-- company name -->
  <div class="form-group">
    <label for="company">Company Name<span class="text-red">*</span></label>
    <input type="text" class="form-control {{ $errors->has('company') ? ' is-invalid' : '' }}"
      placeholder="Enter customer Company" name="company" id="company">
    @if($errors->has('company'))
    <span class="invalid-feedback" role="alert">
      <strong>{{ $errors->first('company') }}</strong>
    </span>
    @endif
  </div>
  <!-- address and zip no. -->
  <div class="form-row">
    <!-- adress -->
    <div class="form-group col-md-8">
      <label for="address">Address<span class="text-red">*</span></label>
      <input type="text" class="form-control {{ $errors->has('address') ? ' is-invalid' : '' }}"
        placeholder="Address..." name="address" id="address" >
      @if($errors->has('address'))
      <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('address') }}</strong>
      </span>
      @endif
    </div>
    <!-- zip number -->
    <div class="form-group col-md-4">
      <label for="address">Postal Number<span class="text-red">*</span></label>
      <input type="number" class="form-control {{ $errors->has('postal') ? ' is-invalid' : '' }}"
        placeholder="Enter Postal Code" name="postal" id="postal" >
      @if($errors->has('postal'))
      <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('postal') }}</strong>
      </span>
      @endif
    </div>
  </div>
  <!-- submit btn -->
  <div id="subHold">
    <button type="submit" class="btn btn-primary m-auto">Submit</button>
  </div>
  <!--Ektbii entii submit ya hala xD-->
</form>
@endsection