@extends('website.layout.app1')

@section('content')
<!-- welcome -->
	<div class="welcome">
		<div class="container">	
			<div class="agileits-title">
				<h3>Selamat Datang</h3>
				<p>Website Balai Pemantapan Kawasan Hutan Wilayah III Pontianak</p>
			</div>
			<div class="welcome-agileinfo">
				<div class="col-md-4 col-xs-6 welcome-grid agileits-w3layouts">  
					<div class="col-xs-2 welcome-grid-left">
						<span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 welcome-grid-right">
						<h4>tiamet pharetra nunc </h4>
						<p>Itaque earum rerum hic tenetur a sapiente delectus maiores alias phasellus</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 col-xs-6 welcome-grid agileits-w3layouts">
					<div class="col-xs-2 welcome-grid-left">
						<span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 welcome-grid-right">
						<h4>Etiam pharetra</h4>
						<p>Sapiente delectus reiciendis maiores alias phasellus mattis tellus dictum </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 col-xs-6 welcome-grid agileits-w3layouts">
					<div class="col-xs-2 welcome-grid-left">
						<span class="glyphicon glyphicon-check" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 welcome-grid-right">
						<h4>pharetra erat</h4>
						<p>phasellus mattis tellus eget tellus dictum justo scelerisque eget sapiente </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 col-xs-6 welcome-grid welcome-grid-bottom">
					<div class="col-xs-2 welcome-grid-left">
						<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 welcome-grid-right">
						<h4>erat et nunc </h4>
						<p>Maiores alias phasellus mattis tellus eget tellus dictum justo interdum </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 col-xs-6 welcome-grid welcome-grid-bottom">
					<div class="col-xs-2 welcome-grid-left">
						<span class="glyphicon glyphicon-hourglass" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 welcome-grid-right">
						<h4>tiamet pharetra nunc </h4>
						<p>Itaque earum rerum hic tenetur a sapiente delectus maiores alias phasellus</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 col-xs-6 welcome-grid welcome-grid-bottom">
					<div class="col-xs-2 welcome-grid-left">
						<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 welcome-grid-right">
						<h4>Etiam pharetra</h4>
						<p>Sapiente delectus reiciendis maiores alias phasellus mattis tellus dictum </p>
					</div>
					<div class="clearfix"> </div>
				</div> 
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //welcome -->
	<!-- about-slid -->
	<div class="w3about-slid agileits-w3layouts"> 
		<div class="container">
			<div class="about-slid-info"> 
				<h4>Lorem ipsum dolor sit amet consectetur</h4>
				<p>Fusce eu semper lacus, eget placerat mauris. Sed lectus tellus, sodales id elit a, feugiat porttitor nulla. Sed porta magna vitae nisl vulputate lacinia. Morbi malesuada sollicitudin tortor, vitae pharetra nunc lacinia eget.</p>
			</div>
		</div>
	</div>
	<!-- //about-slid -->
	<div class="single">
		<div class="container">
	<div class="popular-posts">
				<h4 class="w3ls-title">Berita Terkini</h4>
				<div class="popular-posts-grids">
					@foreach($artikel as $data)
					<div class="col-md-3 col-sm-3 col-xs-6 popular-posts-grid">	
						<div class="popular-posts-grid1">
							<a href="single.html"><img src="../adminpage/img/{{$data->image}}" alt=" " class="img-responsive"></a>
							<h4><a href="/web/artikel">{{$data->title}}</a></h4>
							<p>{!! str_limit($data->content,100) !!}</p>
						</div>
					</div>
					@endforeach
					<div class="clearfix"> </div>
				</div>
			</div>
</div>
</div>
	<!-- news -->
	<div class="news-w3layouts">
		<div class="container">
			<div class="agileits-title">
				<h3>Link Terkait</h3>
			</div>
			<div class="news-agileinfo w3-agileits">	
				<div class="col-md-4 news-w3lgrids">
					<a href="http://geoportal.menlhk.go.id/arcgis/home/" title="Web GIS LHK"><img src="{{asset('webpage/gambar/webgis.dephut.go.id-2.png')}}" width="160" height="80"></a>
					
					<p></p>
				</div>
				<div class="col-md-4 news-w3lgrids">
					<a href="http://www.menlhk.go.id/" title="Kementerian LHK"><img src="{{asset('webpage/gambar/dephut.go.id-2.png')}}" width="160" height="80"></a>

					<p></p>
				</div>
				<div class="col-md-4 news-w3lgrids">
					<a href="http://ppid.menlhk.go.id/" title="PPID LHK"><img src="{{asset('webpage/gambar/ppid.dephut.go.id-2.png')}}" width="160" height="80"></a>

					<p></p>
				</div>				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //news -->
	<!-- subscribe -->
	<!-- <div class="subscribe wthree-sub">  
		<div class="container"> 
			
		</div>
	</div> -->
	<!-- //subscribe -->
@endsection
