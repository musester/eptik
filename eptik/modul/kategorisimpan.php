<?php
//panggil file koneksi
include_once("koneksi.php");

//ambil data terkirim
$kdkat         = $_POST["kdkategori"];
$isikat    = $_POST["isikategori"];

//tampilkan data terkirim
echo "Kode Kategori : $kdkat"; echo "<br>"; 
echo "Isi Kategori : $isikat"; echo "<br>";

//susun perintah query
$input="INSERT INTO tblkategori
(
kdkategori,isikategori
) VALUES 
(
'$kdkat'
,'$isikat')";

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