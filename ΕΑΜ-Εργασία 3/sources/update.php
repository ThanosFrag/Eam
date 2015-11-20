<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php 

$error = 0;
$unameErr = $nameErr = $pass1Err=$pass2Err=$surnameErr=$idrimaErr=$sxoliErr=$tmimaErr=$kinhtoErr=$emailErr=$oldpassErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
			 	 	 	 


 
 
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
$username = $_SESSION['username'];

$resultset=mysqli_query($db,"SELECT * FROM Students WHERE username='$username'") or die("Selecet Error");	//$username is a string and it is quoted in the database so we add the quotes
$count = mysqli_num_rows($resultset);


$not_blank=1;

$row = mysqli_fetch_array($resultset);
$oldpassword_correct = $row[passwd];


	if (empty($_POST["password1"]) && empty($_POST["password2"])) {
			$password = $oldpassword_correct;
	}
	else {
			$not_blank=0;
			$pass1 = $_POST["password1"];
			$pass2 = $_POST["password2"];	
			if($pass1 != $pass2){
				$pass2Err="not matching password";
				$error=1;
			}
			else
				$password = md5($pass1);
			
	}

	if (empty($_POST["email"])) {
		$email = $row[email_adress];
		
	}
	else {
		$not_blank=0;
		$email = $_POST["email"];
	}

	if (empty($_POST["kinhto"])) {
		$kinhto = $row[kinhto];
		
	}
	else {
		$not_blank=0;
		$kinhto= $_POST["kinhto"];
	}
	
	if ($not_blank==0){
		
		if(!empty($_POST["oldpassword"])){

			$oldpassword = $_POST["oldpassword"];  
			$oldpassword = md5($oldpassword);

			if (!($oldpassword_correct == $oldpassword)){
				$error=1;
				$oldpassErr="Λάθος Κωδικός";					
			}
		}	
		else {
					$error=1;
					$oldpassErr="Λάθος Κωδικός";					
		}	
		
	}
							
	
if ($error==0){
	
	$resultset=mysqli_query($db,"UPDATE `Students` SET `passwd` = '$password' , `email_adress` = '$email' , `kinhto` = '$kinhto' WHERE username = '$username'") or die("Update ERROR");
	session_start();
	$_SESSION['update'] = true;
	header("Location: dhlwsh-stoixeia.php?msg=update_sucess");
}
//header("Location: dhlwsh-stoixeia.php?msg=update_failed");
}
?>
