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
			<br>
			
			<div class="write-reply">
				<h4 class="w3ls-title">Tulis komentar</h4>
				@if (count($errors)>0)
                  <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <ul>
                      @foreach($errors->all() as $error)
                      <li>{{$error}}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif
				<form action="{{ route('website.artikel_single.store', $artikel) }}" method="post">
				{{ csrf_field() }}  
					<input type="text" name="name" placeholder="Nama"  required="" value="{{old('name')}}">
					<textarea name="comment" placeholder="Tulis komentar anda di sini..." required="">{{old('comment')}}</textarea>
					<div class="g-recaptcha" data-sitekey="6LcckTsUAAAAAESlPBcIHNBodXX8WM-yc_tiot9l"></div>
					<input type="submit" value="Komentar">
				</form>
			</div>
			<br>
	
	<div class="welcome">
		<div class="container">
			<div class="grid_3 grid_5 w3-agileits">
				@foreach($artikel->komentar as $data)
				<div class="tab-pane" id="timeline">
                    	<div class="timeline-item">
                      	<span class="time"><i class="fa fa-clock-o"></i>{{ $data->created_at }}</span>

                      	<h4 class="timeline-header"><a href="#">{{ $data->name }}</a> :</h4>

                      	<div class="timeline-body">
                        <p><b>{{ $data->comment }}</b></p>
                      	</div>
                    	</div>
				</div>
				@endforeach
				<br>
				<br>
				<!-- <div class="tab-pane" id="timeline">
                    	<div class="timeline-item">
                      	<span class="time"><i class="fa fa-clock-o"></i>12 november	</span>

                      	<h3 class="timeline-header"><a href="#">sayaya</a>berkomentar</h3>

                      	<div class="timeline-body">
                        haiiiiiii
                      	</div>
                    	</div>
				</div> -->
			</div>
		</div>
	</div>

</div>
</div>

<script src='https://www.google.com/recaptcha/api.js'></script>

@endsection
