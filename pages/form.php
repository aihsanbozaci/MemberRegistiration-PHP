<?php 

$referer = $_SERVER['HTTP_REFERER']; 

if ($referer == "") 
{ 

  echo"<script>
  alert(\"GİRİŞ YAPINIZ\");
  </script>";
header("Refresh: 0; url=../index.php");
ob_end_flush();
} 

else 
{ 

} 

?>
<?php
$durum="";
include("sistem/baglan.php");

if($durum){
    echo"<script>
    alert(\"$durum\");
    </script>";
}
?>
<html>
<head>

<style>
#success_message{ display: none;}
.baslik{
    background-color: yellow;
justify-content: flex-start;
}
.picr{
        float: right;
        padding:100 10px 0px 0;
    }
    .form-control-2{
    margin-left: 65%;    
}
.asagikaydir{
    float: right;
    padding-right: 45%;
    margin-top: 3%;
}
.col-md-2{
    margin-left: 5%;
}
.btn{
  float: left;
}
</style>
</head>

<body>
<header class="baslik"><center><br><h2><b>Personel Ekleme Formu</b></h2></center><br></header>



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



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
<div class="container">

<form class="well form-horizontal" method="POST"  id="contact_form" action="ekle.php">
<fieldset>

<!-- Form Name -->



<!-- Text input-->

<img class="picr" src="img/ise-alim.jpg"  >

<div class="form-group">
    
<label class="col-md-4 control-label">Ad</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input  name="first_name" placeholder="Adınızı giriniz." class="form-control"  type="text">
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label" >Soyad</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="last_name" placeholder="Soyadınızı giriniz." class="form-control"  type="text">
</div>
</div>
</div>


<div class="form-group"> 
<label class="col-md-4 control-label">Cinsiyetiniz:</label>
<div class="col-md-4 selectContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
<select name="gender" class="form-control selectpicker">
  <option value="">Cinsiyet seçiniz.</option>
  <option>Kadın</option>
  <option>Erkek</option>
  <option>Diğer</option>
</select>
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label">T.C Kimlik Numarası</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input maxlength="11" name="validID" placeholder="" class="form-control"  type="number" maxlength="11">
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label">Meslek</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="job" placeholder="Mesleğinizi giriniz." class="form-control"  type="text">
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label">E-Mail</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
<input name="email" placeholder="E-Posta adresinizi giriniz." class="form-control"  type="text">
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group"> 
<label class="col-md-4 control-label">Telefon Numarası</label> 
<label class="col-md-2 control-label">Hakkınızda kısa bilgi</label>     <div><textarea class="asagikaydir" name="bilgi" id="exampleFormControlTextarea1" rows="3"></textarea></div>
<div class="col-md-4 inputGroupContainer"> 
<div class="input-group"> 
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>  
<input maxlength="10" name="telno" placeholder="(533)" class="form-control"  type="number"> <div class="form-group2">
</div>
</div>
</div>

<!-- Text input-->
   
<div class="form-group">
<label class="col-md-4 control-label">Adres Bilgisi</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
<input name="adres" placeholder="Adresinizi giriniz." class="form-control" type="text">
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-4 control label" for="birthday">Doğum Tarihi:</label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<input type="date" id="birthday" name="birthday">
</div>
<br>

<!-- Select Basic -->

<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Başarılı <i class="glyphicon glyphicon-thumbs-up"></i> Başarılı!</div>

<!-- Button -->
<div class="form-group">

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" name="kaydet" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspGönder <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
</div>
</div>

</fieldset>
</form>
</div>
</div><!-- /.container -->

</body>
</html>

