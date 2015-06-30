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
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="bmi_form.php">BMI Berekenen</a></li>
            <li><a href="survey.php">Vragenlijst</a></li>
        </ul>
    </div>
    </div>
</nav>
</div>

<div class="container">
	<form class="form-horizontal" role="form" action="register_do.php" method="post">
		<div class="form-group">
			<label class="control-label col-sm-2">Gebruikersnaam:</label>
			<div class="col-sm-3">
				<input type="text" name="name" class="form-control" placeholder="Gebruikersnaam invoeren">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2">Wachtwoord:</label>
			<div class="col-sm-3">
				<input type="password" name="password" class="form-control" placeholder="Wachtwoord invoeren">
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