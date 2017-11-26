@extends('website.layout.app4')

@section('content')

<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li><a href="#">Profil</a><i class="icon-angle-right"></i></li>
					<li class="active">Sejarah</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
<section class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="big-cta">
					<div class="cta-text">
						<h2>Sejarah BPKH Wilayah III Pontianak</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>

	<section id="content">
	<div class="container">
		<!-- divider -->
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		<!-- end divider -->
		<!-- Descriptions -->
		<div class="row">
			<div class="col-lg-12">
				<!-- Description -->
				@foreach($sejarah as  $data)
				<p>{!!$data->content!!}</p>
				@endforeach
				<!-- <h4>Description</h4>
				<dl>
					<dt>Description lists</dt>
					<dd>A description list is perfect for defining terms.</dd>
					<dt>Euismod</dt>
					<dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
					<dd>Donec id elit non mi porta gravida at eget metus.</dd>
					<dt>Malesuada porta</dt>
					<dd>Etiam porta sem malesuada magna mollis euismod.</dd>
				</dl> -->
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

	</div>
	</section>


  @endsection
