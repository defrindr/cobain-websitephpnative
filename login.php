<?php
  include('config/koneksi.php');
 ?>
<html>
<head>
  <title>LOGIN</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
 <!-- Font Awesome -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
 <!-- Ionicons -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
 <!-- jQuery 2.2.3 -->
 <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
 <!-- Bootstrap 3.3.6 -->
 <script src="bootstrap/js/bootstrap.min.js"></script>
 <!-- FastClick -->
 <script src="plugins/fastclick/fastclick.js"></script>
 <style>
 	input{
 		margin: 12px 0;
 		border-radius: 12px !important;
 	}
 </style>
</head>
<body>
	<div class="container">
		<form action="proses/cek-login.php" method="POST" class="form">
			<input type="text" name="username" id="username" class="form-control">

			<input type="password" name="password" id="password" class="form-control">

			<div class="form-group">
				<button class="btn btn-info btn-block">Login</button>
			</div>
		</form>
		
	</div>
</body>
</html>