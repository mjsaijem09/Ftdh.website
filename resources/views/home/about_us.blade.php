<body class="about_us">
<style type="text/css">
	body {
    font-family: 'Roboto';font-size: 16px;
}
</style>

<div class="about_us  pt-100 pb-100" id="about_us">
<center>
<div class="aboutus-section">
        <div class="container">
            <div class="row">
                <div class=" col-xl-8 mx-auto text-center">
                    <div class="section-title">
                        <h2>About Us</h2>
                    </div>
                </div>
                </div>
                <center>
                
                    <div class="feature">
                        <div class="row">
                            <div class="clearfix">
                            	@foreach($about_us as $about)
                                   
                                
                                <div class="col-lg-4 col-md-6 text-center">
                                   <br> <img src="assets/sites/images/image/{{$about->image}}" style="height: 140px; width: 140px;"><br>
                                    <br><h4>{{$about->title}}</h4>
                                    <p>{{$about -> details}}</p>
                                    
                                </div>
                                @endforeach
                            </center>
                            </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</center>
</div>

    <div class="about_us" style="margin-top: 10%">&nbsp;</div>
