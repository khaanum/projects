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
				<div class="grid_3 grid_5 w3">
				<h3 class="w3ls-hdg">Sekilas Tentang Balai Pemantapan Kawasan Hutan</h3>
				<div class="well w3l">
					<p>Balai Pemantapan Kawasan Hutan (BPKH) merupakan Unit Pelaksana Teknis (UPT) dibawah Direktorat Jenderal Planologi Berdasarkan Surat Keputusan Menteri Kehutanan Nomor 6188/kpts-II/2002 Tanggal 10 Juni 2002. Berdasarkan surat keuputasan tersebut, Balai Pemantapan Kawasan Hutan Wilayah III memiliki 10 tugas pokok pengurusan hutan di seluruh wilayah Kalimantan Barat.<p>
					<p>Hutan merupakan salah satu modal dasar faktor yang dominan dalam pembangunan nasional yang secara potensial harus dimanfaatkan secara rasional dengan memperhatikan generasi masa kini dan masa datang. Dalam tugasnya, BPKH Wilayah III Pontianak telah berpengaruh dalam memberikan acuan penataan ruang kawasan hutan, terutama di wilayah kerja Kalimantan Barat.</p>
				</div>
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
				<h4>Sekilas Tentang Kalimantan Barat</h4>
				<p>Kalimantan Barat adalah salah satu provinsi di Indonesia yang terletak di pulau Kalimantan merupakan provinsi terluas ke empat setelah Papua, Kalimantan Timur dan Kalimantan Tengah.</p>
			</div>
		</div>
	</div>
	<!-- //about-slid -->
	<div class="single">
		<div class="container">
	<div class="popular-posts">
				<h4 class="w3ls-title">Artikel Terkini</h4>
		<div class="popular-posts-grids">
			@foreach($artikel as $data)
			<div class="col-md-3 col-sm-3 col-xs-6 popular-posts-grid">	
				<div class="popular-posts-grid1">
					<a href="single.html"><img src="../adminpage/img/{{$data->image}}" alt=" " class="img-responsive"></a>
					<h4><a href="/web/artikel/single">{{$data->title}}</a></h4>
					<p>{!! str_limit($data->content,100) !!}</p>
				</div>
			</div>
				@endforeach
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
</div>
	<!-- LINK Terkait-->
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
	<!-- //Link Terkait -->
@endsection
