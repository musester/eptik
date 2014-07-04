<?php

$hostname_koneksi = "localhost";
$database_koneksi = "dbeptik";
$username_koneksi = "root";
$password_koneksi = "";
$koneksi = mysql_connect($hostname_koneksi, $username_koneksi, $password_koneksi) or die ("ERROR...".mysql_error()); 
mysql_select_db($database_koneksi) or die ("No Database...".mysql_error());
?>