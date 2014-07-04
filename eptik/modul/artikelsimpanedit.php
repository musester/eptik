<?php
include_once("koneksi.php");

//Ambil dan simpan variabel POST
$judul=$_POST["judul"];
$kdkategori=$_POST["kdkategori"];
$penulis=$_POST["penulis"];
$isi=$_POST["isi"];

//cek value yg dikirim ke DB Server
echo "Judul : $judul"; echo "<br>";
echo "Kode Kategori : $kdkategori"; echo "<br>";
echo "Penulis : $penulis"; echo "<br>";
echo "Isi : $isi"; echo "<br>";

koneksi();
$tabel = "tblartikel";

$update="UPDATE $tabel SET 
tanggal = now(),
kdkategori = '$kdkategori',
penulis = '$penulis',
isi = '$isi'  
WHERE judul = '$judul'";

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