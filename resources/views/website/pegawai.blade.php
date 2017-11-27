@extends('website.layout.app4')


@section('content')

<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li><a href="#">Tata Usaha</a><i class="icon-angle-right"></i></li>
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
						<h2>Tata Usaha BPKH Wilayah III Pontianak</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="content">
	<div class="container">

			<div class="row">
			<div class="col-lg-8">
				<h4>Subbagian Tata Usaha </h4>
				<blockquote>
					<i class="icon-quote-left icon-2x"></i> Subbagian tata usaha Balai Pemantapan Kawasan Hutan Wilayah III Pontianak memiliki tugas:
					<li>melakukan urusan tata persuratan</li>
					<li>kepegawaian</li>
					<li>keuangan</li>
					<li>perlengkapan dan</li>
					<li>rumah tangga</li>
				</blockquote>
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

		<div class="row">
			<div class="col-lg-12">
				<h4>Data Pegawai BPKH Wilayah III Tahun 2017</h4>
				<div class="panel panel-default">
 					 <!-- Default panel contents -->

  					<!-- Table -->
  					<table class="table">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Nip</th>
								<th>Golongan</th>
								<th>Jabatan</th>
							</tr>
						</thead>  
						<tbody>
		                	@foreach($pegawai as $data)
							<tr>
								<td>{{$data->id}}</td>
								<td>{{$data->nama_pegawai}}</td>
								<td>{{$data->nip}}</td>
								<td>{{$data->gol}}</td>
								<td>{{$data->jabatan}}</td>
							</tr>
							@endforeach
		                </tbody> 
  					</table>
				</div>
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
