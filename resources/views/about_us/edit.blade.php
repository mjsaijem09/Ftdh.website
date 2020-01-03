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
    <form action="{{ route('about_us.update',$about_us->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        <div class="form-group row">
            <strong><label for="title" class="col-md-4 col-form-label text-md-right">Title:</label></strong>
            <div class="col-md-6">
                <input type="text" name="title" class="form-control" name="title" value="{{ $about_us->title }}">
            </div>
        </div>

     <div class="container" style="margin-left: 50px;">
        <img class="" src="{{ url('assets/sites/images/image/' . $about_us->image) }}" style="height: 200px;" />
        <br><br>
        </div>
        <div class="input-group control-group increment">
           <strong> <label for="image" class="col-md-4 col-form-label text-md-right">Image:</label></strong>
            <div class="col-md-6">
                <input type="file" name="image" class="" value="{{ $about_us->image }}">
            </div>
        </div>


        <br>
            <div class="form-group row">
           <strong> <label for="details" class="col-md-4 col-form-label text-md-right">Details:</label></strong>
            <div class="col-md-6">
                <input type="text" name="details" class="form-control"  value="{{ $about_us->details }}">
            </div>
        <br>
        <br>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
             <a class="btn btn-primary" href="{{ route('about_us.index') }}">Back</a>
            </div>
        </div>
   
    </form>
    </div>
@endsection