@extends('layouts.default')
@section('content')
@include('layouts.sidebar')
@include('layouts.topbar')  
    <div class="container">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('promo_and_offers.create') }}"> Create New Promo and Offers</a>
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
   
    <table class="table table-bordered table-responsive" style="height: 350px;">
        <tr style="text-align: center;">
            <th>No</th>
            <th>Image</th>
            <th>Promos</th>
            <th>Status</th>
            <th>Paragraph</th>
            <th width="180px">Action</th>
        </tr>
        @foreach ($promo_and_offers as $promo_and_offer)
        <tr style="text-align: center;">
            <td>{{ ++$i }}</td>
            <td><img src="assets/sites/images/Promo/{{$promo_and_offer->filename}}" class="" style="height: 100px; width: 80px;"></td>
            <td>{{ $promo_and_offer->promo }}</td>
            <td>{{ $promo_and_offer->status }}</td>
            <td>{{ $promo_and_offer->paragraph }}</td>
            <td>
                <form action="{{ route('promo_and_offers.destroy',$promo_and_offer->id) }}" method="POST">
   
    
                    <a class="btn btn-primary" href="{{ route('promo_and_offers.edit',$promo_and_offer->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
  
    {!! $promo_and_offers->links() !!}
@endsection