<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>BPKH - III Pontianak</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://bootstraptaste.com" />
<!-- css -->
<link href="{{asset('webpage/css/bootstrap.min.css')}}" rel="stylesheet" />
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
<script src="https://maps.google.com/maps/api/js?sensor=true"></script>
<script src="{{asset('webpage/js/animate.js')}}"></script>
<script src="{{asset('webpage/js/custom.js')}}"></script>
<script>
jQuery(document).ready(function($) {
    //Google Map
    var get_latitude = $('#google-map').data('latitude');
    var get_longitude = $('#google-map').data('longitude');

    function initialize_google_map() {
        var myLatlng = new google.maps.LatLng(get_latitude, get_longitude);
        var mapOptions = {
            zoom: 14,
            scrollwheel: false,
            center: myLatlng
        };
        var map = new google.maps.Map(document.getElementById('google-map'), mapOptions);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize_google_map);
});
</script>
<script src="{{asset('webpage/contactform/contactform.js')}}"></script>

</body>
</html>