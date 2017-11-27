<?php include ("database.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<link rel="stylesheet" href="csss/style.css">
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="jss/index.js"></script>

</head>
<body>

	<form action="urun_kontrol_ekleniyor.php" method="POST">

		<!- İnputlar ->
		<label>Sube ID :</label> <input type="text" name="sube_id"/>
		<label>Urun ID :</label> <input type="text" name="urun_id"/>
		<label>Urun Fiyat :</label> <input type="text" name="urun_fiyat"/>	

		<!- Buton ->
		<input type="submit" name="EKLE" />
	</form>
	
</body>
</html>