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



if($first_name<>""&&$last_name<>""&&$gender<>""&&$validID<>""&&$job<>""&&$email<>""&&$telno<>""&&$adres<>""&&$bilgi<>""&&$birthday<>""){
    if ($baglan->query("INSERT INTO kayit(first_name,last_name,gender,validID,job,email,telno,adres,bilgi,birthday)
                    VALUES('$first_name','$last_name','$gender','$validID','$job','$email','$telno','$adres','$bilgi','$birthday')"))
    {
$durum="Veri Eklendi!";
echo "<script type='text/javascript'>alert('$durum');</script>";
header("refresh:2;url=form.php?durum=$durum");
    }
    else
    {
        $durum="Veri Eklenemedi!";
        echo "<script type='text/javascript'>alert('$durum');</script>";
        header("refresh:0;url=form.php?durum=$durum");
        
    }
}
else{
    $durum="Alanları Doldurun!";
    echo "<script type='text/javascript'>alert('$durum');</script>";
    header("refresh:1;url=form.php?durum=$durum");

}

?>