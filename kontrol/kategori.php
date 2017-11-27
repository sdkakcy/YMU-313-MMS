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

	<button  onclick="location.href='hy.php'" type="button">GOSTER</button>

	<button  onclick="location.href='kategori_ekle.php'" type="button">EKLE</button>

	<?php echo "kategori"; 


	echo "<table border=1>";


	echo "<th>ID</th><th>KATEGORİ ADİ</th><th>EBEVENY ID</th>";

	$query = $pdo->query("SELECT * FROM kategori", PDO::FETCH_ASSOC);

	foreach( $query as $row ){

		//echo $row['username']."<br>";
		echo "<tr><td>".$row['id']."</td><td>".$row['kategori_adi']."</td><td>".$row['ebeveyn_id']."</td>";

		?>


		<td><a href="kategori_sil.php?id=<?php echo $row['id']; ?>">SİL</a></td>
		<td><a href="kategori_guncelle.php?id=<?php echo $row['id'] ; ?>">GUNCELLE</a></td></tr>

		<?php

	}
		echo "</table>";
		?>
</body>
</html>