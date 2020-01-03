@extends('layouts.default')
   
@section('content')
<br>
<br>
<br>
<div class="container">
    <div class="row col-md-12">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Plan and Package</h2>
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
 <form action="{{ route('plan_and_packages.update',$plan_and_packages->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

    <div class="col-xs-12 col-sm-12 col-md-9">
      <center><img src="{{ url('assets/sites/images/plan/' . $plan_and_packages->plan_image) }}" style="height: 200px;"/></center>
    <div class="input-group control-group increment" >
           <strong><label for="plan_image" class="col-md-4 ">Plan Image:</label></strong>
          <input type="file" name="plan_image[]" class="form-control">
    </div>
    </div>
            
            <div class="form-group">
    <div class="form-group col-md-3">
      <b><label for="category">Select list (Packages):</label></b>

      <select class="form-control col-xs-12 col-sm-12 col-md-12" name="package_id" id="package_id">
        <option>--</option>
        @foreach($package_list as $package)
            @if($package->id == $plan_and_packages->package_id)
            <option name="package_id" value="{{{ $package->id }}}" selected>{{{ $package->package_name }}}</option>
            @else
            <option name="package_id" value="{{{ $package->id }}}">{{{ $package->package_name }}}</option>
            @endif
        @endforeach
      </select>    
    </div>

    <div class="col-xs-12 col-sm-12 col-md-9">
            <div class="form-group col-md-12">
                <strong>Information:</strong>
                <input type="text" name="information" value="{{ $plan_and_packages->information }}" class="form-control" placeholder="Information">
            </div>
    </div>

    <div class="form-group  col-md-3">
      <b><label for="category">Select list (Plan):</label></b>
      <select class="form-control col-md-12" name="plan_id" id="plan_id">
        @foreach($plan_list as $plan)
         @if($plan->id == $plan_and_packages->plan_id)
       <option name="plan_id" value="{{{ $plan->id }}}" selected>{{{ $plan->plan_name }}}</option>
       @else
       <option name="plan_id" value="{{{ $plan->id }}}">{{{ $plan->plan_name }}}</option>
       @endif
       @endforeach
      </select>    
    </div>

    <div class="col-xs-12 col-sm-12 col-md-9">
            <div class="form-group col-md-12">
                <strong>Details:</strong>
                <input type="text" name="details" value="{{ $plan_and_packages->details }}" class="form-control" placeholder="Details">
            </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-9">
            <div class="form-group col-md-12">
                <strong>Status:</strong>
                <input type="text" name="status" value="{{ $plan_and_packages->status }}" class="form-control" placeholder="Status">
            </div>
    </div>
</div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
              <a class="btn btn-primary" href="{{ route('plan_and_packages.index') }}"> Back</a>
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