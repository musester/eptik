<div class="h_title">Categories manage pages - table</div>
	<h2>Administrasi Data Kategori</h2>
	
	<div class="entry">
		<div class="sep"></div>
	</div>
	<?php
	include_once("koneksi.php");
	koneksi();
	
	//nama tabel
	$tabel = "tblkategori";
	
	//perintah query utk mengambil data
	$query="SELECT * FROM $tabel ORDER BY kdkategori";
	$hasil=mysql_query($query);
	
	//cetak header table
	print "
	<table>
		<thead>
		<tr>
			<th scope=col style=\"width: 30px;\">No</th>
			<th scope=col style=\"width: 80px;\">Kode Kategori</th>
			<th scope=col>Isi Kategori</th>
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
			<td>$data[kdkategori]</td>
			<td>$data[isikategori]</td>
			<td>
				<a href=\"admin.php?p=kategoricetak&kdkategori=$data[kdkategori]\" class=\"table-icon archive\" title=Cetak></a>
				<a href=\"admin.php?p=kategoriedit&kdkategori=$data[kdkategori]\" class=\"table-icon edit\" title=Edit></a>
				<a href=\"admin.php?p=kategoridelete&kdkategori=$data[kdkategori]&tabel=$tabel\" onClick=\"return confirm('Anda yakin ingin menghapus $data[kdkategori] ?')\" class=\"table-icon delete\" title=Delete></a>
			</td>
		</tr>
	</tbody>";			
		       
	$no++;
	}

print"</table>"; 
?>
	<div class="entry">
		<div class="sep"></div>		
		<a class="button add" href="admin.php?p=kategori">Add new category</a>
	</div>

	<div class="clear"></div>