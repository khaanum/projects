@extends('website.layout.app4')

@section('content')

<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li><a href="#">Profil</a><i class="icon-angle-right"></i></li>
					<li class="active">Visi&Misi</li>
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
						<h2>Visi & Misi BPKH Wilayah III Pontianak</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
	<section id="content">
	<div class="container">

		<!-- Lists -->
		<div class="row">
			<div class="col-lg-12">
				<dl>
				 @foreach($visimisi as  $data)
				<p>{!!$data->content!!}</p>
				@endforeach
				</dl>
			</div>

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
