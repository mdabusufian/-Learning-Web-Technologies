<?php
session_start();
if (count($_SESSION)===0)
{
header("location:../Controller/logout.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
        body {
  background-image: url('Image/image2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: 100% 100%;
}

        hr.new1 {
  border: 4px solid green;
  border-radius: 5px;
}

.nev {
    position: relative;
top: 90px;
left: 50%;
transform: translate(-50%);

}

.btn {
  border: 2px solid black;
  background-color: white;
  color: black;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
}

/* Green */
.success {
  border-color: #04AA6D;
  color: green;
}

.success:hover {
  background-color: #04AA6D;
  color: white;
}

</style>
</head>
<body>

    <?php

include '../Controller/adminheader.php';

?>
<hr class="new1">
    <center>
        <h1 style="text-align:center;">Admin Feature's</h1>
    </center>
    <hr class="new1">

    <br><br>
    <div class="nev">
       

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
<center>
    <button class="btn success" name="click" type="submit" value="aui">All Users Information</button>
<button class="btn success" name="click" type="submit" value="aod">All Order & Delivery Information</button>
<button class="btn success" name="click" type="submit" value="vab">View All Book's</button>
<button class="btn success" name="click" type="submit" value="sd">Salary Distribution</button>
</center>

</div>

<?php
echo "<br>";

if ($_SERVER['REQUEST_METHOD'] === "POST")
    { 
        $click = $_POST['click'];
        if ( $click === "aui")
        {
            header("Location: alluserinfo.php");
        }
        else if ( $click === "aod")
        {
            header("Location: orderinfo.php");
        }
         else if ( $click === "vab")
        {
            header("Location: allbookinfo.php");
        }
         else
        {
            header("Location: salarydis.php");
        }
    }
    ?>

</form>
</body>

</html>