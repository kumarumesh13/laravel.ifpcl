@extends('layouts.master')

@section('title','Challenges')

@section('middle-content')
<!-- Inner Banner Wrapper Start -->
<div class="inner-banner">
    <div class="container">
        <h2>Challenges/ Threats</h2>
        <ul class="inner-breadcrumb ">
            <li><a href="index.html">Home</a></li>
            <li>Challenges/Threats</li>
        </ul>
    </div>
</div>
<!-- Inner Banner Wrapper End --> 
<!-- Inner Wrapper Start -->
<div class="inner-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8">
                <h2>About<span>Challenges / Threats</span></h2>
                <p>We are still facing many challenges and threats during this project. </p>
                <ul class="padding15">
                    <li>Very limited growing  period for crops. </li>
                    <li>Dust storms in the  early growing periods of April &amp; May accompanied by steep drop in the night  temperatures is very harmful for the young &amp; germinating plants in the open  field conditions. </li>
                    <li>Acute scarcity of  trained local manpower. </li>
                    <li>Banks &amp; financial  institutions reluctant to lend money. </li>
                    <li>Since all the required materials are  brought in from or through Kashmir and Manali, there is a problem in getting  the right material at the right time.</li>
                    <li>The prices are generally 2,3,4 or even  10 times for some products.</li>
                </ul>
                @foreach($challenges as $challenge)
                <p><img src="images/{{$challenge->image_url}}" width="1185" height="885" alt=""/></p>
                <p align="center"><strong>{{$challenge->title}}</strong></p>
                @endforeach
<!--                <p align="center"><img src="images/chal-2.jpg" width="1224" height="915" alt=""/></p>
                <p align="center">&nbsp;</p>
                <p align="center"><img src="images/chal-3.jpg" width="1287" height="756" alt=""/></p>
                <p align="center"><strong>Dust storm damaged &amp; buried the emerging plants under several cms  of sand</strong></p>
                <p align="center"><img src="images/chal-4.jpg" width="1289" height="721" alt=""/><br>
                </p>
                <p><img src="images/chal-5.jpg" width="1430" height="953" alt=""/></p>
                <p align="center"><strong>Sand being washed after the dust storm</strong></p>
                <p><img src="images/chal-6.jpg" width="1164" height="776" alt=""/></p>
                <p align="center"><strong>Truck Tanker being pulled out from soft sand near the 2nd  borewell</strong></p>
                <p><img src="images/chal-7.jpg" width="1430" height="953" alt=""/></p>
                <p><img src="images/chal-8.jpg" width="1291" height="1728" alt=""/></p>
                <p align="center"><strong>Ladakh remains cut-off from the country for  about 7 months.</strong><br>
                    <strong>The above road at Zojila pass ( Srinagar –  Leh ) opens only after 1st week of May every year.</strong></p>
                <p><img src="images/chal-9.jpg" width="1286" height="857" alt=""/></p>
                <p align="center"><strong>Shortage of FYM forced us to try the  accelerated decomposition of fresh cattle dung by using Jaggery, Yeast, some  inorganic N &amp; P fertilizer and plenty of water then covered the heaps with  polythene sheets. Fully decomposed FYM was ready in &lt; 5 weeks which would  have taken &gt; 6 months</strong></p>
                <p><img src="images/chal-10.jpg" width="1132" height="754" alt=""/><br>
                </p>
                <p align="center"><img src="images/chal-11.jpg" width="651" height="527" alt=""/></p>
                <p align="center"><strong>Snowfall on April 9th,  2017 at the project site</strong></p>
                <p align="center"><img src="images/chal-12.jpg" width="651" height="527" alt=""/></p>-->
            </div>
            <div class="col-sm-4 hidden-xs hidden-sm"> <img src="images/chal.jpg" alt="Ladakh Farmers & Producers Cooperative Ltd" width="333" height="421" class="tool"/> </div>
        </div>
    </div>


</div>


<div class="inner-wrapper faq">
    <div class="container">
        <div class="panel-group collaps" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse0" aria-expanded="true" class=""> Governance , Transparency & Financial Integrity</a> </h4>
                </div>
                <div id="collapse0" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" aria-expanded="true">
                    <div class="panel-body">
                        <ul class="padding15">
                            <li>Performance, Dedication, and keeping  the interest of the project and its success in mind at all the times, are the  key criteria for the people working on the project.</li>
                            <li>While encouraging the freedom of  operation and rapid decisions at all levels, the financial integrity in any  action, purchase etc., is non-negotiable and of paramount importance.</li>
                            <li>Independent financial audits at the  two levels- Project Management and also at LAHDC level have been made  mandatory.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="false">Innovations & Technologies</a> </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
                    <div class="panel-body">
                        <ul class="padding15">
                            <li> Made in Ladakh – Traveller Irrigation</li>
                            <li>  Made in Ladakh – Seed cum Fertilizer Drill</li>
                            <li>     Made in Ladakh -  Hydroseeding Equipment</li>
                            <li>UnevenContours / Soil Surfaces – No Land leveling – Cost saving</li>
                            <li> 6 Kms. + Boundary – Peripheral Barbed Wire/ Chain link fencing costing >Rs.80 lakhs replaced with deep trenches costing less ths Rs. 5 Lakhs.</li>
                            <li>Zero organic matter in soils & no availability of FYM. Developed in-house mechanism for accelerated decomposition of fresh cow & animal dung – 12 months reduced to 1 month</li>
                            <li> Successfully demonstrated the Hydroseeding technology for fodder cultivation for Pashmina goats, sheep, cattle, horses & yaks in remote areas of Ladakh.</li>
                            <li> Double cropping in Leh region to increase farmers income.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false">Collaboration, Alliances & Partnerships</a></h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false" style="height: 0px;">
                    <div class="panel-body"> <ul class="padding15">
                            <li>Ladakh Autonomous Hill Development Council - LAHDC</li>
                            <li>Indian Agriculture Research Institute ( IARI ) – New varieties – Foundation & Certified seeds.</li>
                            <li>Niftem ( Institution under the Ministry of Food Processing technologies – Govt. of India</li>
                            <li>Jain Irrigation Group – Multi Product Multi National – Irrigation systems, Processing, & Marketing, Solar systems, Tissue culture etc.</li>
                            <li>Niruthi India – NASA affiliate – Monitoring of crop health, yield and local weather in real time </li>

                            <li>CAZRI - Central Arid Zone Research Institute</li>
                            <li>    NDRI - National Dairy Research Institute</li>
                            <li>    IFFCO - Indian Farmers Fertiliser Cooperative</li>
                            <li>    The South Asia Biotechnology Centre (SABC).</li>
                        </ul>
                        <p>Some finalized, others in the pipeline.</p>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div><!-- #BeginLibraryItem "/Library/journey.lbi" --><div class="satisfied-wrapper">
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