@extends('layouts.app')
@extends('layouts.sidebar')
@section('content')
<!-- Content Row -->
<div class="row">
  <!-- outdoor orders -->
  <div class="col-xl-3 col-md-4 my-4 mx-3">
    <div class="card border border-warning shadow py-4 px-3">
      <div class="card-body">
        <div class="row">
          <div class="col mr-2">
            <div class="font-weight-bold text-warning text-uppercase mb-3">Out Door Orders</div>
            <div class="h5 mb-0 font-weight-bold">52</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-receipt fa-4x"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- outdoor drivers -->
  <div class="col-xl-3 col-md-4 my-4 mx-3">
    <div class="card border border-info shadow py-4 px-3">
      <div class="card-body">
        <div class="row">
          <div class="col mr-2">
            <div class="font-weight-bold text-info text-uppercase mb-3">Out Door Drivers</div>
            <div class="h5 mb-0 font-weight-bold">52</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-truck fa-4x"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Deliverd orders -->
  <div class="col-xl-3 col-md-4 my-4 mx-3">
    <div class="card border border-primary shadow py-4 px-3">
      <div class="card-body">
        <div class="row">
          <div class="col mr-2">
            <div class="font-weight-bold text-primary text-uppercase mb-3">Deliverd Orders</div>
            <div class="h5 mb-0 font-weight-bold">52</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-check fa-4x"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- picked up orders -->
  <div class="col-xl-3 col-md-4 my-4 mx-3">
    <div class="card border border-primary shadow py-4 px-3">
      <div class="card-body">
        <div class="row">
          <div class="col mr-2">
            <div class="font-weight-bold text-primary text-uppercase mb-3">Picked Up Orders</div>
            <div class="h5 mb-0 font-weight-bold">52</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-check fa-4x"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- canceld orders -->
  <div class="col-xl-3 col-md-4 my-4 mx-3">
    <div class="card border border-danger shadow py-4 px-3">
      <div class="card-body">
        <div class="row">
          <div class="col mr-2">
            <div class="font-weight-bold text-danger text-uppercase mb-3">Canceld Orders</div>
            <div class="h5 mb-0 font-weight-bold">52</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-times fa-5x"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- delayed orders -->
  <div class="col-xl-3 col-md-4 my-4 mx-3">
    <div class="card border border-danger shadow py-4 px-3">
      <div class="card-body">
        <div class="row">
          <div class="col mr-2">
            <div class="font-weight-bold text-danger text-uppercase mb-3">Delayed Orders</div>
            <div class="h5 mb-0 font-weight-bold">52</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-times fa-5x"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection