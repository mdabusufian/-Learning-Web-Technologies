<?php

include '../Controller/header.php';

?>

<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Update Password</title>


  <script type="text/javascript">
    function validateForm() {
  let x = document.forms["forget"]["pass"].value;
  let y = document.forms["forget"]["pass2"].value;

  if ( x == "" && y == "") 
  {
    alert( "Empty submission");
    return false;
  }

  else if (x == "") {
    alert("Please enter your new password");
    return false;
  }
  else if (y== "") 
  {
    alert("Please re-enter your new password");
    return false;
  }
  else if( x != y)
  {
   alert( "Passwords didn't match!!");
    return false; 
  }
}
</script>


 <style>

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
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.submitbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.submitbtn:hover {
  opacity: 1;
}
</style>

</head>
  <body>



<div class="container">
        <form method="post" name="forget" action="../controller/PasswordUpdateAction.php" onsubmit="return validateForm()">
        
        <h4>New Password </h4>
        <input class="form-control" type="password" name="pass"  placeholder="Enter your New Password">  
        
        <h4>Confirm New Password</h4>
        <input class="form-control" type="password" name="pass2" placeholder="Enter re-enter your new password">
        <br>
        
        <button type="submit" class="submitbtn">Submit</button>
        </form>
      </div>
  </body>
</html>