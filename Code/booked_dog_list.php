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
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->


<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
<style>
h1{
color: white;
}
div.gallery {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 240px;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}
</style>
</head>
<body>
<div id="page" class="container">
  <div id="header">
    <div id="logo">
      <img src="pic2.jpg" alt="" />
      <h1>USERNAME</h1>
      <span><a href="#" rel="nofollow">Options</a></span>
    </div>
    <div id="menu">
      <ul>
        <li class="current_page_item"><a href="user_front_page.php" accesskey="1" title="">Edit Profile</a></li>
        <li><a href="sus_agency_list.php" accesskey="2" title="">Agencies</a></li>
        <li><a href="booked_dog_list.php" accesskey="3" title="">View Booked Dogs</a></li>
        <li><a href="pickup_req_form.php" accesskey="5" title="">Send Pickup Requests</a></li>
        
      </ul>
    </div>
  </div>
  <!--<div id="main">
    
    <div id="welcome">
      <div class="title">
        <h1 style="color : black">StrayThePets Welcomes You!!</h1>
        <span class="byline">All Animals just want to be  ...Loved!!</span>
      </div>
      <p>This is <strong>Privy</strong>, a free, fully standards-compliant CSS template designed by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>. The photos in this template are from <a href="http://fotogrph.com/"> Fotogrph</a>. This free template is released under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so you're pretty much free to do whatever you want with it (even use it commercially) provided you give us credit for it. Have fun :) </p>
      <ul class="actions">
        <li><a href="#" class="button">Etiam posuere</a></li>
      </ul>
    
</div>-->


<div id="main">
    
    <div id="welcome">
      <div class="title">
        <h2>Booked Dog list
         <?php
         include 'user_login.php';
        if(isset($_SESSION['u_name']))
        {
        //echo $_SESSION['u_name'];
        }
        else
        {
        echo "you are not logged in";
        } 
           ?>
        </h2>
     
        <span class="byline">Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue</span>
      </div>
      <p>Hello</p>
      <ul class="actions">
        <li><a href="#" class="button"></a></li>
      </ul>
    
</div>    

<?php  
include 'user_login.php';
    $conn = mysqli_connect("localhost","root","1234","softeng");
    $u_userid=$_SESSION['u_userid'];
    $query = "SELECT * FROM dog where d_userid in (select d_userid from booked_dogs where u_userid='$u_userid')"; 
    $result = mysqli_query($conn, $query);  
    while($row = mysqli_fetch_array($result))  
    {  
         echo '  
                <div class="gallery">
              
                        <img src="data:image/jpg;base64,'.base64_encode($row['d_photo'] ).'"  width="900" height="600" class="img-thumnail" /> 
                       
           ';
           echo "<a href='dog_profile.php?d_userid=".$row["d_userid"]."'>View</a></div>";
           if($row = mysqli_fetch_array($result))
           {
              echo '  
                <div class="gallery">
              
                        <img src="data:image/jpg;base64,'.base64_encode($row['d_photo'] ).'"  width="900" height="600" class="img-thumnail" /> 
                      
                
           '; 
           echo "<a href='dog_profile.php?d_userid=".$row["d_userid"]."'>View</a></div>";
           }  
    }  
    ?>
  


    <!-- Extra -->
    <!--
<div class="gallery">
  <a target="_blank" href="pic01.jpg">
    <img src="1.jpg" alt="Trolltunga Norway" width="900" height="600">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="pic02.jpg">
    <img src="2.jpg" alt="Forest" width="900" height="600">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="pic03.jpg">
    <img src="3.jpg" alt="Northern Lights" width="900" height="600">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="pic03.jpg">
    <img src="4.jpg" alt="Mountains" width="900" height="600">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>
-->

<!-- Extra -->
<!--
    <div class="gallery">
  <a target="_blank" href="pic01.jpg">
    <img src="1.jpg" alt="Trolltunga Norway" width="900" height="600">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="pic02.jpg">
    <img src="2.jpg" alt="Forest" width="900" height="600">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="pic03.jpg">
    <img src="3.jpg" alt="Northern Lights" width="900" height="600">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="pic03.jpg">
    <img src="4.jpg" alt="Mountains" width="900" height="600">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

-->

  
</div>
</body>
</html>
