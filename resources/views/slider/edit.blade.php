@extends('layouts.default')
   
@section('content')
<br>
<br>
<br>      
    <div class="row col-md-12">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Slide</h2>
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
<form action="{{ route('slider.update',$slider->id) }}" method="POST">
        @csrf
        @method('PUT')
        <center>
        <img class="img-thumbnail" src="{{ url('assets/sites/images/slider/' . $slider->image_slide) }}" style="height: 200px;" />
        </center>
        <div class="input-group control-group increment">
             <strong> <label for="image_slide" class="col-md-4 col-form-label text-md-right">Image Slide:</label></strong>
                <div class="col-md-6">
                <input type="file" name="image_slide" class="img-thumbnail" value="{{ $slider->image_slide }}">
                </div>
        </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
              <a class="btn btn-primary" href="{{ route('slider.index') }}"> Back</a>
            </div>
        </div>
   
    </form>
@endsection