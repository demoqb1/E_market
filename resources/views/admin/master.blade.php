<!DOCTYPE html>
<html>
  <head>
    <!-- <base href=""> -->
    <meta charset="UTF-8">
    <title>Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="{{url('/public')}}/AdminLTE-master/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{url('/public')}}/AdminLTE-master/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="{{url('/public')}}/AdminLTE-master/dist/css/skins/skin-blue.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the
  desired effect
  |---------------------------------------------------------|
  | SKINS         | skin-blue                               |
  |               | skin-black                              |
  |               | skin-purple                             |
  |               | skin-yellow                             |
  |               | skin-red                                |
  |               | skin-green                              |
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |
  |               | sidebar-mini                            |
  |---------------------------------------------------------|
  -->
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="{{url('/backend')}}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>Ad</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">Admin</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
         
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <!--  -->
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="{{url('')}}/uploads/{{Auth::user()->image}}" class="user-image" alt="User Image" />
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs">{{Auth::user()->email}}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="{{url('')}}/uploads/{{Auth::user()->image}}" class="img-circle" alt="User Image" />
                    <p>
                        
                      <small>Hello World</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <ul class="nav navbar-nav navbar-right" style="margin-right: 10px">
        
                       <li class="dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
                         <ul class="dropdown-menu">
                           <li><a href="#">Thông tin</a></li>
                           <li><a href="{{route('logout')}}">Thoát tài khoản</a></li>
                         </ul>
                       </li>
                     </ul>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{url('')}}/uploads/{{Auth::user()->image}}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>{{Auth::user()->name}}</p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          <!-- search form (Optional) -->
           <div class="header-contact">
                            <div class="widget widget-search">
                                        <form  method="get"  action="{{route('search-admin')}}">
                                            @csrf
                                            <input type="search" class="form-control" placeholder="Nhập Từ Khóa" name="key" >
                                            <button type="submit" class="search-submit" title="Search">
                                                <i class="fa fa-search"></i>
                                                <span class="sr-only">Tìm kiếm</span>
                                            </button>
                                        </form>
                                    </div>
                        </div><!-- End .header-contact -->
          <!-- /.search form -->

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">Danh sách danh mục</li>
            <!-- Optionally, you can add icons to the links -->
            >
            
            <li class="treeview">
              <a href="#"><i class="fa fa-folder"></i> <span>Quản Lý Danh Mục</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="{{Route('category')}}"><i class="fa fa-location-arrow"> </i>Thêm mới </a></li>
                <li><a href=""><i class="fa fa-location-arrow"> </i>Danh sách</a></li>
                
              </ul>
            </li>

            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-tree-deciduous"></i> <span>Quản Lý Sản Phẩm </span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="{{Route('listproduct')}}"><i class="fa fa-location-arrow"> </i>Thêm mới </a></li>
                <li><a href="{{Route('listDetail')}}"><i class="fa fa-location-arrow"> </i>Danh sách</a></li>
                
              </ul>
            </li>

            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-user"></i> <span>Quản Lý Người Dùng </span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="{{Route('add-account')}}"><i class="fa fa-location-arrow"> </i>Thêm mới </a></li>
                <li><a href="{{Route('account')}}"><i class="fa fa-location-arrow"> </i>Danh sách</a></li>
                
              </ul>
            </li>

            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-lock"></i> <span>Quản Lý Đơn Hàng </span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="{{Route('order')}}"><i class="fa fa-location-arrow"> </i>Danh Sách </a></li>
                
              </ul>
            </li>
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Chào mừng đến với trang quản trị của Website AiO
            <small> Nhóm 3 PHP1904LM </small>

           <!--  <H1>Welcome to {{Auth::user()->name}} Page Admin </H1> -->
           
          </h1>
          
        </section>

        <!-- Main content -->
        <section class="content">

           @yield('main')

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
          Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2015 <a href="#">Company</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane active" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked />
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->

        <!-- sự kiện bật hộp toggle khi click mở ảnh -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->
    <div class="modal fade" id="modal-file">
  <div class="modal-dialog" style ="width:90%">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Quản Lý Ảnh</h4>
      </div>
      <div class="modal-body">
        <iframe src="{{url('/')}}/filemanager/dialog.php?field_id=image" style ="width:100%;height:500px;border:0px"  ></iframe>
        <!-- src là đường dẫn dến file quản lý./ và thêm tham số ?field_id=image đổi trường ảnh thành image để lấy tên ảnh đưa vào db -->
      </div>
      
    </div>
  </div>
</div>

<div class="modal fade" id="modal-file-list">
  <div class="modal-dialog" style ="width:90%">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Quản Lý Ảnh</h4>
      </div>
      <div class="modal-body">
        <iframe src="{{url('/')}}/filemanager/dialog.php?field_id=imageList" style ="width:100%;height:500px;border:0px"  ></iframe>
        <!-- src là đường dẫn dến file quản lý./ và thêm tham số ?field_id=image đổi trường ảnh thành image để lấy tên ảnh đưa vào db -->
      </div>
      
    </div>
  </div>
</div>

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="{{url('/public')}}/AdminLTE-master/plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{url('/public')}}/AdminLTE-master/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="{{url('/public')}}/AdminLTE-master/dist/js/app.min.js" type="text/javascript"></script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
          Both of these plugins are recommended to enhance the
          user experience. Slimscroll is required when using the
          fixed layout. -->
          <script>
    $ ('#modal-file').on('hide.bs.modal',function(event) {
      var img= $('#image').val();
      // lấy giá trị của id tên là image
      // alert(img);
      $('#showImg').attr('src', img);
      // hiển thị ra bên ngoài 
      /* Act on the event */
    });
  </script>

  <script>
    $ ('#modal-file-list').on('hide.bs.modal',function(event) {
      var img2= $('#imageList').val();
      // alert('dsdd');
      //chuyển chuỗi nhiều ảnh sang dạng json
      // $('#showImg').attr('src', img);
      var image = $.parseJSON(img2);
      // console.log(img);
      _html = '';
      for (var i = 0; i < image.length; i++) {
      _html+='<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 thumbnail">';
       _html+='<img src="'+image[i]+'" alt="">';
       _html+='</div>';
      }
      $('.ListShow').html(_html); 
    });
   
  </script>
  </body>
</html>
