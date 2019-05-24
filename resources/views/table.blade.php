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
                    Baju danus
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="/dashAdmin">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="/pengguna">
                        <i class="ti-user"></i>
                        <p>User Table</p>
                    </a>
                </li>
                <li class="active">
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
                    <a class="navbar-brand" href="#">Table List</a>
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
                                <h4 class="title">Table Category</h4>
                                <p class="category">Daftar kategori Sampah</p>
                            </div>
					<div class="content table-responsive table-full-width">
	         <table class="table table-striped">
			      <tr>
			        <th width="150px">No</th>
			        <th>Jenis</th>
			        <th>Harga</th>
			        <th>Update</th>
			        <th class="text-center" width="150px">
			          <a href="#" class="create-modal btn btn-success btn-sm">
			            <i class="glyphicon glyphicon-plus"></i>
			          </a>
			        </th>
			      </tr>
			      {{ csrf_field() }}
			      <?php  $no = 1; ?>
			      @foreach ($post as $value)
			        <tr class="post{{$value->id}}">
			          <td>{{ $no++ }}</td>
			          <td>{{ $value->title }}</td>
			          <td>{{ $value->body }}</td>
			          <td>{{ $value->created_at }}</td>
			          <td>
			            <a href="#" class="show-modal btn btn-info btn-sm" data-id="{{$value->id}}" data-title="{{$value->title}}" data-body="{{$value->body}}">
			              <i class="fa fa-eye"></i>
			            </a>
			            <a href="#" class="edit-modal btn btn-warning btn-sm" data-id="{{$value->id}}" data-title="{{$value->title}}" data-body="{{$value->body}}">
			              <i class="glyphicon glyphicon-pencil"></i>
			            </a>
			            <a href="#" class="delete-modal btn btn-danger btn-sm" data-id="{{$value->id}}" data-title="{{$value->title}}" data-body="{{$value->body}}">
			              <i class="glyphicon glyphicon-trash"></i>
			            </a>
			          </td>
			        </tr>
			      @endforeach
			    </table>
			  </div>
			  {{$post->links()}}
			</div>
			{{-- Modal Form Create Post --}}
			<div id="create" class="modal" role="dialog" data-backdrop="false">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title"></h4>
			      </div>
			      <div class="modal-body">
			        <form class="form-horizontal" role="form">
			          <div class="form-group row add">
			            <label class="control-label col-sm-2" for="title">Jenis :</label>
			            <div class="col-sm-10">
			              <input type="text" class="form-control" id="title" name="title"
			              placeholder="Masukan Jenis Sampah" required>
			              <p class="error text-center alert alert-danger hidden"></p>
			            </div>
			          </div>
			          <div class="form-group">
			            <label class="control-label col-sm-2" for="body">Harga :</label>
			            <div class="col-sm-10">
			              <input type="text" class="form-control" id="body" name="body"
			              placeholder="Masukan Harga Sampah" required>
			              <p class="error text-center alert alert-danger hidden"></p>
			            </div>
			          </div>
			        </form>
			      </div>
			          <div class="modal-footer">
			            <button class="btn btn-warning" type="submit" id="add">
			              <span class="glyphicon glyphicon-plus"></span>Simpan
			            </button>
			            <button class="btn btn-warning" type="button"   data-dismiss="modal">
			              <span class="glyphicon glyphicon-remobe"></span>Tutup
			            </button>
			          </div>
			    </div>
			  </div>
			</div></div>
			{{-- Modal Form Show POST --}}
			<div id="show" class="modal" role="dialog" data-backdrop="false">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title"></h4>
			                  </div>
			                    <div class="modal-body">
			                    <div class="form-group">
			                      <label for="">ID :</label>
			                      <b id="i"/>
			                    </div>
			                    <div class="form-group">
			                      <label for="">Jenis :</label>
			                      <b id="ti"/>
			                    </div>
			                    <div class="form-group">
			                      <label for="">Harga :</label>
			                      <b id="by"/>
			                    </div>
			                    </div>
			                    </div>
			                  </div>
			                  </div>

			{{-- Modal Form Edit and Delete Post --}}
			<div id="myModal"class="modal" role="dialog" data-backdrop="false">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title"></h4>
			      </div>
			      <div class="modal-body">
			        <form class="form-horizontal" role="modal">

			          <div class="form-group">
			            <label class="control-label col-sm-2"for="id">ID</label>
			            <div class="col-sm-10">
			              <input type="text" class="form-control" id="fid" disabled>
			            </div>
			          </div>

			          <div class="form-group">
			            <label class="control-label col-sm-2"for="title">Jenis</label>
			            <div class="col-sm-10">
			            <input type="name" class="form-control" id="t">
			            </div>
			          </div>

			          <div class="form-group">
			            <label class="control-label col-sm-2"for="body">Harga</label>
			            <div class="col-sm-10">
			            <textarea type="name" class="form-control" id="b"></textarea>
			            </div>
			          </div>
			        </form>
			                {{-- Form Delete Post --}}
			        <div class="deleteContent">
			          Apakah anda ingin menghapus? <span class="title"></span>?
			          <span class="hidden id"></span>
			        </div>

			      </div>
			      <div class="modal-footer">

			        <button type="button" class="btn actionBtn" data-dismiss="modal">
			          <span id="footer_action_button" class="glyphicon"></span>
			        </button>

			        <button type="button" class="btn btn-warning" data-dismiss="modal">
			          <span class="glyphicon glyphicon"></span>tutup
			        </button>
			      </div>
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


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script type="text/javascript">
	{{-- ajax Form Add Post--}}
	  $(document).on('click','.create-modal', function() {
	    $('#create').modal('show');
	    $('.form-horizontal').show();
	    $('.modal-title').text('Data Sampah');
	  });
	  $("#add").click(function() {
	    $.ajax({
	      type: 'POST',
	      url: 'addPost',
	      data: {
	        '_token': $('input[name=_token]').val(),
	        'title': $('input[name=title]').val(),
	        'body': $('input[name=body]').val()
	      },
	      success: function(data){
	        if ((data.errors)) {
	          $('.error').removeClass('hidden');
	          $('.error').text(data.errors.title);
	          $('.error').text(data.errors.body);
	        } else {
	          $('.error').remove();
	          $('#table').append("<tr class='post" + data.id + "'>"+
	          "<td>" + data.id + "</td>"+
	          "<td>" + data.title + "</td>"+
	          "<td>" + data.body + "</td>"+
	          "<td>" + data.created_at + "</td>"+
	          "<td><button class='show-modal btn btn-info btn-sm' data-id='" + data.id + "' data-title='" + data.title + "' data-body='" + data.body + "'><span class='fa fa-eye'></span></button> <button class='edit-modal btn btn-warning btn-sm' data-id='" + data.id + "' data-title='" + data.title + "' data-body='" + data.body + "'><span class='glyphicon glyphicon-pencil'></span></button> <button class='delete-modal btn btn-danger btn-sm' data-id='" + data.id + "' data-title='" + data.title + "' data-body='" + data.body + "'><span class='glyphicon glyphicon-trash'></span></button></td>"+
	          "</tr>");
	        }
	      },
	    });
	    $('#title').val('');
	    $('#body').val('');
	  });

	// function Edit POST
	$(document).on('click', '.edit-modal', function() {
	$('#footer_action_button').text(" Update Post");
	$('#footer_action_button').addClass('glyphicon-check');
	$('#footer_action_button').removeClass('glyphicon-trash');
	$('.actionBtn').addClass('btn-success');
	$('.actionBtn').removeClass('btn-danger');
	$('.actionBtn').addClass('edit');
	$('.modal-title').text('Edit');
	$('.deleteContent').hide();
	$('.form-horizontal').show();
	$('#fid').val($(this).data('id'));
	$('#t').val($(this).data('title'));
	$('#b').val($(this).data('body'));
	$('#myModal').modal('show');
	});

	$('.modal-footer').on('click', '.edit', function() {
	  $.ajax({
	    type: 'POST',
	    url: 'editPost',
	    data: {
	'_token': $('input[name=_token]').val(),
	'id': $("#fid").val(),
	'title': $('#t').val(),
	'body': $('#b').val()
	},
	success: function(data) {
	      $('.post' + data.id).replaceWith(" "+
	      "<tr class='post" + data.id + "'>"+
	      "<td>" + data.id + "</td>"+
	      "<td>" + data.title + "</td>"+
	      "<td>" + data.body + "</td>"+
	      "<td>" + data.created_at + "</td>"+
	 "<td><button class='show-modal btn btn-info btn-sm' data-id='" + data.id + "' data-title='" + data.title + "' data-body='" + data.body + "'><span class='fa fa-eye'></span></button> <button class='edit-modal btn btn-warning btn-sm' data-id='" + data.id + "' data-title='" + data.title + "' data-body='" + data.body + "'><span class='glyphicon glyphicon-pencil'></span></button> <button class='delete-modal btn btn-danger btn-sm' data-id='" + data.id + "' data-title='" + data.title + "' data-body='" + data.body + "'><span class='glyphicon glyphicon-trash'></span></button></td>"+
	      "</tr>");
	    }
	  });
	});


	// form Delete function
	$(document).on('click', '.delete-modal', function() {
	$('#footer_action_button').text(" Delete");
	$('#footer_action_button').removeClass('glyphicon-check');
	$('#footer_action_button').addClass('glyphicon-trash');
	$('.actionBtn').removeClass('btn-success');
	$('.actionBtn').addClass('btn-danger');
	$('.actionBtn').addClass('delete');
	$('.modal-title').text('Hapus');
	$('.id').text($(this).data('id'));
	$('.deleteContent').show();
	$('.form-horizontal').hide();
	$('.title').html($(this).data('title'));
	$('#myModal').modal('show');
	});

	$('.modal-footer').on('click', '.delete', function(){
	  $.ajax({
	    type: 'POST',
	    url: 'deletePost',
	    data: {
	      '_token': $('input[name=_token]').val(),
	      'id': $('.id').text()
	    },
	    success: function(data){
	       $('.post' + $('.id').text()).remove();
	    }
	  });
	});

	  // Show function
	  $(document).on('click', '.show-modal', function() {
	  $('#show').modal('show');
	  $('#i').text($(this).data('id'));
	  $('#ti').text($(this).data('title'));
	  $('#by').text($(this).data('body'));
	  $('.modal-title').text('Detail Sampah');
	  });
	</script>

</html>
