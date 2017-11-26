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
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h4>H1-H6 Heading style</h4>
				<h1>Heading H1</h1>
				<h2>Heading H2</h2>
				<h3>Heading H3</h3>
				<h4>Heading H4</h4>
				<h5>Heading H5</h5>
				<h6>Heading H6</h6>
			</div>
			<div class="col-lg-4">
				<h4>Example of paragraph</h4>
				<p>
					<strong>Lorem ipsum dolor sit amet</strong>, consetetur sadipscing elitr, sed diam non mod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
				</p>
				<p class="lead">
					At vero eos et accusam et justo duo dolores et eabum.
				</p>
				<p>
					<em>
					Consetetur sadipscing elitr, sed diam non mod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </em>
				</p>
				<p>
					<small>
					Consetetur sadipscing elitr, sed diam non mod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </small>
				</p>
			</div>
			<div class="col-lg-4">
				<h4>Float image in paragraph</h4>
				<img src="img/dummies/dummy-1.jpg" alt="" class="align-left" />
				<p>
					 Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam non mod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et eabum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet
				</p>
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
		<!-- Descriptions -->
		<div class="row">
			<div class="col-lg-6">
				<!-- Description -->
				<h4>Description</h4>
				<dl>
					<dt>Description lists</dt>
					<dd>A description list is perfect for defining terms.</dd>
					<dt>Euismod</dt>
					<dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
					<dd>Donec id elit non mi porta gravida at eget metus.</dd>
					<dt>Malesuada porta</dt>
					<dd>Etiam porta sem malesuada magna mollis euismod.</dd>
				</dl>
			</div>
			<!-- Horizontal Description -->
			<div class="col-lg-6">
				<h4>Horizontal Description</h4>
				<dl class="dl-horizontal">
					<dt>Description lists</dt>
					<dd>A description list is perfect for defining terms.</dd>
					<dt>Euismod</dt>
					<dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
					<dd>Donec id elit non mi porta gravida at eget metus.</dd>
					<dt>Malesuada porta</dt>
					<dd>Etiam porta sem malesuada magna mollis euismod.</dd>
					<dt>Felis euismod semper eget lacinia</dt>
					<dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
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
		<!-- Lists -->
		<div class="row">
			<!-- Unordered Lists -->
			<div class="col-lg-3">
				<h4>Unordered Lists</h4>
				<ul>
					<li>Lorem ipsum dolor sit amet</li>
					<li>Consectetur adipiscing elit</li>
					<li>Integer molestie lorem at massa</li>
					<li>Facilisis in pretium nisl aliquet</li>
					<li>Nulla volutpat aliquam velit
					<ul>
						<li>Phasellus iaculis neque</li>
						<li>Purus sodales ultricies</li>
						<li>Vestibulum laoreet porttitor sem</li>
						<li>Ac tristique libero volutpat at</li>
					</ul>
					</li>
					<li>Faucibus porta lacus fringilla vel</li>
					<li>Aenean sit amet erat nunc</li>
					<li>Eget porttitor lorem</li>
				</ul>
			</div>
			<!-- Unstyled Lists -->
			<div class="col-lg-3">
				<h4>Unstyled Lists</h4>
				<ul class="unstyled">
					<li>Lorem ipsum dolor sit amet</li>
					<li>Consectetur adipiscing elit</li>
					<li>Integer molestie lorem at massa</li>
					<li>Facilisis in pretium nisl aliquet</li>
					<li>Nulla volutpat aliquam velit
					<ul>
						<li>Phasellus iaculis neque</li>
						<li>Purus sodales ultricies</li>
						<li>Vestibulum laoreet porttitor sem</li>
						<li>Ac tristique libero volutpat at</li>
					</ul>
					</li>
					<li>Faucibus porta lacus fringilla vel</li>
					<li>Aenean sit amet erat nunc</li>
					<li>Eget porttitor lorem</li>
				</ul>
			</div>
			<!-- Ordered Lists -->
			<div class="col-lg-3">
				<h4>Ordered Lists</h4>
				<ol>
					<li>Lorem ipsum dolor sit amet</li>
					<li>Consectetur adipiscing elit</li>
					<li>Integer molestie lorem at massa</li>
					<li>Facilisis in pretium nisl aliquet</li>
					<li>Nulla volutpat aliquam velit
					<ol>
						<li>Phasellus iaculis neque</li>
						<li>Purus sodales ultricies</li>
						<li>Vestibulum laoreet porttitor sem</li>
						<li>Ac tristique libero volutpat at</li>
					</ol>
					</li>
					<li>Faucibus porta lacus fringilla vel</li>
					<li>Aenean sit amet erat nunc</li>
					<li>Eget porttitor lorem</li>
				</ol>
			</div>
			<!-- Unstyled Lists -->
			<div class="col-lg-3">
				<h4>Unstyled Lists</h4>
				<ol class="unstyled">
					<li>Lorem ipsum dolor sit amet</li>
					<li>Consectetur adipiscing elit</li>
					<li>Integer molestie lorem at massa</li>
					<li>Facilisis in pretium nisl aliquet</li>
					<li>Nulla volutpat aliquam velit
					<ol>
						<li>Phasellus iaculis neque</li>
						<li>Purus sodales ultricies</li>
						<li>Vestibulum laoreet porttitor sem</li>
						<li>Ac tristique libero volutpat at</li>
					</ol>
					</li>
					<li>Faucibus porta lacus fringilla vel</li>
					<li>Aenean sit amet erat nunc</li>
					<li>Eget porttitor lorem</li>
				</ol>
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
			<div class="col-lg-4">
				<h4>Blockquote</h4>
				<blockquote>
					<i class="icon-quote-left icon-2x"></i> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam non mod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
				</blockquote>
			</div>
			<div class="col-lg-4">
				<h4>Blockquote and cite</h4>
				<blockquote>
					<i class="icon-quote-left icon-2x"></i> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam non mod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. <cite>John doe, Awesome Inc.</cite>
				</blockquote>
			</div>
			<div class="col-lg-4">
				<h4>Pullquote left and right</h4>
				<span class="pullquote-left">
				Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam non mod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </span>
				<span class="pullquote-right margintop10">
				Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam non mod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </span>
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
				<h4>Preformatted text</h4>
				<pre class="prettyprint linenums">
					 &lt;div class="col-lg-12"&gt;<br />
					 &nbsp;&nbsp;&lt;p&gt;Lorem ipsum dolor sit amet, consetetur sadipscing elitr..&lt;/p&gt;<br />
					 &nbsp;&nbsp;&lt;p&gt;Lorem ipsum dolor sit amet, consetetur sadipscing elitr..&lt;/p&gt;<br />
					 &nbsp;&nbsp;&lt;p&gt;Lorem ipsum dolor sit amet, consetetur sadipscing elitr..&lt;/p&gt;<br />
					 &lt;/div&gt;
				</pre>
			</div>
		</div>
	</div>
	</section>

  @endsection
