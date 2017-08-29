@extends('layouts.master')

@section('title','Welcome to Ladakh Farmers & Producers Cooperative Ltd')

@section('middle-content')

<div class="banner-wrapper">
  <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="5000" id="bs-carousel"> 
    <!-- Overlay -->
    <div class="overlay"></div>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
    <div class="item slides active">
        <div class="slide-1"><img src="{{asset('images/1920-3.jpg')}}" alt="lfpcl"/></div>
        <div class="hero">
          <h1>We Get<span>Food by Aircraft</span></h1>
          <h2>Want to produce our own food at Ladakh.</h2>
      
     <!--     <button class="btn btn-hero animated3">Call Us</button>-->
         <a href="aircraft.html"> <button class="btn btn-hero animated3">Read More</button></a>
        </div>
      </div>
      <div class="item slides ">
        <div class="slide-1"><img src="{{asset('images/1920-1.jpg')}}" alt="lfpcl"/></div>
        <div class="hero">
          <h1>Leh, Ladakh <span>The Cold Desert</span></h1>
           <h2>Transforming Ladakh into a Food & Seeds Producer.</h2>
     
       <!--   <a href="project.html"><button class="btn btn-hero animated3">Contact</button></a>-->
          <a href="cold-desert.html"><button class="btn btn-hero animated3">Read More</button></a>
        </div>
      </div>
      <div class="item slides">
        <div class="slide-3"><img src="{{asset('images/1920-2.jpg')}}" alt="lfpcl"/></div>
        <div class="hero">
          <h1>Food Import by Trucks<span>We'll Export Food from Leh</span></h1>
          <h2>Will make Ladakh self sufficient in Food.</h2>

          <!--<button class="btn btn-hero animated3">Call Us</button>-->
         <a href="trucks.html"> <button class="btn btn-hero animated3">Read More</button></a>
        </div>
      </div>
      
      
      <div class="item slides">
        <div class="slide-3"><img src="{{asset('images/1920-4.jpg')}}" alt="Ladakh"/></div>
        <div class="hero">
          <h1>Ladakh by default is an <span>Original Organic Place </span></h1>
          <h2>we respect and Follow it. </h2>

          <!--<button class="btn btn-hero animated3">Call Us</button>-->
         <a href="ladakh.html"> <button class="btn btn-hero animated3">Read More</button></a>
        </div>
      </div>
      
    </div>
    <div class="slide-arrows"><a class="left carousel-control" href="#bs-carousel" data-slide="prev"><span class="transition3s glyphicon glyphicon-chevron-left fa fa-angle-left"></span></a> <a class="right carousel-control" href="#bs-carousel" data-slide="next"><span class="transition3s glyphicon glyphicon-chevron-right fa fa-angle-right"></span></a></div>
  </div>
</div>
<!-- Our services Start -->
<!-- #BeginLibraryItem "/Library/projectglimps.lbi" -->
<section class="our-services" >
    @include('home.project_glimpse')
</section>
<!-- #EndLibraryItem -->
<!-- Our services End -->

<!-- Why Choose Start -->
<section class="why-choose">
    @include('home.whychoose')
</section>  
<!-- Why Choose End -->
<!-- Testimonials Start -->
    @include('home.press_media')
<!-- Testimonials End --> 
<!-- Our Projects Start --><!-- #BeginLibraryItem "/Library/Locations.lbi" -->
<section class="our-projects">
    @include('home.location_images')
</section>
<!-- #EndLibraryItem --><!-- Our Projects End --> 


<!-- News Section Start --><!-- #BeginLibraryItem "/Library/staff.lbi" -->
<section class="news">
    @include('home.team')
</section>
<!-- #EndLibraryItem --><!-- News Section End --> 
<!-- Why Choose End --><!-- #BeginLibraryItem "/Library/journey.lbi" -->
<div class="satisfied-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-5">
        <h2>Our <span>Journey</span></h2>
      </div>
      <div class="col-sm-12 col-md-7">
        <div class="row">
          <div class="col-sm-4">
            <a href="project-2015.html"><div class="counter"><p><img src="images/timeline.png"  alt="2015"/></p>
              <p></p>
              <div class="number"> <span>2015</span></div>
              
            </div>
            </a>
          </div>
        <div class="col-sm-4">
         <a href="project-2016.html">
            <div class="counter"><p><img src="images/timeline.png"  alt="2016"/></p>
              <p></p>
              <div class="number"> <span>2016</span></div>
              
            </div>
            </a>
          </div>
          <div class="col-sm-4">
           <a href="project-2017.html">
            <div class="counter"><p><img src="images/timeline.png"  alt="2017"/></p>
              <p></p>
              <div class="number"> <span>2017</span></div>
              
            </div>
            </a>
          </div>
        
        </div>
      </div>
    </div>
  </div>
</div>
<!-- #EndLibraryItem --><!-- #BeginLibraryItem "/Library/News.lbi" --><!-- News Section Start -->
<section class="news">
    @include('home.news')
</section>

@endsection
