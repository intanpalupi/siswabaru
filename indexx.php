<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php 
include("header.php"); // memanggil file header.php
include("koneksi.php"); // memanggil file koneksi.php untuk koneksi ke database
?>
	<!-- Start container -->
	<div class="container">
		<div class="content">
			<div class="jumbotron">
				<h1>Data Mahasiswa v1.0</h1>
				<p>Aplikasi input data mahasiswa menggunakan PHP, MySQLi dan bootstrap.</p>
				<a href="data.php" data-toggle="tooltip" title="Lihat Data Mahasiswa" class="btn btn-info" role="button"><span class="glyphicon glyphicon-list"></span> Lihat Data Mahasiswa</a>
				<a href="tambah.php" data-toggle="tooltip" title="Tambah Data Mahasiswa" class="btn btn-success" role="button"><span class="glyphicon glyphicon-user"></span> Tambah Data</a>
			</div> <!-- /.jumbotron -->
		</div> <!-- /.content -->
	</div>
	<!-- End container -->
<?php 
include("footer.php"); // memanggil file footer.php
?>
</body>
</html>