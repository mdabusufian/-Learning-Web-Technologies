<!DOCTYPE html>
<html>
<head>
    
    <title>Login Page</title>
    
</head>
<body>

<style> h1 , h2 , p {text-align: center;}</style>
	<h1> <i>Login Details </i></h1>
	

	<form action="loginAction.php" method="POST">
     
    
     <fieldset>
				<h2> <i><legend>User Login</legend> </i></h2>
				<br>

	<p>	Username: <input type="text" name="username">
		<br><br>

	    Password: <input type="password" name="pass">
		<br><br>
	</p>

    </fieldset>
    <br>
	 <h2>
	<input type="Submit" name="Login">
</h2>


    </form>

    <h2> Not Registered <a href ="formreg.php"> Click here </a> to register </h2>
	<br><br>

<br> <br>

</body>
</html>