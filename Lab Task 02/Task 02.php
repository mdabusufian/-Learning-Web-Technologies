<!DOCTYPE html>
<html>
<body>
	<h1><Form></h1>


	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

			<fieldset>
				<legend>Basic Information</legend>
				<br><br>

		First Name: * <input type="text" name="firstname" value="<?php echo $_POST['firstname']??; ?>">
		<br><br>

		Last Name: * <input type="text" name="lastname" value="<?php echo $_POST['lastname']??; ?>">
		<br><br>

		<label>Gender *</label>
		<input type="radio" id="Male" name="Gender" value="<?php echo $_POST['male']??; ?>"/>
		<label for="gendermale">Male</label>
		<input type="radio" id="female" name="Gender" value="male">Female
		<input type="radio" id="others" name="Gender" value="Others">
		<label for="Others">Others</label><br>
		<br><br>

		<label for="dob">Date of birth: *</label>
        <input type="date" id="dob">
		<br><br>

		<label>Religion: * </label>
		<select name=religion id=religion>
			<option value= >Muslims</option>
			<option value= >Hindus</option>
			<option value= >Buddhists</option>
			<option value= >Christians</option>
			<option value= >Others</option>
		</select>
		<br><br>


	</fieldset>
	<br>

			<fieldset>
				<legend>Contact Information</legend>
				<br>

		<label for="present addess"> Present Address: * </label>
		<input type="text" id="present addess">
		<br><br>

		<label for="permanent addess"> Permanent Address: * </label>
		<input type="text" id="permanent addess">
		<br><br>

		<label for="phone"> Phone Number: </label>
		<input type="tel" id="phone">
		<br><br>

		<label for="mail"> Email: * </label>
		<input type="email" id="mail">
		<br><br>

		<label for="pwlink"> Personal Website Link: </label>
		<input type="url" name="permanent addess" id="permanent addess">
		<br><br>


	</fieldset>
    <br>


	   <fieldset>
				<legend>Account Information</legend>
				<br>

		<label for="uname"> Username: *</label>
		<input type="text" name="uname" id="uname">
		<br><br>

		<label for="pass"> Password: * </label>
		<input type="password" name="pass" id="pass">
		<br><br>
	

    </fieldset>
    <br>
	
	</form>
	<br><br>
	<input type="button" name="For Submit Click Here" value="For Submit Click Here">

</body>
</html>