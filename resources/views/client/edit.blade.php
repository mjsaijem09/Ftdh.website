@extends('layouts.default')
@section('content')

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
  
    <br><br>
    <div class="jumbotron">
    <form action="{{ route('client.update',$client->id) }}" method="POST" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        
        <center>
        <img class="form-control" src="{{ url('assets/sites/images/name_image/' . $client->name_image) }}" style="height: 100px; width: 100px;" />
        </center>

        <br>
        <div class="form-group row">
           <strong> <label for="name_image" class="col-md-4 col-form-label text-md-right">Name Image:</label></strong>
            <div class="col-md-6">
                <input type="file" name="name_image[]" class="form-control" value="{{ $client->name_image }}">
            </div>
        </div>
   
        <div class="form-group row">
            <strong><label for="name" class="col-md-4 col-form-label text-md-right">Name:</label></strong>
            <div class="col-md-6">
                <input type="text" name="name" class="form-control" name="name" value="{{ $client->name }}">
            </div>
        </div>

        <br>
            <div class="form-group row">
           <strong> <label for="message" class="col-md-4 col-form-label text-md-right">Message:</label></strong>
            <div class="col-md-6">
                <input type="text" name="message" class="form-control"  value="{{ $client->message }}">
            </div>
        <br>
        <br>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
             <a class="btn btn-primary" href="{{ route('client.index') }}">Back</a>
            </div>
        </div>


   
    </form>
@endsection