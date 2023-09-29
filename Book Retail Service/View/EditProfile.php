<!DOCTYPE html>
<?php

include '../Controller/Adminheader.php';

?>
<?php
/*session_start();*/
if (count($_SESSION)===0)
{
header("location: ../Controller/logout.php");
}
?>
<html>
<head>



<title>Edit Profile</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<style>

 hr.new1 {
  border: 4px solid green;
  border-radius: 5px;
}
                body {
  background-image: url('Image/image2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: 100% 100%;
}

	.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  background-color: #B0E0E6;
  transition: 0.3s;
  width: 30%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}

.success {background-color: #04AA6D;} /* Green */
.success:hover {background-color: #46a049;}
</style>
<body>


<?php

$uname = $_SESSION['username'];
$hostname = "localhost";
$username = "root";
$password = "";
$database = "project";



$con = new mysqli($hostname, $username, $password, $database);
$sql = "SELECT * FROM registration where username = '$uname'";


$stmt = $con->prepare($sql);
$stmt ->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0)
{



while($row = $result->fetch_assoc())
{

$name = $row["name"];
$dob= $row["dob"];
$gender= $row["gender"];
$add= $row["address"];
$email= $row["email"];
$phn= $row["phn"];
$pass= $row["pass"];
$photo= $row["photo"];

"<hr>";

}
}

?>
<center>
<form action="../controller/EditProfileAction.php" method="post">

<hr class="new1">
<td colspan="6" class="active"><h2><center>Edit Your Profile</center></h2></td>
<hr class="new1">

<br>
<div class="card">

<img src="<?php echo $photo; ?>" alt="Avatar" style="width:100%">
<input class="form-control input-md" type="file" name="u_photo" value="">



  <div class="container">

    <h4><b><p>Change Your    Name : <input class="form-control" type="text" name="u_name" value="<?php echo $name; ?>"></p></b></h4>


<h4><b><p>Change Your Date Of Birth : <input class="form-control input-md" type="date" name="u_dob" value="<?php echo $dob; ?>">  </p></b></h4>

    <h4><b><p>Change Your    Email : <input class="form-control" type="email" name="u_email" value="<?php echo $email; ?>">  </p></b></h4>

        <h4><b><p>Change Your Password : <input class="form-control" type="text" name="u_pass" id="mypass" value="<?php echo $pass; ?>">  </p></b></h4>


    <h4><b><p>Change Your  Gender : <select class="form-control" name="u_gender">
<option><?php echo $gender ?></option>

<option>Male</option>
<option>Female</option>
<option>Others</option>

</select>  </p></b></h4>

<br>
<input type="submit" class="btn success" name="update" style="width:250px;" value="Update">

<br> <br>
</div>
</div>
</center>


<br> <br>



</body>

</html>