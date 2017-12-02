@extends('website.layout.app2')

@section('page-title')
	Informasi Sumber Daya Hutan
@endsection

@section('content')
<div class="codes">
	<div class="container"> 
	<div class="grid_3 grid_5 ">
		
				<h3 class="w3ls-hdg">{{ $isdh->title_isdh }}</h3>
		
				<div class="col-md-5">
					<div class="col-md-8 col-md-offset-2">
						<section> 
						<embed src="/adminpage/file/{{$isdh->file_isdh}}" type="application/pdf" width="1000" height="800"></embed> <br> <br>
						</section>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
				</div>
	</div>

@endsection

