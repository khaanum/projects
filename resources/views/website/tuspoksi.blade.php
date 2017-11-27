@extends('website.layout.app4')

@section('content')
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li><a href="#">Profil</a><i class="icon-angle-right"></i></li>
					<li class="active">Tuspoksi</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<img src="{{asset('adminpage/img/bg1.jpg')}}" alt="" class="align-left" />
			</div>
		</div>
		<!-- Descriptions -->
		<div class="row">
			<div class="col-lg-12">
				<!-- Description -->
				<dl>
					@foreach($tuspoksi as  $data)
					<p>{!!$data->content!!}</p>
					@endforeach
				</dl>
			</div>
			<!-- Horizontal Description -->
		</div>
		<!-- divider -->
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		<!-- end divider -->
		<!-- Lists -->
	</div>
	</section>

  @endsection
