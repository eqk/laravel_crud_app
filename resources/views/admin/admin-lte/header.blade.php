<!-- Main Header -->
<header class="main-header">

  <!-- Logo -->
  <a href="{{route('admin.home')}}" class="logo"><b>{{ config('app.name', 'Laravel') }}</b></a>

  <!-- Header Navbar -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown notifications-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
            <i class="fa fa-bell-o"></i>
            <span class="label label-warning">2</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header"><i class="fa fa-bell-o text-warning"></i> У Вас 2 оповещений</li>
            <li>
              <div class="slimScrollDiv"><ul class="menu" style="overflow: hidden; width: 100%; height: 80px;">
                <li>
                  <a href="#">
                    <i class="fa fa fa-book text-info"></i> 1 новых уведомлений
                  </a>
                </li>

                <li>
                  <a href="#">
                    <i class="fa fa-file-pdf-o text-danger"></i> 1 новых уведомлений
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
   
      <ul class="nav navbar-nav">

      @if (Auth::user())
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>              
              <ul class="dropdown-menu" role="menu">
                  <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Выход</a></li>
              </ul>
          </li>
      @endif


      </ul>
    </div>
  </nav>
</header>