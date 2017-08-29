@extends('layouts.master')

@section('title','Testimonials')

@section('middle-content')

<!-- Inner Banner Wrapper Start -->
<div class="inner-banner">
  <div class="container">
    <h2>Testimonials</h2>
    <ul class="inner-breadcrumb">
      <li><a href="index.html">Home</a></li>
      <li>About</li>
      <li>Testimonials</li>
    </ul>
  </div>
</div>
<!-- Inner Banner Wrapper End --> 
<!-- Inner Wrapper Start -->
<div class="inner-wrapper testimonials-wrapper">
  <div class="container">
  <h2>This is what the country’s top experts are saying</h2>
    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="testimonials"> 
      
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item slides active">
          <div class="slide-1">
            <div class="row">
              <div class="col-sm-12">
                <div class="testimonials-content">
                  
                  <p class="bigtext">I am delighted to see the progress. Are we adding organic manure to the soil regularly? The greenhouse crop material is also very encouraging. </p>
                  <h3>Pitam Chandra</h3>
                  <h4>Professor (Food Engineering) <span>National Institute of Food Technology Entrepreneurship and Management (Deemed Univ.)</span></h4>
                </div>
                <hr/>
                <br/>
                    <div class="testimonials-content">
                  <p class="bigtext">Great efforts and remarkable success. Congratulations. </p>
                  <h3>S.D. Shikhamany, M.Sc.(Agri.), Ph.D., FNAAS; FHSI</h3>
                  <h4>Formerly Director, ICAR-NRC for Grapes, Pune<span>Project Advisor,
Administrative Staff College of India,
</span></h4>
                </div>
                  <hr/>
                  <br/>
                
                <div class="testimonials-content">
                  <p class="bigtext">Congratulations for your great efforts in growing the different crops in very challenging environment in terms of the sandy soil with less water availability conditions. Very good progress, as evident by the filed pictures. We are going to enjoy our visit to the site, due in next couple of the days with you, is going to be very enjoyable and thought provoking. 
</p>
                  <h3>Rakesh Arora</h3>
                  <h4>Senior Seed Scientist- Pioneer Dupont<span>Member- Governing Council LFPCL</span></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        
      </div>
      <!-- Indicators -->
      
    </div>
  </div>
</div>
<!-- Inner Wrapper End --> 
<!-- Satisfied Wrapper Start--><!-- #BeginLibraryItem "/Library/journey.lbi" --><div class="satisfied-wrapper">
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