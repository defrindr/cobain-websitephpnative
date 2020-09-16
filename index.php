<?php
  include('config/koneksi.php');
  session_start();
  // if(empty($_SESSION['username'])){
  //   echo"<script>alert('harap login')</script>";
  // }
 ?>
<html>
<head>
  <title>Perpus</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
 <!-- Font Awesome -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
 <!-- Ionicons -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
 <!-- jvectormap -->
 <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
 <!-- Theme style -->
 <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
 <!-- AdminLTE Skins. Choose a skin from the css/skins
      folder instead of downloading all of them to reduce the load. -->
 <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
 <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
 <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 <![endif]-->
 <!-- jQuery 2.2.3 -->
 <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
 <!-- Bootstrap 3.3.6 -->
 <script src="bootstrap/js/bootstrap.min.js"></script>
 <!-- FastClick -->
 <script src="plugins/fastclick/fastclick.js"></script>
 <!-- AdminLTE App -->
 <script src="dist/js/app.min.js"></script>
 <!-- Sparkline -->
 <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
 <!-- jvectormap -->
 <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
 <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
 <!-- SlimScroll 1.3.0 -->
 <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
 <!-- ChartJS 1.0.1 -->
 <script src="plugins/chartjs/Chart.min.js"></script>
 <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
 <script src="dist/js/pages/dashboard2.js"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="dist/js/demo.js"></script>
 <style>
 </style>
</head>
<body  class="hold-transition skin-blue layout-boxed sidebar-collapse">
  <div class="wrapper">
    <header class="main-header ">
      <a href="index.php" class="logo">
        <span class="logo-lg" style="font-family:arial-black"><b>PERPUS</b>TAKAAN</span> <span class="logo-sm">PS</span>
      </a>
      <nav class="navbar navbar-static-top">
        <?php
          if(isset($_SESSION['username'])){
            echo "<a href='#' class='sidebar-toggle' data-toggle='offcanvas' role='button'>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                  </a>";
          }
         ?>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li style="display:block"><a href="?page=buku/index">Buku</a></li>
            <li style="display:block"><a href="?page=anggota/index">Anggota</a></li>
            <li style="display:block"><a href="?page=peminjaman/index">Peminjaman</a></li>
            <?php
            if(isset($_SESSION['username'])){
              echo"<li style='display:block'><a href='proses/logout.php'><span class='glyphicon glyphicon-log-out'> Log Out</a></li>";
            }else{
              echo"<li style='display:block'><a href='login.php'><span class='glyphicon glyphicon-log-in'> Log In</a></li>";
            }
            ?>
          </ul>
        </div>
      </nav>
    </header>
    <?php
    if(isset($_SESSION['username'])){
    echo"<aside style='color:white;padding-top:55px;' class='main-sidebar'>
      <center>
      <p>
        <span class='glyphicon glyphicon-time'>".date('d M Y')."
      </p>
      <p>
        <h2>".$_SESSION['username']."</h2>
      </p>
      </center>
    </aside>";
    }
    ?>
    <div class="content-wrapper">
      <?php
        if(isset($_GET['page'])){
          include($_GET['page'].".php");
        }else{
          include("home.php");
        }
        ?>
    </div>
    <div class="footer fixed">
        <center>
      <span style="font-size:22px;color:#fff;margin:4px;font-family:demonized">
        Copyright&copy;2018
      </span>
    </center>
  </div>
</div>
</body>
</html>