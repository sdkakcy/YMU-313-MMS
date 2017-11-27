<?php include ("database.php"); ?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Flat HTML5/CSS3 Login Form</title>
  
  
  
      <link rel="stylesheet" href="csss/style.css">

  
</head>

<body>
  <div class="login-page">
  <div class="form" >
      <form action="<?php $PHP_SELF ?>" method="POST">
    <?php if($_POST){


          $kadi=$_POST["username"];
          $sifre=sha1(trim($_POST["password"]));
          $sifre2 =trim($_POST["password"]);
          $query = $pdo->query("SELECT * FROM login WHERE username = '{$kadi}'")->fetch(PDO::FETCH_ASSOC);
          if ( $query["username"] == $kadi && $query["password"] == $sifre){

            
            session_start();
            $_SESSION['id']=$query["id"];
            $_SESSION['kadi']=$query["username"];
            $_SESSION['sifre']=$query["password"];

            
            
            echo "<div class='col-md-12'><div class='notifications widget-body blue'>
              <p>Giriş Başarılı! Yönlendriliyorsunuz...</p>
            </div></div>";

            header("refresh:3;url=anasayfa.php");

          }else{
            
            echo "<div class='col-md-12'><div class='notifications widget-body pink'>
                <p>Başarısız! Kullanıcı adı veya şifre yanlış.</p>
                </div></div>"; 
            //header("refresh:3;url=index.php"); 
          }

        }
        ?>

    <!- İnputlar ->
    <label>USERNAME :</label> <input type="text" name="username"/>
    <label>PASSWORD :</label> <input type="password" name="password"/>

    <!- Buton ->
    <input type="submit" name="GIRIS"S/>
  </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="jss/index.js"></script>

</body>
</html>
