@extends('website.layout.app')

@section('content')
<!-- welcome -->
	<div class="welcome">
		<div class="container">
			<div class="agileits-title">
				<h3>Selamat Datang Di Website</h3>
				<h3>BPKH Wilayah III Pontianak</h3>
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
	<!-- skills -->
	<div class="skills w3-agileits">
		<div class="container">
			<div class="skills-agileinfo">
				<div class="col-md-6 skills-w3left">
					<h4><b>Sekilas Tentang Kalimantan Barat</b></h4>
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Kal-Bar</a></li>
							<li role="presentation"><a href="#carl" role="tab" id="carl-tab" data-toggle="tab" aria-controls="carl">Geografis</a></li>
							<li role="presentation"><a href="#james" role="tab" id="james-tab" data-toggle="tab" aria-controls="james">Wilayah</a></li>
						</ul>
						<div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
								<div class="tabcontent-grids">
									<p>Kalimantan Barat (KalBar), salah satu provinsi di Indonesia yang terletak dipulau Kalimantan, merupakan provinsi terluas ke empat setelah Papua, Kalimantan Timur dan Kalimantan Tengah dengan luas wilayah 146.807 km2 atau 7.53% luas Indonesia.</p>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="carl" aria-labelledby="carl-tab">
								<div class="tabcontent-grids">
									
									<p>Kalimantan Barat terletak tepat di garis Khatulistiwa dengan titik koordinat pada .................... Tidak salah jika tugu nol derajat dibangun di tanah Kalimantan Barat, karena letaknya memang melewati tugu. </p>
								
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="james" aria-labelledby="james-tab">
								<div class="tabcontent-grids">
									<p>Wilayah Administratif Kalimantan Barat terdiri dari 2 kota dan 12 kabupaten, terbagi dalam 136 kecamatan dan 1445 kelurahan/desa. </p>

								</div>
							</div>
						</div>
					</div>
				</div>
				<h4><b>Kawasan Hutan</b></h4>
				<div class="col-md-6 skills-w3right bar_group">
					<p>Kawasan Hutan adalah wilayah tertenu yang ditunjuk atau ditetapkan oleh Pemerintah untuk ditetapkan keberadaannya sebagai hutan tetap. Pulau Kalimantan merupakan kawasan dengan luasan wilayah hutan yang menjadi bagian dari paru-paru dunia, termasuk didalamnya wilayah Kalimantan Barat yang terdapat diujung paling barat dari Pulau Kalimantan.</p>
				</div>
				<!-- bar-js -->
				<script src="js/bars.js"></script>
				<!-- bar-js -->
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //skills -->
	<!-- news -->
	<div class="news-w3layouts">
		<div class="container">
			<div class="agileits-title">
				<h3>Berita Terbaru</h3>
			</div>
			<!--<div class="news-agileinfo w3-agileits">
				<div class="col-md-4 news-w3lgrids">
					<h4><span>13/16</span>December</h4>
					<p>Cras justo odioda pibus facilisis dignissimos Sed ut perspiciatis unde omnis iste natus error sit voluptatem inventore veritatis</p>
				</div>
				<div class="col-md-4 news-w3lgrids">
					<h4><span>20/16</span>November</h4>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem inventore veritatis Cras justo odioda pibus facilisis dignissimos </p>
				</div>
				<div class="col-md-4 news-w3lgrids">
					<h4><span>05/16</span>November</h4>
					<p>Facilisis dignissimos Sed ut perspiciatis unde omnis iste natus error sit voluptatem inventore veritatis cras justo odioda pibus </p>
				</div>
				<div class="clearfix"> </div>
			</div>-->
			<div class="popular-posts">
				<!--<h4 class="w3ls-title">Popular Posts</h4>-->
				<div class="popular-posts-grids">
					<div class="col-md-3 col-sm-3 col-xs-6 popular-posts-grid">
						<div class="popular-posts-grid1">
							<a href="single.html"><img src="{{ asset ('webpage/images/g3.jpg')}}" alt=" " class="img-responsive"></a>
							<h4><a href="single.html">dolori perior</a></h4>
							<p>Itaque earum rerum hic tenetur a sapiente delectus.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-6 popular-posts-grid">
						<div class="popular-posts-grid1">
							<a href="single.html"><img src="{{ asset ('webpage/images/g4.jpg')}}" alt=" " class="img-responsive"></a>
							<h4><a href="single.html">rerum tenetur</a></h4>
							<p>Itaque earum rerum hic tenetur a sapiente delectus.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-6 popular-posts-grid">
						<div class="popular-posts-grid1">
							<a href="single.html"><img src="{{ asset ('webpage/images/g5.jpg')}}" alt=" " class="img-responsive"></a>
							<h4><a href="single.html">saepe eveniet </a></h4>
							<p>Itaque earum rerum hic tenetur a sapiente delectus.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-6 popular-posts-grid">
						<div class="popular-posts-grid1">
							<a href="single.html"><img src="{{ asset ('webpage/images/g6.jpg')}}" alt=" " class="img-responsive"></a>
							<h4><a href="single.html">ipsum tenetur</a></h4>
							<p>Itaque earum rerum hic tenetur a sapiente delectus.</p>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>

		</div>
	</div>
@endsection
