@extends('layouts.master')

@section('title','Ladakh Farmers & Producers Cooperative Ltd | Sponsor Us')

@section('middle-content')

<!-- Inner Banner Wrapper Start -->
<div class="inner-banner">
  <div class="container">
    <h2>Sponsor Us</h2>
    <ul class="inner-breadcrumb">
      <li><a href="index.html">Home</a></li>
      <li>Sponsor Us</li>
    </ul>
  </div>
</div>
<!-- Inner Banner Wrapper End --> 
<!-- Inner Wrapper Start -->
<div class="inner-wrapper contact-us">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-8">
        <h2>Contact <span>Mr. M.L. Mantoo</span></h2>
        <div class="row">
          <div class="col-sm-12">
            <p><strong>CEO</strong> – Ladakh Farmers &amp;  Producers Cooperative Ltd &amp; <br>
            <strong>Advisor</strong> – Ladakh  Autonomous Hill Development Council</p>
            <p><strong>M L Mantoo</strong> ,worked as Advisor to the Ministry of Rural   Development,  Govt. of India, has vast expertise in- Hi-Tech Agri. &amp;   Horticulture, Plant  Nutrition &amp; Pest Control, Micro-Irrigation,   Processing, Marketing etc. <strong>Mr. Mantoo</strong> has been instrumental in  improving the implementation of Watershed .. <a href="ml-mantoo.html">Read more</a></p>
            <p>Contact Details :<br>
              Phone No. <strong>+91 9810127743</strong><br>
            Email ID  : <a href="mailto:mlmantoo@gmail.com">mlmantoo@gmail.com</a> | <a href="mailto:mlmantoo@lfpcl.com">mlmantoo@lfpcl.com</a></p>
            <p>&nbsp;</p>
          </div>
       
        
        </div>
      </div>
      <div class="col-sm-12 col-md-4">
        <h2>Send a Message</h2>
        <div class="forms">
          <form action="/sponsor_us/sponsor_org" method='POST'>
              <input type='hidden' name='_token' value='{{csrf_token()}}'>
            <input type="text" required placeholder="Full Name" value="" name="name">
            <input type="text" required placeholder="Phone Number" value="" name="contact_no">
            <input type="text" required placeholder="Email ID" value="" name="email">
            <textarea placeholder="Type your message here" name="message"></textarea>
            <button type="submit" class="btn">Submit</button>
          </form>
        </div>
      </div>
    </div>
    
  </div>
</div>
@ensection
