<html>
	<head>
		<title>Kelola Data Barang</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
		<body>
		<h3><div class= "jdl">KELOLA DATA BARANG</div></h3>
		<br>
		<br>
		
		<table width= 80% height= 5% align="center">
			<tr>
				<td><b> Data Barang</td></b>
				<td><p align="right"><a href = "input.php"><Button class ="btn">Tambah</a></Button>
			</tr>
		
		<br>
		<table width= 80% height= 40% align= "center" border = 1 cellpadding= 0 cellspacing= 0>
			<tr align= "center">
				<td>Kode</td>
				<td>Nama</td>
				<td>Harga</td>
				<td>Aksi</td>
			</tr>
			
			<?php
			//koneksi ke database 
			include ("connect.php");
			//mengambil data dari tabel barang
			$tampil= mysql_query("select * from tbbarang ");
			while ($data = mysql_fetch_array ($tampil)){
			?>
			
			<tr align = "center">
				<td><?php echo $data['kode']; ?> </td>
				<td><?php echo $data['nama']; ?> </td>
				<td><?php echo $data['harga']; ?> </td>
				<td class = "eh"><a href= "edit.php?no=<?php echo $data ['id']; ?>">
				Edit</a> | <a href =" hapus.php?id=<?php echo $data ['id'];?>"> Hapus</a></td>
			</tr>

			
			<?php
			}
			?>
			<?php session_start();
if(!isset($_SESSION['username'])) {
header('location:login.php'); }
else { $username = $_SESSION['username']; }
require_once("config.php");
$query = mysql_query("SELECT * FROM tbl_login WHERE username = '$username'");
$hasil = mysql_fetch_array($query);
?>
			<table align="center">
			<br>
			
			<tr>
			<td><p align="right"><a href = "logout.php"><Button class="btn">LogOut</a></Button>
			</br>
			</td>
			</tr>
		</table>
		
		</table>
			
		
	
</body>
</html>