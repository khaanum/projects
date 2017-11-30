@extends('website.layout.app2')

@section('page-title')
	Artikel
@endsection

@section('content')
<div class="single">
		<div class="container">
			
			<div class="wthree_single_grid">
				<h4>{{$artikel->title}}</h4>
				<ul>
					<li><span class="fa fa-user" aria-hidden="true"></span><a href="#">Admin</a></li>
					<li><span class="fa fa-clock-o"></span><a href="#">{{$artikel->created_at}}</a></li>
				</ul>
			</div>
			<div class="agile_single_banner">
				<img src="/adminpage/img/{{$artikel->image}}" alt="{{ $artikel->image }}" class="img-responsive" />
			</div>
			<div class="wthree_single_grid1">
				<p>{!! $artikel->content !!}</p>
			</div> 
			
			<div class="write-reply">
				<h4 class="w3ls-title">Write a Comment</h4>
				<form action="#" method="post"> 
					<input type="text" name="Name" placeholder="Name"  required="">
					<textarea name="Comment" placeholder="Write a comment here..." required=""></textarea>
					<input type="submit" value="Send">
				</form>
			</div>

			@foreach ($artikel->id_komentar()->get() as $data)
			<div class="">
				<div class="panel-body">
					<div class="title">
						<h3>
							<span>{{ $data->name }}</span>
						</h3>
						{{ $data->message }}
					</div>
				</div>
			</div>
			@endforeach
</div>
</div>
@endsection