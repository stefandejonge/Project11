<?php
session_start();
error_reporting(E_ALL);
mysql_connect("localhost", "root", "") or die (mysql_error());
mysql_select_db("k1p11") or die (mysql_error());

?>
