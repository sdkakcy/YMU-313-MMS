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
	
	<form action="kategori_ekleniyor.php" method="POST">

		<!- İnputlar ->
		<label>Kategori Adı :</label> <input type="text" name="kategori_adi"/>
		<label>Ebeveyn ID :</label> <input type="text" name="ebeveyn_id"/>

		<!- Buton ->
		<input type="submit" name="EKLE" />
	</form>

	
</body>
</html>