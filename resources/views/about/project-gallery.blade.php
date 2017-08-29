<div class="inner-wrapper projects-gallery">
    <div class="container">
        <div class="row">
            <h2>Project Site Gallery</h2>
            <div class="banner-wrapper">
                <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="5000" id="bs-carousel"> 
                    <!-- Overlay -->
                    <div class="overlay"></div>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        @foreach($gallery_images as $image)
                        <div class="item slides {{$image->id==1?'active':''}}">
                            <div class="slide-3"><img src="images/{{$image->image_url}}" alt="lfpcl"/></div>

                        </div>
                        @endforeach
                    </div>
                    <div class="slide-arrows"><a class="left carousel-control" href="#bs-carousel" data-slide="prev"><span class="transition3s glyphicon glyphicon-chevron-left fa fa-angle-left"></span></a> <a class="right carousel-control" href="#bs-carousel" data-slide="next"><span class="transition3s glyphicon glyphicon-chevron-right fa fa-angle-right"></span></a></div>
                </div>
            </div>
        </div>
    </div>
</div>