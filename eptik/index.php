<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta name="Description" content="Information architecture, Web Design, Web Standards." />
<meta name="Keywords" content="your, keywords" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="Distribution" content="Global" />
<meta name="Author" content="Erwin Aligam - ealigam@gmail.com" />
<meta name="Robots" content="index,follow" />
<link rel="stylesheet" href="css/template.css" type="text/css" />
<title>EPTIK</title>
</head>
<body>
<!-- header atas -->
<div id="wrap">

	<div id="header"><div id="header-content">	
		
		<h1 id="logo"><a href="index.php" title="ETIKA PROFESI TIK">EPTIK<span class="gray">Blog</span></a></h1>	
		<h2 id="slogan">Kelompok 10 | Untuk memenuhi nilai tugas mata kuliah EPTIK</h2>		
		
		<!-- Menu Tabs -->
		<ul>
			<li><a href="index.php?p=home">Home</a></li>
			<li><a href="index.php?p=about">About Us</a></li>
			<li><a href="index.php?p=downloads">Downloads</a></li>
			<li><a href="index.php?p=contact">Contact Us</a></li>
		</ul>		
			
	
	</div></div>
	
	<div class="headerphoto"></div>
				
	<!-- sidebar yang disamping -->
	<div id="content-wrap"><div id="content">		
		
		<div id="sidebar" >	
		
			<div class="sidebox">	
						
				<h1>Search Box</h1>	
				<form action="#" class="searchform">
					<p>
					<input name="search_query" class="textbox" type="text" />
  					<input name="search" class="button" value="Search" type="submit" />
					</p>			
				</form>			
				
			</div>	
			
			<div class="sidebox">	
			
				<h1>Categories</h1>
                <ul class="sidemenu">
				<?php
				include_once("koneksi.php");
				koneksi();
				
				//nama tabel
				$tabel = "tblkategori";
				
				//perintah query utk mengambil data
				$query="SELECT * FROM $tabel ORDER BY isikategori";
				$hasil=mysql_query($query);
				while ($data=mysql_fetch_array($hasil))
				{
				//cetak header table
				print "
                    <li><a href=\"index.php?p=categories&kdkategori='.$data[kdkategori].'\" title=\"Website Templates\">$data[isikategori]</a></li>";
				}
				?>
                </ul>
				
			</div>
			
			<div class="sidebox">	
			
				<h1>Wise Words</h1>
				<p>&quot;No man can live happily who regards himself alone; 
				who turns everything to his own advantage. You must live for
				others if you wish to live for yourself.&quot;</p>					
				<p class="align-right">- Seneca</p>
					
			</div>		
					
		</div>	
	
		<div id="main">		
		
			<div class="post">
			<?php
			//include "halaman.php";
	
			$pages_dir = 'pages';
			if(!empty($_GET['p'])){
				$pages = scandir($pages_dir, 0);
				unset($pages[0], $pages[1]);
				
				$p = $_GET['p'];
				if(in_array($p.'.php', $pages)){
					include($pages_dir.'/'.$p.'.php');
				} else {
					echo 'Halaman tidak ditemukan! :(';
				}
			} else {
				include($pages_dir.'/home.php');
			}
	
			?>
				
			</div>				
										
		</div>					
		
	</div></div>

<!-- footer -->	
<div id="footer"><div id="footer-content">
	
		<div class="col float-left space-sep">
			<h1>Site Partners</h1>
			<ul class="flist">
                <li><a href="" title="Kelompok 1">Kelompok 1</a></li>
                <li><a href="" title="Kelompok 2">Kelompok 2</a></li>
                <li><a href="" title="Kelompok 3">Kelompok 3</a></li>
                <li><a href="" title="Kelompok 4">Kelompok 4</a></li>
                <li><a href="" title="Kelompok 5">Kelompok 5</a></li>
			</ul>			
		</div>
		
		<div class="col float-left">
			<h1>Site Partners</h1>
			<ul class="flist">
                <li><a href="" title="Kelompok 6">Kelompok 6</a></li>
                <li><a href="" title="Kelompok 7">Kelompok 7</a></li>
                <li><a href="" title="Kelompok 8">Kelompok 8</a></li>
                <li><a href="" title="Kelompok 9">Kelompok 9</a></li>
                <li><a href="" title="We are here">We are here</a></li>
			</ul>			
		</div>		
	
		<div class="col2 float-right">
            <h1>Site Links</h1>
			<ul class="flist">
				<li class="top"><a href="index.php?p=home">Home</a></li>
                <li><a href="index.php?p=about">About Us</a></li>
				<li><a href="index.php?p=download">Download</a></li>
				<li><a href="index.php?p=contact">Contact Us</a></li>
			</ul>

            <p>
			&copy; copyright 2014 Kelompok 10<br />
			</p>
		</div>
	
</div></div>

</div>

</body>
</html>
