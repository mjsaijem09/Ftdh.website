@extends('layouts.default') 
   
@section('content')
<br>
<br>
<br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Promo and Offers</h2>
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
  
  <div class="jumbotron">
    <form action="{{ route('promo_and_offers.update',$promo_and_offers->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')


          @if($promo_and_offers->filename)
        <center><img src="{{ url('assets/sites/images/Promo/' . $promo_and_offers->filename) }}" style="height: 200px;" /></center>
        @else
            <p>No image found</p>
        @endif
        <div class="input-group control-group increment">
             <strong> <label for="filename" class="col-md-4 col-form-label text-md-right">Filename:</label></strong>
                <div class="col-md-6">
                <input type="file" name="filename[]" class="" value="{{ $promo_and_offers->filename }}"></input>
                </div>
        </div>

 <br>
<br>
<br>   
            <div class="col-xs-12 col-sm-12 col-md-9">
                <div class="form-group">
                    <strong>Promo:</strong>
                    <textarea class="form-control" name="promo" placeholder="Promo">{{ $promo_and_offers->promo }}</textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-9">
                <div class="form-group">
                    <strong>Status:</strong>
                    <textarea class="form-control" name="status" placeholder="Status">{{ $promo_and_offers->status }}</textarea>
                </div>
            </div>

             <div class="col-xs-12 col-sm-12 col-md-9">
                <div class="form-group">
                    <strong>Paragraph:</strong>
                    <textarea class="form-control" name="paragraph" placeholder="Paragraph">{{ $promo_and_offers->paragraph }}</textarea>
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
              <a class="btn btn-primary" href="{{ route('promo_and_offers.index') }}"> Back</a>
            </div>
        </div>
   
    </form>
</div>
@endsection