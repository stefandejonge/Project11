<?php
session_start();
$connection=mysqli_connect("localhost","root","","k1p11") or die("not connected");

$text=mysqli_real_escape_string($connection, $_POST['text']);

$result = mysqli_query($connection, "UPDATE `content` SET `description` = '".$text."' WHERE `id` = 1;");
var_dump($result);