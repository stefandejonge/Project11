<?php

$connection=mysqli_connect("localhost","root","","k1p11") or die("not connected");

if($_POST['name']!="" && $_POST['password']!=""){

    $username=mysqli_real_escape_string($connection,$_POST['name']);
    $password=mysqli_real_escape_string($connection,$_POST['password']);

    $passhash = md5($password);
	
    mysqli_query($connection,"insert into users(name,password)  values('$username','$passhash')");
}
?>



<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="navigation">
<nav class="navbar navbar-default">
    <div class="container-fluid">
    <div>
        <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="bmi_form.php">BMI Berekenen</a></li>
            <li><a href="survey.php">Vragenlijst</a></li>
        </ul>
    </div>
    </div>
</nav>
</div>

<div class="container">
<?php
	if(empty($username) || empty($password)) {
		echo 'U heeft een veld niet ingevuld. Probeer het alstublieft opniew.';
		echo "<p><h3> Klik <a href='register.php'>Hier</a> om terug te gaan.</h3></p>";
	}
	else {
		echo "<p><h2>Uw registratie is verwerkt. Klik <a href='index.php'>hier</a> om terug te gaan.<h2><p>";
	}
?>
</div>
</body>
</html>