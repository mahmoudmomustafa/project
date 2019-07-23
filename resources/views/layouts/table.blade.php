@extends('app')
@section('content')
    <!-- List-->
    <div class="px-5 py-3">
        <!-- Data table  -->
        <div class="card shadow mb-4">
           <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">List Of Shipments</h6>
           </div>
           <div class="card-body">
              <div class="table-responsive">
                 <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark">
                       <tr>
                          <th>AWB Number</th>
                          <th>Shipper Address</th>
                          <th>Shipper Name</th>
                          <th>Receiver Address</th>
                          <th>Receiver Name</th>
                          <th>Pickup Date</th>
                          <th>Total Price</th>
                          <th>Post By</th>
                          <th>Status</th>
                       </tr>
                    </thead>
                    <tbody>
                       <tr>
                          <td>0123456789123</td>
                          <td>msojjad sadjnsdan cairo Egypt</td>
                          <td>moustafa ismail</td>
                          <td>61 asmsao asjnjas ajska Egypt</td>
                          <td>mahmoud mohamed</td>
                          <td>2011/04/25</td>
                          <td>50$</td>
                          <td>manegar1</td>
                          <td>on hold</td>
                       </tr>
                       <tr>
                          <td>0123456789123</td>
                          <td>msojjad sadjnsdan cairo Egypt</td>
                          <td>moustafa ismail</td>
                          <td>61 asmsao asjnjas ajska Egypt</td>
                          <td>mahmoud mohamed</td>
                          <td>2011/04/25</td>
                          <td>50$</td>
                          <td>manegar1</td>
                          <td>on hold</td>
                       </tr>
                       <tr>
                          <td>0123456789123</td>
                          <td>msojjad sadjnsdan cairo Egypt</td>
                          <td>moustafa ismail</td>
                          <td>61 asmsao asjnjas ajska Egypt</td>
                          <td>mahmoud mohamed</td>
                          <td>2011/04/25</td>
                          <td>50$</td>
                          <td>manegar1</td>
                          <td>on hold</td>
                       </tr>
                       <tr>
                          <td>0123456789123</td>
                          <td>msojjad sadjnsdan cairo Egypt</td>
                          <td>moustafa ismail</td>
                          <td>61 asmsao asjnjas ajska Egypt</td>
                          <td>mahmoud mohamed</td>
                          <td>2011/04/25</td>
                          <td>50$</td>
                          <td>manegar1</td>
                          <td>on hold</td>
                       </tr>
                       <tr>
                          <td>0123456789123</td>
                          <td>msojjad sadjnsdan cairo Egypt</td>
                          <td>moustafa ismail</td>
                          <td>61 asmsao asjnjas ajska Egypt</td>
                          <td>mahmoud mohamed</td>
                          <td>2011/04/25</td>
                          <td>50$</td>
                          <td>manegar1</td>
                          <td>on hold</td>
                       </tr>
                    </tbody>
                 </table>
                 <!-- Print Btn -->
                 <div id="subHold">
                    <button name="button" class="btn btn-lg btn-success px-4">Print</button>
                 </div>
              </div>
           </div>
        </div>
     </div>
  @yield('table')
@endsection