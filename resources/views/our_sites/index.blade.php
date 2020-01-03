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
                <a class="btn btn-success" href="{{ route('our_sites.create') }}"> Create New Site</a>
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
   
    <table class="table table-bordered table-responsive">
        <tr>
            <th>No</th>
            <th>Name of Site</th>
            <th>Address</th>
            <th>Number</th>
            
            <th width="280px">Action</th>
        </tr>
        @foreach ($our_sites as $our_sites)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $our_sites->name_of_site }}</td>
            <td>{{ $our_sites->address }}</td>
            <td>{{ $our_sites->number }}</td>
          

            <td>
                <form action="{{ route('our_sites.destroy',$our_sites->id) }}" method="POST">
   
    
                    <a class="btn btn-primary" href="{{ route('our_sites.edit',$our_sites->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
  
      
@endsection