<?php
include_once("koneksi.php");
koneksi();

//get judul
$kdkategori = $_GET['kdkategori'];

//nama tabel
$tabel = "tblartikel";
$tabel2 = "tblkategori";

//perintah query utk mengambil data
$query = "SELECT * FROM $tabel, $tabel2 Where $tabel.kdkategori = $tabel2.kdkategori and $tabel.kdkategori = '$kdkategori'";
$hasil = mysql_query($query);
$data2 = mysql_fetch_array($hasil);
print "<a name=\"TemplateInfo\"><h1>Tampilkan Judul Dengan Kategori $data2[isikategori]</h1></a>";

while ($data=mysql_fetch_array($hasil))
	{
print "
<a name=\"TemplateInfo\"><h1>$data[judul]</h1></a>	
				
	<p>Posted by <a href=\"index.php?p=about\">$data[penulis]</a></p>

    <p>$data[isi]
    </p>
				
	<p class=\"post-footer align-right\">					
	<a href=\"index.php?p=artikel_r&judul='.$data[judul].'\" class=\"readmore\">Read more</a>
	<a href=\"index.php?p=categories&kdkategori='.$data[kdkategori].'\">Categories : $data[isikategori]</a>
	<span class=\"date\">$data[tanggal]</span>	
	</p>";
}
?>
