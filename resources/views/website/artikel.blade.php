@extends('website.layout.app2')

@section('page-title')
	Artikel
@endsection

@section('content')

	<!-- single -->
	<div class="single">
		<div class="container">
			<div class="wthree_single_grid">
				<h4>Itaque earum rerum hic tenetur</h4>
				<ul>
					<li><span class="fa fa-user" aria-hidden="true"></span><a href="#">Michael Smith</a></li>
					<li><span class="fa fa-tags" aria-hidden="true"></span><a href="#">5 Tags</a></li>
					<li><span class="fa fa-envelope-o" aria-hidden="true"></span><a href="#">5 Comments</a></li>
					<li><span class="fa fa-pencil-square-o" aria-hidden="true"></span>Recusandae</li>
				</ul>
			</div>
			<div class="agile_single_banner">
				<img src="{{asset('webpage/images/s1.jpg')}}" alt="" class="img-responsive" />
			</div>
			<div class="wthree_single_grid1">
				<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis 
					praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
					excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
					officia deserunt mollitia animi, id est laborum et dolorum fuga. 
					<span>Et harum quidem rerum facilis est et expedita distinctio. Nam libero 
					tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus 
					id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis 
					dolor repellendus.</span> Temporibus autem quibusdam et aut officiis debitis 
					aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et 
					molestiae non recusandae. <span>Itaque earum rerum hic tenetur a sapiente delectus, 
					ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis 
					doloribus asperiores repellat.
					Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</span></p>
			</div> 
			<div class="popular-posts">
				<h4 class="w3ls-title">Popular Posts</h4>
				<div class="popular-posts-grids">
					<div class="col-md-3 col-sm-3 col-xs-6 popular-posts-grid">	
						<div class="popular-posts-grid1">
							<a href="single.html"><img src="{{asset('webpage/images/g3.jpg')}}" alt=" " class="img-responsive"></a>
							<h4><a href="single.html">dolori perior</a></h4>
							<p>Itaque earum rerum hic tenetur a sapiente delectus.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-6 popular-posts-grid">	
						<div class="popular-posts-grid1">
							<a href="single.html"><img src="{{asset('webpage/images/g4.jpg')}}" alt=" " class="img-responsive"></a>
							<h4><a href="single.html">rerum tenetur</a></h4>
							<p>Itaque earum rerum hic tenetur a sapiente delectus.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-6 popular-posts-grid">	
						<div class="popular-posts-grid1">
							<a href="single.html"><img src="{{asset('webpage/images/g5.jpg')}}" alt=" " class="img-responsive"></a>
							<h4><a href="single.html">saepe eveniet </a></h4>
							<p>Itaque earum rerum hic tenetur a sapiente delectus.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-6 popular-posts-grid">	
						<div class="popular-posts-grid1">
							<a href="single.html"><img src="{{asset('webpage/images/g6.jpg')}}" alt=" " class="img-responsive"></a>
							<h4><a href="single.html">ipsum tenetur</a></h4>
							<p>Itaque earum rerum hic tenetur a sapiente delectus.</p>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="write-reply">
				<h4 class="w3ls-title">Write a Comment</h4>
				<form action="#" method="post"> 
					<input type="text" name="Name" placeholder="Name"  required="">
					<input type="text" name="Email" placeholder="Email" required=""> 
					<textarea name="Comment" placeholder="Write a comment here..." required=""></textarea>
					<input type="submit" value="Send">
				</form>
			</div>
		</div>
	</div>
	<!-- //single -->   
@endsection
