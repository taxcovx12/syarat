<!DOCTYPE html>
<html>
<head>
	<title>persyaratan</title>
</head>
<body>
	<h1>Menghitung berapa angka 17 yang muncul dari 1 s/d 100000000</h1>
	<?php 

		for ($i=1; $i < 100; $i++) { 
			$a ="$i";
			$pecah = str_split($a, 2);

			for ($z=0; $z < count($pecah) ; $z++) { 
				echo "<br>";
			}
			echo "howsdf you can do it here now ";
		}


	 ?>	
</body>
</html>