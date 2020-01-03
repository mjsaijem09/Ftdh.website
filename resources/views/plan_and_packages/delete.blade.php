@extends('layouts.default')
   
@section('content')
<br>
<br>
<br>
    <div class="row col-md-12">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Delete Plan and Package</h2>
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
 <form action="{{ route('plan_and_packages.destroy',$plan_and_packages->id) }}" method="POST">
        @csrf
        @method('DELETE')
            
            <div class="form-group">
    <div class="form-group col-md-3">
      <label for="category">Select list (Packages):</label>

      <select class="form-control col-xs-12 col-sm-12 col-md-12" name="package_id" id="package_id" disabled>
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
                <input type="text" name="information" value="{{ $plan_and_packages->information }}" class="form-control" placeholder="Information" disabled>
            </div>
    </div>

    <div class="form-group  col-md-3">
      <label for="category">Select list (Plan):</label>
      <select class="form-control col-md-12" name="plan_id" id="plan_id" disabled>
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
                <input type="text" name="details" value="{{ $plan_and_packages->details }}" class="form-control" placeholder="Details" disabled>
            </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-9">
            <div class="form-group col-md-12">
                <strong>Status:</strong>
                <input type="text" name="status" value="{{ $plan_and_packages->status }}" class="form-control" placeholder="Status" disabled>
            </div>
    </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-danger">Delete</button>
              <a class="btn btn-primary" href="{{ route('plan_and_packages.index') }}"> Back</a>
            </div>
        </div>
</form>

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