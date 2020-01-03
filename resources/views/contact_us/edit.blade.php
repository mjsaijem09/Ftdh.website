@extends('layouts.default') 
@section('content')
<br><br><br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show Contacts</h2>
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
    <form action="{{ route('contact_us.update',$contact_us->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Address:</strong>
                    <input type="text" name="address" value="{{ $contact_us->address }}" class="form-control" placeholder="Address">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Number:</strong>
                    <input type="number" name="number" value="{{ $contact_us->number }}" class="form-control" placeholder="Number">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Messenger:</strong>
                    <input type="text" name="messnger" value="{{ $contact_us->messnger }}" class="form-control" placeholder="Messenger">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <a class="btn btn-primary" href="{{ route('contact_us.index') }}"> Back</a>
            </div>
        </div>
   
    </form>
  </div>
@endsection