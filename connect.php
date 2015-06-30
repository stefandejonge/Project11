<?php
session_start();
error_reporting(E_ALL);
mysql_connect("127.0.0.1", "root", "toor") or die (mysql_error());
mysql_select_db("k1p11") or die (mysql_error());

?>
