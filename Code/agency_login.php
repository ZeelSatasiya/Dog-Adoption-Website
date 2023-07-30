<?php
include 'dbh.php';
session_start();
 $username=$_POST['a_userid'];
 $psw=$_POST['a_password'];
 $error='';

$conn = mysqli_connect("localhost","root","1234","softeng");
 $sql = "SELECT * from agency WHERE a_userid='$username' AND a_password='$psw' ";
 $result = $conn->query($sql);
 if(!$row=$result->fetch_assoc())
 {
 //echo"Your username or password is incorrect";
 } 
 else
 {
  $_SESSION['a_userid'] = $row['a_userid'];
  $_SESSION['a_name'] = $row['a_name'];
  header('Location: http://localhost/SOFTENG/agency_front_page.php');
 }
 
 ?>

