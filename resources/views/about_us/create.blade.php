@extends('layouts.default')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New About Us</h2>
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
<form method="post" action="{{url('about_us')}}" enctype="multipart/form-data">
  {{csrf_field()}}

        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong><label for="title" class="col-md-4 ">Title:</label></strong>
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
        </div>

        <div class="input-group control-group increment" >
           <strong><label for="image" class="col-md-4 ">Image:</label></strong>
          <input type="file" name="image[]" class="form-control">
          
        </div>
  
    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong> <label for="details" class="col-md-4 ">Details:</label></strong>
                <textarea class="form-control" style="height:150px" name="details" placeholder="Details"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="{{ route('about_us.index') }}"> Back</a>
        </div>
    </div>
   
</form>
  </div>
@endsection