<!-- <?php
session_start();
if (count($_SESSION)===0)
{
header("location: ../Controller/logout.php");
}
?> -->

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: lightskyblue;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
</style>
</head>
<body>

<div class="header">
  <b><a href="#default" class="logo">Book Retail Service</a></b>
 <img id="myImg" src="Image/logo.png" alt="Snow" style="width:70%;max-width:70px">
  <div class="header-right">


    <a class="active" href="../view/adminhome.php"><?php echo $_SESSION["username"]; ?></a>

    <a href="../view/adminfeature.php">Admin Feature</a>
    <a href="mailto:19-41749-3@student.aiub.edu">Contact</a>
    <a href="../controller/logout.php">Logout</a>

  </div>
</div>

</body>
</html>
