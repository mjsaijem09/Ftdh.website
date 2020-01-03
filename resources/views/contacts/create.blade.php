@extends('layouts.default')
@section('content')
<br>
<br>
<br>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Contact</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('contacts.index') }}"> Back</a>
        </div>
    </div>
</div>
   
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
<form action="{{ route('contacts.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email Address:</strong>
                <input type="text" name="email_address" class="form-control" placeholder="Email Address">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="form-group">
                <strong>Number:</strong>
                <input type="number" name="number" class="form-control" placeholder="Number">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Message:</strong>
                <textarea class="form-control" style="height:150px" name="message" placeholder="Message"></textarea>
            </div>
        </div>
        
    
   
    
        
    
                 
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
    </div>
        
    
</form>
</div>
@endsection