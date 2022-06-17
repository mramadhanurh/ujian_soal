<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="../template/production/images/favicon.ico" type="image/ico" />

    <title>Halaman Admin</title>

    <!-- Bootstrap -->
    <link href="../template/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../template/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../template/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../template/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../template/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../template/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../template/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../template/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <?php 
        session_start();
    
        // cek apakah yang mengakses halaman ini sudah login
        if($_SESSION['level']==""){
            header("location:index.php?pesan=gagal");
        }
    
    ?>
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Admin</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="../template/production/images/iconuser.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo ucfirst($_SESSION['username']); ?> (<?php echo $_SESSION['level']; ?>)</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a href="halaman_admin.php"><i class="fa fa-home"></i>Dashboard</a></li>
                    <li><a href="pelajaran.php"><i class="fa fa-file-text-o"></i>Pelajaran</a></li>
                    <li><a href="soal.php"><i class="fa fa-list-alt"></i>Soal</a></li>
                    <li><a href="ujian.php"><i class="fa fa-rocket"></i>Ujian</a></li>
                    <li><a href="user.php"><i class="fa fa-user"></i>User</a></li>
                </ul>
              </div>
            
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="../logout.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="../template/production/images/iconuser.jpg" alt=""><?php echo ucfirst($_SESSION['username']); ?>
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="../logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>

                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>User</h3>
              </div>
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <a href="user_tambah.php"><button class="fa fa-plus-square-o btn btn-primary float-right" type="button"> Tambah</button></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Default Example <small>User</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th width="15px">No.</th>
                          <th>Nama</th>
                          <th>Username</th>
                          <th width="15px">Level</th>
                          <th class="text-center">Aksi</th>
                        </tr>
                        <?php
                        include '../koneksi.php';
                        $no = 1;
                        $data = mysqli_query($koneksi,"select * from user");
		                    while($u = mysqli_fetch_array($data)){
                        ?>
                      </thead>
                      <tbody>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $u['nama']?></td>
                          <td><?php echo ucfirst($u['username'])?></td>
                          <td><?php echo ucfirst($u['level'])?></td>
                          <td class="text-center">
                            <a href="user_edit.php?id=<?php echo $u['id']; ?>" class="fa fa-pencil-square-o">Edit</a>
                            ||
                            <a href="delete_aksi_user.php?id=<?php echo $u['id']; ?>" class="fa fa-trash">Hapus</a>
                          </td>
                        </tr>
                        <?php
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                  </div>
              </div>
            </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            m.ramadhanur.h
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../template/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../template/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../template/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../template/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../template/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../template/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../template/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../template/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../template/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../template/vendors/Flot/jquery.flot.js"></script>
    <script src="../template/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../template/vendors/Flot/jquery.flot.time.js"></script>
    <script src="../template/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../template/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../template/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../template/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../template/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../template/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../template/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../template/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../template/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../template/vendors/moment/min/moment.min.js"></script>
    <script src="../template/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../template/build/js/custom.min.js"></script>
	
  </body>
</html>
