<div class="h_title">User manage pages - table</div>
	<h2>Administrasi Data User</h2>
	
	<div class="entry">
		<div class="sep"></div>
	</div>
	<?php
	include_once("koneksi.php");
	koneksi();
	
	//nama tabel
	$tabel = "user";
	
	//perintah query utk mengambil data
	$query="SELECT * FROM $tabel ORDER BY username";
	$hasil=mysql_query($query);
	
	//cetak header table
	print "
	<table>
		<thead>
		<tr>
			<th scope=col style=\"width: 30px;\">No</th>
			<th scope=col>Full Name</th>
			<th scope=col>Username</th>
			<th scope=col>Blokir</th>
			<th scope=col>Level</th>
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
			<td>$data[fullname]</td>
			<td>$data[username]</td>
			<td>$data[blokir]</td>
			<td>$data[level]</td>
			<td>
				<a href=\"admin.php?p=usercetak&username=$data[username]\" class=\"table-icon archive\" title=Cetak></a>
				<a href=\"admin.php?p=useredit&username=$data[username]\" class=\"table-icon edit\" title=Edit></a>
				<a href=\"admin.php?p=userdelete&fullname=$data[fullname]&tabel=$tabel\" onClick=\"return confirm('Anda yakin ingin menghapus $data[fullname] ?')\" class=\"table-icon delete\" title=Delete></a>
			</td>
		</tr>
	</tbody>";			
		       
	$no++;
	}

print"</table>"; 
?>
	<div class="entry">
		<div class="sep"></div>		
		<a class="button add" href="admin.php?p=user">Add new user</a>
	</div>

	<div class="clear"></div>