@extends('layouts.default')
   
@section('content')
<br>
<br>
<br>
    <div class="row col-md-12">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Site</h2>
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
 <form action="{{ route('our_sites.update',$our_sites->id) }}" method="POST">
        @csrf
        @method('PUT')
            
        <div class="row">
            <div class="col-md-4">
                <div class="form-group col-md-12">
                    <strong>Name of Site:</strong>
                    <input type="text" name="name_of_site" value="{{ $our_sites->name_of_site }}" class="form-control" placeholder="Name of Site">
                </div>
            </div>
            <div class="col-md-9">
                <div class="form-group col-md-12">
                    <strong>Address:</strong>
                    <input type="text" name="address"  value="{{ $our_sites->address }}" class="form-control" placeholder="Address">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group col-md-12">
                    <strong>Number:</strong>
                    <input type="number" name="number" value="{{ $our_sites->number }}" class="form-control" placeholder="Number">
                </div>
            </div>
            
           

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
              <a class="btn btn-primary" href="{{ route('our_sites.index') }}"> Back</a>
            </div>
        </div>
</form>

@endsection