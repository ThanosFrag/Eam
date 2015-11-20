<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Bootstrap core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <!-- My CSS -->
        <link href="arxikh-dhlwshstyling.css" rel="stylesheet">
        <!-- Jquery stuff -->
        <script src="http://code.jquery.com/jquery-1.8.0.min.js" type="text/javascript"></script>

    	<title>Home</title>
	</head>

	<body>
	<?php include('../includes/header.php'); ?>

                <div class="row">
                <div class="col-lg-3">
                    <div class="tab-opts">
                        <ul>
                            <li id="selected-tab"><a href="http://globalabuse.eu/Eam/sources/arxikh-dhlwsh.php">Δήλωση Συγγραμμάτων</a></li>
							<?php if (!(!(isset($_SESSION['username']) and !empty($_SESSION['username'])))){?>
                            <li><a href="http://globalabuse.eu/Eam/sources/dhlwsh-stoixeia.php">Στοιχεία Λογαριασμού</a></li> <?php
							}?>
                            <li><a href="#">Ανταλλαγή</a></li>
                            <li><a href="http://globalabuse.eu/Eam/sources/dhlwsh-enhmerwsh.php">Ενημέρωση</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-back">
                        <table class="dhl-table">
                            <thead>
                                <th>Ιστορικό Δηλώσεων</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Περιοχή ιστορικών</td>
                                </tr>
                            </tbody>
                        </table>
                    <div id="warning">
                        <p>Περίοδος Υποβολής Δηλώσεων 25/5/2014 - 25/7/2014</p>
                        <p>Προθεσμία Παραλαβής Συγγραμμάτων 24/8/2014</p>
                    </div>
                    <br />
                    <p id="dhl-button"><a href="http://globalabuse.eu/Eam/sources/dhlwsh-suggrammatwn.php">Δημιουργία Νέας Δήλωσης</a></p>
                    </div>
                </div>
            </div>