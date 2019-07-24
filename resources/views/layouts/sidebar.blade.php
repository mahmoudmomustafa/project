@if(Auth::user()->type == 'admin')
@section('sidebar')
{{-- sidebar --}}
<div class="side">
  <ul class="navbar-nav sidebar" style="margin-bottom: 50px;" id="accordionSidebar">
    <!-- Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="{{route('dashboard')}}">
        <img src="/img/icons/home.svg" alt="home" width="30" height="30" class="mr-3">
        DashBoard
      </a>
    </li>
    <!-- Create -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="/" data-toggle="collapse" data-target="#collapsePagess" aria-expanded="true"
        aria-controls="collapsePages"><img src="/img/icons/database.svg" alt="database" width="30" height="30"
          class="mr-3">
        Create
      </a>
      <div id="collapsePagess" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="/dashboard/users/create">Add User</a>
          <a class="collapse-item" href="/dashboard/customers/create">Add Customer</a>
          <a class="collapse-item" href="/dashboard/shipments/create">Add Shipment</a>
        </div>
      </div>
    </li>
    <!-- Lists -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="/" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
        aria-controls="collapsePages"><img src="/img/icons/list.svg" alt="list" width="30" height="30" class="mr-3">
        Lists
      </a>
      <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="/dashboard/shipments">List of Shipments</a>
          <a class="collapse-item" href="/dashboard/customers">List of Customers</a>
          <a class="collapse-item" href="{{route('receviers')}}">List of Receviers</a>
          <a class="collapse-item" href="/dashboard/users">List of Users</a>
        </div>
      </div>
    </li>
  </ul>
  <div class="toggle"></div>
</div>
@endsection
@endif