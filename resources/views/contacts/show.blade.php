@extends('layouts.default') 
@section('content')

<br><br>    
    <div class="jumbotron">
    <div class="row">

        <div class="container">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $contacts->name }}
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email Address:</strong>
               {{ $contacts->email_address }}
            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Subject:</strong>
               {{ $contacts->subject }}
            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Number:</strong>
               {{ $contacts->number }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Message:</strong>
                {{ $contacts->message }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Message:</strong>
                {{ $contacts->date_time }}
            </div>
        </div>
    </div>
     
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
     <a class="btn btn-primary" href="{{ route('contacts.index') }}">Back</a>

 </div>
</div>
@endsection