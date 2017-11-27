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
	
	<?php echo "marka"; 

	echo "<table border=1>";


	echo "<th>ID</th><th>MARKA ADI</th><th>E-KATEGORİ ID</th>";

	$query = $pdo->query("SELECT * FROM marka", PDO::FETCH_ASSOC);

	foreach( $query as $row ){

		//echo $row['username']."<br>";
		echo "<tr><td>".$row['id']."</td><td>".$row['marka_id']."</td><td>".$row['kategori_id']."</td>";

		?>


		<td><a href="sil.php?id=<?php echo $row['id']; ?>">SİL</a></td>
		<td><a href="guncelle.php?id=<?php echo $row['id'] ; ?>">GUNCELLE</a></td></tr>

		<?php

	}
		echo "</table>";
		?>
		<button  onclick="location.href='ekle.php'" type="button">EKLE</button>


</body>
</html>