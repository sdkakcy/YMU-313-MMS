<?php include ("ayarlar.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SECIM</title>
	<?php $aa=15; ?>
	<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
		 $(function()
		 {
		 		var select ="select[name=kategori]";
		 		$(select).change(function()
		 			{
		 				//alert($(this).val());
		 				
		 				var kategori = $(this).val();
		 				var arrayKategori = kategori.split("|");
		 				var idString = arrayKategori[0];
		 				var alt = arrayKategori[1];
		 				//alert(idString + "\n" + alt);
		 				var altKategori = parseInt(alt);
		 				if(altKategori!=0)
		 				{


			 				//idString =id.toString();
			 				var select_name="<select name=\"alt" + idString + "\" size=\"10\"></select>";
			 				var hierarchy_select="select[name=alt" + idString + "]";
			 				var id=parseInt(idString);
			 				alert(select + "\n" + select_name + "\n" + hierarchy_select);

			 				$(hierarchy_select).remove();
			 				if(id!=0)
			 				{
			 					$.post("ajax.php",{"id":id},function(sonuc){
			 						$(select).after(select_name);
			 						$(hierarchy_select).html(sonuc);
			 					});
			 				}
		 				}
			 			else
			 			{
			 				alert("Alt Kategori Yoktur!!!");
			 			}
		 				/*$("select[name=alt]").remove();
		 				var id = $(this).val();
		 				if(id!=0)
		 				{
		 					$.post("ajax.php",{"id":id},function(sonuc){
		 						$("select[name=kategori]").after('<select name="alt" size="10"></select>');
		 						$("select[name=alt]").html(sonuc);
		 					});
		 				}*/
		 			});
		 });
	</script>


</head>
<body>
	<form action="" method="POST">
	<select name="kategori" size="10">
	<option value ="0"></option>
		<?php

		$query = $pdo->query("SELECT * FROM kategoriler WHERE ustKategori =0 ORDER BY baslik ASC", PDO::FETCH_ASSOC); 

		foreach( $query as $row ){
			echo "<option value =".$row['id']."|".$row['altKategori'].">".$row['baslik']."</option>";
		}
		?>
	</select>
	<input type="submit" value="Gönder"/>
	</form>
	
</body>
</html>