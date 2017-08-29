@extends('layouts.master')

@section('title','Ladakh Farmers & Producers Cooperative Ltd | Locations')

@section('middle-content')

<!-- Inner Banner Wrapper Start -->
<div class="inner-banner">
  <div class="container">
    <h2>Project Locations</h2>
    <ul class="inner-breadcrumb">
      <li><a href="index.html">Home</a></li>
      <li>About</li>
      <li>Locations</li>
    </ul>
  </div>
</div>
<!-- Inner Banner Wrapper End --> 
<!-- Inner Wrapper Start -->
<div class="inner-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-8">
        <h2>Project <span>Locations</span></h2>
        <p>Coming Soon...</p>
        <p>Project Locations:</p>
        <ul class="padding15">
        @foreach($project_location as $location)
          <li><a href="#">{{$location->location_name}}</a></li>
<!--          <li><a href="changthang.html">Changthang</a></li>
          <li> <a href="nubra.html">Nubra</a></li>
          <li><a href="khaltsi-and-saspol.html">Khaltsi &amp; Saspol</a></li>
          <li><a href="nyoma.html">Nyoma</a></li>
          <li><a href="durbuk.html">Durbuk</a></li>-->
        @endforeach
        </ul>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
      </div>
      <div class="col-sm-4 hidden-xs hidden-sm"> <img src="images/Locations.jpg" alt="Grow Landscape" class="tool"/> </div>
    </div>
  </div>
<!-- Our Projects Start --><!-- #BeginLibraryItem "/Library/Locations.lbi" -->
<section class="our-projects">
    @include('home.location_images')
</section>
<!-- #EndLibraryItem --><!-- Our Projects End --> 

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
<!-- #BeginLibraryItem "/Library/News.lbi" --><!-- News Section Start -->
<section class="news">
    @include('home.news')
</section>

@endsection