<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php 
 
$error = 0;
$unameErr = $nameErr = $pass1Err=$pass2Err=$surnameErr=$idrimaErr=$sxoliErr=$tmimaErr=$kinhtoErr=$emailErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
			 	 	 	 


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
session_start();

$resultset=mysqli_query($db,"SELECT * FROM Students WHERE username='$_SESSION['username']'") or die("Selecet Error");	//$username is a string and it is quoted in the database so we add the quotes

$row = mysqli_fetch_row($resultset


	if (empty($_POST["username"])) {
			$unameErr = "Missing";
			$error=1;
	}
	else {
			$username = $_POST["username"];
	}
	if (empty($_POST["password1"])) {
			$pass1Err = "Missing";
			$error=1;
	}
	else {
			$pass1 = $_POST["password1"];
	}
	if (empty($_POST["password2"])) {
			$pass2Err = "Missing";
			$error=1;
	}
	else {
			$pass2 = $_POST["password2"];
	}
	if (empty($_POST["name"])) {
			$nameErr = "Missing";
			$error=1;
	}
	else {
			$name = $_POST["name"];
	}
	if (empty($_POST["surname"])) {
			$surnameErr = "Missing";
			$error=1;
	}
	else {
			$surname = $_POST["surname"];
	}	
	if (empty($_POST["email"])) {
			$emailErr = "Missing";
			$error=1;
	}
	else {
			$email = $_POST["email"];
	}
	if (empty($_POST["idrima"])) {
			$idrimaErr = "Missing";
			$error=1;
	}
	else {
			$idrima = $_POST["idrima"];
	}	
	if (empty($_POST["sxoli"])) {
			$sxoliErr = "Missing";
			$error=1;
	}
	else {
			$sxoli = $_POST["sxoli"];
	}
	if (empty($_POST["tmima"])) {
			$tmimaErr = "Missing";
			$error=1;
	}
	else {
			$tmima = $_POST["tmima"];
	}
	if (empty($_POST["kinhto"])) {
			$kinhtoErr = "Missing";
			$error=1;
	}
	else {
			$kinhto= $_POST["kinhto"];
	}
$_SESSION['username']
if ($error==0){
	
	$resultset=mysqli_query($db,"UPDATE `Students`(`id_student`, `username`, `passwd`, `name`, `surname`, `email_adress`, `idruma`, `sxolh`, `tmhma`, `kinhto`) VALUES ('','$username','$password','$name','$surname','$email','$idrima','$sxoli','$tmima','$kinhto')") or die("Insert ERROR");
	header("Location: register_success.php");
}
}
?>
