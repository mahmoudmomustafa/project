@extends('layouts.app')

@extends('layouts.sidebar')
@section('content')
<!-- Data table  -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">List Of Receviers</h6>
  </div>
  <div class="card-body">
    @if (session('message'))
    <div class="alert alert-info">
      {{ session('message')}}
    </div>
    @endif
    <div class="table-responsive">
      @if (!$receviers->count())
      <div class="alert alert-danger">
        <strong>No record</strong>
      </div>
      @else
      <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
        <!-- table head -->
        <thead class="thead-dark">
          <tr>
            <th width='40'>ID</th>
            <th>Company Name</th>
            <th>Account Number</th>
            <th>Full Name</th>
            <th>Phone Number</th>
            <th>Address</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($receviers as $recevier)
          <tr>
            <td>{{$recevier->id}}</td>
            <td>{{$recevier->companyName}}</td>
            <td>{{$recevier->accountNum}}</td>
            <td>{{$recevier->name}}</td>
            <td>{{$recevier->mobile}}</td>
            <td>{{$recevier->address}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      @endif
    </div>
  </div>
</div>
@endsection