<?php

	include ("ayarlar.php");
	?>
	<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
	

	<?php

	if($_POST)
	{
		$id=$_POST["id"];
		?>

		<script type="text/javascript">
		 $(function()
		 {
		 		var select ="select[name=alt" + <?php echo $id ?> + "]";
		 		$(select).change(function()
		 			{
		 				//alert($(this).val());
		 				var kategori = $(this).val();
		 				var arrayKategori = kategori.split("|");
		 				var idString = arrayKategori[0];
		 				var alt = arrayKategori[1];
		 				//alert(idString + "\n" + alt);
		 				var altKategori = parseInt(alt);
		 				if(altKategori != 0)
		 				{
		 					var select_name="<select name=\"alt" + idString + "\" size=\"10\"></select>";
			 				var hierarchy_select="select[name=alt" + idString + "]";
			 				var id=parseInt(idString);
			 		//alert($(this).val() + "\n" + select + "\n" + select_name + "\n" + hierarchy_select + "\n" + "select[name=alt" + idString + "]" );
			 				var x = document.getElementById(hierarchy_select);
			 				alert(x);
			 				
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
			 				
		 			});
		 });
		</script>

		<?php
		$query = $pdo->query("SELECT * FROM kategoriler WHERE ustKategori = {$id} ORDER BY baslik ASC", PDO::FETCH_ASSOC);
		foreach( $query as $row ){
			echo "<option value =".$row['id']."|".$row['altKategori'].">".$row['baslik']."</option>";
		}
	}

?>