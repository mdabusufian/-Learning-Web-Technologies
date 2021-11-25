<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>File I/O</title>
</head>
<body>

	<h1>File I/O</h1>
	
	<p>Open the file using:</p>
	<p>$handle = fopen("data.txt", "a+")</p>
	<hr>

	<?php
		$handle = fopen("data.txt", "w");
	?>

	<br>

	<p>Write something in the file using: </p>
	<p>$write = fwrite($handle, "Mir Md. Kawsur");</p>
	<hr>

	<?php 
		$write = fwrite($handle, "Rahim");
	?>

	<br>

	<p>After writing, value in $write: </p>
	<p>var_dump($write);</p>
	<hr>

	<?php 
		var_dump($write);
	?>

	<br>

	<p>Read from file: </p>
	<p>fread($handle, 14);</p>
	<hr>

	<?php 
		echo "The content in file is: ";
		echo "<br>";
		$handle2 = fopen("data.txt", "r");
		echo fread($handle2, 14);
	?>
</body>
</html>