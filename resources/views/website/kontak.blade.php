@extends('website.layout.app2')

@section('content')

	<!-- contact -->
	<div class="contact">
		<div class="container">  
			<div class="map"> 
				<div class="agileits-title">
					<h3>How To Find Us</h3>
					<p>Mauris rutrum turpis eget tincidunt eleifend vestibulum condimentum mollis tellus eu magna laoreet.</p>
				</div> 
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4376542.827441857!2d133.94238155277205!3d-25.73870281693212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2b2bfd076787c5df%3A0x538267a1955b1352!2sAustralia!5e0!3m2!1sen!2sin!4v1439377130002" allowfullscreen></iframe>
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
