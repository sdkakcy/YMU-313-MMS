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

		$kategori_adi = $_POST["kategori_adi"];
		$ebeveyn_id = $_POST["ebeveyn_id"];


		try {
	        $statement = $pdo->prepare("INSERT INTO kategori(kategori_adi,ebeveyn_id) VALUES(?,?)");
	        $statement->execute(array($kategori_adi  ,$ebeveyn_id));
	        echo "Veri ekleme işlemi gerçekleşti!";
	    } catch(PDOException $e) {
	        echo $e->getMessage();
	    }
	}
	
	header("refresh:3;url=kategori.php");

	?>
	
</body>
</html>