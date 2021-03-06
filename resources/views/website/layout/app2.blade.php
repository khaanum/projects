<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>BPKH Wilayah III Pontianak</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Focus Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="{{asset('webpage/css/bootstrap.css')}}" type="text/css" rel="stylesheet" media="all">
<link href="{{asset('webpage/css/style.css')}}" type="text/css" rel="stylesheet" media="all">  
<link href="{{asset('webpage/css/font-awesome.css')}}" rel="stylesheet">  <!-- font-awesome icons --> 
<link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed|Noto+Sans" rel="stylesheet">
<!-- //Custom Theme files --> 
<!-- js -->
<script src="{{asset('webpage/js/jquery-2.2.3.min.js')}}"></script>  
<!-- //js -->
<!-- web-fonts -->  
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet"> 
<link href="//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700" rel="stylesheet">
<!-- //web-fonts -->
</head>
<body>  
	<!-- banner -->
	<div class="banner-w3layouts about-banner">  
		<div class="banner-img1"> 
		</div> 
		<!-- banner-info -->
		<div class="banner-agileinfo">
			<div class="container">		
				@include('website.layout.partial.header')  
				<!-- //header -->
				<div class="banner-w3text">  
				<h2 style="font-family: 'Barlow Semi Condensed', sans-serif;">@yield('page-title')</h2>
				</div>
			</div>
			<!-- //banner-info --> 
		</div>
	</div>
	<!-- //banner -->
	@yield('content')

	@include('website.layout.partial.footer')

	<script src="{{asset('webpage/js/SmoothScroll.min.js')}}"></script> 
	<!-- Progressive-Effects-Animation-JavaScript -->  
	<script type="text/javascript" src="{{asset('webpage/js/numscroller-1.0.js')}}"></script>
	<!-- //Progressive-Effects-Animation-JavaScript -->  
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="{{asset('webpage/js/move-top.js')}}"></script>
	<script type="text/javascript" src="{{asset('webpage/js/easing.js')}}"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up --> 
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('webpage/js/bootstrap.js')}}"></script>
</body>
</html>