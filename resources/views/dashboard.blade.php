@extends('layouts.app')
@extends('layouts.sidebar')
@section('content')
<div class="dash">
  <div class="row">
    {{-- img --}}
    <div class="img col-lg-8 mb-4">
      <img src="\img\dashboard.svg" alt="dashboard" style=" width: 100%;height:250px;">
    </div>
    {{-- orders --}}
    <div class="orders col-lg-3 m-4">
      <h6 class="m-0 font-weight-bold text-primary">Orders</h6>
      <ul class="navbar-nav">
        @foreach ($shipmentStates as $shipmentState)
        <li class="list-item font-weight-bold">
          {{$shipmentState->state}}
          <span>{{$shipmentState->counter()}}</span>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>
<!-- static -->
<div class="statics">
  <div class="row">
    <h3 class="col-xl-3 col-md-4 ml-4 mt-4 mx-3 font-weight-bold text-primary">Statistics :</h3>
  </div>
  <div class="row justify-content-center">
    <!-- Orders -->
    <div class="col-xl-3 col-md-4 my-4 mx-3">
      <a href="/dashboard/shipments">
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
      </a>
    </div>
    <!-- drivers -->
    <div class="col-xl-3 col-md-4 my-4 mx-3">
      <a href="/dashboard/drivers">
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
      </a>
    </div>
    <!-- customers -->
    <div class="col-xl-3 col-md-4 my-4 mx-3">
      <a href="/dashboard/customers">
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
      </a>
    </div>
  </div>
</div>
@endsection