<div class="w3header"> <!--header--> 
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <h1 ><a  href="/d">
                                <img style="height: 52px;width:52px;" src="{{ asset ('adminpage/img/logo.png')}}" alt=""> BPKH</a>
                            </h1>
                        </div>
                        <!-- navbar-header -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="{{ Request::is('d') ? "active":""}}"><a href="/d" class="">Home</a></li>
                                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profil <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li class="{{ Request::is('web/sejarah') ? "active" : ""}}"><a href="/web/sejarah">Sejarah</a></li>
                                        <li class="{{ Request::is('web/visimisi') ? "active" : ""}}"><a href="/web/visimisi">Visi&Misi</a></li>
                                        <li class="{{ Request::is('web/organisasi') ? "active" : ""}}"><a href="/web/organisasi">Struktur Organisasi</a></li>
                                        <li class="{{ Request::is('web/tuspoksi') ? "active" : ""}}"><a href="/web/tuspoksi">Tuspoksi</a></li>
                                    </ul>
                                </li> 
                                <li class="{{ Request::is('web/tu') ? "active" : ""}}"><a href="/web/tu">Tata Usaha</a></li> 
                                <li class="{{ Request::is('web/isdh') ? "active" : ""}}"><a href="/web/isdh">ISDH</a></li>
                                <li class="{{ Request::is('web/pkh') ? "active" : ""}}"><a href="/web/pkh">PKH</a></li>
                                <li class="{{ Request::is('web/artikel') ? "active" : ""}}"><a href="/web/artikel">Artikel</a></li>
                            </ul> 
                            <div class="clearfix"> </div>   
                        </div>
                    </nav>
                </div> 