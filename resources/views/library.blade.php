<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>8990 FTDH || Fiber to Deca Home's</title>

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/sites/images/banner/darker.png" alt="img">


        <!-- Main style sheet -->
        <link rel="stylesheet" type="text/css" href="{{ asset('library/css/style.css') }}">
        <!-- responsive style sheet -->
        <link rel="stylesheet" type="text/css" href="{{ asset('library/css/responsive.css') }}">
            
    </head>

    <body>
        <!-- 
        =============================================
            Theme Header
        ============================================== 
        -->     
                
                <!-- ========================= Theme Feature Page Menu ======================= -->
    <header class="theme-main-header">
            @foreach ($banners as $banner)
            <div class="container">
                <a href="" class="logo float-left tran4s"><img src="assets/sites/images/banner/{{$banner->banner_image}}" alt="Logo" width="100px" height="150px" style="z-index: ;position: absolute;"></a>
            @endforeach
                <nav class="navbar float-right theme-main-menu one-page-menu">
                       <!-- Brand and toggle get grouped for better mobile display -->
                       <div class="navbar-header">
                         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                           <span class="sr-only">Toggle navigation</span>
                           Menu
                           <i class="fa fa-bars" aria-hidden="true"></i>
                         </button>
                       </div>
                   <!-- Collect the nav links, forms, and other content for toggling -->
                   <div class="collapse navbar-collapse" id="navbar-collapse-1">
                    
                     <ul class="main-nav nav navbar-nav navbar-right navbar-nav ml-auto">
                         @php $count = 0 @endphp
                           @foreach($navbar as $nav)
                            <li class="nav-item " >
                                <a class="nav-link" href="#{{$nav->nav_code}}">{{$nav->nav_name}} <span class="sr-only">(current)</span></a>
                            </li>
                        @endforeach
                    </ul>
                   </div><!-- /.navbar-collapse -->
                </nav> <!-- /.theme-feature-menu -->
            </div>
        </header> <!-- /.theme-main-header -->


        @yield('content')
        <!-- Js File_________________________________ -->

        <!-- j Query -->
        <script type="text/javascript" src="{{ asset('library/vendor/jquery.2.2.3.min.js') }}"></script>

        <!-- Bootstrap JS -->
        <script type="text/javascript" src="{{ asset('library/vendor/bootstrap/bootstrap.min.js') }}"></script>

        <!-- Vendor js _________ -->
        
        <!-- revolution -->
        <script src="{{ asset('library/vendor/revolution/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('library/vendor/revolution/jquery.themepunch.revolution.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('library/vendor/revolution/revolution.extension.slideanims.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('library/vendor/revolution/revolution.extension.layeranimation.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('library/vendor/revolution/revolution.extension.navigation.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('library/vendor/revolution/revolution.extension.kenburn.min.js') }} "></script>
        <script type="text/javascript" src="{{ asset('library/vendor/revolution/revolution.extension.actions.min.js') }} "></script>
        <script type="text/javascript" src="{{ asset('library/vendor/revolution/revolution.extension.video.min.js') }} "></script>

        <!-- Google map js -->
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZ8VrXgGZ3QSC-0XubNhuB2uKKCwqVaD0&callback=goMap" type="text/javascript"></script> <!-- Gmap Helper -->
        <script src="{{ asset('library/vendor/gmaps.min.js') }}"></script>
        <!-- owl.carousel -->
        <script type="text/javascript" src="{{ asset('library/vendor/owl-carousel/owl.carousel.min.js') }}"></script>
        <!-- mixitUp -->
        <script type="text/javascript" src="{{ asset('library/vendor/jquery.mixitup.min.js') }}"></script>
        <!-- Progress Bar js -->
        <script type="text/javascript" src="{{ asset('library/vendor/skills-master/jquery.skills.js') }}"></script>
        <!-- Validation -->
        <script type="text/javascript" src="{{ asset('library/vendor/contact-form/validate.js') }}"></script>
        <script type="text/javascript" src="{{ asset('library/vendor/contact-form/jquery.form.js') }}"></script>


        <!-- Theme js -->
        <script type="text/javascript" src="{{ asset('library/js/theme.js') }}"></script>
        <script type="text/javascript" src="{{ asset('library/js/map-script.js') }}"></script>

        @yield('scripts')
    </div>
    </body>
</html>
