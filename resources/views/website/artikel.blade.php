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
				</ul>
			</div>
			<div class="agile_single_banner">
				<img src="../adminpage/img/{{$data->image}}" alt="{{ $data->image}}" class="img-responsive"/>
			</div>
			<div class="wthree_single_grid1">
				<p>{!! str_limit($data->content,500) !!}</p>
				<a class="mu-read-more-btn" href="{{ route('artikel.show', $data->slug) }}">
					<img src="{{asset('adminpage/img/SELENGKAPNYA.gif')}}" alt="SELENGKAPNYA" width="134" height="27">
				</a>
			</div> 
			<br>
			@endforeach
			<br>

			{{ $artikel->render() }}
		</div>
	</div>
	<!-- //single -->   
@endsection
