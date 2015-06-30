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
<?php
    $heightcm = $_POST['height'];
    $weight = $_POST['weight'];

    $heightm = $heightcm / 100;
    $heightval = $heightm * $heightm;
    $result = $weight / $heightval;

    echo 'Uw heeft een BMI van:' . ' ' . round($result,1) . ' ' . '<br />' . 'Dit betekent dat u' . ' ';

    if ($result < 18) {
        echo "last heeft van ondergewicht.";
    } elseif ($result < 25) {
        echo "een normaal gewicht heeft.";
    } elseif ($result < 27) {
        echo "last heeft van licht overgewicht.";
    } elseif ($result < 30) {
        echo "last heeft van matig overgewicht.";
    } elseif ($result < 40) {
        echo "ernstig overgewicht heeft.";
    } else {
        echo "ZIEKELIJK overgewicht heeft.";
    }
?>
</div>
</body>
</html>