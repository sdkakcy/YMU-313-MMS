<?php
	

	try {
	     $pdo = new PDO("mysql:host=localhost;dbname=urun_karsilastirma;charset=utf8", "root", "");
	     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch ( PDOException $e ){
	     print $e->getMessage();

	}



?>