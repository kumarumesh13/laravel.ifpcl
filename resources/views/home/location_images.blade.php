
<div class="container">
    <h2>Our Future Projects <span>Location Gallery</span></h2>
    <div class="row">
      <div class="col-sm-12">
        <ul class="portfolio-filter">
            <li class="filter" data-filter="*">All</li>
            @foreach($project_location as $location)
              <li class="filter" data-filter=".{{$location->location_name}}">{{$location->location_name}}</li>
            @endforeach
        </ul>
        <!-- /Portfolio Filters --> 
        <!-- Portfolio Wrap -->
        <div class="row portfolio-container"> 
          <!-- single portfolio -->
          @foreach($location_images as $location_image)
          <div class="col-md-3 col-sm-6 col-xs-12 work "> 
              <a href="#work_id-3"> 
                  <img src="images/{{$location_image->image_url}}" alt="LFPCL">
            <div class="work-inner">
              <div class="work-info"> <i class="fa fa-search"></i> </div>
            </div>
            </a>
            <div id="work_id-3" class="mfp-hide work-popup"> <img src="images/{{$location_image->image_url}}" alt="LFPCL"> </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
     <div class="row">
      <div class="col-sm-12">
      <a href="rambirpura.html"><button type="button" class="btn btn-shadow">Click Here for Current Location</button></a>
      </div>
      </div>
  </div>
