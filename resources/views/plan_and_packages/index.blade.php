@extends('layouts.default')
@section('content')
@include('layouts.sidebar')
@include('layouts.topbar')
<div class="pull-right">
    <div class="container">
                <a class="btn btn-success" href="{{ route('plan_and_packages.create') }}"> Create New Plan and Packages</a>
            </div>
         </div>
            <br>
         <div class="container">
               <!-- <h2>
                   Plan and Packages
               </h2> -->
            <table class="table table-bordered table-responsive" style="height: 500px;" id="plan_packages_table">
               <thead>
                  <tr style="text-align: center;">
                     <th>Package</th>
                     <th>Information</th>
                     <th>Plan Image</th>
                     <th>Plan</th>
                     <th>Details</th>
                     <th>Status</th>
                     <th>Action</th>
                  </tr>
               </thead>
            </table>
         </div>
@endsection
@section('js')
<script type="text/javascript">
  
    $(function() {
               $('#plan_packages_table').DataTable({
               processing: true,
               serverSide: true,
               ajax: '{{ url('plan_and_packages/show') }}',
               columns: [
                        { data: 'package_name', name: 'package_name' },
                        { data: 'information', name: 'information' },
                        { data: 'plan_image' , name: 'plan_image'},
                        { data: 'plan_name', name: 'plan_name' },
                        { data: 'details', name: 'details' },
                        { data: 'status', name: 'status' },
                        { data: 'action', name: 'action'}
                     ]
            });
         });
</script>
@endsection