@extends('layouts.master')

@section('title','Ladakh Farmers & Producers Cooperative Ltd | Gallery')

@section('middle-content')

<!-- Inner Banner Wrapper Start -->
<div class="inner-banner">
    <div class="container">
        <h2>Gallery</h2>
        <ul class="inner-breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li>Gallery</li>
        </ul>
    </div>
</div>
<section class='projects-gallery'>
    @include('about.project-gallery')
</section>
<!--<div class="inner-wrapper projects-gallery">
    <div class="container">
        <div class="banner-wrapper">
            <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="5000" id="bs-carousel"> 
                 Overlay 
                <div class="overlay"></div>
                 Wrapper for slides 
                <h3>Our Project Gallery!</h3>
                <div class="carousel-inner">
                    <div class="item slides active">
                        <div class="slide-4"><img src="images/gallery-main-1.jpg" alt="lfpcl"/></div>
                    </div>
                    <div class="item slides ">
                        <div class="slide-4"><img src="images/gallery-new-aug-1.jpg" alt="lfpcl"/></div>
                    </div>
                    <div class="item slides ">
                        <div class="slide-4"><img src="images/gallery-new-aug-2.jpg" alt="lfpcl"/></div>
                    </div>
                    <div class="item slides ">
                        <div class="slide-4"><img src="images/gallery-new-aug-3.jpg" alt="lfpcl"/></div>
                    </div>
                    <div class="item slides ">
                        <div class="slide-4"><img src="images/gallery-new-aug-4.jpg" alt="lfpcl"/></div>
                    </div>
                    <div class="item slides ">
                        <div class="slide-4"><img src="images/gallery-new-aug-5.jpg" alt="lfpcl"/></div>
                    </div>
                    <div class="item slides ">
                        <div class="slide-4"><img src="images/gallery-new-aug-6.jpg" alt="lfpcl"/></div>
                    </div>
                    <div class="item slides ">
                        <div class="slide-4"><img src="images/gallery-new-aug-7.jpg" alt="lfpcl"/></div>
                    </div>
                    <div class="item slides ">
                        <div class="slide-4"><img src="images/gallery-new-aug-8.jpg" alt="lfpcl"/></div>
                    </div>
                    <div class="item slides ">
                        <div class="slide-4"><img src="images/gallery-new-aug-9.jpg" alt="lfpcl"/></div>
                    </div>
                    <div class="item slides ">
                        <div class="slide-4"><img src="images/gallery-new-aug-10.jpg" alt="lfpcl"/></div>
                    </div>
                    <div class="item slides ">
                        <div class="slide-4"><img src="images/gallery-new-aug-11.jpg" alt="lfpcl"/></div>
                    </div>
                    <div class="item slides ">
                        <div class="slide-4"><img src="images/gallery-new-aug-12.jpg" alt="lfpcl"/></div>
                    </div>
                    <div class="item slides ">
                        <div class="slide-4"><img src="images/gallery-new-aug-13.jpg" alt="lfpcl"/></div>
                    </div>
                    <div class="item slides ">
                        <div class="slide-4"><img src="images/gallery-new-aug-14.jpg" alt="lfpcl"/></div>
                    </div>
                    <div class="item slides ">
                        <div class="slide-4"><img src="images/gallery-new-aug-15.jpg" alt="lfpcl"/></div>
                    </div>






                    <div class="item slides ">
                        <div class="slide-4"><img src="images/gallery-main-2.jpg" alt="lfpcl"/></div>
                    </div>
                    <div class="item slides ">
                        <div class="slide-4"><img src="images/gallery-main-3.jpg" alt="lfpcl"/></div>
                    </div>
                    <div class="item slides ">
                        <div class="slide-4"><img src="images/gallery-main-4.jpg" alt="lfpcl"/></div>
                    </div>
                    <div class="item slides ">
                        <div class="slide-4"><img src="images/gallery-main-5.jpg" alt="lfpcl"/></div>
                    </div>
                    <div class="item slides ">
                        <div class="slide-4"><img src="images/gallery-main-6.jpg" alt="lfpcl"/></div>
                    </div>
                    <div class="item slides ">
                        <div class="slide-4"><img src="images/gallery-main-7.jpg" alt="lfpcl"/></div>
                    </div>
                    <div class="item slides ">
                        <div class="slide-4"><img src="images/gallery-main-8.jpg" alt="lfpcl"/></div>
                    </div>
                    <div class="item slides ">
                        <div class="slide-4"><img src="images/gallery-main-9.jpg" alt="lfpcl"/></div>
                    </div>
                    <div class="item slides ">
                        <div class="slide-4"><img src="images/gallery-main-10.jpg" alt="lfpcl"/></div>
                    </div>
                    <div class="item slides ">
                        <div class="slide-4"><img src="images/gallery-main-11.jpg" alt="lfpcl"/></div>
                    </div>
                    <div class="item slides ">
                        <div class="slide-4"><img src="images/gallery-main-12.jpg" alt="lfpcl"/></div>
                    </div>
                    <div class="item slides ">
                        <div class="slide-4"><img src="images/gallery-main-13.jpg" alt="lfpcl"/></div>
                    </div>
                    <div class="item slides ">
                        <div class="slide-4"><img src="images/gallery-main-14.jpg" alt="lfpcl"/></div>
                    </div>
                    <div class="item slides ">
                        <div class="slide-4"><img src="images/gallery-main-15.jpg" alt="lfpcl"/></div>
                    </div>
                    <div class="item slides ">
                        <div class="slide-4"><img src="images/gallery-main-16.jpg" alt="lfpcl"/></div>
                    </div>
                    <div class="item slides ">
                        <div class="slide-4"><img src="images/gallery-main-17.jpg" alt="lfpcl"/></div>
                    </div>   
                    <div class="item slides ">
                        <div class="slide-4"><img src="images/gallery-main-18.jpg" alt="lfpcl"/></div>
                    </div>

                    <div class="item slides ">
                        <div class="slide-4"><img src="images/gallery-main-19.jpg" alt="lfpcl"/></div>
                    </div>
                    <div class="item slides ">
                        <div class="slide-4"><img src="images/gallery-main-20.jpg" alt="lfpcl"/></div>
                    </div>
                    <div class="item slides ">
                        <div class="slide-4"><img src="images/gallery-main-21.jpg" alt="lfpcl"/></div>
                    </div>
                    <div class="item slides ">
                        <div class="slide-4"><img src="images/gallery-main-22.jpg" alt="lfpcl"/></div>
                    </div>

                    <div class="item slides ">
                        <div class="slide-4"><img src="images/gallery-main-23.jpg" alt="lfpcl"/></div>
                    </div>

                </div>
                <div class="slide-arrows"><a class="left carousel-control" href="#bs-carousel" data-slide="prev"><span class="transition3s glyphicon glyphicon-chevron-left fa fa-angle-left"></span></a> <a class="right carousel-control" href="#bs-carousel" data-slide="next"><span class="transition3s glyphicon glyphicon-chevron-right fa fa-angle-right"></span></a></div>
            </div>
        </div>
    </div>
</div>-->
<!-- Inner Wrapper Start -->

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
<!-- #EndLibraryItem --><!-- #BeginLibraryItem "/Library/News.lbi" --><!-- News Section Start -->
<section class="news">
    @include('home.news')
</section>


@endsection