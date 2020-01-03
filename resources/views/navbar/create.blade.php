@extends('layouts.default')
  
@section('content')
<br>
<br>
<br>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Navbar Tab</h2>
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
   
<form action="{{ route('navbar.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="form-group">
                <strong>Nav Name:</strong>
                <input type="text" name="nav_name" class="form-control" placeholder="Nav Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nav Code:</strong>
                <textarea class="form-control" style="height:150px" name="nav_code" placeholder="Nav Code"></textarea>
            </div>
        </div>
        
    
   
    
        
    
                 
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                 <a class="btn btn-primary" href="{{ route('navbar.index') }}"> Back</a>
            </div>
    </div>
        
    
</form>
@endsection