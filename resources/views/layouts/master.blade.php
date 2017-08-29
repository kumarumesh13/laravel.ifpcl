<!DOCTYPE html>
<html lang="en">
<head>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-103847324-1', 'auto');
  ga('send', 'pageview');

</script>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>@yield('title')</title>
<meta name="keywords" content="LFPCL, Ladakh Farmers & Producers Cooperative Ltd, leh project, ladakh production, rambirpura project, leh food">

<!-- Bootstrap -->
<link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<!-- Font Awesome CSS-->
<link href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
<!-- Linear icons CSS-->
<link href="{{asset('assets/linear-icons/css/icon-font.min.css')}}" rel="stylesheet">
<!-- Owl Carousel -->
<link href="{{asset('assets/owl-carousel/css/owl.carousel.css')}}" rel="stylesheet">
<link href="{{asset('assets/owl-carousel/css/owl.theme.css')}}" rel="stylesheet">
<!-- Portfolio CSS -->
<link href="{{asset('assets/css/ionicons.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/magnific-popup.css')}}" rel="stylesheet">
<!-- Custom CSS -->
<link href="{{asset('css/style.css')}}" rel="stylesheet">
<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.png')}}">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Header Start --><!-- #BeginLibraryItem "/Library/header.lbi" -->
    @include('layouts.partials.header')
<!-- #EndLibraryItem --><!-- Header End --> 

<!-- Banner Wrapper Start -->
    @yield('middle-content')


<!-- News Section End --> <!-- #EndLibraryItem --><p><!-- Footer Wrapper start --></p><!-- #BeginLibraryItem "/Library/footer.lbi" -->

    @include('layouts.partials.footer')

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="{{asset('assets/jquery/jquery-3.1.1.min.js')}}"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script> 
<script src="{{asset('assets/jquery/jquery.animateNumber.min.js')}}"></script> 
<script src="{{asset('assets/owl-carousel/js/owl.carousel.js')}}"></script> 
<script src="{{asset('assets/isotope/jquery.isotope.js')}}"></script> 
<script src="{{asset('assets/jquery/imagesloaded.pkgd.min.js')}}"></script> 
<script src="{{asset('assets/jquery/jquery.magnific-popup.min.js')}}"></script> 
<script src="{{asset('assets/jquery/plugins.js')}}"></script> 
<script src="{{asset('js/custom.js')}}"></script>
</body>
</html>