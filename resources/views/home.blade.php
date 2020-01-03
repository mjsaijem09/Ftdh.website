@extends('layouts.default')
@section('content')
@include('layouts.sidebar')
@include('layouts.topbar')

  <div>
        
               
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                   
                    <strong><footer class="navbar-nav mr-auto" style="background-image: linear-gradient(to left, #b30000, #ff4d4d, #ff6666);"><div class="container"><p>© 2019 Cebu Technical Vocational Training &amp; Assessment Academy Inc. (VocTech)</p> <p class="m-0 text-center text-white">Made with ❤ by VocTech Students</p></div></footer></strong>
</div>

@endsection

