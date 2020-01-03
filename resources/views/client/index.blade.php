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
                <a class="btn btn-success" href="{{ route('client.create') }}"> Add New Client</a>
            </div>
        </div>
    
    <br>
    <br>
    <br>
    
    
<section>
   
   
    <table class="table table-bordered table-responsive" style="height: 350px;">
        <tr style="text-align: center;">
            <th>No</th>
            <th>Name</th>
            <th>Name Image</th>
            <th>Message</th>
            <th width="180px">Action</th>
        </tr>
        @foreach ($client as $clients)
        <tr style="text-align: center;">
            <td>{{ ++$i }}</td>
            <td>{{ $clients->name }}</td>
            <td><img src="assets/sites/images/name_image/{{$clients->name_image}}" class="" style="height: 100px; width: 100px;" class="img-circle"></td>
            <td>{{ $clients->message }}</td>
            <td>
                <form action="{{ route('client.destroy',$clients->id) }}" method="POST">
   
    
                    <a class="btn btn-primary" href="{{ route('client.edit',$clients->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</section>
</div>
  
    {!! $client->links() !!}
@endsection