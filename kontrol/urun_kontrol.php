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
	<button  onclick="location.href='urun_kontrol_ekle.php'" type="button">EKLE</button>
	
	<?php echo "urun kontrol"; 

	echo "<table border=1>";


	echo "<th>ID</th><th>SUBE ID</th><th>URUN ID</th><th>URUN FİYAT</th>";

	$query = $pdo->query("SELECT * FROM urun_kontrol", PDO::FETCH_ASSOC);

	foreach( $query as $row ){

		//echo $row['username']."<br>";
		echo "<tr><td>".$row['id']."</td><td>".$row['sube_id']."</td><td>".$row['urun_id']."</td><td>".$row['urun_fiyat']."</td>";

		?>


		<td><a href="urun_kontrol_sil.php?id=<?php echo $row['id']; ?>">SİL</a></td>
		<td><a href="urun_kontrol_guncelle.php?id=<?php echo $row['id'] ; ?>">GUNCELLE</a></td></tr>

		<?php

	}
		echo "</table>";
		?>
		


</body>
</html>