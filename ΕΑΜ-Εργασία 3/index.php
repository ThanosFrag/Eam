<!DOCTYPE html>
<html>
	<head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<!-- Bootstrap core CSS -->
    	<link href="css/bootstrap.min.css" rel="stylesheet">
    	<!-- My CSS -->
    	<link href="index2styling.css" rel="stylesheet">
    	<!-- Jquery stuff -->
    	<script src="http://code.jquery.com/jquery-1.8.0.min.js" type="text/javascript"></script>

    	<title>Home</title>
	</head>

	<body>
	<?php include('includes/header.php'); ?>

		<div class="Welcome">
				<h3>Καλώς ήρθατε στον Εύδοξο</h3>
				<p>Πρόκειται για μία πρωτοποριακή υπηρεσία για την άμεση και ολοκληρωμένη παροχή των Συγγραμμάτων<br/> των φοιτητών των Πανεπιστημίων και των ΤΕΙ της επικράτειας.<br/>
Η διαδικασία είναι πλήρως αυτοματοποιημένη και προσφέρει:  <br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(α) Πλήρη ενημέρωση στους φοιτητές για τα παρεχόμενα Συγγράμματα σε κάθε μάθημα<br/>
(β) Δυνατότητα άμεσης παραλαβής των Συγγραμμάτων και<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(γ) Αποτελεσματικούς μηχανισμούς για την ταχεία αποζημίωση των Εκδοτώνκαι για την αποτροπή<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;της καταχρηστικής εκμετάλλευσης των δημόσιων πόρων</p>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="mainstuff">
						<ul id="ul1">
							<a href="http://globalabuse.eu/Eam/sources/arxikh-dhlwsh.php"><li id="l1">Δήλωση Συγγραμάτων</li></a>
							<a href="#"><li id="l2">Ανταλλαγή Συγγραμάτων</li></a>
						</ul>
						<ul id="ul2">
							<a href="http://globalabuse.eu/Eam/sources/epilegmena.php"><li id="l3">Συγγράματα Σχολών</li></a>
                            							<?php session_start();
				if (!(!(isset($_SESSION['username']) and !empty($_SESSION['username'])))){?>
     
							<a href="http://globalabuse.eu/Eam/sources/dhlwsh-stoixeia.php"><li id="l4">Ο λογαριασμός μου</li></a><?php }?>
						</ul>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="Tabs">
						<div id="header"> 

							<ul>
								<li id="selected"><a href="#">Ανακοινώσεις</a></li>
								<li id="not-selected"><a href="#">Νέα</a></li>
							</ul>

						</div>

						<div id="content">
							<ul>
								<li>Δηλώσεις</li>
								<ul>
									<li>Παράταση Περιόδου Δηλώσεων και Διανομής Συγγραμμάτων Εαρινού Εξαμήνου 2013-2014</li>
									<li><strong>Νέα προθεσμία δήλωσης ορίστηκε μέχρι τις 25/7/2014</strong></li>
								</ul>
							</ul>
							<ul>
								<li>Προγραμματισμένες Εργασίες Συντήρησης</li>
								<ul>
									<li>Λόγω εργασιών συντήρησης ενδέχεται να μην είναι δυνατή η πρόσβαση στις εφαρμογές 
									του Ευδόξου την Τρίτη 22 Ιουλίου και κατά το διάστημα 18:00-20:00.</li>
								</ul>
							</ul>
						</div>
					</div>
				</div>	
				<div class="col-lg-2">
					<a href="https://www.grnet.gr/el/UniversityMobileInternet"><img id="Ad1" src="http://eudoxus.gr/img/VodafoneMobileInternet.gif" /></a>
					<a href="http://atlas.grnet.gr/"><img id="Ad2" src="http://eudoxus.gr/img/AtlasPortalLogo.png" /></a>
				</div>
			</div>
		</div>
	</body>
</html>

