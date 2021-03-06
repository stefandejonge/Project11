<?php
include('login.php');

require( "switch.php" );
?>
<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link href="Css/bootstrap.min.css" rel="stylesheet"/>
	<script type="application/javascript" src="Javascript/bootstrap.min.js"></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

	<link href="style.css" rel="stylesheet" type="text/css">
	<script>
		answer = [];
		function getAnswer( $number )
		{
			answer[ $number ] = $('input[name=radioName]:checked', '#question-form').val();
		}

	</script>
	<style>
		body{
			background: repeat url("Image/img.png");
		}
	#questions{
		-webkit-border-radius: 15px;
		-moz-border-radius: 15px;
		-ms-border-radius: 15px;
		-o-border-radius: 15px;
		border-radius: 15px;
		-webkit-box-shadow: 0 0 8px rgba(0, 0, 0, 0.9);
		-moz-box-shadow: 0 0 8px rgba(255, 255, 255, 0.9);
		box-shadow: 0 0 8px rgba(255, 255, 255, 0.9);
		height: auto;
		background: white;
		padding: 20px;
	}
	</style>
</head>
<body>
	<div id="navigation">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div>
					<ul class="nav navbar-nav">
						<li><a href="index.php">Home</a></li>
						<li><a href="bmi_form.php">BMI Berekenen</a></li>
						<li class="active"><a href="#">Vragenlijst</a></li>
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
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2" id="questions">
				<?= $page ?>
			</div>
		</div>
	</div>
</body>
</html>