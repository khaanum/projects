<div class="w3header"> <!--header-->
					<nav class="navbar navbar-default">
						<div class="navbar-header">
													<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
														<span class="sr-only">Toggle navigation</span>
														<span class="icon-bar"></span>
														<span class="icon-bar"></span>
														<span class="icon-bar"></span>
													</button>

												</div>
						<!-- navbar-header -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="/d" class="{{ Request::is('home') ? "active" : "" }}">Beranda</a></li>

								<li class="{{ Request::is('WebSejarah', 'WebVisimisi', 'WebTuspoksi', 'WebOrganisasi', 'WebWilayah') ? "active" : ""}} treeview">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profil<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="/WebSejarah" class="{{ Request::is('Sejarah')? "" : "" }}">Sejarah</a></li>
										<li><a href="/WebVisimisi" class="{{ Request::is('Visimisi')? "" : "" }}">Visi & Misi</a></li>
										<li><a href="/WebTuspoksi" class="{{ Request::is('Tuspoksi')? "" : "" }}">Tuspoksi</a></li>
										<li><a href="/WebOrganisasi" class="{{ Request::is('bOrganisasi')? "" : "" }}">Struktur Organisasi</a></li>
									</ul>
								</li>

								<li><a href="/tatausaha" class="{{ Request::is('tatausaha') ? "active" : "" }}">Tata Usaha</a></li>

								<li><a href="isdh" class="{{ Request::is('isdh') ? "active" : "" }}">ISDH</a></li>

								<li><a href="pkh" class="{{ Request::is('pkh') ? "active" : "" }}">PKH</a></li>								

								<li><a href="/WebArtikel" class="{{ Request::is('artikel') ? "active" : "" }}">Artikel</a></li>
							</ul>
							<div class="clearfix"> </div>
						</div>
					</nav>
				</div>
