@extends('website.layout.app2')

@section('page-title')
	Artikel
@endsection

@section('content')

	<!-- single -->
	<div class="single">
		<div class="container">
			@foreach($artikel as $data)

			<div class="wthree_single_grid">
				<h4>{{$data->title}}</h4>
				<ul>
					<li><span class="fa fa-user" aria-hidden="true"></span><a href="#">Admin</a></li>
					<li><span class="fa fa-clock-o"></span><a href="#">{{$data->created_at}}</a></li>
					<!-- <li><span class="fa fa-envelope-o" aria-hidden="true"></span><a href="#">5 Comments</a></li>
					<li><span class="fa fa-pencil-square-o" aria-hidden="true"></span>Recusandae</li> -->
				</ul>
			</div>
			<div class="agile_single_banner">
				<img src="../adminpage/img/{{$data->image}}" alt="{{ $data->image}}" class="img-responsive" />
			</div>
			<div class="wthree_single_grid1">
				<p>{!!$data->content!!}</p>
			</div> 
			@endforeach

			<div class="popular-posts">
				<h4 class="w3ls-title">Berita Terbaru</h4>
				<div class="popular-posts-grids">
					<div class="col-md-3 col-sm-3 col-xs-6 popular-posts-grid">	
						<div class="popular-posts-grid1">
							<a href="single.html"><img src="{{asset('webpage/images/g3.jpg')}}" alt=" " class="img-responsive"></a>
							<h4><a href="single.html">dolori perior</a></h4>
							<p>Itaque earum rerum hic tenetur a sapiente delectus.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-6 popular-posts-grid">	
						<div class="popular-posts-grid1">
							<a href="single.html"><img src="{{asset('webpage/images/g4.jpg')}}" alt=" " class="img-responsive"></a>
							<h4><a href="single.html">rerum tenetur</a></h4>
							<p>Itaque earum rerum hic tenetur a sapiente delectus.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-6 popular-posts-grid">	
						<div class="popular-posts-grid1">
							<a href="single.html"><img src="{{asset('webpage/images/g5.jpg')}}" alt=" " class="img-responsive"></a>
							<h4><a href="single.html">saepe eveniet </a></h4>
							<p>Itaque earum rerum hic tenetur a sapiente delectus.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-6 popular-posts-grid">	
						<div class="popular-posts-grid1">
							<a href="single.html"><img src="{{asset('webpage/images/g6.jpg')}}" alt=" " class="img-responsive"></a>
							<h4><a href="single.html">ipsum tenetur</a></h4>
							<p>Itaque earum rerum hic tenetur a sapiente delectus.</p>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="write-reply">
				<h4 class="w3ls-title">Tulis Komentar</h4>
				<form action="#" method="post"> 
					<input type="text" name="Name" placeholder="Nama"  required="">
					<input type="text" name="Email" placeholder="Email" required=""> 
					<textarea name="Comment" placeholder="Tulis komentar di sini..." required=""></textarea>
					<input type="submit" value="Kirim">
				</form>
			</div>
		</div>
	</div>
	<!-- //single -->   
@endsection
