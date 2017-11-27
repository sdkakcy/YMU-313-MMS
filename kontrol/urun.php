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

	<button  onclick="location.href='urun_ekle.php'" type="button">EKLE</button>

	<?php echo "urun"; 

	echo "<table border=1>";


	echo "<th>ID</th><th>URUN BARKOD</th><th>URUN ADI</th><th>URUN AĞIRLIĞI</th><th>URUN ADET</th><th>E-MARKA ID</th>";

	$query = $pdo->query("SELECT * FROM urun", PDO::FETCH_ASSOC);

	foreach( $query as $row ){

		//echo $row['username']."<br>";
		echo "<tr><td>".$row['id']."</td><td>".$row['urun_barkod']."</td><td>".$row['urun_adi']."</td><td>".$row['urun_agirligi']."</td><td>".$row['urun_adet']."</td><td>".$row['marka_id']."</td>";

		?>


		<td><a href="urun_sil.php?id=<?php echo $row['id']; ?>">SİL</a></td>
		<td><a href="urun_guncelle.php?id=<?php echo $row['id'] ; ?>">GUNCELLE</a></td></tr>

		<?php

	}
		echo "</table>";
		?>
		

	
</body>
</html>