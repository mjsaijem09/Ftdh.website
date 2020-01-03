@extends('library')
@section('content')
@include('home.slider')
<div class="main-page-wrapper">
    <!-- //ABOUT -->
	<section id="about-us"> 
	<div id="about-us-section">                                           
		<div class="container">
			@foreach($about as $abouts)
			<div class="theme-title">
				<h2>ABOUT FTDH</h2>
				<p>{{$abouts->details}}</p>
			</div> <!-- /.theme-title -->
			@endforeach
 			 @foreach($about_us as $about)
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="row">
					<div class="single-about-content">
						<div class="icon round-border tran3s">
							<img src="assets/sites/images/image/{{$about->image}}" style="height: 127px; width: 140px;"><br>
						</div>
						<h5><a href="#" class="tran3s">{{$about -> title}}</a></h5>
						<p>{{$about -> details}}</p>
					</div> <!-- /.single-about-content -->
				</div> <!-- /.col -->
			</div>
			@endforeach
		</div> <!-- /.container -->
	</div><!-- about-us-section -->
	</section> <!-- /#about-us -->



	<!--
	=====================================================
		Page middle banner
	=====================================================
	-->
	
	<div class="page-middle-banner" style="background-image: url(assets/sites/images/slider/slider2.jpg) ;  
     										background-color:    #999999;
     										background-blend-mode: lighten;
     										background-attachment: fixed; ">
		<div class="opacity" >
			<h3>We Are Here Willing to Serve You <br><br> Best Fiber Connection</h3>
			
		</div> <!-- /.opacity -->
	</div> <!-- /.page-middle-banner -->


		<!--
			=====================================================
				Plans And Packages
			=====================================================
			-->
			
		  <div id="plans-and-packages" style="">

					<div class="theme-title">
						<h2>PLANS AND PACKAGES</h2>
					</div>
		<div id="pricing-section">
				<div class="container">
					<div class="clear-fix">
						@foreach($packages_list as $packages)

						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="single-price-table hvr-float-shadow">
								<strong style="color: red; ">{{$packages -> package_name}}</strong>
								<ul>
									<li>Fast and Reliable Fiber Connection</li>
									<li>No Data Capping</li>
									<li>24/7 Support</li>
								</ul>
								<a href="#" class="tran3s p-color-bg" data-toggle="modal" data-target="#plan_and_packages_details{{$packages->class}}">Pick Here</a>
								</div> <!-- /.single-price-table -->
						</div> <!-- /.col -->
						<!-- Modal -->
							<div class="modal fade" id="plan_and_packages_details{{$packages->class}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="top: 41px;">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header" style="background-color: #FF3333">
							        <h5 class="modal-title" id="exampleModalLabel">{{$packages -> package_name}}</h5>
							     
							      </div>

							      @foreach($plan_and_packages_list as $plan_and_packages)
										@if($plan_and_packages -> package_id == $packages -> id)

							      <div class="modal-body single-price-table hvr-float-shadow ">
							      	<center>
							        	<img class="" style=" height: 180px; width: 180px;" src="{{ url('assets/sites/images/plan/' . $plan_and_packages->plan_image) }}" />
							        </center>
										<div class="promo_and_offers" style="margin-top: 2%">&nbsp;</div>
							        <p style="font-size:20px">{{$plan_and_packages->details}}</p>
							      </div>

							      		@endif
							      @endforeach
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
						@endforeach

				</div>
			</div> <!-- /.container -->
		</div> <!-- /#pricing-section -->
	</div>



	<!--
	=====================================================
		Page middle banner
	=====================================================
	-->

	<div class="page-middle-banner" style="background-image: url(assets/sites/images/slider/slider3.jpg) ;  
     										background-color:    #999999;
     										background-blend-mode: lighten;
     										background-attachment: fixed; ">
		<div class="opacity" >
			<h3>Choose Wisely for A Better Connection <!-- <span class="p-color">&amp;</span> --><br><br> Doubt No More</h3>
			
		</div> <!-- /.opacity -->
	</div> <!-- /.page-middle-banner -->



	<!--
	=====================================================
		Promo And Offers
	=====================================================
	-->
	<div id="team-section">
		<div class="container">
			<div class="theme-title">
				<h2>PROMO AND OFFERS</h2>
				
			</div> <!-- /.theme-title -->

		
			<div class="clear-fix team-member-wrapper">
				@foreach($promo_and_offers as $promo)
				<div class="float-left">
					<div class="single-team-member">
						<div class="img">
							<a  href="#" data-toggle="modal" data-target="#promo_and_offers_details{{$promo->id}}"><img src="assets/sites/images/promo/{{$promo->filename}}" alt="Image" style="width: 300px; height: 300px;"></a>
						</div> <!-- /.img -->
						<div class="member-name">
							<h4 style="padding-top: 20px">{{$promo->promo}}</h4>
						</div> <!-- /.member-name -->
					</div> <!-- /.single-team-member -->
				</div> <!-- /float-left -->

				<div class="modal fade" id="promo_and_offers_details{{$promo->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="top: 41px;">
				  <div class="modal-dialog modal-ml" role="document">
				    <div class="modal-content">
				      <div class="modal-header" style="background-color: #FF3333">
				        <h5 class="modal-title" id="exampleModalLabel" >{{$promo->promo}}</h5>
				      </div>
				      <div class="modal-body">
				      		<center>
				        		<img class="form-control" src="assets/sites/images/promo/{{$promo->filename}}" style="width: 350px; height: 350px;">
				        	</center>
				        	<div><p style="text-align: center; font-size: 20px;">{{$promo->paragraph}}</p>	</div>		        
				      </div>
				      <div class="modal-footer">
							        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
					  </div>
				    </div>
				  </div>
				</div>

				@endforeach
			</div> <!-- /.team-member-wrapper -->
		</div> <!-- /.conatiner -->
	</div> <!-- /#team-section -->




	<!--	
	=====================================================
		Our Client
	=====================================================
	-->
	<div id="our-client">
		<div class="container">
			<div class="theme-title">
				<h2>OUR HAPPY CLIENTS</h2>
				<p> “A satisfied customer is one who will continue to buy from you, seldom shop around, refer other customers and in general be a superstar advocate for your business.” ~ Gregory Ciotti</p>
			</div> <!-- /.theme-title -->
					
