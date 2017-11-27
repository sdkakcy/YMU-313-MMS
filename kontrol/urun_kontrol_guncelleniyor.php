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
	
	<?php
	
	if($_POST)
	{

		$sube_id = $_POST["sube_id"];
		$urun_id = $_POST["urun_id"];
		$urun_fiyat = $_POST["urun_fiyat"];
		$id 	  = $_POST["id"];


		$query = $pdo->prepare("UPDATE urun_kontrol SET sube_id =?, urun_id =?, urun_fiyat =?  WHERE id=?"); 
		$update = $query->execute(array( $sube_id, $urun_id , $urun_fiyat ,  $id )); 
		if ( $update ){ 
			echo "Veri güncelleme işlemi gerçekleşti!";

		}
	}

	header("refresh:3;url=urun_kontrol.php");
	?>

</body>
</html>