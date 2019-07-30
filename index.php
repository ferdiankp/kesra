<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Kesra</title>
		<meta name="Description" content="WebDesign dengan sistem Responsive">
		<meta name="Keywords" content="feriweb,surabaya,indonesia">
		<meta name="Distribution" content="Global">
		<meta name="Author" content="">
		<meta name="Robots" content="index,follow">
		<link rel="shortcut icon" href="20190701.ico">
		<link rel="stylesheet" href="images/administrator.css" type="text/css">
		<link rel="stylesheet" href="images/bootstrap.min.css" type="text/css">
		<style>
			body
			{
				margin: 0px;
				padding: 0px;
				font-size : 11px;
				font-family : Arial Black, Helvetica, sans-serif;
				color : #000000;
				background: url(images/BalaiKota.jpg) no-repeat center center fixed; 
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
			}
			div.img
			{
				text-align: center;
			    margin: 25px;
			    padding: 10px;
			    float: left;
			    width: 100px;
			    height: 100px;
			}

			div.img:hover
			{
			 	<!-- border: 1px solid #777; -->
			    width: 100px;
			    height: 100px;
			}

			div.img img
			{
			    width: 100%;
			    height: 100%;
			}
		</style>
	</head>
	<body>
		<section>
			<div class="judul"><br><b>MANAGEMENT SYSTEM DATABASE<br><br>BAGIAN ADMINISTRASI KESEJAHTERAAN RAKYAT PEMERINTAH KOTA SURABAYA</b></div> 
			<div class="judul2"><br></div> 
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<?php
						$rep=opendir('./');
						$warna = '';
						$no = 1;
						while ($file = readdir($rep))
						{
							if($file != '..' && $file !='.' && $file !=''&& $file !='Thumbs.db'&& $file !='.git'&& $file !='images'&& $file !='databases'&& $file !='includes'&& $file !='bahan')
							{
								if (is_dir($file))
								{
									echo '<div class="img">
										<a href="./'.$file.'"><img class="example-image" src="images/'.$file.'.png" alt="" width="300" height="200"/></a>
										<div class="judul3">'.strtoupper($file).'</div>
									</div>';
									continue;
								} else
								{
									continue;
								}
							}
						}
					?>
				</div>
			</div>
			<!--<?php
				echo '<h3><a href="../">Kembali</a></h3>';
			?>-->
		</section>
	</body>
</html>