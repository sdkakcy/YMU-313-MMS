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
	
	<form action="urun_ekleniyor.php" method="POST">

		<!- İnputlar ->
		<label>Urun Barkod :</label> <input type="text" name="urun_barkod"/>
		<label>Urun Adı :</label> <input type="text" name="urun_adi"/>
		<label>Urun Ağırlığı :</label> <input type="text" name="urun_agirligi"/>
		<label>Urun Adet :</label> <input type="text" name="urun_adet"/>
		<label>Marka ID :</label> <input type="text" name="marka_id"/>



		<!- Buton ->
		<input type="submit" name="EKLE" />
	</form>

	
</body>
</html>