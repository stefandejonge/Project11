<?php
include('session.php');
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
                <li class="active"><a href="#">Home</a></li>
                <li><a href="bmi_form.php">BMI Berekenen</a></li>
                <li><a href="survey.php">Vragenlijst</a></li>
            </ul>
			<ul class="navbar-form navbar-right">
				Welkom <?php echo $login_session; ?> |
				<a href="logout.php" class="btn btn-primary">Uitloggen</a></b>
			</ul>
		</div>
	</div>
</nav>
</div>

<div class="container">
    <div class="row">
	
<?php
	$connection=mysqli_connect("localhost","root","","k1p11") or die("not connected");

	$result = mysqli_query($connection, "SELECT * from `content` where `id` = 1");
	$text = mysqli_fetch_array($result);
    echo(nl2br($text['description']));
?>

    </div>
</div>
</body>
</html>