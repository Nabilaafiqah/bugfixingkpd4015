<html>

	<title>PHP-Timbangan</title>

<body>
	<form action="PHP_timbangan.php" method="POST">Masukkan berat anda <input type="TEXT" name="nilai" value="0">  <input type="submit" value="Hasil" />
	</form>

	<?php
	if (POST [nilai] >= 80) //kesalahan
	{
		$result = "Anda Berat"
	}
	Else
	{
		$result = "Berat Anda Adalah Normal";
	}

	>   //kesalahan pada penutup
	Mesej UNtuk Anda :
	<?php
	echo "$result";
	?>

</body>
</html>
