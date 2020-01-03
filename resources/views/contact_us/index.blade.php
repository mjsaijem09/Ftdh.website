@extends('layouts.default')
@section('content')
@include('layouts.sidebar')
@include('layouts.topbar')


<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <div class="pull-right">
                <a class="btn btn-success" href="{{ route('contact_us.create') }}"> Create New Contact</a>
                </div>
            </div>
        </div>
    </div> 
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

          <br><br><br>  
   
    <table id="contact_us_table" class="table table-bordered table-responsive container-fluid">
        <tr style="text-align: center;">
            <th>No</th>
            <th>Address</th>
            <th>Number</th>
            <th>Messenger</th>
            <th width="180px">Action</th>
        </tr>
        @foreach ($contact_us as $contact)
        <tr style="text-align: center;">
            <td>{{ ++$i }}</td>
            <td>{{ $contact->address }}</td>
            <td>{{ $contact->number }}</td>
            <td>{{ $contact->messenger }}</td>
           
            <td>
                <form action="{{ route('contact_us.destroy',$contact->id) }}" method="POST">

                    <a class="btn btn-primary" href="{{ route('contact_us.edit',$contact->id) }}">Edit</a>
                    
   
                    @csrf
                    @method('DELETE')
      
                    <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
    {!! $contact_us->links() !!}
@endsection