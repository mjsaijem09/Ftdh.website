<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>8990</title>

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/sites/images/banner/8990.jpg" alt="img" style="width:100px; height:140px;"> 

    <!-- Scripts -->
    <script src="{{ asset('js/library.js') }}" defer></script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <!-- Include the above in your HEAD tag -->

    <!-- Fonts -->

    <!-- Styles -->
    <link href="{{ asset('css/style1.css') }}" rel="stylesheet">
</head>
<body>
        <!-- Top navigation -->
        <nav class="navbar navbar-expand-md fixed-top top-nav">  
            <div class="container">
                  <a class="navbar-brand" href="#">  
                    @foreach($banners as $banner_path)
                      <img src="assets/sites/images/banner/{{$banner_path -> banner_image}}" alt="Logo" style="z-index: ;position: absolute; width:100px; height:150px;">
                    @endforeach</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
                    <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
                  </button>

                  <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                    <ul class="navbar-nav ml-auto">
                         @php $count = 0 @endphp
                           @foreach($navbar as $nav)
                            <li class="nav-item " >
                                <a class="nav-link" href="#{{$nav->nav_code}}">{{$nav->nav_name}} <span class="sr-only">(current)</span></a>
                            </li>
                        @endforeach
                    </ul>
                  </div>    
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
</body>
</html> 
