<?php
include_once("koneksi.php");

//Ambil dan simpan variabel POST
$fullname=$_POST["fullname"];
$username=$_POST["username"];
$password=$_POST["password"];
$blokir=$_POST["blokir"];
$level=$_POST["level"];

//cek value yg dikirim ke DB Server
echo "Fullname : $fullname"; echo "<br>";
echo "Username : $username"; echo "<br>";
echo "Password : $password"; echo "<br>";
echo "Blokir : $blokir"; echo "<br>";
echo "Level : $level"; echo "<br>";

koneksi();
$tabel = "user";

$update="UPDATE $tabel SET fullname = '$fullname', password='$password', blokir='$blokir', level='$level' WHERE username = '$username'";

$query=mysql_query($update);

if(mysql_affected_rows() > 0)

	{
	echo "<script>alert('Pengubahan data berhasil. Refresh untuk melihat hasilnya');</script>";
	echo "<script>history.go(-2);</script>";
	}
else
	{
	echo "<script>alert('Pengubahan data gagal atau Anda tidak merubah data sama sekali');</script>";
	echo "<script>history.go(-2);</script>";
	}

?>