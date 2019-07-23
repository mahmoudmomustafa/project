@extends('layouts.app')

@extends('layouts.sidebar')
@section('content')
<!-- Data table  -->
<div class="card shadow mb-4">
   <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">List Of Users</h6>
   </div>
   <div class="card-body">
      @if (session('message'))
      <div class="alert alert-info">
         {{ session('message')}}
      </div>
      @endif
      <div class="table-responsive">
         @if (!$users->count())
         <div class="alert alert-danger">
            <strong>No record</strong>
         </div>
         @else
         <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
            <thead class="thead-dark">
               <tr>
                  <th width='40'>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone Number</th>
                  <th width='80'>Working hours</th>
                  <th width='80'>Type</th>
                  <th width="80">Actions</th>
               </tr>
            </thead>
            <tbody>
               @foreach ($users as $user)
               <tr>
                  <td>{{$user->id}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->phoneNum}}</td>
                  <td>{{$user->workingHrs}}</td>
                  <td>{{$user->type}}</td>
                  <td style="display: flex;">
                     <a href="/dashboard/users/{{$user->id}}/edit" class="btn btn-xs btn-success mr-2">
                        <i class="fa fa-edit"></i>
                     </a>
                     <form class="m-0" action="/dashboard/users/{{$user->id}}" method="post">
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
            <a href="{{route('UserExport')}}"><button name="button" class="btn btn-lg btn-success px-4">Print</button></a>
         </div>
         @endif
      </div>
   </div>
</div>
@endsection