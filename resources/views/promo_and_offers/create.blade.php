@extends('layouts.default') 
@section('content')
<br>
<br>
<br>  
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Promo and Offers</h2>
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
@if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
        @endif

<div class="jumbotron">
<form method="POST" action="{{url('promo_and_offers')}}" enctype="multipart/form-data">
    @csrf

    <div class="input-group control-group increment  col-md-9" >
          <input type="file" name="filename[]" class="form-control">
          <div class="input-group-btn"> 
          </div>
        </div>

<br>
<br>
<br>     
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-9">
            <div class="form-group col-md-12">
                <strong>Promo:</strong>
                <input type="text" name="promo" class="form-control" placeholder="Promo">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-9">
            <div class="form-group col-md-12">
                <strong>Status:</strong>
                <input type="text" name="status" class="form-control" placeholder="Status">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-9">
            <div class="form-group col-md-12">
                <strong>Paragraph:</strong>
                <input type="text" name="paragraph" class="form-control" placeholder="paragraph">
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="{{ url('promo_and_offers') }}"> Back</a>
        </div>
    </div>

    
   
</form>
</div>
@endsection

