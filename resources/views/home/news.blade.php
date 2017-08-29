  <div class="container">
    <h2>Our<span> Latest News</span></h2>
    <div class="row">
        @foreach($latest_news as $bulletin)
    <div class="col-md-4">
        <div class="thumbnail">
          <div class="news-img"><a class="hover-img" href="news.html"> <img alt="LFPCL" src="images/{{$bulletin->news_image}}">
            <div class="hover-link">
              <div class="link"> <i class="fa fa-link" aria-hidden="true"></i> </div>
            </div>
            </a>
            <ul class="date">
              <li>{{date('M d,Y',strtotime($bulletin->publish_at))}}</li>
            </ul>
          </div>
          <div class="caption">
            <h3><a href="news.html">{{$bulletin->news_title}}</a></h3>
           <!-- <ul class="details">
              <li><i class="fa fa-share-alt" aria-hidden="true"></i> 31 Shares</li>
              <li><i class="fa fa-heart" aria-hidden="true"></i> 52 Likes</li>
              <li><i class="fa fa-comment" aria-hidden="true"></i> 20 Comments</li>
            </ul>
            <p class="posted">Posted by <span>Marek</span></p>-->
            <p>{{$bulletin->descriptions}}</p>
            <a href="news.html" class="readmore">Read more <i class="fa fa-angle-right" aria-hidden="true"></i></a> </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
