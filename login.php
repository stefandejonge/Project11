<?php
session_start(); // Starting Session
$error='';
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Gebruikersnaam of wachtwoord is incorrect";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=md5($_POST['password']);
$connection = mysql_connect("127.0.0.1", "root", "toor");
// Protect from Injections
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// Selecting Database
$db = mysql_select_db("k1p11");
// Fetch information of registered users and finds user match.
$query = mysql_query("select * from users where password='$password' AND name='$username'");
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: profile.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysql_close($connection); // Closing Connection
}
}
?>