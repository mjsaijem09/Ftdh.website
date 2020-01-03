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
                <a class="btn btn-success" href="{{ route('partner.create') }}"> Create New Partner</a>
            </div>
        </div>
   
    <br>
    <br>
    <br>
    
    
<section>
   
   
    <table class="table table-bordered table-responsive" style="height: 300px;">
        <tr style="text-align: center;">
            <th>No</th>
            <th>Partner</th> 
            <th width="180px">Action</th>
        </tr>
        @foreach ($partner as $partners)
        <tr style="text-align: center;">
            <td>{{ ++$i }}</td>
            <td><img src="assets/sites/images/partner/{{$partners->partner}}" class="" style="height:  200px; width: 200px;"></td>
            <td>
                <form action="{{ route('partner.destroy',$partners->id) }}" method="POST">
   
    
                    <a class="btn btn-primary" href="{{ route('partner.edit',$partners->id) }}">Edit</a>
   
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
    {!! $partner->links() !!}
@endsection