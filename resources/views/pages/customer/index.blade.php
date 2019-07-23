@extends('layouts.app')

@extends('layouts.sidebar')
@section('content')
<!-- Data table  -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">List Of Customers</h6>
  </div>
  <div class="card-body">
    @if (session('message'))
    <div class="alert alert-info">
      {{ session('message')}}
    </div>
    @endif
    <div class="table-responsive">
      @if (!$customers->count())
      <div class="alert alert-danger">
        <strong>No record</strong>
      </div>
      @else
      <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
        <!-- table head -->
        <thead class="thead-dark">
          <tr>
            <th width='40'>ID</th>
            <th>Account Name</th>
            <th>Account Number</th>
            <th>Full Name</th>
            <th>Phone Number</th>
            <th>Company Name</th>
            <th>Address</th>
            <th width="40">Orders</th>
            <th width="80">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($customers as $customer)
          <tr>
            <td>{{$customer->id}}</td>
            <td>{{$customer->accountName}}</td>
            <td>{{$customer->accountNum}}</td>
            <td>{{$customer->name}}</td>
            <td>{{$customer->phone}}</td>
            <td>{{$customer->company}}</td>
            <td>{{$customer->address}}</td>
            <td>{{$customer->shipments->count() }}</td>
            <td style="display: flex;">
              <a href="/dashboard/customers/{{$customer->id}}/edit" class="btn btn-xs btn-success mr-2">
                <i class="fa fa-edit"></i>
              </a>
              <form class="m-0" action="/dashboard/customers/{{$customer->id}}" method="post">
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
      <!-- Print btn -->
      <div id="subHold">
          <a href="{{route('CustomerExport')}}"><button name="button" class="btn btn-lg btn-success px-4">Print</button></a>
      </div>
      @endif
    </div>
  </div>
</div>
@endsection