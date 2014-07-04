<?php
include_once("koneksi.php");

error_reporting(0);
session_start();
if (empty($_SESSION[namauser]) AND empty($_SESSION[passuser])) {
	echo "<center>Untuk Mengakses modul, Anda harus login!..<br>";
	echo "<a href=index.php><b>LOGIN</b></a></center>";
}
else{

koneksi();
$tabel = "tblkategori";

//ambil nilai variabel URL
$kdkategori=$_GET["kdkategori"];

$query="SELECT * FROM $tabel WHERE kdkategori = '$kdkategori'";
//echo $query;
$hasil = mysql_query($query);
while ($data = mysql_fetch_array($hasil))
	{	

	if(mysql_affected_rows() > 0)
		{
		$kdkategori=$data["kdkategori"];
		$isikategori=$data["isikategori"];
		}
	else
		{
		echo "<script>alert('Maaf, record tidak ditemukan');</script>";
		echo "<script>history.go(-1);</script>";
		}
	}

?>

<div class="h_title">Add new category - form elements</div>
	<form action="admin.php?p=kategorisimpanedit" method="post">
		<div class="element">
			<label for="name">Kode Kategori</label>
			<input id="kode" name="kdkategori" type="text" value="<?php echo $kdkategori; ?>" disabled="disabled"/>
			<input id="kode" name="kdkategori" type="hidden" value="<?php echo $kdkategori; ?>"/>
		</div>
		<div class="element">
			<label for="content">Isi Kategori<span>(required)</span></label>
			<textarea name="isikategori" class="textarea" rows="5"><?php echo $isikategori; ?></textarea>
		</div>
		<div class="entry">
			<button type="submit" class="add" name="simpan">Save page</button> <button class="cancel" name="clear" type="reset">Reset</button>
		</div>
	</form>
<?php } ?>