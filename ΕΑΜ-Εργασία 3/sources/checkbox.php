<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php

session_start();
include("config.php");
$checkbox1 = $_POST['devices'];



if ((isset($_SESSION['username']) and $_SESSION['username'])){
	$username = $_SESSION['username'];	
}
else {
		header("location: index.php"); 	
	
}
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



 
	$result = mysqli_query($db,"SELECT * FROM Students WHERE username='$username'") or die("ERROR: ". mysqli_error($db));
	$row = mysqli_fetch_array($result);
	$student_id = $row[id_student];
	$student_examhno = $row[examhno];
	
	
	
$year = date("Y");
	
	for ($i=0; $i<sizeof($checkbox1);$i++) {
		if ($checkbox1[$i]=="")
			continue;
		$result = mysqli_query($db,"SELECT * FROM Books WHERE bookname='$checkbox1[$i]'") or die("ERROR: ". mysqli_error($db));
		$row = mysqli_fetch_array($result);
		$bookid = $row[book_id];
		mysqli_query($db,"INSERT INTO `Dhlwsh`(`idDhlwsh`, `idStudent`, `idBook`, `year`, `examhno`) VALUES ('','$student_id','$bookid','$year','$student_examhno');") or die("Insert ERROR");					
		
	}

	header("Location: ./dhlwsh_sucess");

?>
