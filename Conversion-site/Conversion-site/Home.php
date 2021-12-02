
		<?php

		
			if ($_SERVER['REQUEST_METHOD'] === 'POST') 

			{
				$value = $_POST['value'];
				$select = $_POST['select_catagory'];

				if (empty($value) || empty($select)) 
				{
					echo "<p>"; 
					echo "please input values properly";
					echo "</p>";
				}
				else 
				{
					
					if(file_exists("data.json"))
        				{
               				$handle = fopen("data.json","r");
               				$data = fread($handle,filesize("data.json"));
               				$data = explode("\n",$data);

              	 for($i=0;$i< count($data) -1 ;$i++) 
              		 {
                 		$json = json_decode($data[$i]);
                 		if($select === $json->Catagory )
                 			{
                  					 $rate = $json->Rate;
                  					 $result = $rate*$value;
                  					 $handle = fopen("hdata.json", "a");
                    				$arr1 = array('Catagory' => $select, 'Unit' => $value,'Result'=>$result);
                    				$arr1 = json_encode($arr1);
                    				fwrite($handle, $arr1 . "\n");
							}
					}
						}
				}
			}
		?>
	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
</head>
<body>
	<style> h1 , h2 , p {text-align: center;}</style>
	<?php include 'header.html';?>

	<h1>Page 1 [ Home ] </h1>
	<h2> Convertor Website </h2> 
	<p>

	1.<a href="Home.php"> Home </a> 2. <a href=" ConversionRate.php"> Conversion Rate </a> 3. <a href="history.php"> history </a>
	</p>
	<br>
	<br>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
		
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
      			<p>
			Select Catagory :*<select  name="select_catagory">

                                    <option>Select a Value</option>
                                    <?php
                                   for ($j=0; $j <count($arr1)-1; $j++) {
                                     echo "<option>";
                                     echo $arr1[$j]->Catagory;
                                     echo "</option>";
                                   }
                                     ?>

                                </select>
			<br> <br>
		value :*
			<input type="number" name="value"  >
			<input type="submit" name="Submit">
			<br><br>
		Result :
			<input type="textarea" name="result"  value="<?php echo $result??"" ;?>">	

		</p>
	</form>
	

<?php include 'footer.html';?>
</body>
</html>