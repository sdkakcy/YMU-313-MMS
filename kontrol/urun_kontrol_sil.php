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

	$query = $pdo->prepare("DELETE FROM urun_kontrol WHERE id = :id"); 
	$delete = $query->execute(array( "id" => $_GET['id'] ));
	if ( $delete ){ 
		echo "Veri silme işlemi gerçekleşti!";
	}
	
	header("refresh:3;url=urun_kontrol.php");
	
	?>
	
</body>
</html>