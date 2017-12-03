@extends('website.layout.app2')

@section('page-title')
	Kontak
@endsection

@section('content')

	<!-- contact -->
	<div class="contact">
		<div class="container">  
			<div class="map"> 
				<div class="agileits-title">
					<h3>Kontak BPKH Wilayah III Pontianak</h3>
				</div> 
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.8159246275263!2d109.35283171429488!3d-0.06278829995418538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d59f2c9ec0b7d%3A0x1c20619b2f9c5eb1!2sJl.+Jenderal+Ahmad+Yani+No.121%2C+Bansir+Darat%2C+Pontianak+Tenggara%2C+Kota+Pontianak%2C+Kalimantan+Barat+78124!5e0!3m2!1sen!2sid!4v1512318646494" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				<!-- <iframe style="padding-bottom: 2em;" src="https://www.google.com/maps/place/Komplek+Citra+Pramuka/@-0.0053986,109.2792396,17z/data=!3m1!4b1!4m5!3m4!1s0x2e1d5f536b0fe011:0x8d757d815008cd5d!8m2!3d-0.0053986!4d109.2814283?hl=en" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
 -->
			</div> 
			<div class="contact-agileinfo"> 
				<div class="col-md-7 contact-right">				
					<form action="{{ route('website.kontak.store') }}" method="POST"> 
						
						{{ csrf_field() }} 
						
						{{ method_field('POST') }}
						
						<input type="text" name="name" placeholder="Nama" required="">
						<input type="email" name="email" placeholder="Email" required=""> 
						<input type="text" name="phone_number" placeholder="Telephone" required="">
						<textarea name="message" placeholder="Pesan..." required=""></textarea>
						<button type="submit" class="btn btn-default btn-block">Kirim</button> 
					</form>
				</div>
				<div class="col-md-5 contact-left">
					<p>"Balai Pemantapan Kawasan Hutan (BPKH) merupakan Unit Pelaksana Teknis (UPT) dibawah Direktorat Jenderal Planologi berasarkan Surat Keputusan Menteri Kehutanan Nomor 6188/kpts-II/2002 Tanggal 10 Juni 2002."</p>
					<p>"Info selengkapnya, anda dapat menghubungi kontak dibawah ini."</p>
					<ul>
						<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
							Jl. Achmad Yani no 121 Pontianak, Kalimantan Barat
						</li>					
						<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
							0561-736502
						</li>
						<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
							<a href="mailto:example@mail.com">bpkh@dephut.go.id</a>
						</li>
					</ul>
				</div>						
				<div class="clearfix"> </div> 
				</form> 
			</div>			
		</div>			
	</div>
	<!-- //contact -->  
@endsection
