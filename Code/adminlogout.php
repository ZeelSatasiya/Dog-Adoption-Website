<?php
session_start();

session_destroy();
$_SESSION['ad_userid']="";

 header('Location: http://localhost/SOFTENG/admin.php');
 ?>
