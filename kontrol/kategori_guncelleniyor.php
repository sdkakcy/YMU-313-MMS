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
	
	if($_POST)
	{

		$kategori_adi = $_POST["kategori_adi"];
		$ebeveyn_id = $_POST["ebeveyn_id"];
		$id 	  = $_POST["id"];


		$query = $pdo->prepare("UPDATE kategori SET kategori_adi =?, ebeveyn_id =? WHERE id=?"); 
		$update = $query->execute(array( $kategori_adi, $ebeveyn_id ,  $id )); 
		if ( $update ){ 
			echo "Veri güncelleme işlemi gerçekleşti!";

		}
	}

	header("refresh:3;url=kategori.php");


?>
	
</body>
</html>