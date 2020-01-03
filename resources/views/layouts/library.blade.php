<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">  
  

    <title>8990 FTDH || Fiber to Deca Home's</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <!--  <footer class="navbar-nav mr-auto" style="background-image: linear-gradient(to right, rgb(58, 181, 176) 0%, rgb(61, 153, 190) 31%, rgb(86, 49, 122) 100%);"><div class="container"><p class="navbar-nav mr-auto">© 2019 Cebu Technical Vocational Training &amp; Assessment Academy Inc. (VocTech)</p> <p class="m-0 text-center text-white">Made with ❤   by VocTech Summer Trainee Students</p></div></footer> -->
<style type="text/css">
    body{
        background-image: url(assets/sites/images/slider/slider2.jpg);
        
    }

    #loader {
        transition: all 0.3s ease-in-out;
        opacity: 1;
        visibility: visible;
        position: fixed;
        height: 100vh;
        width: 100%;
        background: #fff;
        z-index: 90000;
      }

      #loader.fadeOut {
        opacity: 0;
        visibility: hidden;
      }

      .spinner {
        width: 40px;
        height: 40px;
        position: absolute;
        top: calc(50% - 20px);
        left: calc(50% - 20px);
        background-color: #333;
        border-radius: 100%;
        -webkit-animation: sk-scaleout 1.0s infinite ease-in-out;
        animation: sk-scaleout 1.0s infinite ease-in-out;
      }

      .spinner {
        width: 40px;
        height: 40px;
        position: absolute;
        top: calc(50% - 20px);
        left: calc(50% - 20px);
        background-color: #333;
        border-radius: 100%;
        -webkit-animation: sk-scaleout 1.0s infinite ease-in-out;
        animation: sk-scaleout 1.0s infinite ease-in-out;
      }

</style>

</head>
<body>

<div id="loader-wrapper">
        <div id="preloader_1">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    
    <!-- Scroll Top Button -->
    <button class="scroll-top tran3s p-color-bg">
        <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
    </button>

</div>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            
            <div class="container">
                <a class="navbar-brand" href="{{ url('/ ') }}">
                  Admin Portal
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        
                        
                        <a class="nav-link" href="about_us">{{ __('About Us') }}</a>
                        <a class="nav-link" href="plan_and_packages">{{ __('Plan and Packages') }}</a>
                        <a class="nav-link" href="promo_and_offers">{{ __('Promo and Offers') }}</a>
                        <a class="nav-link" href="contacts">{{ __('Messages') }}</a>
                        <a class="nav-link" href="navbar">{{ __('Navbars') }}</a>
                        <a class="nav-link" href="banners">{{ __('Banners') }}</a>
                        <!-- <a class="nav-link" href="slider">{{ __('Sliders') }}</a> -->
                        <a class="nav-link" href="our_sites">{{ __('Our Sites') }}</a>
                        <a class="nav-link" href="blog">{{ __('Partner') }}</a>
                        <!-- <a class="nav-link" href="blog_client">{{ __('Blog Client') }}</a> -->
                       <!--  <a class="nav-link" href="pricing">{{ __('Pricing') }}</a> -->
                        <a class="nav-link" href="client">{{ __('Client') }}</a>
                       <!--  <a class="nav-link" href="skill">{{ __('Skill') }}</a> -->
                        <!-- <a class="nav-link" href="services">{{ __('Services') }}</a> -->
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
           @yield('content')
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
            <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
            <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        @yield('scripts')
        </main>
    </div>
</body>
</html>
