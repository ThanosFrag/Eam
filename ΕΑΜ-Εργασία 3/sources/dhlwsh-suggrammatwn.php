<!DOCTYPE html>
<html>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<head>
		<!-- Bootstrap core CSS -->
    	<link href="../css/bootstrap.min.css" rel="stylesheet">
    	<!-- My CSS -->
    	<link href="./dhlwsh-suggrammatwnstyling.css" rel="stylesheet">
    	<!-- My Jquery -->
    	<script src="http://code.jquery.com/jquery-1.8.0.min.js" type="text/javascript"></script>

    	<title>Home</title>
	</head>
    <?php include('../includes/header.php'); ?>
	

	
	<script>//Epektash Listas
	/////////////////////
	function prepareList() {
	  $('#expList').find('li:has(ul)')
	  	.click( function(event) {
	  		if (this == event.target) {
	  			$(this).toggleClass('expanded');
	  			$(this).children('ul').toggle('fast');
	  		}
	  		return false;
	  	})
	  	.addClass('collapsed')
	  	.children('ul').hide();
	  };
	 
	$(document).ready( function() {
      prepareList()
	});
 
	</script>

	<body>
	
			<div class="row">
				<div class="col-lg-3">
					<div class="tab-opts">
						<ul>
                            <li id="selected-tab"><a href="http://globalabuse.eu/Eam/sources/arxikh-dhlwsh.php">Δήλωση Συγγραμμάτων</a></li>
                            <li><a href="http://globalabuse.eu/Eam/sources/dhlwsh-stoixeia.php">Στοιχεία Λογαριασμού</a></li>
                            <li><a href="#">Ανταλλαγή</a></li>
                            <li><a href="http://globalabuse.eu/Eam/sources/dhlwsh-enhmerwsh.php">Ενημέρωση</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="tab-back">
					<h3>Νεα Δήλωση Συγγραμμάτων Εαρινό 2014</h3>
						<div id="listContainer">
						<form action="checkbox.php" method="post">
						    <ul id="expList">
            <!--                <?php
							//	$id_book=mysqli_query($db,"SELECT Books_id_book FROM College_has_mathima_has_Books WHERE examhno=2") or die("Selecet Error"); 
							 //   $result=mysqli_query($db,"SELECT bookname FROM Books WHERE id_book=$id_book") or die("Selecet Error"); 
								//while($row = mysqli_fetch_array($result)) {
							?>  -->
						      <li>2ο Εξάμηνο
						        <ul>
						          <li> Μαθηματικά
						            <ul>
						            	<li>
						              		<select name="devices[]">
						              			<option value="">Καμία Επιλογή</option>
						              			<option value="Ανάλυση 1">Ανάλυση 1</option>
						              			<option value="Ανάλυση 2">Ανάλυση 2</option>
						              		</select>
						              	</li>
						      	    </ul>
							  	  </li>
							      <li> Φυσική
							      	<ul>
							      		<li>
						              		<select name="devices[]">
						              			<option value="">Καμία Επιλογή</option>
						              			<option value="Φυσική 1">Φυσική 1</option>
						              		</select>
						           </li>
							      		</li>
							      	</ul>
							  	  </li>
							   </ul> 
							</li> 
							
						      <li>4ο Εξάμηνο
						        <ul>
						          <li> Βάσεις Δεδομένων
						            <ul>
						            	<li>
						              		<select name="devices[]">
						              			<option value="">Καμία Επιλογή</option>
						              			<option value="Βάσεις">Βάσεις</option>
						              		</select>
						              	</li>
						      	    </ul>
							  	  </li>
							      <li> Μηχανολογία
							      	<ul>
							      		<li>
						              		<select name="devices[]">
						              			<option value="">Καμία Επιλογή</option>
						              			<option value="Μηχανολογία">Μηχανολογία</option>
						              			<option value="Μηχανολογία 2">Μηχανογία 2</option>
						              		</select>
						           		</li>
							      </li>
							      	</ul>
							  	  </li>
							   </ul>
							</li>
						      <li>6ο Εξάμηνο
						        <ul>
						          <li> Επικοινωνία Ανθρώπου Μηχανής
						            <ul>
						            	<li>
						              		<select name="devices[]">
						              			<option value="">Καμία Επιλογή</option>
						              			<option value="ΕΑΜ">ΕΑΜ</option>
						              		</select>
						              	</li>
						      	    </ul>
							  	  </li>
							      <li> Δίκτυα τηλεπικοινωνιών
							      	<ul>
							      		<li>
						              		<select name="devices[]">
						              			<option value="">Καμία Επιλογή</option>
						              			<option value="Δίκτυα">Δίκτυα</option>
						              		</select>
						           		</li>
							      </li>
							      	</ul>
							  	  </li>
							   </ul>
							</li>
						      <li>8ο Εξάμηνο
						        <ul>
						          <li> ΗΜΟ
						            <ul>
						            	<li>
						              		<select name="devices[]">
						              			<option value="">Καμία Επιλογή</option>
						              			<option value="Φυσική 2">Φυσική 2</option>
						              		</select>
						              	</li>
						      	    </ul>
							  	  </li>
							      <li> Προγραμματισμός
							      	<ul>
							      		<li>
						              		<select name="devices[]">
						              			<option value="">Καμία Επιλογή</option>
						              			<option value="Πληροφορική">Πληροφορική</option>
						              		</select>
						           		</li>
							      </li>
							      	</ul>
							  	  </li>
							   </ul>
							</li>													      
						  </ul>
						</div>
					</div>
					<input id="subm" type="submit" name="Sumbit" value="Δήλωση" />
					</form>
				</div>						
			</div>
		</div>
		<!-- popup html login -->
		<div id="popup-box" class="popupInfo">
			<form>
				<p id="disp"><strong>Epilekste panepisthmio</strong></p>
				<button type="button" class="close"><p id="close1">X</p></button>
				<br />
				<select name="Sxoles">
					<option value="EKPA">Ethniko Kapodistriako Panepisthmio Athhnwn</option>
					<option value="EMP">Ethniko Metsovio Polutexneio</option>
					<option value="PANTEIO">Panteio Panepisthmio</option>
				</select>
				<br /><br />
				<label for="username"><p class="userpw">Username:</p></label><br />
				<input type="text" name="username" required /><br />
				<label for ="password"><p class="userpw">Password:</p></label><br />
				<input type="password" name="password" required /><br />
				<input type="submit" value="Eisodos" id="eisodos"/>
			</form>
		</div>
		<!-- end of popup html -->
		<!-- popup html anazhthsh -->
		<div id="popup-box2" class="popupInfo2">
			<form>
				<button type="button" class="close"><p id="close1">X</p></button>
				<div class="pad1">
					<p>Titlos</p>
					<p>ISBN</p>
					<p>Suggrafeis</p>
				</div>
				<br />
				<input type="search" name="title" />
				<input type="search" name="isbn" />
				<input type="search" name="suggrafeis" />				
				<br />
				<div class="pad2">
					<p>Ekdoseis</p>
					<p>Etos Ekdoshs</p>
					<p>Kwdikos Vivliou</p>
				</div>
				<br />
				<input type="search" name="ekdoseis" />
				<input type="search" name="etos-ekdoshs" />
				<input type="search" name="kwdikos" /> <br />
				<input type="submit" value="Anazhthsh  >" id="anazht"/>
			</form>
		</div>
		<!-- end of popup html anazhthsh -->
	</body>
</html>