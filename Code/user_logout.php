<?php
session_start();
session_destroy();
$_SESSION['u_userid']="";
 header('Location: http://localhost/SOFTENG/front.php');
 ?>
