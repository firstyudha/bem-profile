<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:index.php?pesan=belum_login");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN | BEM</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>
<body>

	<div class="navbar navbar-default navbar-fixed-top btn-primary">
		<div class="row">
			<div class="col" style="display: flex; justify-content:space-between; ">
				<h3 style="margin-left: 5%;">BEM | <strong>PLB</strong></h3>
				<h3 style="margin-right: 5%;"><a href="backend/logout.php">Logout</a></h3>
			</div>
		</div>
			
	</div>

	<br><br>

	<br>
	

	<div class="container">
		<br><br>
			<h3>Kritik dan Saran</h3>
		<br><br>
		<table  class="table table-striped">
			<tr>
				<th>No</th>
				<th>NIM</th>
				<th>Nama</th>
				<th>Kritik atau Saran</th>
				<th>Diterima</th>
			</tr>
        
            
			<?php

			include 'backend/database.php';
			$data = mysqli_query($koneksi,"SELECT * FROM kritik");
			$i = 1;
			while ($t = mysqli_fetch_array($data)){
			?>
    
	       <tr>		
				<td><?= $i++; ?></td>
				<td><?= $t['nim'] ?></td>
				<td><?= $t['nama'] ?></td>
				<td><?= $t['kritik'] ?></td>
				<td><?= $t['diterima'] ?></td>
			</tr>
			<?php } ?>
            

			
		</table>
	</div>

	

	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
							  
</body>
</html>