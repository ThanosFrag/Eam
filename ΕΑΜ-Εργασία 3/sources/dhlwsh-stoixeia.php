<?php

 
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

	<body>
			<?php include('../includes/header.php'); ?>

			<div class="row">
				<div class="col-lg-3">
					<div class="tab-opts">
						<ul>
                            <li><a href="http://globalabuse.eu/Eam/sources/arxikh-dhlwsh.php">Δήλωση Συγγραμμάτων</a></li>
                            <?php session_start();       
							if (!(!(isset($_SESSION['username']) and !empty($_SESSION['username'])))){?>
                            <li id="selected-tab"><a href="http://globalabuse.eu/Eam/sources/dhlwsh-stoixeia.php">Στοιχεία Λογαριασμού</a></li> <?php
							}?>
                            <li><a href="#">Ανταλλαγή</a></li>
                            <li><a href="http://globalabuse.eu/Eam/sources/dhlwsh-enhmerwsh.php">Ενημέρωση</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="tab-back">
						<table>
							<thead>
								<th colspan="2">Στοιχεία λογαριασμού</th>
							</thead>
							<tbody>
								<tr class="even">
									<td>Όνομα Χρήστη</td>
									<td><?php echo $row[username]; ?></td>
								</tr>                         
								<tr class="even">
									<td>Όνομα</td>
									<td><?php echo $row[name]; ?></td>
								</tr>
								<tr>
									<td>Επώνυμο</td>
									<td><?php echo $row[surname] ;?></td>
								</tr>
								<tr class="even">
									<td>e-mail</td>
									<td><?php echo $row[email_adress] ;?></td>
								</tr>   
								<tr>
									<td>ΑΜ Φοιτητή</td>
									<td><?php echo $row[afm]; ?></td>
								</tr>                                                         
								<tr>
									<td>Ίδρυμα</td>
									<td><?php echo $row[idruma] ; ?></td>
								</tr>
								<tr class="even">
									<td>Σχολή</td>
									<td><?php echo $row[sxolh]; ?></td>
								</tr>
								<tr>
									<td>Τρέχων Μάθημα</td>
									<td><?php echo $row[examhno]; ?></td>
								</tr>


								<tr>
									<td>Κινητό</td>
									<td><?php echo $row[kinhto]; ?></td>
								</tr>

							</tbody>
						</table>
                        <?php 
							session_start();
						if ((isset($_SESSION['update']) and $_SESSION['update'])){
							$_SESSION['update'] = false;
							?><center><p>Η αλλαγή έγινε με επιτυχία</p> </center> <?php
                          } ?>
						<a href="./updateaccount.php"><p id="Allagh">Αλλαγή Στοιχείων Λογαριασμού</p></a>
					</div>
				</div>
			</div>
	</body>
</html>
