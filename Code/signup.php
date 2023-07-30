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
  opacity: 10;
  filter: alpha(opacity=10);
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
input[type=text], input[type=password],input[type=number],input[type=email],input[type=date],textarea,datalist,input[type=radio],input[type=checkbox]{
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

.button:hover{
   background-color: #EB984E;

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
<?php
$filename="signup.php";
$path="/var/www/html/SOFTENG/".$filename;
$user= "root";
chown($path,$user);
$servername="localhost";
$username="root";
$password="1234";
$database="softeng";
$conn= new mysqli($servername,$username,$password,$database);
if (!$conn)  {
      echo "error";
       die("Connection failed: " . mysqli_connect_error());
}

$error = "";

$u_phone = $u_email = $u_userid = $u_name=$u_password = $u_address= "";

if (isset($_POST["CUSTOMER"])) {
       if (empty($_POST[ "u_userid"] ) || empty($_POST["u_name"]) || empty($_POST["u_password"])|| empty($_POST["u_address"])|| empty($_POST["u_email"])||empty($_POST["u_phone"]))
              $error = "Error : Fill all fields\n";
 
       else {
              $u_userid = htmlspecialchars($_POST["u_userid"]);
              $u_name = htmlspecialchars($_POST["u_name"]);
              $u_password = htmlspecialchars($_POST["u_password"]);
              $u_address = htmlspecialchars($_POST["u_address"]);
              $u_email = htmlspecialchars($_POST["u_email"]);
              $u_phone = htmlspecialchars($_POST["u_phone"]);
	     
              $query = "INSERT INTO customer(u_userid,u_name,u_password,u_address,u_email,u_phone)
               VALUES ('$u_userid','$u_name','$u_password','$u_address','$u_email','$u_phone')";
              mysqli_query($conn,$query);
              }
             }
       
 $a_userid = $a_name = $a_password=$a_address = $a_phone = $a_email="";

if (isset($_POST["AGENCY"])) {
       if (empty($_POST[ "a_userid"] ) || empty($_POST["a_name"]) || empty($_POST["a_password"])||empty($_POST["a_address"])|| empty($_POST["a_phone"])||empty($_POST["a_email"]))
              $error = "Error : Fill all fields\n";
 
       else {
              $a_userid = htmlspecialchars($_POST["a_userid"]);
              $a_name = htmlspecialchars($_POST["a_name"]);
              $a_password = htmlspecialchars($_POST["a_password"]);
              $a_address = htmlspecialchars($_POST["a_address"]);
              $a_phone = htmlspecialchars($_POST["a_phone"]);
              $a_email = htmlspecialchars($_POST["a_email"]);
             
          
              $query = "INSERT INTO agency (a_userid,a_name,a_password,a_address,a_phone,a_email)
               VALUES ('$a_userid','$a_name','$a_password','$a_address','$a_phone','$a_email')";
              mysqli_query($conn,$query);
              }
             }
?>
</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
<div align="center">

<button class="info" onclick="document.getElementById('id01').style.display='block'" style="width:auto" ><b>CUSTOMER SIGN UP</b></button>

<div id="id01" class="modal">
  
  <form name="form1" class="modal-content animate" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateForm()" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label><b>Name</b></label>
      <input type="text" placeholder="Enter name" name="u_name" required>

	<label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="u_userid" required>

	<label><b>Mobile No:</b></label>
      <input type="number" placeholder="Enter Number" name="u_phone" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="u_password" required>

	<label><b>Email:</b></label>
  	<input type="email" placeholder="Enter your Email id" name="u_email" required>	

	<label><b>Address</b></label></br>
      <textarea placeholder="Enter your valid address" name="u_address" rows="10" cols="140" required></textarea>

      <button type="submit" value="CUSTOMER signup" name="CUSTOMER" onclick="CheckPassword(document.form.password)">Sign Up</button>
      
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

function validateForm() 
{ 
inputtxt=document.forms["form1"]["password"].value;
var decimal=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
if(inputtxt.value.match(decimal)) 
{ 
alert('');
return true;
}
else
{ 
alert(' [Enter 8 to 15 characters which contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character]');
return false;
}
} 
</script>



<button class="info" onclick="document.getElementById('id03').style.display='block'" style="width:auto;">AGENCY SIGNUP</button>
</br></br>
<!-- <p><a href="file:///var/www/html/SOFTENG/index.html">back</a></p>
 -->
<p><a href="index.html">back</a></p>

 <div id="id03" class="modal">
  
  <form name="form3" class="modal-content animate" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateForm3()" method="post">
 <div class="imgcontainer">
      <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
    <label><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="a_name" required>

      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="a_userid" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="a_password" required>
       
    	<label><b>Email</b> </label>
    	<input type="email" placeholder="Enter email" name="a_email">
 	

  <label><b>Phone no.</b></label>
    <input type="number" placeholder="Enter your Phone no" name="a_phone" required>  

  <label><b>Address</b></label></br>
      <textarea placeholder="Enter your valid address" name="a_address" rows="10" cols="140" required></textarea>

      <button type="submit" name="AGENCY" value="Agency Signup">Sign up</button>
      
    </div>

    
  </form>

</br>

</div>

<script>
// Get the modal
var modal = document.getElementById('id03');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


function validateForm3() 
{ 
inputtxt=document.forms["form3"]["rpassword"].value;
var decimal=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
if(inputtxt.value.match(decimal)) 
{ 
alert('')
return true;
}
else
{ 
alert(' [Enter 8 to 15 characters which contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character]')
return false;
}
}
</script>
</body>
</html>
