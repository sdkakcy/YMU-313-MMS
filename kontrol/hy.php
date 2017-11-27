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

	$query = "SELECT * FROM kategori ORDER BY id";
	//$query = $pdo->query("SELECT * FROM kategori ORDER BY id", PDO::FETCH_ASSOC);
$goster = $pdo->prepare($query);
$goster->execute(); //queriyi tetikliyor
 
$toplamSatirSayisi = $goster->rowCount(); //malumunuz üzere sorgudan dönen satır sayısını öğreniyoruz
 
$tumSonuclar = $goster->fetchAll(); //DB'deki bütün satırları ve sutunları $tumSonuclar değişkenine dizi şeklinde aktarıyoruz
//örnek kullanımlar :
/*
  echo ($tumSonuclar[0]['ustKategori'] . " " . $tumSonuclar[0]['baslik'] . "<br>");
  echo ($tumSonuclar[1]['ustKategori'] . " " . $tumSonuclar[1]['baslik'] . "<br>");
  echo ($tumSonuclar[2]['ustKategori'] . " " . $tumSonuclar[2]['baslik'] . "<br>");
 */
 
//alt kategorisi olmayan kategorilerin sayısını öğreniyoruz:
$altKategoriSayisi = 0;
for ($i = 0; $i < $toplamSatirSayisi; $i++) {
    if ($tumSonuclar[$i]['ebeveyn_id'] == "0") {
        $altKategoriSayisi++;
    }
}
 
echo "Kategoriler ($altKategoriSayisi) <br />";
 
echo "\n";
echo "<ul>";
echo "\n";
 
for ($i = 0; $i < $toplamSatirSayisi; $i++) {
    if ($tumSonuclar[$i]['ebeveyn_id'] == "0") {
        Kategoriler($tumSonuclar[$i]['id'], $tumSonuclar[$i]['kategori_adi'], $tumSonuclar[$i]['ebeveyn_id']);
    }
}
 
echo "</ul>";
 
/*
 * FONKSIYONUN OZELLIKLERI:
 * verilen kategoriyi yazar sonra, yeni bir <ul> </ul> arasina o kategorinin alt kateogirilerini yazar.
 * bu işlemi sonsuza kadar yapar, yani ne kadar alt kategoriniz varsa hepsini ekler
 */
 
function Kategoriler($id, $kategori_adi, $ebeveyn_id) {
 
    global $tumSonuclar;
    global $toplamSatirSayisi;
 
    //kategorinin, alt kategori sayısını öğreniyoruz:
    $altKategoriSayisi = 0;
    for ($i = 0; $i < $toplamSatirSayisi; $i++) {
        if ($tumSonuclar[$i]['ebeveyn_id'] == $id) {
            $altKategoriSayisi++;
        }
    }
    ///////////////////////////////////////////
 
    echo "\n";
    echo "<li>";
    echo "\n";
 
    echo "\t";
    echo "<a href='$kategori_adi.html'>  $kategori_adi  ";
    if ($altKategoriSayisi > 0) {
        echo "( $altKategoriSayisi )";
    }
    echo "</a>";
 
    if ($altKategoriSayisi > 0) { //alt kategorisi varsa onları da listele
        echo "\n";
        echo "<ul>";
 
        for ($i = 0; $i < $toplamSatirSayisi; $i++) {
 
            if ($tumSonuclar[$i]['ebeveyn_id'] == $id) {
                Kategoriler($tumSonuclar[$i]['id'], $tumSonuclar[$i]['kategori_adi'], $tumSonuclar[$i]['ebeveyn_id']);
            }
        }
 
        echo "</ul>";
    }
    echo "\n";
    echo "</li>";
 
    echo "\n";
}
?>
	
</body>
</html>