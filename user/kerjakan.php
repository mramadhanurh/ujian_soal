<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="template/production/images/favicon.ico" type="image/ico" />

    <title>Halaman User</title>

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
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>User</span></a>
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
                  <li><a href="halaman_user.php"><i class="fa fa-th-large"></i>Dashboard</a></li>
                  <li><a href="ujian.php"><i class="fa fa-check-square"></i>Ujian</a></li>
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
                <h3>Ujian</h3>
              </div>
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
              <p id="demo"></p>
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Default Example <small>Ujian</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix">
                    </div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                        <div class="col-sm-12">
                        <?php
                            include "../koneksi.php";

                            $query  =mysqli_query($koneksi, "SELECT * FROM soal,ujian,pelajaran WHERE soal.id_pel=ujian.id_pel=pelajaran.id_pel ORDER BY rand()");
                            $jumlah =mysqli_num_rows($query);
                            $no = 0;
                            while($data = mysqli_fetch_array($query)){
                            $no++
                        ?>
                        <form action="jawab.php" method="POST">
                            <input type="hidden" name="id[]" value="<?php echo $data['id_soal']; ?>">
                            <input type="hidden" name="jumlah" value="<?php echo $jumlah; ?>">
                            <tr>
                                <td><?php echo $no?>.</td>
                                <td><?php echo $data['soal'];?></td>
                            </tr><br><br>
                            <tr>
                                <td></td>
                                <td>A. <input name="pilihan[<?php echo $data['id_soal']?>]" type="radio" value="pil_a"> <?php echo $data['pil_a'];?></td>
                            </tr><br>
                            <tr>
                                <td></td>
                                <td>B. <input name="pilihan[<?php echo $data['id_soal']?>]" type="radio" value="pil_b"> <?php echo $data['pil_b'];?></td>
                            </tr><br>
                            <tr>
                                <td></td>
                                <td>C. <input name="pilihan[<?php echo $data['id_soal']?>]" type="radio" value="pil_c"> <?php echo $data['pil_c'];?></td>
                            </tr><br>
                            <tr>
                                <td></td>
                                <td>D. <input name="pilihan[<?php echo $data['id_soal']?>]" type="radio" value="pil_d"> <?php echo $data['pil_d'];?></td>
                            </tr><br>
                            <tr>
                                <td></td>
                                <td>E. <input name="pilihan[<?php echo $data['id_soal']?>]" type="radio" value="pil_e"> <?php echo $data['pil_e'];?></td>
                            </tr><br><br><br>
                            <?php
                            }
                            ?>
                            <tr>
                                <td height="40"></td>
                                <td>
                                    <input type="submit" name="submit" value="Jawab" onclick="return confirm('Perhatian! Apakah Anda sudah yakin dengan semua jawaban Anda?')">
                                    <input type="reset" value="Reset">
                                </td>
                            </tr>
                        </form>
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

              <script>
              // Tetapkan tanggal kita menghitung mundur
              var countDownDate = new Date("june 17, 2022 11:52:50").getTime();

              // Perbarui hitungan mundur setiap 1 detik
              var x = setInterval(function() {

                // Dapatkan tanggal dan waktu hari ini
                var now = new Date().getTime();
                  
                // Temukan jarak antara sekarang dan tanggal hitung mundur
                var distance = countDownDate - now;
                  
                // Perhitungan waktu untuk hari, jam, menit dan detik
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                  
                // Keluarkan hasil dalam elemen dengan id = "demo"
                document.getElementById("demo").innerHTML = days + "d " + hours + "h "
                + minutes + "m " + seconds + "s ";
                  
                //Jika hitungan mundur selesai, tulis beberapa teks
                if (distance < 0) {
                  clearInterval(x);
                  history.back()
                }
              }, 1000);
              </script>
	
  </body>
</html>
