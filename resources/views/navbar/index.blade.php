@extends('layouts.default')
@section('content')
@include('layouts.sidebar')
@include('layouts.topbar')
    <div class="container">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('navbar.create') }}"> Create New Navbar</a>
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
        <tr style="text-align: center;">
            <th>No</th>
            <th>Nav Name</th>
            <th>Nav Code</th>
            <th width="180px">Action</th>
        </tr>
        @foreach ($navbar as $navbars)
        <tr style="text-align: center;">
            <td>{{ ++$i }}</td>
            <td>{{ $navbars->nav_name }}</td>
            <td>{{ $navbars->nav_code }}</td>

            <td>
                <form action="{{ route('navbar.destroy',$navbars->id) }}" method="POST">
   
    
                    <a class="btn btn-primary" href="{{ route('navbar.edit',$navbars->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
 </div>
{!! $navbar->links() !!}
@endsection