@extends('website.layout.app2')

@section('page-title')
		Tata Usaha
@endsection

@section('content')

<!-- welcome -->
	<div class="welcome">
		<div class="container">	
			<div class="agileits-title">
				<h3>Administration Section of BPKH III Pontianak</h3>
				<p>Subbagian tata usaha Balai Pemantapan Kawasan Hutan Wilayah III Pontianak memiliki tugas:</p>
			</div>
			<div class="welcome-agileinfo">
				<div class="col-md-4 col-xs-6 welcome-grid agileits-w3layouts">  
					<div class="col-xs-2 welcome-grid-left">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 welcome-grid-right">
						<h4>Melakukan urusan tata persuratan</h4>
						<p></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 col-xs-6 welcome-grid agileits-w3layouts">
					<div class="col-xs-2 welcome-grid-left">
						<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 welcome-grid-right">
						<h4>Kepegawaian</h4>
						<p></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 col-xs-6 welcome-grid agileits-w3layouts">
					<div class="col-xs-2 welcome-grid-left">
						<span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 welcome-grid-right">
						<h4>Keuangan</h4>
						<p></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 col-xs-6 welcome-grid welcome-grid-bottom">
					<div class="col-xs-2 welcome-grid-left">
						<span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 welcome-grid-right">
						<h4>Perlengkapan</h4>
						<p></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 col-xs-6 welcome-grid welcome-grid-bottom">
					<div class="col-xs-2 welcome-grid-left">
						<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 welcome-grid-right">
						<h4>Rumah Tangga</h4>
						<p></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //welcome -->
	<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
	</div>
	<!-- Stats -->
	<!-- about-slid -->
	<div class="w3about-slid agileits-w3layouts"> 
		<div class="container">
			<div class="about-slid-info"> 
				<h4>Data Pegawai Balai Pemantapan Kawasan Hutan Wilayah III Pontianak</h4>
				<table class="table table-striped">
						<thead>
							<tr>
								<th class="text-center">NO</th>
								<th class="text-center">NAMA</th>
								<th class="text-center">NIP</th>
								<th class="text-center">GOLONGAN</th>
								<th class="text-center">JABATAN</th>
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
	<!-- //about-slid -->

@endsection