<!-- 					<br>
					<center><a class="btn btn-danger" href="#send-message">Message Us Now!.</a></center>
 -->					<br>
					<div class="row bootstrap snippets">
					    <div class="col-md-10 col-md-offset-1 col-sm-12">
					        <div class="comment-wrapper">
					            <div class="panel panel-danger">
					                <div class="panel-heading" style="background-color: red; border-color: red;">
					                    <strong style="color: black;">Client panel</strong>
					                </div>
					                <div class="panel-body" style="overflow: scroll; height: 500px;">
					                    <ul class="media-list">
					                        <li class="media pull-left">
					                        	@foreach($client as $clients)
				                                <div class="text-muted pull-right">
				                                    <small class="text-muted">{{$clients->created_at->format("D Y-M-d H:i:s\n a")}}</small>
				                                </div>
					                                <img src="assets/sites/images/name_image/{{$clients->name_image}}" style="height: 64px; width: 64px;" class="img-circle">
					                            <div class="media-body">
					                                <strong class="text-success">@.{{$clients->name}}</strong>
					                                <p>{{$clients->message}}</p>
					                            </div>
					                            <hr>
					                        @endforeach
					                        </li>
					                    </ul>
					                </div>
					            </div>
					        </div>
					    </div>
					</div>
				</div> <!-- /.container -->
			</div> <!-- /#our-client -->

	<!--
	
	=====================================================
		Blog Section
	=====================================================
	-->
	<div id="blog-section">
		<div class="container">
			<div class="theme-title">
				<h2>OUR LATEST BLOG</h2>
			</div> <!-- /.theme-title -->

				<div style="margin-top: 2%">&nbsp;</div>
				<div class="card">
    				<div class="box">
    					<center>
							<div class="embed-responsive embed-responsive-16by9" style="width: 80%;height: -40px">
		                        	<video class="embed-responsive-item" src="assets/sites/images/blog_video/8990 FTDH Subscribers Reviews.mp4" allowfullscreen autoplay controls muted></video>
		                    </div>
						</center>

	   				</div>
  				</div>			
		</div> <!-- /.container -->
	</div> <!-- /#blog-section -->


	<!--
	=====================================================
		Partner Section
	=====================================================
	-->
	<div id="partner-section">
		<div class="container">
			<div id="partner_logo" class="owl-carousel owl-theme">
				@foreach($partner as $partners)
                  <img src="assets/sites/images/partner/{{$partners -> partner}}">
                @endforeach
			</div> <!-- End .partner_logo -->
		</div> <!-- /.container -->
	</div> <!-- /#partner-section -->

 
			<br><br><br><br><br><br>
            <!-- CONTACT SECTION -->
			<div id="contact-section">
				<div class="container">
					<div class="clear-fix contact-address-content">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="left-side">
								<div class="theme-title">
								<h2>Contact Info</h2>
								</div>
									<p>Stay updated with the latest offers, and get answers to your questions.
								<br>
									<br>You can reach us at any of our available channels.
								</p>
								@foreach($contact_us as $contact)
								<ul>
									<li>
										<div class="icon tran3s round-border p-color-bg"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
										<h6>Address</h6>
										<p>{{$contact->address}}</p>
									</li>
									<li>
										<div class="icon tran3s round-border p-color-bg"><i class="fa fa-phone" aria-hidden="true"></i></div>
										<h6>Phone</h6>
										<p>+{{$contact->number}}</p>
									</li>
									<li>
										<div class="icon tran3s round-border p-color-bg"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
										<h6>MESSENGER</h6>
										<p><a href="{{$contact->messenger}}">{{$contact->messenger}}</a></p>
									</li>
								</ul>
								@endforeach
							</div> <!-- /.left-side -->
						</div> <!-- /.col- -->
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="map-area">
								<div class="theme-title">
								<h2>Our Location</h2>
								</div>
									<div class="map">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2727.412828283987!2d123.89840471875826!3d10.317341929949306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a999388a5a6afb%3A0xef5cde62212a8998!2sItech-Rar+Solutions%2C+Inc.!5e1!3m2!1sen!2sph!4v1556082075221!5m2!1sen!2sph" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
									</div>
							</div> <!-- /.map-area -->
						</div> <!-- /.col- -->
					</div> <!-- /.contact-address-content -->
				</div>

				<!-- Contact Form -->
				<div class="send-message" id="send-message">
					<div class="theme-title">
					<h2>Send Message</h2>
					</div>
						<form  action="{{ route('contacts.store') }}" method="POST">
							@csrf
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="single-input">
										<input type="text" placeholder="Username*" name="name" required>
									</div> <!-- /.single-input -->
								</div>

								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="single-input">
										<input type="text" placeholder="Mobile Number*" name="number" required >
										</div> <!-- /.single-input -->
								</div>

								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="single-input">
										<input type="email" placeholder="Your Email*" name="email_address" required>
									
									</div> <!-- /.single-input -->
								</div>
							</div> <!-- /.row -->
                           <div class="row">
                           		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="single-input">
										<input type="text" placeholder="Subject" name="subject" required>
									</div> <!-- /.single-input -->
								</div>
							</div>
                            
                            <div class="row">
                            	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<textarea placeholder="Write Message" name="message" required></textarea>
								</div>
							</div>

							<button type="submit" onclick="_gaq.push(['sweet-3']);" class="tran3s p-color-bg sweet-3">Send Message</button>

							<script src="{{ asset('sweet_alert/library/dist/sweetalert.js') }}"></script>
							<link rel="stylesheet" href="{{ asset('sweet_alert/library/dist/sweetalert.css') }}">

							<script>
							    document.querySelector('.sweet-3').onclick = function(){
							        swal("Good job!", "Your message has been sent!", "success");
							      };
							</script>
						</form>
					</div>
				</div>
			</div>
				<!-- //CONTACT SECTION --><br><br>




				  <!-- Scroll Top Button -->
	<!-- <button class="scroll-top tran3s p-color-bg">
		<i class="fa fa-long-arrow-up" aria-hidden="true"></i>
	</button> -->

				<!-- FOOTER -->
				<footer>
					<div class="container">
						<center>
						<ul>
							<li><a href="https://www.facebook.com/8990FTDH/" class="tran3s round-border"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="https://www.messenger.com/t/193250221160608" class="tran3s round-border"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
						</ul>

						<p>Copyright @2019 All rights reserved | This website is made with 
		  				<i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://www.facebook.com/VoctechCebu/">VocTech Students'</a></p>
		  				</center>
					</div>
				</footer>
				<!-- //FOOTER -->

@endsection
