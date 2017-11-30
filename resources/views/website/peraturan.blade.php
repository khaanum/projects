@extends('website.layout.app2')

@section('page-title')
	Peraturan
@endsection
@section('content')
<div class="codes">
	<div class="container"> 
	<div class="grid_3 grid_5 ">
				<h3 class="w3ls-hdg">Peraturan</h3>
				<div class="col-md-5">
					@foreach($peraturan as $data)
					<div class="col-md-8 col-md-offset-2">
						<section> 
							<!-- <a target="_blank" href="../adminpage/file/{{$data->file}}">{{$data->title}}</a> -->
						<embed src="../adminpage/file/{{$data->file}}" type="application/pdf" width="1000" height="600"></embed> <br> <br>
						</section>
					</div>
					@endforeach
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

@endsection

