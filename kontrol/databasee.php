<?php
      try {
       $pdo = new PDO("mysql:host=localhost;dbname=muhtedib_database;charset=utf8", "muhtedib_root", "muhtedib_root");
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch ( PDOException $e ){
       print $e->getMessage();
  }
?>