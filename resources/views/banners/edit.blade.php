@extends('layouts.default')
   
@section('content')
<br>
<br>
 <div class="container">
    <div class="row col-md-12">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Banner</h2>
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
   <form action="{{ route('banners.update',$banners->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="container">

        <center> <img class="img-thumbnail" src="{{ url('assets/sites/images/banner/' .  $banners->banner_image) }}" style="height: 300px;" />
            <br>
            <br>
        <div class="input-group control-group increment">
             <strong> <label for="banner_image" class="col-md-4 col-form-label text-md-right">Banner Image:</label></strong>
                <div class="col-md-6">
                <input type="file" name="banner_image[]" class="img-thumbnail" value="{{ $banners->banner_image }}">
                </div>
        </div></center>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
              <a class="btn btn-primary" href="{{ route('banners.index') }}"> Back</a>
            </div>
        </div>
  
    </form>
    </div>
</div>
@endsection