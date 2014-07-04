<?php
//panggil file koneksi
include_once("koneksi.php");

//ambil data terkirim
$judul         = $_POST["judul"];
$penulis    = $_POST["penulis"];
// your data coming back in php
$isi = isset($_REQUEST['isi']) ? $_REQUEST['isi'] : "" ;
$kategori    = $_POST["kdkategori"];

//tampilkan data terkirim
echo "Judul : $judul"; echo "<br>"; 
echo "Penulis : $penulis"; echo "<br>";
echo "Isi : $isi"; echo "<br>";
echo "Kategori : $kategori"; echo "<br>";


//susun perintah query
$input="INSERT INTO tblartikel
(
judul,penulis,isi,tanggal,kdkategori
) VALUES 
(
'$judul'
,'$penulis','$isi',now(),'$kategori')";

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