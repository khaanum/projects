<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>BPKH Wilayah III Pontianak</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://bootstraptaste.com" />
<!-- css -->
<link href="{{ asset ('webpage/css/bootstrap.min.css')}}" rel="stylesheet" />
<link href="{{asset('webpage/css/fancybox/jquery.fancybox.css')}}" rel="stylesheet">
<link href="{{asset('webpage/css/jcarousel.css')}}" rel="stylesheet" />
<link href="{{asset('webpage/css/flexslider.css')}}" rel="stylesheet" />
<link href="{{asset('webpage/css/style.css')}}" rel="stylesheet" />

<!-- Theme skin -->
<link href="{{asset('webpage/skins/default.css')}}" rel="stylesheet" />

<!-- =======================================================
    Theme Name: Moderna
    Theme URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
======================================================= -->

</head>
<body>
<div id="wrapper">
	<!-- start header -->
	@include('website.layout.partial.header')
	<!-- end header -->
	<section id="featured">
	<!-- start slider -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
	<!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
                <img src="{{asset('webpage/img/slides/1.jpg')}}" alt="" />
                <div class="flex-caption">
                    <h3>Modern Design</h3> 
					<p>Duis fermentum auctor ligula ac malesuada. Mauris et metus odio, in pulvinar urna</p> 
                </div>
              </li>
              <li>
                <img src="{{asset('webpage/img/slides/2.jpg')}}" alt="" />
                <div class="flex-caption">
                    <h3>Fully Responsive</h3> 
					<p>Sodales neque vitae justo sollicitudin aliquet sit amet diam curabitur sed fermentum.</p> 
                </div>
              </li>
              <li>
                <img src="{{asset('webpage/img/slides/3.jpg')}}" alt="" />
                <div class="flex-caption">
                    <h3>Clean & Fast</h3> 
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit donec mer lacinia.</p> 
                </div>
              </li>
            </ul>
        </div>
	<!-- end slider -->
			</div>
		</div>
	</div>	
	</section>



	<section class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="big-cta">
					<div class="cta-text">
						<h2><span>BPKH</span> Wilayah III Pontianak</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>


	@yield('content')

	@include('website.layout.partial.footer')
	
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{asset('webpage/js/jquery.js')}}"></script>
<script src="{{asset('webpage/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('webpage/js/bootstrap.min.js')}}"></script>
<script src="{{asset('webpage/js/jquery.fancybox.pack.js')}}"></script>
<script src="{{asset('webpage/js/jquery.fancybox-media.js')}}"></script>
<script src="{{asset('webpage/js/google-code-prettify/prettify.js')}}"></script>
<script src="{{asset('webpage/js/portfolio/jquery.quicksand.js')}}"></script>
<script src="{{asset('webpage/js/portfolio/setting.js')}}"></script>
<script src="{{asset('webpage/js/jquery.flexslider.js')}}"></script>
<script src="{{asset('webpage/js/animate.js')}}"></script>
<script src="{{asset('webpage/js/custom.js')}}"></script>

</body>
</html>