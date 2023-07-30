
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
include 'user_login.php';
// $filename="adopt_form_action.php";
// $path="/var/www/html/SOFTENG/".$filename;
// $user= "root";
// chown($path,$user);
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



$u_userid = $a_userid = $appointment_date = $d_userid="";
  // echo 'cbdjxn';
if (isset($_POST["REQUEST"])) {
// if (isset($_POST["send_request"])) {
  echo 'cbdjxn';

       if (empty($_POST[ "u_userid"] ) || empty($_POST["a_userid"]) || empty($_POST["appointment_date"])|| empty($_POST["d_userid"])){


              $error = "Error : Fill all fields\n";
    }
  else {
              $u_userid = htmlspecialchars($_POST["u_userid"]);
              $a_userid = htmlspecialchars($_POST["a_userid"]);
              $appointment_date = htmlspecialchars($_POST["appointment_date"]);
              $d_userid = htmlspecialchars($_POST["d_userid"]);
              
       
              $query = "INSERT INTO appointment(u_userid,a_userid,appointment_date,d_userid)
               VALUES ('$u_userid','$a_userid','$appointment_date','$d_userid')";
              mysqli_query($conn,$query);
    $query2="INSERT INTO requested_dogs(d_userid,u_userid) VALUES ('$d_userid','$u_userid')";
    $result1=mysqli_query($conn,$query2);
    $query3="DELETE from available_dogs where d_userid='$d_userid'";
    $result2=mysqli_query($conn,$query3);
    echo 'success';
              }
             

header('Location: http://localhost/SOFTENG/user_front_page.php');
}
?>














<div align="center">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

	<label><b>User id</b></label>
      <input type="text" placeholder="Enter userid" name="u_userid" required>

	<label><b>Agency id</b></label>
      <input type="text" placeholder="Enter agencyid" name="a_userid" required>

	<label><b>Appintment date</b></label>
      <input type="text" placeholder="Enter date" name="appointment_date" required>

      <label><b>Dog id</b></label>
      <input type="text" placeholder="Enter dogid" name="d_userid" required>

      <button type="submit" value="submit" name="REQUEST">Send Request</button>
      
   
</form>
 </div>
</body>
</html>

