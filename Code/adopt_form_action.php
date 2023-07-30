
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
		// echo 'success';
              }
             

header('Location: http://localhost/SOFTENG/dog_profile.php');
}
?>











