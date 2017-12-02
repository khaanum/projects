@extends('website.layout.app2')

@section('page-title')
		Informasi Sumber Daya Hutan
@endsection

@section('content')
<div class="welcome">
		<div class="container">	
			<div class="agileits-title">
				<h3>Forest Resource Information Section of BPKH III Pontianak</h3>
				<p>Subbagian ISDH Balai Pemantapan Kawasan Hutan Wilayah III Pontianak memiliki tugas:</p>
			</div>
			<div class="welcome-agileinfo">
				<div class="col-md-4 col-xs-6 welcome-grid agileits-w3layouts">  
					<div class="col-xs-2 welcome-grid-left">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 welcome-grid-right">
						<h4>Melakukan penyusunan program,</h4>
						<p>anggaran dan evaluasi kegiatan</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 col-xs-6 welcome-grid welcome-grid-bottom">
					<div class="col-xs-2 welcome-grid-left">
						<span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 welcome-grid-right">
						<h4>Melaksanakan pengamatan</h4>
						<p>dan pengelolaan data pertumbuhan dan kondisi hutan serta penyajian informasi sumberdaya hutan</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 col-xs-6 welcome-grid agileits-w3layouts">
					<div class="col-xs-2 welcome-grid-left">
						<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 welcome-grid-right">
						<h4>Melaksanakan kegiatan penginderaan jauh,</h4>
						<p>pengelolaan sistem informasi geografis, perpetaan kehutanan dan pemasangan titik kontrol</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 col-xs-6 welcome-grid agileits-w3layouts">
					<div class="col-xs-2 welcome-grid-left">
						<span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 welcome-grid-right">
						<h4>Melakukan penyusunan</h4>
						<p>Neraca Sumber Daya Hutan</p>
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
				<h4>Sub Bagian Informasi Sumber Daya Hutan</h4>
				<div class="well w3l">
					
				</div>
			</div>
		</div>
	</div>
	<!-- //about-slid -->
	
	<div class="welcome">
	<div class="container">
	<div class="agileits-title">
		<h3>Daftar Tabel Informasi Sumber Daya Hutan</h3>
	</div>	
	<div class="welcome-agileinfo">
		@foreach($isdh as $data)
		<div class="col-md-4 col-xs-6 welcome-grid agileits-w3layouts">  
			<div class="col-xs-2 welcome-grid-left">
				<span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
			</div>
			<div class="col-xs-10 welcome-grid-right">
				<h4><a href="/web/isdh/{{$data->id}}">{{$data->title_isdh}}</a></h4>
			</div>
			<div class="clearfix"> </div>
		</div>
		@endforeach
	<div class="clearfix"> </div>
	</div>
	</div>
	</div>
	

@endsection

