<div class="h_title">Article manage pages - table</div>
	<h2>Administrasi Data Artikel</h2>
	
	<div class="entry">
		<div class="sep"></div>
	</div>
	<?php
	include_once("koneksi.php");
	koneksi();
	
	//nama tabel
	$tabel = "tblartikel";
	
	//perintah query utk mengambil data
	$query="SELECT * FROM $tabel ORDER BY judul";
	$hasil=mysql_query($query);
	
	//cetak header table
	print "
	<table>
		<thead>
		<tr>
			<th scope=col>No</th>
			<th scope=col>Judul</th>
			<th scope=col style=\"width: 79px;\">Kode Kategori</th>
			<th scope=col>Penulis</th>
			<th scope=col>Isi</th>
			<th scope=col style=\"width: 65px;\">Modify</th>
		</tr>
		</thead>";
	//cetak hasil query
	$no=1;
	while ($data=mysql_fetch_array($hasil))
		{
	
		//$row == 1 utk baris ganjil atau $row == 0 utk baris genap		
		$row=$no % 2;			
	
		//warna selang-seling
		if ($row==1)
			{$warna="#ffffff";}
		else 
			{$warna="#fffccc";}
	
			print 
			"
		<tbody>
		<tr>
			<td class=align-center>$no</td>
			<td>$data[judul]</td>
			<td>$data[kdkategori]</td>
			<td>$data[penulis]</td>
			<td>$data[isi]</td>
			<td>
				<a href=\"admin.php?p=artikelcetak&id=$data[judul]\" class=\"table-icon archive\" title=Cetak></a>
				<a href=\"admin.php?p=artikeledit&judul=$data[judul]\" class=\"table-icon edit\" title=Edit></a>
				<a href=\"admin.php?p=artikeldelete&judul=$data[judul]&tabel=$tabel\" onClick=\"return confirm('Anda yakin ingin menghapus $data[judul] ?')\" class=\"table-icon delete\" title=Delete></a>
			</td>
		</tr>
	</tbody>";			
		       
	$no++;
	}

print"</table>"; 
?>
	<div class="entry">
		<div class="sep"></div>		
		<a class="button add" href="admin.php?p=artikel">Add new article</a> <a class="button" href="admin.php?p=kategoriadmin">Categories</a> 
	</div>

	<div class="clear"></div>