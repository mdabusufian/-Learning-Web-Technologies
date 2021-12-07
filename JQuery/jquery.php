<?php 
	
	$conn = new mysqli("localhost", "root", "", "user");

	$res = $conn->query("select * from employee");

	$arr1 = array();

	if ($res->num_rows > 0) {
		while($row = $res->fetch_assoc()) {
			array_push($arr1, array('id' => $row["id"], 'name' => $row["name"], 'contactno' => $row["contactno"],'email' => $row["email"]));
		}

		echo json_encode($arr1);
	}
?>