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
    <form action="{{ route('partner.update',$partner->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        
        <center>
        <img class="" src="{{ url('assets/sites/images/partner/' . $partner->partner) }}" style="height: 200px;" />
        </center>
        <div class="input-group control-group increment">
           <strong> <label for="partner" class="col-md-4 col-form-label text-md-right">Partner:</label></strong>
            <div class="col-md-6">
                <input type="file" name="partner[]" class="" value="{{ $partner->partner }}">
            </div>
        </div>

        
        <br>
        <br>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
             <a class="btn btn-primary" href="{{ route('partner.index') }}">Back</a>
            </div>
        </div>
   
    </form>
    </div>
@endsection