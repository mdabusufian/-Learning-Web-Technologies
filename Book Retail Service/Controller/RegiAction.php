<?php

echo "<br>";
echo "<br>";

if ($_SERVER['REQUEST_METHOD'] === "POST")
{
        

        $name = $_POST['name'];

        $dob = $_POST['dob'];
        $add = $_POST['add'];
        $mail = $_POST['mail'];
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        $phn = "null";
        $photo = '../View/Image/defult.png';


        if (empty($name)|| empty($dob) || empty(isset($_POST['gender'])) || empty($add) || empty($mail) || empty($phn) || empty($username) || empty($pass))
{

$message = "Please Fill The Form Properly ";
echo "<script type='text/javascript'>alert('$message');window.location = '../view/registration.php';</script>";
}

else
{
        $name = validate($name);
        $name = sanitize($name);
        $date = new DateTime($dob);
        $now = new DateTime();
        $interval = $now->diff($date);
        $dob = validate($dob);
        $gender = $_POST['gender'];
        $gender = validate($gender);
        $add = validate($add);
        $add = sanitize($add);
        $mail = validate($mail);
        $user = validate($username);
        $user = sanitize($username);
        $pass = validate($pass);


                $hostname = "localhost";
                $username = "root";
                $password = "";
                $database = "project";

                $con = new mysqli($hostname, $username, $password, $database);


                $found = "SELECT * FROM registration WHERE username= '$user'";

$stmt = $con->prepare($found);
$stmt->execute();
$result = $stmt->get_result();
$data=$result->fetch_assoc();
if($data)

{
$message = "User Name Already Exist ! Try again with another one !";
echo "<script type='text/javascript'>alert('$message');window.location = '../view/registration.php';</script>";

}

$sql = "INSERT INTO registration (name, dob, gender, address, phn, prlink, email,username, pass, photo) VALUES ('$name','$dob','$gender','$add','$phn','$prlink','$mail','$user','$pass','$photo')";
$stmt = $con->query($sql);

if ($stmt ===true )
{


echo "<br>";
header("Location: ../view/RegSuccess.php");
}
else
{
$message = "Error while saving ";
echo "<script type='text/javascript'>alert('$message');window.location = '../view/registration.php';</script>";

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
