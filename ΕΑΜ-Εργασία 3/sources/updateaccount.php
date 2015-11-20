<?php

include('./update.php');
echo $error; 
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

$myusername = $_SESSION['username'];
echo $myusername;

 
	$result = mysqli_query($db,"SELECT * FROM Students WHERE username='$myusername'") or die("ERROR: ". mysqli_error($db));
	$row = mysqli_fetch_array($result)
	
?>

<!DOCTYPE html>
<html>
	<head>
		<!-- Bootstrap core CSS -->
    	<link href="../css/bootstrap.min.css" rel="stylesheet">
    	<!-- My CSS -->
    	<link href="dhlwsh-stoixeiastyling.css" rel="stylesheet">
    	<!-- My Jquery -->
    	<script src="http://code.jquery.com/jquery-1.8.0.min.js" type="text/javascript"></script>

    	<title>Home</title>
	</head>
	<script>
        function test(what,box){
        
        myInfo= {"test":"Για να γίνει η αλλαγή πρέπει να βάλεις τον τωρινό σου κωδικό","close":""}
		if (box==1)
        	detailsBox.innerHTML=myInfo[what]
		if (box==2)
        	detailsBox2.innerHTML=myInfo[what]
		if (box==3)
        	detailsBox3.innerHTML=myInfo[what]
    }
    
    </script>
	<body>
			<?php include('../includes/header.php'); ?>

			<div class="row">
				<div class="col-lg-3">
					<div class="tab-opts">
						<ul>
                            <li><a href="http://globalabuse.eu/Eam/sources/arxikh-dhlwsh.php">Δήλωση Συγγραμμάτων</a></li>
                            <li id="selected-tab"><a href="http://globalabuse.eu/Eam/sources/dhlwsh-stoixeia.php">Στοιχεία Λογαριασμού</a></li>
                            <li><a href="#">Ανταλλαγή</a></li>
                            <li><a href="http://globalabuse.eu/Eam/sources/dhlwsh-enhmerwsh.php">Ενημέρωση</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-8">
                	<form name="Update" action="updateaccount.php" method="post">
					<div class="tab-back">
                    
						<table>
							<thead>
								<th colspan="2">Αλλαγή Στοιχείων Λόγαριασμου</th>
							</thead>
							<tbody>
                             <fieldset>
                            <tr>
                                <td>Νέος Κωδικός:</td>
                                <td><input type="password" name="password1" onmouseover="test('test',1)" onMouseOut="test('close',1)" value="<?php echo htmlspecialchars($pass1);?>" /> <span class="error"><?php echo $pass1Err;?></span> </div></td>
                            </tr>
                            <tr>
                                <td>Επιβεβαίωση κωδικού:</td>
                                <td><input type="password" name="password2" value="<?php echo htmlspecialchars($pass2);?>"/> <span class="error"><?php echo $pass2Err;?></span> </td>
                            </tr>
                             </fieldset>
                            <tr>
                                <td>Νέο Email:</td>
                                <td><input type="email" name="email" id="email" onmouseover="test('test',1)" onMouseOut="test('close',1)" value="<?php echo htmlspecialchars($email);?>"/> <span class="error"><?php echo $emailErr;?></span><div id="detailsBox2"></div></td>
                            </tr>
                            <tr>
                                <td>Νέο Κινητό:</td>
                                <td><input type="text" name="kinhto" id="kinhto" onmouseover="test('test',1)" onMouseOut="test('close',1)" value="<?php echo htmlspecialchars($kinhto);?>"/><div id="detailsBox3"></div></td>
                            </tr>                          
                            <tr>
                            	<td>Παλιός Κωδικός</td>
                               <td><input type="password" name="oldpassword" value="<?php echo htmlspecialchars($oldpassword);?>"/> <span class="error"><?php echo $oldpassErr;?></span> </td>                       
                            </tr>   
                            		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" value="Αλλαγή" /></td>
		</tr>      
							</tbody>
						</table>
                                              
					<center><div id="detailsBox"></center>
					</div>
				</div>
                </form>
			</div>
	</body>
</html>
