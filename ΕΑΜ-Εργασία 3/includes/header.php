	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- My Jquery -->
    	<script src="http://code.jquery.com/jquery-1.8.0.min.js" type="text/javascript"></script>

	<!-- popup script -->
	<script>
	$(document).ready(function() {

		if ($('a.popup-window').click()) {
		$('a.popup-window').click(function() {

			var popupBox = $(this).attr('href');
			$(popupBox).fadeIn(400);

			var popMargTop = ($(popupBox).height() +24) / 2;
			var popMargLeft = ($(popupBox).width() +24) / 2;

			$(popupBox).css({
				'margin-top' : -popMargTop,
				'margin-left' : -popMargLeft
			});

			$('body').append('<div id="mask"></div>');
			$('#mask').fadeIn(400);
			return false;

		});
		}

		if ($('a.popup-window2').click()) {
		$('a.popup-window2').click(function() {

			var popupBox = $(this).attr('href');
			$(popupBox).fadeIn(400);

			var popMargTop = ($(popupBox).height() +24) / 2;
			var popMargLeft = ($(popupBox).width() +24) / 2;

			$(popupBox).css({
				'margin-top' : -popMargTop,
				'margin-left' : -popMargLeft
			});

			$('body').append('<div id="mask"></div>');
			$('#mask').fadeIn(400);
			return false;

		});
		}

		$('button.close, #mask').live('click', function() {

			$('#mask, .popupInfo, .popupinfo2, #popup-box2').fadeOut(400, function() {

				$('#mask').remove();

			});

			return false;

		});

	});

	$(document).keyup(function(e) {

		if (e.keyCode == 27) {
			$('#mask, .popupinfo, #popup-box, .popupinfo2, #popup-box2').fadeOut(400);
			return false;
		}
	});

	</script>


		<a href="http://globalabuse.eu/Eam/"><!--<h1>Eudoxus</h1>--><img id="mainimg" src="http://83.212.85.52/images/logo.png" /></a>
		<img id="secondimg" src="http://eudoxus.gr/img/sloganSmall.png" />
<?php session_start();       
if (!(isset($_SESSION['username']) and !empty($_SESSION['username']))){
		?>
		<div class="LogReg">
			<a href="#popup-box" class="popup-window"><p id="login">Είσοδος</p></a>
			<a href="http://globalabuse.eu/Eam/sources/Register.php"><p id="register">Εγγραφή</p></a>
		</div>
<?php } 
else	{ ?>
	<div class="LogReg">
    
	<form name="logout" action="http://globalabuse.eu/Eam/sources/logout.php" method="post">
    <input type="submit" value="Αποσύνδεση" />
	</form>
 
    </div>
<?php	
}

?>
		<div class="layering">
			<ul>
				<a href="http://globalabuse.eu/Eam/"><li>Αρχική</li></a>
				<a href="http://globalabuse.eu/Eam/sources/arxikh-dhlwsh.php"><li>Δήλωση Συγγραμμάτων</li></a>
				<a href="http://globalabuse.eu/Eam/sources/epilegmena.php"><li>Συγγράμματα Σχολών</li></a>
			</ul>
		</div>
		<div class="bordering">
			<div class="row">
				<div class="col-lg-9">
				<ul class="nav nav-pills">
						<li class="active"><a href="#">Φοιτητές</a></li>
						<li><a href="#">Γραμματεία</a></li>
						<li><a href="#">Εκδότες</a></li>
				</ul>
				</div>

				<form class="col-lg-3" action="http://globalabuse.eu/Eam/sources/Search.php">
					<div class="searchclass">
						<input id="searchbox" type="search" name="title" placeholder="Αναζήτηση συγγραμάτων" />
						<input id="search" type="image" src="http://www.quizbowldb.com/img/search.png" width="27" height="27" />
						<br />
						<a href="#popup-box2" class="popup-window2"><p id="Suntheth">Σύνθετη αναζήτηση</p></a>
					</div>
				</form>
				<!--<a class="col-lg-1" href="https://twitter.com/eudoxusgr">
				<img id="twitter" src="https://lh3.ggpht.com/MWg4AbmzuMK7Gkyj4Poo6zocEp2cF_wc6Uy2zJPZ2n96mSY3glx1txni9bvzL2-21dQ=w300" /></a> -->
			</div>
			<!-- popup html login -->
			<div id="popup-box" class="popupInfo">
			<form name="login"  action="http://globalabuse.eu/Eam/sources/login.php" method="post">>
				<!-- <p id="disp"><strong>Επιλέξτε Πανεπιστήμιο</strong></p> -->
				<button type="button" class="close"><p id="close1">X</p></button>
				<!-- <br />
				<select name="Sxoles">
					<option value="EKPA">Ethniko Kapodistriako Panepisthmio Athhnwn</option>
					<option value="EMP">Ethniko Metsovio Polutexneio</option>
					<option value="PANTEIO">Panteio Panepisthmio</option>
				</select>
				<br /><br /> -->
				<label for="username"><p class="userpw">Όνομα χρήστη:</p></label><br />
				<input type="text" name="username" required="required" /><br />
				<label for ="password"><p class="userpw">Κωδικός:</p></label><br />
				<input type="password" name="password" required="required" /><br />
				<input type="submit" value="Eisodos" id="eisodos"/><br />
                <label><input type="checkbox" checked="checked"> Να παραμείνω συνδεδεμένος;</label><br />
                <a href="#"><p id="Forgot">Ξεχάσατε τον κωδικό σας;</p></a>
			</form>
			</div>
			<!-- end of popup html -->
			<!-- popup html anazhthsh -->
			<div id="popup-box2" class="popupInfo2">
			<form action="http://globalabuse.eu/Eam/sources/Search.php" method="get">
				<button type="button" class="close"><p id="close1">X</p></button>
				<div class="pad1">
					<p>Τίτλος</p>
					<p>ISBN</p>
					<p>Συγγραφείς</p>
				</div>
				<br />
				<input type="search" name="title" />
				<input type="search" name="isbn" />
				<input type="search" name="author" />				
				<br />
				<div class="pad2">
					<p>Εκδόσεις</p>
					<p>Έτος Έκδοσης</p>
					<p>Κωδικός Βιβλίου</p>
				</div>
				<br />
				<input type="search" name="publisher" />
				<input type="search" name="year" />
				<input type="search" name="id" /> <br />
				<input type="submit" value="Anazhthsh  >" id="anazht"/>
			</form>
		</div>
		<!-- end of popup html anazhthsh -->
