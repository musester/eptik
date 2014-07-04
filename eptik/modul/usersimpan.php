<?php
//panggil file koneksi
include_once("koneksi.php");

//ambil data terkirim
$fullname         = $_POST["fullname"];
$username    = $_POST["username"];
$password = $_POST["password"];
$blokir    = $_POST["blokir"];
$level    = $_POST["level"];

//tampilkan data terkirim
echo "Fullname : $fullname"; echo "<br>"; 
echo "Username : $username"; echo "<br>";
echo "Password : $password"; echo "<br>";
echo "Blokir   : $blokir"; echo "<br>";
echo "Level	   : $level"; echo "<br>";


//susun perintah query
$input="INSERT INTO user
(fullname,username,password,blokir,level) VALUES 
('$fullname','$username','$password','$blokir','$level')";

//tampilkan perintah query
echo $input;

//koneksi ke DB server
koneksi();

//kirim perintah query
$query=mysql_query($input);

//cek keberhasilan perintah query
if(mysql_affected_rows() > 0)
	{
	echo "<script>alert('Input Data Berhasil');</script>";
	}
else
	{
	echo "<script>alert('Maaf, proses gagal. Silahkan ulangi lagi');</script>";
	}
	
?>

<!--tombol utk kembali ke formulir input data-->
<p align="center>">
Kembali ke Formulir Input Data
<input type="button" value="Oke" onClick="history.go(-1);">
</p>