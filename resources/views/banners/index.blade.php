@extends('layouts.default')
@section('content')
@include('layouts.sidebar')
@include('layouts.topbar')


    <div class="container">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('banners.create') }}"> Create New Banner</a>
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
   
    <table class="table table-bordered table-responsive container-fluid">
        <tr>
            <th>No</th>
            <th>Banner Image</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($banners as $banner)
        <tr>

            <td>{{ ++$i }}</td>
            <td><img src="assets/sites/images/banner/{{$banner->banner_image}}" class="" style="height: 200px; width: 15  0px;"></td>
           
                <form action="{{ route('banners.destroy',$banner->id) }}" method="POST">
   <td>
    
                    <a class="btn btn-primary" href="{{ route('banners.edit',$banner->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  </div>
  
      {!!$banners->links() !!}
@endsection