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
    background-image: url("dog4.jpg");
    background-repeat: no-repeat;
	background-size:100% 100%;
   
    
}

a.info,button.info {
  display: inline-block;
  text-decoration: none;
  padding: 7px 14px;
  text-transform: uppercase;
  color: red;
  border: 1px solid red;
  background-color: transparent;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  -webkit-transition: all 0.4s  cubic-bezier(0.88,-0.99, 0, 1.81);
  transition: all 0.4s  cubic-bezier(0.88,-0.99, 0, 1.81);
  font-weight: normal;
  margin: -52px 0 0 0;
  padding: 62px 100px;
}



 a.info,button.info {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}


/* Full-width input fields */
input[type=text], input[type=password],input[type=number],input[type=email],input[type=date],textarea,datalist,input[type=radio],input[type=checkbox],select{
    width: 100%;
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
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #CDCDCD;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>

<body>



</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
<div align="center">

<button class="info" onclick="document.getElementById('id01').style.display='block'" style="width:auto" align:"center"><b>USER Login</b></button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="user_login.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">

	<label><b>Username</b></label>
      <input type="text" placeholder="Enter User Id" name="u_userid" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="u_password" required>

      <button type="submit" value="submit">Login</button>
      <?php 
      echo $error;
      ?>
    </div>

    
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<button class="info" onclick="document.getElementById('id02').style.display='block'" style="width:auto" align:"center"><b>Agency Login</b></button>

<p><a href="index.html">back</a></p>
<div id="id02" class="modal">
  
  <form class="modal-content animate" action="agency_login.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
     
	     <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="a_userid" required>

	
      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="a_password" required>

      <button type="submit" name="submit" >Login</button>
    </div>

    
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
