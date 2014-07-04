<?php
include_once("koneksi.php");

//Ambil dan simpan variabel POST
$kdkategori=$_POST["kdkategori"];
$isikategori=$_POST["isikategori"];

//cek value yg dikirim ke DB Server
echo "Kode Kategori : $kdkategori"; echo "<br>";
echo "Isi Kategori : $isikategori"; echo "<br>";

koneksi();
$tabel = "tblkategori";

$update="UPDATE $tabel SET isikategori = '$isikategori' WHERE kdkategori = '$kdkategori'";

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