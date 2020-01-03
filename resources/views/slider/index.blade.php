@extends('layouts.default')
 
@section('content')
<br>
<br>
<br>      
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('slider.create') }}"> Create New Slide</a>
            </div>
        </div>
    </div>
<br>
<br>
<br>         
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered table-responsive" style="height: 500px;">
        <tr>
            <th>No</th>
            <th>Slide Image</th>
            <th width="280px">Action</th>
        </tr>
        @foreach($slider as $sliders)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="assets/sites/images/slider/{{ $sliders->image_slide }}" style="height: 30%; width: 30%;"></td>
           

            <td>
                <form action="{{ route('slider.destroy',$sliders->id) }}" method="POST">
   
    
                    <a class="btn btn-primary" href="{{ route('slider.edit',$sliders->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
  
      
@endsection