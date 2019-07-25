@extends('layouts.app')
@extends('layouts.sidebar')
@section('content')
<!-- static -->
<div class="statics">
  <div class="row">
    <h3 class="col-xl-3 col-md-4 ml-4 mt-4 mx-3 font-weight-bold ">Statictics :</h3>
  </div>
  <div class="row justify-content-center">
    <!-- Orders -->
    <div class="col-xl-3 col-md-4 my-4 mx-3">
      <div class="card shadow py-4 px-3">
        <div class="card-body">
          <div class="row">
            <div class="col">
              <div class=" mb-3"><span class='font-weight-bold text-info text-uppercase'>Orders</span></div>
              <div class="h5 mb-0 font-weight-bold">{{$shipments->count()}}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-receipt fa-4x"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- drivers -->
    <div class="col-xl-3 col-md-4 my-4 mx-3">
      <div class="card shadow py-4 px-3">
        <div class="card-body">
          <div class="row">
            <div class="col">
              <div class="font-weight-bold text-info text-uppercase mb-3">Drivers</div>
              <div class="h5 mb-0 font-weight-bold">{{$drivers->count()}}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-truck fa-4x"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- customers -->
    <div class="col-xl-3 col-md-4 my-4 mx-3">
      <div class="card shadow py-4 px-3">
        <div class="card-body">
          <div class="row">
            <div class="col">
              <div class="font-weight-bold text-info text-uppercase mb-3">Customers</div>
              <div class="h5 mb-0 font-weight-bold">{{$customers->count()}}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-check fa-4x"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection