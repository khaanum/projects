  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b><img style="height: 42px;width:42px;" src="{{ asset ('adminpage/img/logo.png')}}" alt=""></b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="atul" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <span class="hidden-xs">{{ Auth::user()->name }}</span>
                        <i class="fa fa-caret-down"></i>
                    </a>
                    
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"><i class=" fa fa-user fa-fw"></i> User Profile</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa fa-gear fa-fw"></i> Settings</a></li>
                        <li><a class="dropdown-item" href="{{ route ('logout') }}" 
                              onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                        <form id="logout-form" action="logout" method="get" style="display: none;">
                          {{ csrf_field() }}
                        </form>
                    </ul>
                </li>
        </ul>
      </div>
 
    </nav>
  </header>