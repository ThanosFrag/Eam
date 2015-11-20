<?php include('./register2a.php');?>


<html>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<head>
		<!-- Bootstrap core CSS -->
    	<link href="../css/bootstrap.min.css" rel="stylesheet">
    	<!-- My CSS -->
    	<link href="../index2styling.css" rel="stylesheet">
    	<!-- Jquery stuff -->
    	<script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>

    	<title>Register</title>

	</head>

    <body>
    <?php include('../includes/header.php');?>
    <br><br>
    <div class="row">
	<div class="col-lg-11">
   
<form name="register" action="Register.php" method="post">
	<table width="710" border="0">
		<tr>
			<td colspan="1"><p><strong>Εγγραφή</strong></p></td>
		</tr>
		<tr>
			<td>Όνομα Χρήστη:</td>
			<td><input type="username" name="username" maxlength="20"  value="<?php echo htmlspecialchars($username);?>"/> <span class="error"><?php echo $unameErr;?></span></td>
		</tr>
		<tr>
			<td>Κωδικός:</td>
			<td><input type="password" name="password1" value="<?php echo htmlspecialchars($pass1);?>"/> <span class="error"><?php echo $pass1Err;?></span> </td>
		</tr>
		<tr>
			<td>Επιβεβαίωση κωδικού:</td>
			<td><input type="password" name="password2" value="<?php echo htmlspecialchars($pass2);?>"/> <span class="error"><?php echo $pass2Err;?></span> </td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="email" name="email" id="email" value="<?php echo htmlspecialchars($email);?>"/> <span class="error"><?php echo $emailErr;?></span></td>
		</tr>
		<tr>
			<td>Ό&nu;&omicron;&mu;&alpha;:</td>
			<td><input type="text" name="name" id="name" value="<?php echo htmlspecialchars($name);?>"/> <span class="error"><?php echo $nameErr;?></span></td>
		</tr>
		<tr>
			<td>Επώνυμο:</td>
			<td><input type="text" name="surname" id="surname" value="<?php echo htmlspecialchars($surname);?>"/> <span class="error"><?php echo $surnameErr;?></span></td>
		</tr>
		<tr>
			<td>ΑΜ:</td>
			<td><input type="text" name="Am" id="Am" value="<?php echo htmlspecialchars($Am);?>"/> <span class="error"><?php echo $AmErr;?></span></td>
		</tr>
 		<tr>
			<td>Ίδρυμα:</td>
			<td><select name="idrima" >
					<option value="ΕΚΠΑ">Εθνικό Καποδιστριακό Πανεπιστήμιο Αθηνών</option>
					<option value="ΕΜΠ">Eθνικό Μετσόβιο Πολυτεχνείο</option>
					<option value="ΠΑΝΤΕΙ">Πάντειο Πανεπιστήμιο</option>
				</select></td>
		</tr>        
		<tr>
			<td>Σχολή:</td>
			<td><input type="text" name="sxoli" id="sxoli" value="<?php echo htmlspecialchars($sxoli);?>"/> <span class="error"><?php echo $sxoliErr;?></span></td>
		</tr>
  		<tr>
			<td>Τρέχον Εξάμηνο:</td>
			<td><input type="text" name="examhno" id="examhno" value="<?php echo htmlspecialchars($examhno);?>"/> <span class="error"><?php echo $examhnoErr;?></span></td>
		</tr>
 		<tr>      
			<td>Κινητό:</td>
			<td><input type="text" name="kinhto" id="kinhto" maxlength="20"value="<?php echo htmlspecialchars($kinhto);?>"/> <span class="error"><?php echo $kinhtoErr;?></span></td>
		</tr>                
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" value="Εγγραφή" /></td>
		</tr>
	</table>
</form>
    </div>
    </div>
    
	</body>
 </html>