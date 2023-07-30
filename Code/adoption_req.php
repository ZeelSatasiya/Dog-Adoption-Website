<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Skeleton 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130902

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
 <!-- <link href="fonts.css" rel="stylesheet" type="text/css" media="all" /> -->
 <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins"> -->
<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->


<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
<style>
div.gallery {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 240px;
}

li.gallery:hover,div.gallery:hover {
    border: 1px solid #777;
    background-color:solid #1d2951;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}
button {
    background-color: #1d2951;
    color: white;
    padding: 6px 6px;
    margin: 3px 0;
    border: none;
    cursor: pointer;
    width: 10%;
}


button:hover{
   background-color: #1d29ff;

}
</style>
</head>
<body>
<div id="page" class="container">
  <div id="header">
    <div id="logo">
      <img src="pic2.jpg" alt="" />
      <h1><a href="#">Agency</a></h1>
      <span>Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a></span>
    </div>
    <div id="menu">
      <ul>
        <li class="current_page_item"><a href="#" accesskey="1" title="">Edit Profile</a></li>
        <li class="gallery"><a href="add_dog.php" accesskey="2" title="">Add new dog</a></li>
        <li class="gallery"><a href="subscribed_users.php" accesskey="3" title="">Suscribed Users</a></li>
        <li class="gallery"><a href="agency_booking.php" accesskey="4" title="">Bookings</a></li>
        <li class="gallery"><a href="#" accesskey="5" title="">Adoption Requests</a></li>
        <li class="gallery"><a href="agency_adopted_dogs.php" accesskey="5" title="">Adopted Dogs</a></li>
        <li class="gallery"><a href="pickup_req.php" accesskey="5" title="">Pickup Requests</a></li>
        
        
      </ul>
    </div>
  </div>
  <div id="main">
    
    <div id="welcome">
      <div class="title">
        <h1><pre>Adoption requests</pre>
         <?php
         include 'agency_login.php';
        $conn = mysqli_connect("localhost","root","1234","softeng");
        if(isset($_SESSION['a_name']))
        {
          // echo $_SESSION['a_name'];
        }
        else
        {
        // echo "you are not logged in";
        } 
           ?>
        </h2>
        
      </div>
      
    
</div>    
<div>

    <!-- Extra -->
    <?php  
    include 'agency_login.php';
    // $conn = mysqli_connect("localhost","root","1234","softeng");
    $a_userid=$_SESSION['a_userid'];
    //$query = "SELECT * FROM pickup_request where a_userid='$a_userid'";
    $query = "SELECT * FROM requested_dogs where d_userid in (select d_userid from dog where u_agency = '$a_userid')";
     // -- WHERE u_agency='$a_userid'";  
    $result = mysqli_query($conn, $query);  
    while($row = mysqli_fetch_array($result))  
    {  
      $u1=$row['u_userid'];
      $d1=$row['d_userid'];
          $query1 = "SELECT * from customer where u_userid='$u1'";
          $result1=mysqli_query($conn,$query1);
          $row1=mysqli_fetch_array($result1);
          $query2 = "SELECT * FROM dog where d_userid='$d1'";
          $result2=mysqli_query($conn,$query2);
          $row2=mysqli_fetch_array($result2);
          echo '<div><h3>Customer Name : '.$row1['u_name'].'</h3>';
          echo '<div><h3>Customer Address : '.$row1['u_address'].'</h3>';
          echo '<div><h3>Dog Name : '.$row2['d_name'].'</h3>';
          echo '<div><h3>Dog Color : '.$row2['d_color'].'</h3>';
          echo '<div><h3>Dog Breed : '.$row2['d_breed'].'</h3>';
      
          echo '<h3><button class="w3-bar-item w3-button w3-hover-white">ACCEPT</button>   <button class="w3-bar-item w3-button w3-hover-white">Fulfil</button>   <button class="w3-bar-item w3-button w3-hover-white">Decline</button></div> ';
    }  
    ?>
  </div>
  </div>
</div>
</body>
</html>
