<?php
include_once("koneksi.php");

koneksi();

//get judul
$judul = $_GET['judul'];

//nama tabel
$tabel = "tblartikel";
	
//perintah query utk mengambil data
$query = "select * from $tabel where judul='".mysql_real_escape_string($judul)."'";
echo $query; echo "<br>";

$hasil = mysql_query($query);
if($hasil)
{
    while($data = mysql_fetch_array($hasil))
    {
        echo $data['judul'];
    }
} else {
    echo 'Invalid query: ' . mysql_error() . "\n";
    echo 'Whole query: ' . $hasil; 
}

?>

<a name="TemplateInfo"><h1><?php echo $data['judul']; ?></h1></a>	
				
	<p>Posted by <a href="index.php?p=about"><?php echo $data['penulis']; ?></a></p>

    <p><?php echo $data['isi']; ?>
    </p>
				
	<p class="post-footer align-right">					
	<a href="index.php?p=categories&kdkategori=<?php echo $data['kdkategori']; ?>">Categories : <?php echo $data['isikategori']; ?></a>
	<span class="date"><?php echo $data['tanggal']; ?></span>	
	</p>
