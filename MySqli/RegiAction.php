
<?php echo "<br>";
echo "<br>";
if ($_SERVER['REQUEST_METHOD'] === "POST")
{$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$dob = $_POST['dob'];
$add = $_POST['add'];
$mail = $_POST['mail'];
$phn = $_POST['phn'];
$prlink = $_POST['prlink'];
$username = $_POST['username'];
$pass = $_POST['pass'];
$rel = $_POST['rel'];
$date = new DateTime($dob);
$now = new DateTime();
$interval = $now->diff($date);
if (empty($fname) || empty($lname) || empty($dob) || empty(isset($_POST['gender'])) || empty($rel)|| empty($add) || empty($mail) || empty($phn) || empty($username) || empty($pass))
{
echo "Please fill up the form properly";
}else
{
$gender = $_POST['gender'];
$user = validate($username);
$user = sanitize($username);
$pass = validate($pass);
$fname = validate($fname);
$fname = sanitize($fname);
$lname = validate($lname);
$lname = sanitize($lname);
$dob = validate($dob);
$gender = validate($gender);
$add = validate($add);
$add = sanitize($add);
$mail = validate($mail);
$phn = validate($phn);
$prlink = validate($prlink);
$rel= validate($rel);
$hostname = "localhost";
$username = "root";
$password = "";
$database = "test"; 
$con = new mysqli($hostname, $username, $password, $database); 
$sql = "INSERT INTO registration (username, pass, fname, lname, dob, gender, address, phn, prlink, email,rel) VALUES ('$user','$pass','$fname','$lname','$dob','$gender','$add','$phn','$prlink','$mail','$rel')";
$stmt = $con->query($sql);
if ($stmt ===true )
{
echo "Registration Successful";
echo "<hr>";
}
else {
echo "Error while saving......";
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

