<header class="main-header">
      <a href="#" class="logo">
        <span class="logo-mini"><i class="fa fa-heartbeat"></i></span>
        <span class="logo-lg"><b>{{ $app_name }}</b></span>
      </a>
      <nav class="navbar navbar-static-top skin-green">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>        
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{ asset('dist/img/ava.png') }}" class="user-image" alt="User Image">
                <span class="hidden-xs">{{ ucfirst($user->nama_lengkap) }}</span>
              </a>
              <ul class="dropdown-menu">
                <li class="user-header">
                  <img src="{{ asset('dist/img/ava.png') }}" class="img-circle" alt="User Image">
  
                  <p>
                    {{ ucfirst($user->nama_lengkap) }}
                    <small>{{ ucfirst($user->level) . " - " . ucwords(strtolower($user->nama_posyandu))  }}</small>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="{{ base_url('profile') }}" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="{{ base_url('logout') }}" class="btn btn-default btn-flat">Keluar</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>