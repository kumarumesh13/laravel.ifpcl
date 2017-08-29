  <div class="container">
    <h2>Project Glimpse <span>Our Plans</span></h2>
    <p>The MOU signed with LAHDC is for about 1000 hectares of wasteland to be developed by us. The pilot project for the initial 2 years was started in 2016. About 25 hectares have been brought under crop cultivation first time in thousands of years. The crops grown in 2017 are: Canola type Mustard –Breeder & certified seed ( PM 30), Hybrid Maize, Hybrid Arhar, Hybrid Wheat, Sunflower, a few fodder crops, Rajma, Peas, Lobia ( Kidney beans ) several types of local & outside vegetables and flowers, a few grafted nursery seedlings of Chinar, Walnut and Apple fruits.<a href="project.html"> 
    <button class="btn btn-hero animated3">Read More</button></a></p>
    
    <div id="services" class="owl-carousel owl-theme">
     @foreach($project_glimpse as $project) 
      <div class="item">
        <div class="services"><i class="{{$project->icon}}" aria-hidden="true"></i>
          <h3>{{$project->title}}</h3>
          <p>{{$project->descriptions}}</p>
          <a href="land-development.html">Read More</a> </div>
      </div>
     @endforeach
    </div>
  </div>
