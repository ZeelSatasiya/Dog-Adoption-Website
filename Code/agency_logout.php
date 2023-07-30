<?php
session_start();
session_destroy();
$_SESSION['a_userid']="";
 header('Location: http://localhost/SOFTENG/front.php');
 ?>
