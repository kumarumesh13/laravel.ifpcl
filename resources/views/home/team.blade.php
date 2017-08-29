  <div class="container">
    <h2>Meet<span>Our Team</span></h2>
    <div class="row">
      @foreach($team_members as $team_member)
      <div class="col-md-4">
        <div class="thumbnail">
          <div class="news-img"><a class="hover-img" href="ml-mantoo.html"> <img alt="{{$team_member->courtesy_title." ".$team_member->name}}" src="images/{{$team_member->profile_pic_url}}">
            <div class="hover-link">
              <div class="link">
                <div class="link"> <i class="fa fa-link" aria-hidden="true"></i></div>
              </div>
            </div>
            </a>
            
          </div>
          <div class="caption">
            <h3><a href="ml-mantoo.html">{{$team_member->name}}</a></h3>
           
            <p>{{strip_tags(substr($team_member->profile_description,0,100))}}...
            <a href="ml-mantoo.html" class="readmore">Read more <i class="fa fa-angle-right" aria-hidden="true"></i></a> </p></div>
        </div>
      </div>
      @endforeach
      </div>
    </div>
  </div>
