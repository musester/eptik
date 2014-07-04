<?php
include_once("koneksi.php");
include "libraries/pagination.php";
koneksi();
	
//nama tabel
$tabel = "tblartikel";
$tabel2 = "tblkategori";

// untuk mengetahui halaman keberapa yang sedang dibuka
// juga untuk men-set nilai default ke halaman 1 jika tidak ada
// data $_GET['page'] yang dikirimkan
$page = 1;
if (isset($_GET['page']) && !empty($_GET['page']))
    $page = (int)$_GET['page'];
 
// untuk mengetahui berapa banyak data yang akan ditampilkan
// juga untuk men-set nilai default menjadi 5 jika tidak ada
// data $_GET['perPage'] yang dikirimkan
$dataPerPage = 5;
if (isset($_GET['perPage']) && !empty($_GET['perPage']))
    $dataPerPage = (int)$_GET['perPage'];
 
// ambil data
$dataTable = getTableData($tabel, $page, $dataPerPage);
 
// menampilkan tombol paginasi
showPagination($tabel, $dataPerPage);

foreach ($dataTable as $i => $data)
    {
        $no = ($i + 1) + (($page - 1) * $dataPerPage);
		$artikel = $data['isi'];
		$potong_artikel = substr($artikel,0,300);
print "
<a href=\"index.php?p=artikel_r&judul='$data[judul]'\" name=\"TemplateInfo\"><h1>$data[judul]</h1></a>	
				
	<p>Posted by <a href=\"index.php?p=about\">$data[penulis]</a></p>

    <p>$potong_artikel ...
    </p>
				
	<p class=\"post-footer align-right\">					
	<a href=\"index.php?p=artikel_r&judul='".mysql_real_escape_string($data['judul'])."'\" class=\"readmore\">Read more</a>";
	//perintah query utk mengambil data
	$query="SELECT * FROM $tabel, $tabel2 Where $tabel.kdkategori = $tabel2.kdkategori and $tabel.kdkategori = '$data[kdkategori]'";
	$hasil=mysql_query($query);
	$data2=mysql_fetch_array($hasil);
	print "
	<a href=\"index.php?p=categories&kdkategori='$data2[kdkategori]'\">Categories : $data2[isikategori]</a>
	<span class=\"date\">$data2[tanggal]</span></p>";
}
?>