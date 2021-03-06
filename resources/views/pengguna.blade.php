<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="img/favicon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Paper Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="asset/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="asset/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="asset/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="asset/css/demo.css" rel="stylesheet" />

    <!--  Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="asset/css/themify-icons.css" rel="stylesheet">

</head>
<body>

<div class="wrapper">
	<div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    Baju Danus
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="/dashAdmin">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="active">
                    <a href="/pengguna">
                        <i class="ti-user"></i>
                        <p>User table</p>
                    </a>
                </li>
                <li>
                    <a href="/table">
                        <i class="ti-view-list-alt"></i>
                        <p>Garbage Table</p>
                    </a>
                </li>
								<li>
			            <a class="nav-link" href="{{ route('admin.logout') }}"
			              onclick="event.preventDefault();
			              document.getElementById('logout-form').submit();">
			              <i class="ti-power-off"></i>
			               <p>Logout</p>
			               </a>

			               <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
			                 {{ csrf_field() }}
			                 </form>
			            </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">User List</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-panel"></i>
								<p>Stats</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification">5</p>
									<p>Notifications</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
						<li>
                            <a href="#">
								<i class="ti-settings"></i>
								<p>Settings</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


				<div class="content">
						<div class="container-fluid">
								<div class="row">
										<div class="col-md-12">
												<div class="card">
														<div class="header">
																<h4 class="title">User Table</h4>
																<p class="category">Daftar user yang terdaftar</p>
														</div>
														<div class="content table-responsive table-full-width">
														 <table class="table table-striped">
														<thead>
																<tr class="d-flex">
																		<th class="col-1">No</th>
																		<th class="col-3">Nama</th>
																		<th class="col-3">Email</th>
																		<th class="col-3">Alamat</th>
																		<th class="col-3 text-center">Aksi</th>
																</tr>
														</thead>
														<tbody>
														@php $no = 1; @endphp
																@foreach($users as $d)
																		<tr class="d-flex">
																				<td class="col-1">{{ $no++ }}</td>
																				<td class="col-3">{{ $d->name }}</td>
																				<td class="col-3">{{ $d->email }}</td>
																				<td class="col-3">{{ $d->address }}</td>
																				<td class="col-3 text-center">
																						<form action="{{Route('pengguna.destroy',$d->id)}}" method="post">
																								{{ csrf_field() }}
																								{{ method_field('DELETE') }}
																								<button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
																						</form>
																				</td>
																		</tr>
																@endforeach
														</tbody>
												</table>
										</div>
										</div>
										</div>
										</div>
										</div>
										</div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                            <a href="http://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                               Blog
                            </a>
                        </li>
                        <li>
                            <a href="http://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
				<div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>
                </div>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="asset/js/jquery.min.js" type="text/javascript"></script>
	<script src="asset/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="asset/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="asset/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="asset/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="asset/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="asset/js/demo.js"></script>

</html>
