
<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "softeng";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>




<!DOCTYPE html>
<html>
<title>Dog_profile</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body class="w3-content" style="max-width:1300px">

<!-- First Grid: Logo & About -->
<div class="w3-row">
  <div class="w3-quarter w3-black w3-container w3-center" style="height:700px">
    <div class="w3-padding-50">
<?php

$id    = htmlentities($_GET['d_userid']);
/*$id="d2";*/
      $sql="SELECT d_userid from dog where d_userid='$id'";
      $result=$conn->query($sql);
      while($row = $result->fetch_assoc()) {
        if($id=$row["d_userid"])
        {
          // echo "<h>".$row["d_userid"]."</h><br>";
        }
    }

include 'user_login.php';
include 'agency_login.php';

if (isset($_POST["book"])) {
            // $query1="select * from ";
              $u_userid=$_SESSION['u_userid'];
              $query = "INSERT INTO booked_dogs(u_userid,d_userid)
               VALUES ('$u_userid','$id')";
              mysqli_query($conn,$query);
             }



?>
    </div>
    <br>
    <br>
    <br>
    <div class="w3-padding-47"><h3>
      <!-- <a href="" class="w3-button w3-black w3-block w3-hover-blue-grey w3-padding-16"><b>Home</a> -->
        <?php
        include 'agency_login.php';
        include 'user_login.php';
        // echo 'user->' .$_SESSION['u_userid'].'';
        // echo 'agency->' .$_SESSION['a_userid'].'';
        if($_SESSION['u_userid'])
        {
          echo '<a href="user_front_page.php" class="w3-button w3-black w3-block w3-hover-blue-grey w3-padding-16"><b>Home</a>
          <form action="#" method="POST"><button class="w3-button w3-black w3-block w3-hover-teal w3-padding-16" type="submit" name="book">
      Book Dog</button>
      </form>
      <a href="adopt_form.php" class="w3-button w3-black w3-block w3-hover-dark-grey w3-padding-16" name="ADOPT">Adopt Dog</a>
      ';
      }
      else if($_SESSION['a_userid'])
      {

        echo '<a href="agency_login_page.php" class="w3-button w3-black w3-block w3-hover-blue-grey w3-padding-16"><b>Home</a>
        <a href="edit_dog.php">EDIT DOG</a></b>';


      }
      // echo 'hi';
      ?>

      
    </div>
  </div>

  <div class="w3-threequarter w3-blue-grey w3-container" style="height:700px">
    <div class="w3-padding-75 w3-center">
      <h1>About Me</h1>
      <!-- <img src="pic2.jpg" class="w3-margin w3-circle" alt="Person" style="width:20%"> -->
  <?php
   include 'agency_login.php';
   include 'user_login.php';
  // echo 'hi';
  // $id="d2";
   $sql="SELECT * from dog where d_userid='$id'";
      $result=$conn->query($sql);
      // echo 'hi';
      // echo 'no of row: ' .$result->num_rows.'';

      if($row = $result->fetch_assoc()) {

  echo '<img src="data:image/jpg;base64,'.base64_encode($row['d_photo'] ).'" class="w3-margin w3-circle" alt="Dog" style="width:40%">';
  // echo '  
  //               <div class="gallery">
              
  //                       <img src="data:image/jpg;base64,'.base64_encode($ ).'"  width="900" height="600" class="img-thumnail" /> 
  //                       <div class="desc">Add a description of the image here</div> 
  //               </div>
  //          ';
         }
  ?>  
      <div class="w3-left-align w3-padding-large">

<?php

$sql = "SELECT * FROM dog where d_userid='$id'";
$result = $conn->query($sql);
// echo 'no of row: ' .$result->num_rows.'';
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($id=$row["d_userid"])
  {
    echo "<center><h4>Name: " . $row["d_name"]."</h4>". "<h4>Agency: " . $row["u_agency"]. "</h4>"."<h4>Age: " . $row["d_age"]. "</h4>"."<h4>Breed: " . $row["d_breed"]. "</h4>"."<h4>Colour: " . $row["d_color"]. "</h4>"."<h4>HealthCondition " . $row["d_healthcondition"]. "</h4>"."<h4>Vacination: ".$row["d_vaccination"]."</h4></center>";
  }
    }
} else {
    echo "0 results";
}
$conn->close();
?>

      </div>
    </div>
  </div>
</div>


  

<!-- Footer -->

</body>
</html>
