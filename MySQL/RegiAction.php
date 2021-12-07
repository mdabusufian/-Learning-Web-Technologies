<?php
echo "<br>";
echo "<br>";

if ($_SERVER['REQUEST_METHOD'] === "POST")
{

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$rel = $_POST['rel'];
$add = $_POST['add'];
$padd = $_POST['padd'];
$mail = $_POST['mail'];
$phn = $_POST['phn'];
$prlink = $_POST['prlink'];
$name = $_POST['name'];
$pass = $_POST['pass'];


 $date = new DateTime($dob);
 $now = new DateTime();
 $interval = $now->diff($date);


if (empty($fname) || empty($lname)|| empty(isset($_POST['gender'])) || empty($dob) || empty($rel)   ||  empty($add)||  empty($padd) || empty($phn) || empty($mail)|| empty($prlink) || empty($name) || empty($pass))
{
echo "Please fill up the form properly";
}


else
{ 
$gender = $_POST['gender'];

$fname = validate($fname);
$fname = sanitize($fname);
$lname = validate($lname);
$lname = sanitize($lname);
$gender = validate($gender);
$dob = validate($dob);
$rel = validate($rel);
$add = validate($add);
$padd = sanitize($padd);
$phn = validate($phn);
$mail = validate($mail);
$prlink = validate($prlink);
$name = validate($name);
$name = sanitize($name);
$pass = validate($pass);

    $hostname = "localhost";
    $name = "root";
    $pass = "";
    $database = "finaltask";

    $con = new mysqli($hostname, $name, $pass, $database);

    $sql = "INSERT INTO registration (First Name,Last Name, Gender, DoB, Religion,Present Address,Premanent Address, Phone, Email, Personal Website Link, Username, Password)  VALUES ('$fname','$lname','$gender','$dob','$rel','$add','$padd','$phn','$mail','$prlink','$name','$pass')";
    $stmt = $con->query($sql);
    
if ($stmt ===true )
    {
        echo "Registration Successful";

    }
    else {
        echo "Registration Failed";
    }
}
}



function validate($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
function sanitize($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>