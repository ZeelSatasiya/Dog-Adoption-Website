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
  background-image:url("5.jpg");
  background-size:100% 100%;
  background-repeat:no-repeat;
    background-attachment:fixed;
    background-position:middle;
   
    
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


<h3 align="center">Enter Details for Pickup Request<h3>
<a href="user_front_page.php" accesskey="5" title="">Back</a>
</br></br></br>
<div align="center">
<form action="pickup_req_enter.php"method="post">


      <label><b>Name</b></label>
      <input type="text" placeholder="Enter name" name="u_name" required>

  <label><b>Agency Name</b></label>
      <input type="text" placeholder="Enter agency name" name="a_name" required>

  <label><b>Location:</b></label>
    <input type="text" placeholder="Location" name="location" required>  

    <label><b>Number of dogs:</b></label>
      <input type="number" placeholder="Enter Number" name="no_of_dogs" required><br>

  <label><b>Special Comment</b></label></br>
      <textarea placeholder="Extra Details" name="special_comment" rows="10" cols="140" required></textarea>

      <button type="submit" value="submit">Send Request</button>
      <?php 
      echo $error;
      ?>
    </div>
</form>
</body>
</html>

