<?php 
	include 'database.php';
	$makanan = $_POST['makanan'];
	$jumlah_dipilih = count($makanan);
	 
	for($x=0;$x<$jumlah_dipilih;$x++){
		mysql_query("INSERT INTO makanan values('','$makanan[$x]')");
	}
 
header("location:index.php");
 
?> 