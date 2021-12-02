<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>History</title>
</head>
<body>
	<style> h1 , h2 , p {text-align: center;}</style>
	<?php include 'header.html';?>
	<h1>Page 3 [ History ] </h1>
	<h2> Convertor Website </h2> 

	<p>1.<a href="Home.php"> Home </a> 2. <a href=" ConversionRate.php"> Conversion Rate </a> 3. <a href="history.php"> history </a>
	</p>
	<h2>History:</h2>
	
	<?php
    $handle = fopen("hdata.json", "r");
    $data = fread($handle, filesize("hdata.json"));
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
     <th style="color:purple;">Catagory</th>
     <th style="color:purple;">Unit</th>
     <th style="color:purple;">Result</th>
    </tr>
    </thead>
    <tbody>
    <?php
    for ($j=0; $j <count($arr1)-1; $j++) {
    echo "<tr>";
    echo "<td>";
    echo $arr1[$j]->Catagory;
    echo "</td>";
    echo "<td>";
    echo $arr1[$j]->Unit;
    echo "</td>";
    echo "<td>";
    echo $arr1[$j]->Result;
    echo "</td>";
    echo "</tr>";
    }
    ?>
    </tbody>
    </table>

<?php include 'footer.html';?>
</body>
</html>