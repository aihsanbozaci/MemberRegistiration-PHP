<?php
if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location:login.php');
}
header('Location: ../index.php');
?>