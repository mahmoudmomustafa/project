@extends('layouts.app')

@extends('layouts.sidebar')
@section('content')
<!--creat driver form -->
<form method="POST" class="center" action="/dashboard/users">
  @csrf
  <!-- driver info sec-->
  <h2 class="font-weight-bold text-primary">{{ __('Create New User :') }}</h2>
  <div class="row">
    <!-- name -->
    <div class="col-lg-4">
      <div class="form-group">
        <label for="">Name<span class="text-red">*</span></label>
        <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" placeholder="Full Name"
          name="name" id="name">
        @if($errors->has('name'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('name') }}</strong>
        </span>
        @endif
      </div>
    </div>
    <!-- Academic qualification -->
    <div class="col-lg-8">
      <div class="form-group">
        <label for="">Academic qualification<span class="text-red">*</span></label>
        <input type="text" class="form-control {{$errors->has('acQualification') ? 'is-invalid' : ''}}"
          placeholder="Academic qualification" name="acQualification" id="acQualification">
        @if($errors->has('acQualification'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('acQualification') }}</strong>
        </span>
        @endif
      </div>
    </div>
  </div>
  <div class="row">
    <!-- Email -->
    <div class="col-lg-8">
      <div class="form-group">
        <label for="mail">Email<span class="text-red">*</span></label>
        <input type="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}"
          placeholder="Email Address" name="email" id="email">
        @if($errors->has('email'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
      </div>
    </div>
    <!-- Password -->
    <div class="col-lg-4">
      <div class="form-group">
        <label for="pass">Password<span class="text-red">*</span></label>
        <input type="password" class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}"
          placeholder="Enter Passwrod" name="password" id="pass">
        @if($errors->has('password'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif
      </div>
    </div>
  </div>
  <div class="row">
    <!-- Birth date -->
    <div class="col-lg-6">
      <div class="form-group">
        <label for="brithDate">Birth Date<span class="text-red">*</span></label>
        <input type="date" class="form-control {{$errors->has('brithDate') ? 'is-invalid' : ''}}" name="brithDate"
          id="brithDate">
        @if($errors->has('brithDate'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('brithDate') }}</strong>
        </span>
        @endif
      </div>
    </div>
    <!--  phone number -->
    <div class="col-lg-6">
      <div class="form-group">
        <label for="phoneNum">Phone Number<span class="text-red">*</span></label>
        <input type="number" class="form-control {{$errors->has('phoneNum') ? 'is-invalid' : ''}}"
          placeholder="Phone Number" name="phoneNum" id="phoneNum">
        @if($errors->has('phoneNum'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('phoneNum') }}</strong>
        </span>
        @endif
      </div>
    </div>
  </div>
  <div class="row">
    <!-- national number -->
    <div class="col-lg-6">
      <div class="form-group">
        <label for="nationalNum">National number<span class="text-red">*</span></label>
        <input type="number" class="form-control {{$errors->has('nationalNum') ? 'is-invalid' : ''}}"
          placeholder="Enter National number" name="nationalNum" id="nationalNum">
        @if($errors->has('nationalNum'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('nationalNum') }}</strong>
        </span>
        @endif
      </div>
    </div>
    <!-- working hours -->
    <div class="col-lg-6">
      <div class="form-group">
        <label for="">Working Hours<span class="text-red">*</span></label>
        <input type="number" class="form-control {{$errors->has('workingHrs') ? 'is-invalid' : ''}}"
          placeholder="Enter Working hours" name="workingHrs" id="workingHrs">
        @if($errors->has('workingHrs'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('workingHrs') }}</strong>
        </span>
        @endif
      </div>
    </div>
  </div>
  <div class="row">
    <!-- job type -->
    <div class="col-lg-4">
      <div class="form-group">
        <label for="type">Job type</label>
        <select class="form-control {{$errors->has('type') ? 'is-invalid' : ''}}" id="type" name="type">
          <option selected disabled>Job</option>
          <option value="admin">Admin</option>
          <option value="driver">Driver</option>
        </select>
        @if($errors->has('type'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('type') }}</strong>
        </span>
        @endif
      </div>
    </div>
    {{-- submit --}}
    <div class="col-lg-8">
      <button class="btn btn-primary">Submit</button>
    </div>
  </div>
  <!--Ektbii entii submit ya hala xD-->
</form>
@endsection