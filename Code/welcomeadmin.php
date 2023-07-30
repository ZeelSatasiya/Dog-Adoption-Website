<?php
       session_start();
       ?>
<!DOCTYPE html>

<html>

<style>
body {
    background-image:url("golden.jpg");
    background-repeat:no-repeat;
    background-size:100% 100%;
    background-attachment:fixed;
    background-position:middle;
}
th,td{
color:white;
}
button {
    background-color: #20B2AA;
    color: black;
    padding: 5px 5px;
    /*margin: 18px 0;*/
    border: none;
    cursor: pointer;
    width: 10%;

}

</style>
<body>


<?php

include 'dbh.php';

if(isset($_SESSION['ad_userid']))
{
echo "<h1 style=color:white;>Welcome, ";
echo $_SESSION['ad_userid'];
echo "</h1>";
?>




<?php
include 'dbh.php';
$sql = "SELECT * FROM customer ";
$result = $conn->query($sql);


 echo"<body><h1 style=color:white; align=left>Registered Users:</h1><br><br>";   
echo "<table border=\"1\" cellspacing=\"0\" cellpadding=\"20\">";
echo "<tr>";
echo "<th>User Id</th>";
echo "<th>Name</th>";
echo " <th>Address</th>";
echo "<th>Phone</th>";
echo "<th>Email</th>";
echo "</tr>";
while($row = mysqli_fetch_row($result))
{
       echo"<tr>";
       echo "<td> $row[0] </td>";
       echo "<td> $row[1] </td>";
       echo "<td> $row[3] </td>"; 
	echo "<td> $row[4] </td>"; 
	echo "<td> $row[5] </td>";       
       echo "</tr>";
}
echo "</table></body>";


$sql = "SELECT * FROM agency";
$result = $conn->query($sql);


 echo"<body><h1 style=color:white; align=left>Registered Agencies:</h1><br><br>";   
echo "<table border=\"1\" cellspacing=\"0\" cellpadding=\"20\">";
echo "<tr>";
echo "<th>User Id</th>";
echo "<th>Name</th>";
echo " <th>Address</th>";
echo "<th>Phone</th>";
echo "<th>Email</th>";
echo "</tr>";
while($row = mysqli_fetch_row($result))
{
       echo"<tr>";
       echo "<td> $row[0] </td>";
       echo "<td> $row[1] </td>";
       echo "<td> $row[3] </td>"; 
	echo "<td> $row[4] </td>"; 
	echo "<td> $row[5] </td>";         
       echo "</tr>";
}
echo "</table></body>";


$sql = "SELECT * FROM booked_dogs";
$result = $conn->query($sql);


 echo"<body><h1 style=color:white; align=left>Booked Dogs:</h1><br><br>";   
echo "<table border=\"1\" cellspacing=\"0\" cellpadding=\"20\">";
echo "<tr>";
echo "<th>User Id</th>";
echo "<th>Dog Id</th>";
echo "</tr>";
while($row = mysqli_fetch_row($result))
{
       echo"<tr>";
       echo "<td> $row[1] </td>";
       echo "<td> $row[0] </td>";      
       echo "</tr>";
}
echo "</table></body>";


$sql = "SELECT * FROM adopted_dogs";
$result = $conn->query($sql);


 echo"<body><h1 style=color:white; align=left>Adopted Dogs:</h1><br><br>";   
echo "<table border=\"1\" cellspacing=\"0\" cellpadding=\"20\">";
echo "<tr>";
echo "<th>User Id</th>";
echo "<th>Dog Id</th>";

echo "</tr>";
while($row = mysqli_fetch_row($result))
{
       echo"<tr>";
       echo "<td> $row[1] </td>";
       echo "<td> $row[0] </td>";        
       echo "</tr>";
}
echo "</table></body>";
$conn->close();

?>

<br>
<br>
<div align="left">
<form action="adminlogout.php">
       <button >logout</button>
       </form>
</div>

<?php
}
else
{
  echo '<h2 style="color:white"> login to see the page</h2>';
}
?>
</body>
</html>

