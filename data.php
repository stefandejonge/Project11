<?php
session_start();
$connection=mysqli_connect("localhost","root","","k1p11") or die("not connected");

$result = mysqli_query($connection, "SELECT * from `content` where `id` =1");
echo "
<tbody>";
			$text = mysqli_fetch_array($result);

	echo '
    <form action="update.php" method="POST" enctype="form-data">
		<table>
			<tr><td></td><td><textarea rows="20" cols="150" name="text">'.$text["description"].'  </textarea></td></tr>
			<tr><td></td><td><input type="submit" name="update" value="update">
		</table>
	</form>
</tbody>
</table></div>';
?>


