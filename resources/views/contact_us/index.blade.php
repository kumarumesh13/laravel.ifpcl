@extends('layouts.master')

@section('title','Ladakh Farmers & Producers Cooperative Ltd | Contact Us')

@section('middle-content')

<!-- Inner Banner Wrapper Start -->
<div class="inner-banner">
  <div class="container">
    <h2>Contact Us</h2>
    <ul class="inner-breadcrumb">
      <li><a href="index.html">Home</a></li>
      <li>Contact Us</li>
    </ul>
  </div>
</div>
<!-- Inner Banner Wrapper End --> 
<!-- Inner Wrapper Start -->
<div class="inner-wrapper contact-us">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-8">
        <h2>Get in Touch</h2>
        <div class="row">
          <div class="col-sm-4">
            <div class="address">
              <div class="icon-border">
                <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
              </div>
              <p><strong>Office</strong> <br>
                Buddha Garden, Choglamsar<br>
                Leh, Ladakh</p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="address">
              <div class="icon-border">
                <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
              </div>
              <p><strong>Phone</strong><br>
                +91 9622008710<br>
                +91               9419880007</p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="address">
              <div class="icon-border">
                <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
              </div>
              <p><strong>Email</strong> <br>
              <a href="mailto: contact@lfpcl.com"> contact@lfpcl.com</a><br>
              <a href="mailto:tsewangdorjee@lfpcl.com">tsewangdorjee@lfpcl.com</a> </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4">
        <h2>Leave a Message</h2>
        <div class="forms">
          <form action="#">
            <input type="text" required placeholder="Full Name" value="" name="name">
            <input type="text" required placeholder="Phone Number" value="" name="phone">
            <textarea placeholder="Type your message here" name="message"></textarea>
            <button type="submit" class="btn">Submit</button>
          </form>
        </div>
      </div>
    </div>
    <!--<div class="offset-top-30">
      <div id="googleMap">
     <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d105681.0787521888!2d77.52037522397241!3d34.13268527699997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sranbirpura+leh+ladakh!5e0!3m2!1sen!2sin!4v1499430995569"  frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>-->
  </div>
</div>

@endsection