
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
	<a href="agency_front_page.php">back</a>
	<?php 
include 'agency_login.php'; 
 $conn = mysqli_connect("localhost", "root", "1234", "softeng");  
 function GetImageExtension($imagetype)

     {

       if(empty($imagetype)) return false;

       switch($imagetype)

       {
           case 'image/jpg': return 'jpg';
           case 'image/bmp': return 'bmp';

           case 'image/gif': return 'gif';

           case 'image/jpeg': return 'jpeg';

           case 'image/png': return 'png';
           default: return false;
       }
     }

 if(isset($_POST["insert"]))  
 {  
    $imgtype=$_FILES["image"]["type"];
    $ext= GetImageExtension($imgtype);

 	    // $id=$_POST["d_userid"];
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"])); 
      $d_name=$_POST["d_name"];
      $d_userid=$_POST["d_userid"];
      $d_age=$_POST["d_age"];
      $d_breed=$_POST["d_breed"];
      $d_color=$_POST["d_color"];
      $d_healthcondition=$_POST["d_healthcondition"];
      $d_vaccination=$_POST["d_vaccination"];
      $u_agency=$_SESSION['a_userid'];
      $query = "INSERT INTO dog(d_userid,d_name,d_age,d_color,d_breed,u_agency,d_healthcondition,d_vaccination,d_photo,photo_ext) VALUES ('$d_userid','$d_name','$d_age','$d_color','$d_breed','$u_agency','$d_healthcondition','$d_vaccination','$file','$ext')";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("Dog Inserted into Database")</script>';  
      }  
 }   
 ?>  
	<div class="container">
		<form method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
		<!--enctype="multipart/form-data"-->  
    <label><b>Dog Name</b></label>
      <input type="text" placeholder="Enter Dog Name" name="d_name" required>

      <label><b>user id</b></label>
      <input type="text" placeholder="Enter userid" name="d_userid" required>

      <label><b>Choose dog image:</b></label>
      <input type="file" name="image" id="image" />  
<br>
      <label><b>Age</b></label>
      <input type="number" placeholder="Enter Age" name="d_age" required>
       
    	<label><b>Breed</b> </label>
    	<input type="text" placeholder="Enter breed" name="d_breed">
 	

  <label><b>color</b></label>
    <input type="text" placeholder="Enter your color" name="d_color" required>  

  <label><b>Health Condition</b></label></br>
      <textarea placeholder="Enter your Health condition" name="d_healthcondition" rows="10" cols="140" required></textarea>

      <label><b>Vaccination</b></label></br>
      <textarea placeholder="Enter your Vaccination" name="d_vaccination" rows="10" cols="140" required></textarea>

     <!-- <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" /> -->
     <button type="submit" value="Insert" name="insert" id="insert" >Insert</button>
      </form>
    </div>
<!-- 
<form method="post" enctype="multipart/form-data">  
                     
                     Choose dog image:
                     <input type="file" name="image" id="image" />  
                     <br />  
					enter dog_name:
			        <input type="text" name="userid"/>
                     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />  
</form>  -->
<script>
	function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
</script>
</body>
</html>