<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Masship - Dashboard {{ Route::currentRouteName() }}</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<link rel="shortcut icon" href="{{ url('/resources/assets/img/') }}/favicon.png">
        <link rel="stylesheet" href="{{ url('/resources/assets/css') }}/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="{{ url('/resources/assets/css') }}/jquery-jvectormap-1.2.2.css">
        <link rel="stylesheet" href="{{ url('/resources/assets/css') }}/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="{{ url('/resources/assets/css') }}/skins/skin-black.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
		<script>
			window.Laravel = <?php echo json_encode([
				'csrfToken' => csrf_token(),
			]); ?>
		</script>
    </head>
    <body class="hold-transition skin-black sidebar-mini">

        <div class="wrapper">		
            <header class="main-header">
                <!-- Logo -->
                <a href="index2.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b></b></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Masship</b></span>
                </a>

                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- User Account: style can be found in dropdown.less -->
							@if(Auth::check())
                            <li class="dropdown user user-menu">								
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">                                    
										<span class="hidden-xs">{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</span>
									
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li>
                                        <p>
                                            {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}
                                            <small>{{ Auth::user()->create_at}}</small>
                                        </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="{{ url('/profile') }}" class="btn btn-default btn-flat">Perfil</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="{{ url('/logout')}}" href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
													 class="btn btn-default btn-flat">Logout</a>
											<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
												{{ csrf_field() }}
											</form>
                                        </div>
                                    </li>
                                </ul>
                            </li>
							@endif
                        </ul>
                    </div>

                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="{{ url('/resources/assets/img/') }}/logo-v2.svg" class="img-circle" alt="User Image">
                        </div>
						@if(Auth::check())
                        <div class="pull-left info">
                            <p>{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
						@endif
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">Menú </li>
						@if(Auth::check())
                        <li class="@if(Request::path() == '/') active @endif">
                            <a href="{{ url('/') }}">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
						<li class="treeview @if(strpos(Request::path(), 'users') !== false) active @endif">
                            <a href="#">
                                <i class="fa fa-users"></i> <span>Usuarios</span>
                            </a>
							<ul class="treeview-menu">
								<li class="@if(Request::path() == 'users/form') active @endif">
									<a href="{{ url('/users/form') }}">Crear</a>
								</li>
								<li class="@if(Request::path() == 'users') active @endif">
									<a href="{{ url('/users/') }}">Ver usuarios</a>
								</li>
							</ul>
                        </li>
						<li class="treeview @if(strpos(Request::path(), 'clients') !== false) active @endif">
                            <a href="#">
                                <i class="fa fa-suitcase"></i> <span>Clientes</span>
                            </a>
							<ul class="treeview-menu">
								<li class="@if(Request::path() == 'clients/form') active @endif">
									<a href="{{ url('/clients/form') }}">Crear</a>
								</li>
								<li class="@if(Request::path() == 'clients/form') active @endif">
									<a href="{{ url('/clients/') }}">Ver clientes</a>
								</li>
							</ul>
                        </li>
						<li class="treeview @if(strpos(Request::path(), 'campaings') !== false) active @endif">
                            <a href="{{ url('/campaings') }}">
                                <i class="fa fa-rocket"></i> <span>Campañas</span>
                            </a>
							<ul class="treeview-menu">
								<li class="@if(Request::path() == 'campaings/form') active @endif">
									<a href="{{ url('/campaings/form') }}">Crear</a>
								</li>
								<li class="@if(Request::path() == 'campaings') active @endif">
									<a href="{{ url('/campaings/') }}">Ver campañas</a>
								</li>
							</ul>
                        </li>
						<li class="@if((Request::path() == '/reports')) active @endif">
                            <a href="{{ url('/reports') }}">
                                <i class="fa fa-bar-chart"></i> <span>Reportes</span>
                            </a>
                        </li>
						@endif
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        {{{ !isset($sectionTitle) ? 'Dashboard' : $sectionTitle }}}
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">{{{ !isset($sectionTitle) ? 'Dashboard' : $sectionTitle }}}</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
					@yield('content')
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.3.7
                </div>
                <strong>Copyright &copy; 2017 <a href="http://www.masship.cl">Masship</a>.</strong> All rights
                reserved.
            </footer>

            
        </div>
        <!-- ./wrapper -->
        <script src="{{ url('/resources/assets/js') }}/jquery-2.2.3.min.js"></script>
        <script src="{{ url('/resources/assets/js') }}/bootstrap.min.js"></script>
        <script src="{{ url('/resources/assets/js') }}/app.min.js"></script>
    </body>
</html>
