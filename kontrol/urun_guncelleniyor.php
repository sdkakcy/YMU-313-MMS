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

		$urun_barkod = $_POST["urun_barkod"];
		$urun_adi = $_POST["urun_adi"];
		$urun_agirligi = $_POST["urun_agirligi"];
		$urun_adet = $_POST["urun_adet"];
		$marka_id = $_POST["marka_id"];
		$id 	  = $_POST["id"];


		$query = $pdo->prepare("UPDATE urun SET urun_barkod =?, urun_adi =?, urun_agirligi =?, urun_adet =?, marka_id =? WHERE id=?"); 
		$update = $query->execute(array( $urun_barkod, $urun_adi ,$urun_agirligi ,$urun_adet ,$marka_id ,  $id )); 
		if ( $update ){ 
			echo "Veri güncelleme işlemi gerçekleşti!";

		}
	}

	header("refresh:3;url=urun.php");


?>

</body>
</html>