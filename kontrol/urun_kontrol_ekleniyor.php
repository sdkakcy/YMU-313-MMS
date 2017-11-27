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


		try {
	        $statement = $pdo->prepare("INSERT INTO urun_kontrol(sube_id,urun_id,urun_fiyat) VALUES(?,?,?)");
	        $statement->execute(array($sube_id  ,$urun_id, $urun_fiyat));
	        echo "Veri ekleme işlemi gerçekleşti!";
	    } catch(PDOException $e) {
	        echo $e->getMessage();
	    }
	}
	
	header("refresh:3;url=urun_kontrol.php");

	?>
	
</body>
</html>