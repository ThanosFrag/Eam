<html>
	<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<!-- Bootstrap core CSS -->
    	<link href="../css/bootstrap.min.css" rel="stylesheet">
    	<!-- My CSS -->
    	<link href="../index2styling.css" rel="stylesheet">
    	<!-- Jquery stuff -->
    	<script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
		<meta http-equiv="Refresh" content="5;url=http://globalabuse.eu/Eam" />
    	<title>Dhlwsh Success</title>
	</head>
<body>
<?php 
include ("../includes/header.php");
session_start();
if (isset($_SESSION['username']) and !empty($_SESSION['username'])){
    ?>
	<div class=dhlwsh_success><center>Η Δήλωση σου  <?php echo $_SESSION['username'] ;?> έγινε με επιτυχία<br></br>
    <a href = "http://globalabuse.eu/Eam">Επιστροφή στην Αρχική Σελίδα (Αυτόματη ανακατεύθυνση σε 5 δευτερόλεπτα)
    
    </center>
	</div>
	<?php

}

?>