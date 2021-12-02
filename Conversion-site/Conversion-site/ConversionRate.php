<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <title>Conversion Page2</title>
  </head>
  <body>
    <?php include 'header.html';?>
    <style> h1 , h2 , p {text-align: center;}</style>
    <h1>Page 2[Conversion Rate]</h1>
    <h2> Convertor Website </h2>
    <p>1.<a href="Home.php"> Home </a> 2. <a href=" ConversionRate.php"> Conversion Rate </a> 3. <a href="history.php"> history </a></p>

    
    <h2>Conversion Rate:</h2>
    

     <form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"  method="POST">
      <p> Catagory: <input type="text" name="catagory" > Unit:<input type="text" name="unit" > Rate:<input type="text" name="rate"> <input type="submit"  name="submit"  value="Submit"><br><br>
     </p>
     </form>
     <?php

   		if ($_SERVER['REQUEST_METHOD'] === 'POST') {

   			$catagory= $_POST['catagory'];
   			$unit = $_POST['unit'];
        	$rate = $_POST['rate'];

   			if (empty($catagory) || empty($unit) || empty($rate))
         {
          echo "<p>";
   				echo "Please fill all the fields properly";
          echo "</p>";
   			}
   			else {
   				$catagory = validate($catagory);
   				$unit = validate($unit);
          		$rate = validate($rate);


   				$handle = fopen("data.json", "a");
   				$arr1 = array('Catagory' => $catagory, 'Unit' => $unit,'Rate'=>$rate);
   				$arr1 = json_encode($arr1);
   				fwrite($handle, $arr1 . "\n");
            echo "<p>";
   				echo " new convertion rate addition successfull  ";
          echo "</p>";

   			}
   		}

   		function validate($data) {
   			$data = trim($data);
   			$data = stripslashes($data);
   			$data = htmlspecialchars($data);
   			return $data;
   		}

      
?>
<?php
   	$handle = fopen("data.json", "r");
   	$data = fread($handle, filesize("data.json"));
   	$exploded = explode("\n", $data);

   	$arr1 = array();
   	for ($i =0; $i < count($exploded); $i++){

   		 $decode = json_decode($exploded[$i]);
   		 array_push($arr1, $decode);

	}

   ?>
   <table border="1" align="center">
 <thead>
   <tr>
     <th style="color:blue;">Catagory</th>
     <th style="color:blue;">Unit</th>
     <th style="color:blue;">Rate</th>
   </tr>
 </thead>
 <tbody>
   <?php
  for ($i=0; $i < count($arr1)-1; $i++) {
    echo "<tr>";
    echo "<td>";
    echo $arr1[$i]->Catagory;
    echo "</td>";
    echo "<td>";
    echo $arr1[$i]->Unit;
    echo "</td>";
    echo "<td>";
    echo $arr1[$i]->Rate;
    echo "</td>";
    echo "</tr>";
  }
    ?>
 </tbody>
</table>
<?php include 'footer.html';?>
  </body>
</html>