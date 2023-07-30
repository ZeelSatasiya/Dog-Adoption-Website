<?php
include 'dbh.php';
session_start();
 $ad_userid=$_POST['ad_userid'];
 $ad_password=$_POST['ad_password'];
 $error='';
 
 $sql = "SELECT * from admin WHERE ad_userid='$ad_userid' AND ad_password='$ad_password' ";
 $result = $conn->query($sql);
 if(!$row=$result->fetch_assoc()){
 echo "Your username or password is incorrect";
 } 
 else
 {
 //echo "You are logged in";
 $_SESSION['ad_userid'] = $row['ad_userid'];
  header('Location: http://localhost/SOFTENG/welcomeadmin.php');
 }
 ?>

