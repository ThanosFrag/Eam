<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="1007Ekzw"; // Mysql password 
$db_name="Eudoxus"; // Database name 
$tbl_name="Students"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
session_start();
// username and password sent from form 
$myusername=$_POST['username']; 
$mypassword=$_POST['password']; 

// Remove Magic Quotes
if (get_magic_quotes_gpc()){
  $myusername = stripslashes($myusername);
  $mypassword = stripslashes($mypassword);
}
$mypassword = md5($mypassword);
$sql = sprintf(
  "SELECT * FROM $tbl_name WHERE username='%s' and passwd='%s' LIMIT 1;",
  mysql_real_escape_string($myusername),
  mysql_real_escape_string($mypassword)
);
$result = mysql_query($sql);

// MySQL count
$count = mysql_num_rows($result);
echo $count;
if ($count){
  $_SESSION['username'] = $myusername; // $_SESSION['loggedin'] = true or false would work too
  $_SESSION['mypassword'] = $mypassword; // Why store the password in session data?
  header("Location: login_success.php");
}else{
  header("Location: ../index.php?msg=Login_Failed");
}
?>