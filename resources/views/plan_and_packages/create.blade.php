
@extends('layouts.default')
  
@section('content')
<br>
<br>
<br>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Plan and Package</h2>
        </div>
        
    </div>
</div>
<br>
<br>
<br>  
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   

<div class="jumbotron">
<form action="{{ route('plan_and_packages.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="form-group">

    <div class="col-xs-12 col-sm-12 col-md-9">
    <div class="input-group control-group increment" >
           <strong><label for="plan_image" class="col-md-4 ">Plan Image:</label></strong>
          <input type="file" name="plan_image[]" class="form-control">
    </div>
    </div>

    <div class="form-group col-md-3">
      <label for="category">Select list (Packages):</label>

      <select class="form-control col-xs-12 col-sm-12 col-md-12" name="package_id" id="package_id">
        <option>--</option>
        @foreach( $package_list as $package)
        <option class="package_id" name="package_id" value="{{$package -> id}}" >{{$package -> package_name}}</option>
        @endforeach
      </select>    
    </div>

    <div class="col-xs-12 col-sm-12 col-md-9">
            <div class="form-group col-md-12">
                <strong>Information:</strong>
                <input type="text" name="information" class="form-control" placeholder="Information">
            </div>
    </div>

    <div class="form-group  col-md-3">
      <label for="category">Select list (Plan):</label>
      <select class="form-control col-md-12" name="plan_id" id="plan_id">
        @foreach($plan_list as $plan)
       <option name="" value="{{$plan->id}}" selected> --Please Select Classification First--</option>
        @endforeach
      </select>    
    </div>

    <div class="col-xs-12 col-sm-12 col-md-9">
            <div class="form-group col-md-12">
                <strong>Details:</strong>
                <input type="text" name="details" class="form-control" placeholder="Details">
            </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-9">
            <div class="form-group col-md-12">
                <strong>Status:</strong>
                <input type="text" name="status" class="form-control" placeholder="Status">
            </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-primary" href="{{ route('plan_and_packages.index') }}"> Back</a>
    </div>
    </div>
</div>
        
    
</form>
</div>
@endsection

@section('js')
<script type="text/javascript">
    $(function() {
        $("#package_id").change(function(){
            selectListChange('plan_id','{{{ URL::to("plan/dataJson") }}}',  {'package_id': $(this).val() } ,'Please select a Classification Level');
        });
    });
</script>
@stop