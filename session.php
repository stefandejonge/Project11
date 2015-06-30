<?php
// Connect with server
$connection = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("k1p11", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// Fetch user information
$ses_sql=mysql_query("select name from users where name='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['name'];
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}
?>
