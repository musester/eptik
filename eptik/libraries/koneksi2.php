<?php
$server= "localhost";
$username = "root";
$password = "";
$database = "dbeptik";

mysql_connect($server,$username,$password) or die ("Koneksi Gagal");
mysql_select_db($database) or die ("Database Tidak Bisa Di Buka " );

/*function nama_primary($tabel)
{
$query="SHOW FIELDS FROM $tabel";
$hasil = mysql_query($query);
while ($rec = mysql_fetch_array($hasil)) 
	{
 $i++; $nama_field[$i]=$rec['Field'];										
	}

$primary_key = $nama_field[1];

return $primary_key;
}*/
?>