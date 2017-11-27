<?php include ("database.php"); ?>
<!DOCTYPE html>
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

	<?php

	//echo "güncelle";

	$id = $_GET['id'];
	
	//echo "$id";

?>

	<!- ekle.php değer gönderiyor ->
	<form action="kategori_guncelleniyor.php" method="POST">

		<!- İnputlar ->
		<label>Kategori Adı:  </label>  <input type="text" name="kategori_adi"/>
		<label>Ebeveyn ID :		  </label>  <input type="text" name="ebeveyn_id"/>
		<input type='hidden' name='id' value='<?php echo $id ?>'>

		<!- Buton ->
		<input type="submit" name="	GÜNCELLE" />
	</form>
	
</body>
</html>