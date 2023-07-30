<?php
       session_start();
       ?>
<!doctype>
<html>
<head>
<style>
body{
    width: 100%;
    height: 100%;
    background-image: url("golden.jpg");
    background-repeat: no-repeat;
	background-size:100% 100%;
   
    
}

label{
    width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    background-color:#ffff1a;
}

input[type=text], input[type=password]{
    width: 80%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #20B2AA;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 30%;
}
</style>
</head>

<body>



</br></br></br></br></br></br></br></br></br>
<div align="center">
<form action="adminlogin.php"method="post">

	<label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="ad_userid" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="ad_password" required>

      <button type="submit" value="submit">Login</button>
      <?php 
      echo $error;
      ?>
    </div>
</form>
</body>
</html>

