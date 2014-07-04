<?php
include_once("koneksi.php");
?>

<?php
$judul=$_GET['judul'];
$tabel=$_GET['tabel'];
koneksi();

$primary_key = nama_primary($tabel);

$delete = "DELETE FROM $tabel WHERE $primary_key = '$judul'";
echo $delete;
$hasil_delete = mysql_query($delete);


if(mysql_affected_rows() > 0)
	{
	echo "<script>alert('Record telah dihapus');</script>";
	echo "<script>history.go(-1);</script>";
	}
else
	{
	echo "<script>alert('Penghapusan record gagal, coba ulangi lagi');</script>";
	echo "<script>history.go(-1);</script>";
	}
?>