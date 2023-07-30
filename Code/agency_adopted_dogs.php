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
div.gallery {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 240px;
}

li.gallery:hover,div.gallery:hover {
    border: 1px solid #777;
    color:solid #1d2951;
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
				<h2><pre>Adopted Dogs</pre>
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
    $query = "SELECT * FROM adopted_dogs,dog WHERE adopted_dogs.d_userid=dog.d_userid and dog.u_agency='$a_userid'";
     // -- WHERE u_agency='$a_userid'";  
    $result = mysqli_query($conn, $query);  
    while($row = mysqli_fetch_array($result))  
    {  echo 'sdgfb';
      $u1=$row['u_userid'];
          $query1 = "SELECT * from customer WHERE u_userid='$u1'";
          $result1=mysqli_query($conn,$query1);
          $row1=mysqli_fetch_array($result1);
          $d1=$row['d_userid'];
           $query2 = "SELECT * from dog WHERE d_userid='$d1'";
          $result2=mysqli_query($conn,$query1);
          $row2=mysqli_fetch_array($result1);
          echo '  
                <div class="gallery">';
                echo '
              
                        <img src="data:image/jpg;base64,'.base64_encode($row['d_photo'] ).'"  width="900" height="600" class="img-thumnail" /> 
            
           ';
           echo "<a href='dog_profile.php?d_userid=".$row["d_userid"]."'>View</a></div>";
          echo '<h3>Customer : '.$row1['u_name'].'</h3><br>';
          echo '<h3>Dog name : '.$row2['d_name'].'</h3><br>';

    }  
    ?>
	</div>
  </div>
</div>
</body>
</html>
