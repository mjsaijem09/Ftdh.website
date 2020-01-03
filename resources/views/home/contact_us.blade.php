
@extends('library')
@section('content')
<div class="main-page-wrapper">
@include('home.slide')




=====================================================
        Contact Section
      =====================================================
      -->
      <div id="contact-section">
        <div class="container">
          <div class="clear-fix contact-address-content">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="left-side">
                <h2>Contact Info</h2>
                <p>Stay updated with the latest offers, and get answers to your questions.
                <br>
                <br>You can reach us at any of our available channels.
                </p>


                <ul>
                  <li>
                    <div class="icon tran3s round-border p-color-bg"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <h6>Address</h6>
                    <p>Rm 208 Krizia Bldg. Gorordo Avenue Cebu City</p>
                  </li>
                  <li>
                    <div class="icon tran3s round-border p-color-bg"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <h6>Phone</h6>
                    <p>+63 9436609952</p>
                  </li>
                  <li>
                    <div class="icon tran3s round-border p-color-bg"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                    <h6>MESSENGER</h6>
                    <p><a href="https://www.messenger.com/t/193250221160608">https://www.messenger.com/t/193250221160608</a></p>
                  </li>
                </ul>
              </div> <!-- /.left-side -->
            </div> <!-- /.col- -->


            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="map-area">
                <h2>Our Location</h2>
                <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2727.412828283987!2d123.89840471875826!3d10.317341929949306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a999388a5a6afb%3A0xef5cde62212a8998!2sItech-Rar+Solutions%2C+Inc.!5e1!3m2!1sen!2sph!4v1556082075221!5m2!1sen!2sph" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
              </div> <!-- /.map-area -->
            </div> <!-- /.col- -->
          </div> <!-- /.contact-address-content -->



          <!-- Contact Form -->
          

          <div id="send-message">
            <div class="send-message">
              <h2>Send Message</h2>
              <form action="{{ route('contacts.store') }}" method="POST">
                 {{csrf_field()}}
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
                      <input type="text" value="{{date('h:i A')}}" placeholder="Your Email*" name="time" hidden>
                    </div> <!-- /.single-input -->
                  </div>
                </div> <!-- /.row -->

                <div class="single-input">
                  <input type="text" placeholder="Subject" name="subject" required>
                </div> <!-- /.single-input -->

                <textarea placeholder="Write Message" name="message" required></textarea>

                

                <button type="submit" onclick="myFunction()" class="tran3s p-color-bg">Send Message</button>
                <script>
                function myFunction() {
                  alert("Your message was sent successfully.");
                }
                </script>
              </form>


              <!-- Contact Form Validation Markup -->
              <!-- Contact alert -->
              