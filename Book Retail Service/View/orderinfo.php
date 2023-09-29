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

body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=number]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

    </style>
</head>

<body>
  <?php

include '../Controller/adminheader.php';
?>
  <br>
  <hr class="new1">
  <h2 style="text-align:center;">All Order Information</h2>
  <hr class="new1">

  <fieldset>
    <legend>
      <h2>Order History</h2>
    </legend>
      <form action="../controller/orderinfoAction.php" method="POST">

              <div class="container">

      <h1>Pending Order For Delivery</h1>
    <p>Please fill in this form for sent Delivery Request.</p>
    <hr>


    <b> Order ID: </b><input class="form-control" type="number" name="odid" placeholder="Enter Order ID" >


        <br><br>
        <button type="submit" class="registerbtn">Submit</button>
    </fieldset>
    <br>

    <table id="userF">

            <tr>
                <th><center>Order ID</center></th>
                <th><center>Customer Name</center></th>
                <th><center>Delivery Address</center></th>
                 <th><center>Phone No</center></th>
                  <th><center>Payment Method</center></th>
                   <th><center>Delivery Status</center></th>

            </tr>

 <?php

                $hostname = "localhost";

                $username = "root";

                $password = "";

                $database = "project";

                $con = new mysqli($hostname, $username, $password, $database);

                $sql = "SELECT * FROM cartndel /*WHERE dstatus != 'yes'*/ ";

                $stmt = $con->prepare($sql);

                $stmt->execute();

                $result = $stmt->get_result();

                $data=$result->fetch_assoc();


                if ($result->num_rows > 0) {

                    while($row = $result->fetch_assoc()) {

                        ?>
                 <tr>
                    <td><center>
                      
                      <?php echo $row['odid']?>
                        
                      </center></td>

                      <td><center>
                      
                      <?php echo $row['cname']?>
                        
                      </center></td>

                      <td><center>
                      
                      <?php echo $row['dadd']?>
                        
                      </center></td>

                      <td><center>
                      
                      <?php echo $row['phn']?>
                        
                      </center></td>

                      <td><center>
                      
                      <?php echo $row['pmethod']?>
                        
                      </center></td>

                      <td><center>
                      
                      <?php echo $row['dstatus']?>
                        
                      </center></td>
                </tr>
 <?php
                    }
                }

 ?>
 </table>

</body>

</html>