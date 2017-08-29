@extends('layouts.master')

@section('title','Ladakh Farmers & Producers Cooperative Ltd | Core Team')

@section('middle-content')
<!-- Inner Banner Wrapper Start -->
<div class="inner-banner">
  <div class="container">
    <h2>Implementation Team</h2>
    <ul class="inner-breadcrumb">
      <li><a href="index.html">Home</a></li>
  <li>Project Management</li>
      <li>Core Team</li>
    </ul>
  </div>
</div>
<!-- Inner Banner Wrapper End --> 
<!-- Inner Wrapper Start -->
<section class="news">
  @include('home.team')
</section>
<!-- Inner Wrapper End --> 


<!-- Satisfied Wrapper Start--><!-- #BeginLibraryItem "/Library/journey.lbi" -->
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
</div><!-- #EndLibraryItem --><!-- Satisfied Wrapper End--> 

@endsection