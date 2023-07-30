<?php
include 'dbh.php';
session_start();
 $username=$_POST['u_userid'];
 $psw=$_POST['u_password'];
 $error='';
 
$conn = mysqli_connect("localhost","root","1234","softeng");
 $sql = "SELECT * from customer WHERE u_userid='$username' AND u_password='$psw' ";
 $result = $conn->query($sql);
 if(!$row=$result->fetch_assoc()){
// // echo"Your username or password is incorrect";
//  //header('Location: http://localhost/AWPPROJECT/wrongpass.php');
 } 
 else
 {
//  //echo "You are logged in";
  $_SESSION['u_userid'] = $row['u_userid'];
  $_SESSION['u_name'] = $row['u_name'];

  header('Location: http://localhost/SOFTENG/user_front_page.php');
 }
 
 ?>