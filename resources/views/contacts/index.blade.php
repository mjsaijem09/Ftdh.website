@extends('layouts.default')
@section('content')
@include('layouts.sidebar')
@include('layouts.topbar')


<!--         <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <div class="pull-right">
                <a class="btn btn-success" href="{{ route('contacts.create') }}"> Create New Contact</a>
            </div>
            </div>
        </div>
    </div>  -->
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

          <br><br><br>  
   
    <table id="contacts_table" class="table table-bordered table-responsive container-fluid">
        <tr style="text-align: center;">
            <th>No</th>
            <th>Name</th>
            <th>Email Address</th>
            <th>Subject</th>
            <th>Number</th>
            <th>Message</th>
            <th>Messsage Sent</th>
            <th width="180px">Action</th>
        </tr>
        @foreach ($contacts as $contact)
        <tr style="text-align: center;">
            <td>{{ ++$i }}</td>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->email_address }}</td>
            <td>{{ $contact->subject }}</td>
            <td>{{ $contact->number }}</td>
            <td>{{ $contact->message }}</td>
            <td>{{ $contact->date_time}}</td> 
           
            <td>
                <form action="{{ route('contacts.destroy',$contact->id) }}" method="POST">
                    
                    <a class="btn btn-primary" href="{{ route('contacts.show',$contact->id) }}">Show</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $contacts->links() !!}
@endsection