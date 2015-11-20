
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
mysqli_query($db, 'SET collation_connection=utf8_general_ci');

$title = $_GET['title'];
$isbn = $_GET['isbn']; 
$author = $_GET['author'];
$publisher = $_GET['publisher'];
$year = $_GET['year'];
$id = $_GET['id'];

mysqli_select_db("page",$db);
if (isset($_GET['page']))
	$page=$_GET['page'];
else
	$page = 1;


?>
<html>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<head>
		<!-- Bootstrap core CSS -->
    	<link href="../css/bootstrap.min.css" rel="stylesheet">
    	<!-- My CSS -->
    	<link href="../index2styling.css" rel="stylesheet">
    	<!-- Jquery stuff -->
    	<script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>

    	<title>Home</title>
	</head>
    <body>
    <?php include('../includes/header.php'); 
 /*   echo "<table border='2'>
    <tr>
    <td width=3%>Τίτλος</td>
    <td width=3%>Εκδότης</td>
	<td width=3%>Συγγραφέας</td>
	<td width=3%>Έτος Έκδοσης</td>
	<td width=3%>ISBN</td>
    </tr>";*/
	$result = mysqli_query($db, "SELECT * FROM Books WHERE bookname LIKE '%$title%' AND isbn LIKE '%$isbn%' AND author LIKE '%$author%' 
	AND publisher LIKE '%$publisher%'  AND year LIKE '%$year%' AND id_book LIKE '%$id%'")
	 or die("ERROR: ". mysqli_error($db));

   	$rows = mysqli_num_rows($result);
	$per_page = 5;
	$total_pages = ceil($rows/$per_page);
	if ($rows != 0) {
		echo "<table border='2'>
		<tr>
		<td width=3%>Τίτλος</td>
		<td width=3%>Εκδότης</td>
		<td width=3%>Συγγραφέας</td>
		<td width=3%>Έτος Έκδοσης</td>
		<td width=3%>ISBN</td>
		</tr>";
		echo "Βρίσκεστε στη σελίδα $page από $total_pages<br>";
	}
	else {
		?>
		<p align="center">Δεν βρέθηκαν αποτελέσματα</p>
        <?php
	}
	if ($page != 1) {
		echo "<a href='Search.php?search=$value&page=1'> << Πρώτη</a> " , " ";
		$previous = $page-1;
		echo "<a href='Search.php?search=$value&page=$previous'> << Προηγούμενη</a> ";
	}
	if (($page != 1) && ($page != $total_pages))
		echo " | ";
	if ($page != $total_pages && $total_pages != 0) {
		$next = $page+1;
		echo "<a href='Search.php?search=$value&page=$next'>Επόμενη >></a> " , "  ";
		echo "<a href='Search.php?search=$value&page=$total_pages'>Τελευταία >></a> ";
	}
	echo "<br><br />";
	$start = ($page-1)*$per_page;
	$result = mysqli_query($db, "SELECT * FROM Books WHERE bookname LIKE '%$title%' 
	 AND isbn LIKE '%$isbn%' AND author LIKE '%$author%' 
	AND publisher LIKE '%$publisher%'  AND year LIKE '%$year%' AND id_book LIKE '%$id%'
	ORDER BY bookname LIMIT $start,$per_page")
	 or die("ERROR: ". mysqli_error($db));

	
    while($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td>" . $row['bookname'] . "</td>";
      echo "<td>" . $row['publisher'] . "</td>";
	  echo "<td>" . $row['author'] . "</td>";
	  echo "<td>" . $row['year'] . "</td>";
	  echo "<td>" . $row['isbn'] . "</td>";
      echo "</tr>";
    }
    
    echo "</table>";
    
    mysqli_close($db);
    ?>
	</body>
 </html>