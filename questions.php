<?php
/**
 * author: Joris Rietveld <jorisrietveld@protonmail.com>
 * Created on: 30-6-15 - 12:48
 * File: questions.php
 * Project: K1P11
 * licence: GPLv3 <http://www.gnu.org/licenses/gpl-3.0.html>
 */

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="questions.css" rel="stylesheet"/>
</head>
<body>
<div id="navigation">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div>
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="bmi_form.php">BMI Berekenen</a></li>
					<li><a href="survey.php">Vragenlijst</a></li>
				</ul>
				<form class="navbar-form navbar-right"  action="" method="post">
					<div class="form-group">
						<input id="name" name="username" placeholder="Gebruikersnaam" type="text" class="form-control">
					</div>
					<div class="form-group">
						<input id="password" name="password" placeholder="**********" type="password" class="form-control">
					</div>
					<input name="submit" type="submit" value="Inloggen" class="btn btn-info">
					<span><?php echo $error; ?></span>
					<a class="btn btn-primary" href="register.php" role="button">Registreren</a>
				</form>
			</div>
		</div>
	</nav>
</div>

<div class="container">
	<div class="row">

		<?php
		$connection=mysqli_connect("localhost","root","","k1p11") or die("not connected");

		$result = mysqli_query($connection, "SELECT * from `content` where `id` =1");
		$text = mysqli_fetch_array($result);
		echo(nl2br($text['description']));
		?>

	</div>
</div>
</body>
</html>