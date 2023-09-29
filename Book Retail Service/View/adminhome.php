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

<!DOCTYPE html>
<html>

<head>
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


body {
  font-family: Arial, Helvetica, sans-serif;
}

.flip-card {
  background-color: transparent;
  
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}

.success {background-color: #F08080;}
.success:hover {background-color: #87CEFA;}

    </style>
</head>

<body>


<hr class="new1">
    <center>
        <h1 style="text-align:center;">Welcome to BOOK RETAIL SERVICE</h1>
        <hr class="new1">
    </center>


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
$photo = $row["photo"];

$prlink= $row["prlink"]. "<hr>";

}
}

?>



<br><br><br><br>


<center>
  <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">

      <?php echo" <image src ='"; echo $photo; echo"' alt='Avatar' style='width:300px;height:300px;''>"; ?>
      <!-- <img src="Image/img_avatar.png" alt="Avatar" style="width:300px;height:300px;"> -->
    </div>
    <div class="flip-card-back">
      <h1><?php echo $name; ?></h1> 
      <p><?php echo $gender ?></p>
      <p><?php echo $dob; ?></p>
      <p><?php echo $uname; ?></p>
      <p><?php echo $email; ?></p> 

      <br>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

      <p><button class="btn success" name="click" type="submit" value="update">Update Profile !</button></p>


<?php
echo "<br>";

if ($_SERVER['REQUEST_METHOD'] === "POST")
  { 
    $click = $_POST['click'];
    if ( $click === "update")
    {
      header("Location: EditProfile.php");
    }
    else 
    {
      header("Location: adminhome.php");
    }
  }
  ?>
  </form>
      
    </div>
  </div>
</div>
</center>





   
</body>

</html>