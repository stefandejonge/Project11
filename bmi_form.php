<?php
include('login.php');
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
            <li class="active"><a href="#">BMI Berekenen</a></li>
            <li><a href="survey.php">Vragenlijst</a></li>
        </ul>
		<?php 
		if(empty($_SESSION["login_user"]))
		{
			echo <<<HTML
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
HTML;
		}
		else
		{
			echo <<<HTML
			<!-- message -->
			<ul class="navbar-form navbar-right">
		Welcome {$_SESSION['login_user']} |</b>
				<a href="logout.php" class="btn btn-primary">Uitloggen</a></b>
			</ul>
HTML;
		}
		?>
    </div>
    </div>
</nav>
</div>

<div class="container">
	<form class="form-horizontal" role="form" action="calc.php" method="post">
		<div class="form-group">
			<label class="control-label col-sm-2">Lengte in centimeters:</label>
			<div class="col-sm-3">
				<input type="text" name="height" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2">Gewicht in kilogram:</label>
			<div class="col-sm-3">
				<input type="text" name="weight" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default">Verstuur</button>
			</div>
		</div>
	</form>
</div>
</body>
</html>