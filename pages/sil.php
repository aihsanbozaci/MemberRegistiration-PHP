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
if ($_GET) {

if ($baglan->query("DELETE FROM kayit WHERE id=".(int)$_GET['id'])) 
{
    header("location:listele.php"); 
}
}
?>