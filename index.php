<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Girişi</title>
</head>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3><b>Admin Giriş Paneli</b></h3>
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="text" name="kullanici" class="form-control" placeholder="Kullanıcı Adı" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" name="sifre" class="form-control" placeholder="Şifre" value="" />
                        </div>
                        <div class="form-group">
                        <br>
                            <input type="submit" class="btnSubmit" value="Giriş Yap" />
                        </div>
                    </form>
                </div>
               

<?php
include("pages/sistem/baglan.php");
$baglan=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($baglan,"project");

if(isset($_POST["kullanici"]) && isset($_POST["sifre"]))
{
  $kullanici=$_POST["kullanici"];
  $sifre=$_POST["sifre"];

 $sql="SELECT kullanici,sifre FROM kullanici where kullanici='$kullanici' and '$sifre'";
$sorgu=mysqli_query($baglan,$sql);
$dizi=mysqli_fetch_array($sorgu);

if($dizi!=0)
{
    header("location:pages/listele.php");
}
else {
$hataligiris="Eksik veya hatalı giriş yaptınız!";
echo "<script type='text/javascript'>alert('$hataligiris');</script>";
}


}

?>
<style>
    .login-container{
    margin-top: 10%;
    margin-bottom: 5%;
    
}
.login-form-1{
    padding: 5%;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
    margin-left:25%;
}
.login-form-1 h3{
    text-align: center;
    color: #333;
}

.login-container form{
    padding: 10%;
}
.btnSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    border: none;
    cursor: pointer;
    margin-left: 23%;
}
.login-form-1 .btnSubmit{
    font-weight: 600;
    color: #fff;
    background-color: #ccff00;
}



</style>


</body>
</html>