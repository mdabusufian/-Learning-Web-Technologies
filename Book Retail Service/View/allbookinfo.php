<?php
session_start();
if (count($_SESSION)===0)
{
header("location: ../Controller/logout.php");
}
?>


<!DOCTYPE html>
<html>

<head>
   <style>

      #userF {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#userF td, #userF th {
  border: 2px solid #5F9EA0;
  padding: 8px;
}

#userF tr:nth-child(even){background-color: #D3D3D3;}
#userF tr:nth-child(odd){background-color: #ADD8E6;}

#userF tr:hover {background-color: #5F9EA0;}

#userF th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #A52A2A;
  color: white;
}

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
    </style>
</head>

<body>
  <?php
    include '../Controller/adminheader.php';
  ?>
  <br><hr class="new1">
  <h2 style="text-align:center;">All Added Books Information </h2>
  <hr class="new1">


  <br><br>
  
<br><br>

  <table id="userF">

            <tr>
                <th><center>Product ID</center></th>
                <th><center>Name</center></th>
                <th><center>Author</center></th>
                <th><center>Price</center></th>
                <th><center>Available Quantity</center></th>

            </tr>

 <?php

                $hostname = "localhost";

                $username = "root";

                $password = "";

                $database = "project";

                $con = new mysqli($hostname, $username, $password, $database);

                $sql = "SELECT salerid,name,author,price,quantity FROM book ";

                $stmt = $con->prepare($sql);

                $stmt->execute();

                $result = $stmt->get_result();

                $data=$result->fetch_assoc();


                if ($result->num_rows > 0) {

                    while($row = $result->fetch_assoc()) {

                        ?>
                 <tr>
                    <td><center>
                      
                      <?php echo $row['salerid']?>
                        
                      </center></td>

                      <td><center>
                      
                      <?php echo $row['name']?>
                        
                      </center></td>

                      <td><center>
                      
                      <?php echo $row['author']?>
                        
                      </center></td>

                      <td><center>
                      
                      <?php echo $row['price']?>
                        
                      </center></td>

                      <td><center>
                      
                      <?php echo $row['quantity']?>
                        
                      </center></td>
                </tr>
 <?php
                    }
                }

 ?>


</body>

</html>