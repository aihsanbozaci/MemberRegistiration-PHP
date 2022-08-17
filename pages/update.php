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
$first_name=$_POST["first_name"];
$last_name=$_POST["last_name"];
$gender=$_POST["gender"];
$validID=$_POST["validID"];
$job=$_POST["job"];
$email=$_POST["email"];
$telno=$_POST["telno"];
$adres=$_POST["adres"];
$bilgi=$_POST["bilgi"];
$birthday=$_POST["birthday"];
$id=$_POST['id'];



if($first_name<>""&&$last_name<>""&&$gender<>""&&$validID<>""&&$job<>""&&$email<>""&&$telno<>""&&$adres<>""&&$bilgi<>""&&$birthday<>""){
    if ($baglan->query("UPDATE kayit SET first_name = '$first_name', last_name = '$last_name', validID = '$validID', birthday = '$birthday', gender = '$gender', telno = '$telno', email = '$email', job = '$job', adres = '$adres', bilgi = '$bilgi' WHERE id = '$id'"))
    {
$durum="Veri Güncellendi!";
echo "<script type='text/javascript'>alert('$durum');</script>";
header("refresh:0;url=listele.php?durum=$durum");
    }
    else
    {
        $durum="Veri Güncellenemedi!";
        echo "<script type='text/javascript'>alert('$durum');</script>";
        header("refresh:0;url=duzenle.php?durum=$durum");
        
    }
}
else{
    $durum="Alanları Doldurun!";
    echo "<script type='text/javascript'>alert('$durum');</script>";
    header("refresh:1;url=duzenle.php?durum=$durum");

}

?>