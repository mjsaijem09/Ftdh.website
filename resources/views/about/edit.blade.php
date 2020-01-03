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
    <br>
    <br>
    <div class="jumbotron">
    <form action="{{ route('about.update',$about->id) }}" method="POST">
        @csrf
        @method('PUT')


        <br>
       <div class="form-group row">
           <strong> <label for="details" class="col-md-4 col-form-label text-md-right">Details:</label></strong>
            <div class="col-md-6">
                <input type="text" name="details" class="form-control"  value="{{ $about->details }}">
            </div>
        <br>
        <br>
        
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
             <a class="btn btn-primary" href="{{ route('about.index') }}">Back</a>
            </div>
        </div>
   
    </form>
    </div>
@endsection