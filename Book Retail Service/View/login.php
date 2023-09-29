<?php

include '../Controller/header.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
    <script type="text/javascript">
function validateForm1() {
let x = document.forms["login"]["username"].value;
let y = document.forms["login"]["pass"].value;


if ( x == "" && y == "")
{
alert( "Empty submission");
return false;
}
else if (x == "") {
alert("Username is empty");
return false;
}
else if (y== "")
{
alert("Password is empty");
return false;
}
}
</script>

<script type="text/javascript">
 function validateForm2() {
  let xx = document.forms["forget"]["username"].value;
  let yy = document.forms["forget"]["email"].value;

  if ( xx == "" && yy == "") 
  {
    alert( "Empty submission");
    return false;
  }
  else if (xx == "") {
    alert("Please enter your Username");
    return false;
  }
  else if (yy == "") 
  {
    alert("Please enter your email");
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


body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.open-button {
  background-color: dodgerblue;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

.open-button1 {
  background-color: blue;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  left: 70%;
  transform: translate(-70%);
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* The popup form - hidden by default */
.form-popup1 {
  display: none;
  position: fixed;
  bottom: 0;
  left: 70%;
  transform: translate(-70%);
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Add styles to the form container */
.form-container1 {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* Full-width input fields */
.form-container1 input[type=text], .form-container1 input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* When the inputs get focus, do something */
.form-container1 input[type=text]:focus, .form-container1 input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}


/* Set a style for the Sign in button */
.form-container .btn {
  background-color: green;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Set a style for the Sign in button */
.form-container1 .btn {
  background-color: green;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add a red background color to the cancel button */
.form-container1 .cancel {
  background-color: red;
}


/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

/* Add some hover effects to buttons */
.form-container1 .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
<body>


<h1 style="text-align:center;">Welcome to BOOK RETAIL SERVICE</h1>
  <b>
    <p style="text-align:center;">Developed By Team 5-FIVE</p>
  </b>

  <br>

 <p>BOOK RETAIL SERVICE is now one of the leading e-commerce organizations in Bangladesh. It is indeed the biggest
    online bookshop or bookstore in Bangladesh that helps you save time and money. You can buy books online with a few
    clicks or a convenient phone call. With breathtaking discounts and offers you can buy anything from Bangla Upannash
    or English story books to academic, research or competitive exam books. Superfast cash on delivery service brings
    the products at your doorstep. Happy Shopping with BOOK RETAIL SERVICE.com ! ! ! </p>





         <!-- #####################   For Login   ################# -->



<button class="open-button" onclick="openForm()">For Login</button>

<div class="form-popup" id="myForm">

		<form name="login" action="../controller/loginAction.php" onsubmit="return validateForm1()" method="POST" class="form-container">

		<h1><p style="text-align:center;">Login</p></h1>


         
    <label for="username"><b>User Name</b></label>
    <input type="text" placeholder="Enter Username" name="username">

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass">   


		<button type="submit"
    class="btn">SignIn</button>

    

    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

     


       <!-- #####################  Forgot Password  ################# -->



<button class="open-button1" onclick="openForm1()">For Reset Password</button>

<div class="form-popup1" id="myForm1">


<form name="forget" action="../controller/FpassAction.php" onsubmit="return validateForm2()" method="POST" class="form-container1">


    <h1><p style="text-align:center;">Forgot Password</p></h1>


         <label for="username"><b>User Name</b></label>
    <input class="form-control" type="text" name="username"  placeholder="Enter Username">  
        
        <label for="email"><b>Email</b></label>
        <input class="form-control" type="text" name="email" placeholder="Enter Email">
        <br>


    <button type="submit"
    class="btn">Submit</button>


    

    <button type="button" class="btn cancel" onclick="closeForm1()">Close</button>
  </form>
</div>


<script>
function openForm1() {
  document.getElementById("myForm1").style.display = "block";
}

function closeForm1() {
  document.getElementById("myForm1").style.display = "none";
}
</script>
			
</body>
</html>
