@extends('layouts.default')
  
@section('content')
<br>
<br>
<br>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Banner</h2>
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
<form method="post" action="{{url('banners')}}" enctype="multipart/form-data">
  {{csrf_field()}}

        <div class="input-group control-group increment" >
          <input type="file" name="banner_image[]" class="form-control">
          <div class="input-group-btn"> 
            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
          </div>
        </div>


        <center>
        <button type="change" class="btn btn-primary" style="margin-top:10px">Submit</button>
        <a class="btn btn-primary" href="{{ route('banners.index') }}" style="margin-top:10px" >Back</a>

        </center>

  </form> 
  </div>

  <script type="text/javascript">


    $(document).ready(function() {

      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });

    });

</script>  
@endsection