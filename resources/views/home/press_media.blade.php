<section class="testimonials-wrapper">
  <div class="container">
    <h2>Press &amp; Media <span>Interviews</span></h2>
    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="testimonials"> 
      
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        @foreach($pressmedia as $press)  
        <div class="item slides {{$press->status==1?'active':''}}">
          <div class="slide-{{$press->id}}}">
            <div class="row">
              <div class="col-sm-4">
                <div class="img-border">
                    <div class="tes-img"><a href="{{$press->youtube_link}}" target="_blank">
                            <img src="images/{{$press->images}}" alt="lfpcl"></a></div>
                </div>
              </div>
              <div class="col-sm-8">
                <div class="testimonials-content">
                  <p>{{$press->descriptions}}</p>
                <br/>
                  <br/>
                  <br/>
                   <br/>
                  <h3>{{$press->printmedia_name}}</h3>
                  <h4>{{$press->live_date}}</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach  
      </div>
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#testimonials" data-slide-to="0" class="active"></li>
        <li data-target="#testimonials" data-slide-to="1"></li>
        <li data-target="#testimonials" data-slide-to="2"></li>
      </ol>
    </div>
  </div>
</section>