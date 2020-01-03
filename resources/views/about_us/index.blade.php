@extends('layouts.default')
@section('content')
@include('layouts.sidebar')
@include('layouts.topbar')

 @if ($message = Session::get('success'))
 <div class="alert alert-success">
    <p>{{ $message }}</p> 
 </div>
 @endif
    <div class="container">
        <div class="col-lg-12 margin-tb">
            
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('about_us.create') }}" > Create New About Us</a>
            </div>
        </div>
    
    <br>
    <br>
    <br>
    
<section>
   
   
    <table class="table table-bordered table-responsive">

        <tr style="text-align: center;">
            <th>No</th>
            <th>Title</th>
            <th>Image</th>
            <th>Details</th>
            <th width="180px">Action</th>
        </tr>
        @foreach ($about_us as $about)
        <tr style="text-align: center;">
            <td>{{ ++$i }}</td>
            <td>{{ $about->title }}</td>
            <td><img src="assets/sites/images/image/{{$about->image}}" class="" style="height: 100px; width: 100px;"></td>
            <td>{{ $about->details }}</td>
            <td>
                <form action="{{ route('about_us.destroy',$about->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('about_us.edit',$about->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</section>
  
    {!! $about_us->links() !!}
@endsection