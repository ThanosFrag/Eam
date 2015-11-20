<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php 
 
$error = 0;
$unameErr = $nameErr = $pass1Err=$pass2Err=$surnameErr=$idrimaErr=$sxoliErr=$examhnoErr=$kinhtoErr=$emailErr=$AmErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["username"])) {
			$unameErr = "Το πεδίο αυτό είναι υποχρεωτικό";
			$error=1;
	}
	else {
			$username = $_POST["username"];
	}
	if (empty($_POST["password1"])) {
			$pass1Err = "Το πεδίο αυτό είναι υποχρεωτικό";
			$error=1;
	}
	else {
			$pass1 = $_POST["password1"];
	}
	if (empty($_POST["password2"])) {
			$pass2Err = "Το πεδίο αυτό είναι υποχρεωτικό";
			$error=1;
	}
	else {
			$pass2 = $_POST["password2"];
	}
	if (empty($_POST["name"])) {
			$nameErr = "Το πεδίο αυτό είναι υποχρεωτικό";
			$error=1;
	}
	else {
			$name = $_POST["name"];
	}
	if (empty($_POST["surname"])) {
			$surnameErr = "Το πεδίο αυτό είναι υποχρεωτικό";
			$error=1;
	}
	else {
			$surname = $_POST["surname"];
	}	
	if (empty($_POST["email"])) {
			$emailErr = "Το πεδίο αυτό είναι υποχρεωτικό";
			$error=1;
	}
	else {
			$email = $_POST["email"];
	}
	if (empty($_POST["idrima"])) {
			$idrimaErr = "Το πεδίο αυτό είναι υποχρεωτικό";
			$error=1;
	}
	else {
			$idrima = $_POST["idrima"];
	}	
	if (empty($_POST["sxoli"])) {
			$sxoliErr = "Το πεδίο αυτό είναι υποχρεωτικό";
			$error=1;
	}
	else {
			$sxoli = $_POST["sxoli"];
	}
	if (empty($_POST["examhno"])) {
			$examhnoaErr = "Το πεδίο αυτό είναι υποχρεωτικό";
			$error=1;
	}
	else {
			$examhno = $_POST["examhno"];
	}
	if (empty($_POST["kinhto"])) {
			$kinhtoErr = "Το πεδίο αυτό είναι υποχρεωτικό";
			$error=1;
	}
	else {
			$kinhto= $_POST["kinhto"];
	}				 	 	 	 
	if (empty($_POST["Am"])) {
			$AmErr = "Το πεδίο αυτό είναι υποχρεωτικό";
			$error=1;
	}
	else {
			$Am= $_POST["Am"];
	}

if($pass1 != $pass2){
	$pass2Err="not matching password";
	$error=1;
}
if(strlen($username) > 30)
    $error=1;
 
//$hash = hash('sha256', $pass1);
 $password = md5($pass1);
function createSalt()
{
    $text = md5(uniqid(rand(), true));
    return substr($text, 0, 3);
}
 
//$salt = createSalt();
//$password = hash('sha256', $salt . $hash);
 
$db = new mysqli('localhost', 'root', '1007Ekzw', 'Eudoxus');

if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}

mysqli_query($db, 'SET character_set_results=utf8');
 mysqli_query($db, 'SET names=utf8');
 mysqli_query($db, 'SET character_set_client=utf8');
 mysqli_query($db, 'SET character_set_connection=utf8');
 mysqli_query($db, 'SET character_set_results=utf8');
 mysqli_query($db, 'SET collation_connection=utf8_unicode_ci');

$resultset=mysqli_query($db,"SELECT * FROM Students WHERE username='$username'") or die("Selecet Error");	//$username is a string and it is quoted in the database so we add the quotes

$username_exists = 0;
if ($row = mysqli_fetch_array($resultset))
	$username_exists = 1;	
if($username_exists == 1) {
	$unameErr = "Το όνομα λογαριασμόυ χρησιμοποιείται ήδη";
	$error=1;
}
$resultset=mysqli_query($db,"SELECT * FROM College WHERE name='$sxoli'") or die("Selecet Error");
$college_exists = 0;
if ($row = mysqli_fetch_array($resultset))
	$college_exists = 1;
if($college_exists == 0) {
	$sxoliErr = "Η σχολή που έβαλες δεν υπάρχει";
	$error=1;
}	
echo "Sxolh ",$sxoli;
echo "idrima |$idrima|";
if ($error==0){
	
	$resultset=mysqli_query($db,"INSERT INTO `Students`(`id_student`, `username`, `passwd`, `afm`, `name`, `surname`, `email_adress`, `idruma`, `sxolh`, `kinhto`, `examhno`) VALUES ('','$username','$password','$Am','$name','$surname','$email','$idrima','$sxoli','$kinhto','$Am');") or die("Insert ERROR");
	header("Location: register_success.php");
}
}
?>
