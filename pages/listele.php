<?php 

$referer = $_SERVER['HTTP_REFERER']; 

if ($referer == "") 
{ 
echo "GİRİŞ YAPMALISINIZ!"; 
header('Location: ../index.php');
ob_end_flush();
} 

else 
{ 

} 

?>
<?php

include("sistem/baglan.php");
$kayit = $baglan->query('SELECT * FROM kayit')->fetchAll(PDO::FETCH_ASSOC);
?>
<html>
<head>
</head>
<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>


<style>

.baslik{
    background-color: yellow;
}

</style>
<header class="baslik"><center><br><h2><b>Personel Kayıt Listesi</b></h2></center><br></header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="form.php"><b>Kişi Ekle //</b><span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link active" href="listele.php"><b>Kişileri Listele //</b><span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link active" href="logout.php"><b>Çıkış //</b><span class="sr-only1"></span></a>
    </div>
  </div>
</nav>




<table class="table" border="5" align="center">
    <thead class="thead-light">
<tr>

</tr>
<th>id</th>
<th>Ad</th>
<th>Soyad</th>
<th>Cinsiyet</th>
<th>T.C Kimlik No</th>
<th>Meslek</th>
<th>E-Mail</th>
<th>Telefon No</th>
<th>Bilgilendirme metni</th>
<th>Adres</th>
<th>Doğum Tarihi</th>
<th>#Düzenle#</th>
<th>#Sil#</th>
</tr>


<?php
foreach ($kayit as $kayit) : ?>
<tbody>
    <tr>
    <td><?= $kayit['id'] ?></td>
    <td><?=$kayit['first_name']?></td>
    <td><?=$kayit['last_name']?></td>
    <td><?=$kayit['gender']?></td>
    <td><?=$kayit['validID']?></td>
    <td><?=$kayit['job']?></td>
    <td><?=$kayit['email']?></td>
    <td><?=$kayit['telno']?></td>
    <td><?=$kayit['bilgi']?></td>
    <td><?=$kayit['adres']?></td>
    <td><?=$kayit['birthday']?></td>
    <td><a href="duzenle.php?id=<?= $kayit['id']; ?>" name="editbtn" class="btn btn-primary">Düzenle</a></td>
    <td><a href="sil.php?id=<?= $kayit['id'];?>" name="deletebtn" class="btn btn-danger">Sil</a></td>
    </tr>  
</tbody>

   <?php
endforeach;
    ?>
   
</table>

</body>
</html>





















