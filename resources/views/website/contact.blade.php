@extends('website.layout.app2')

@section('page-title')
	Kontak Kami
@endsection

@section('content')

<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="map">
				<div class="agileits-title">
					<h3>Kontak</h3>
					<p>BPKH Wilayah III Pontianak</p>
				</div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4376542.827441857!2d133.94238155277205!3d-25.73870281693212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2b2bfd076787c5df%3A0x538267a1955b1352!2sAustralia!5e0!3m2!1sen!2sin!4v1439377130002" allowfullscreen></iframe>
			</div>
			<div class="contact-agileinfo">
				<div class="col-md-7 contact-right">
					<form action="#" method="post">
						<input type="text" name="Name" placeholder="Name" required="">
						<input type="email" name="Email" placeholder="Email" required="">
						<input type="text" name="Telephone" placeholder="Telephone" required="">
						<textarea name="Message" placeholder="Message..." required=""></textarea>
						<input type="submit" value="Submit" >
					</form>
				</div>
				<div class="col-md-5 contact-left">
					<p>"Lorem Ipsum"is the common name dummy text often used in the design, printing, and type setting industriescommon name dummy text often used in the design, printing, and type setting industries. "</p>
					<ul>
						<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
							756 globel Place, Australia.
						</li>
						<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
							+123 2222 222
						</li>
						<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
							<a href="mailto:example@mail.com">mail@example.com</a>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //contact -->

@endsection
