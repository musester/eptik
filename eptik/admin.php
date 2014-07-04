<?php
include_once("koneksi.php");
include "libraries/class_paging.php";

error_reporting(0);
session_start();

if ($_SESSION[eptik]=='Copyright_eptik'){
	if (empty($_SESSION[namauser]) AND empty($_SESSION[passuser])) {
		echo "<center>Untuk Mengakses modul, Anda harus login!..<br>";
		echo "<a href=login.php?eptik=welcome><b>LOGIN</b></a></center>";
	}
	else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Paweł 'kilab' Balicki - kilab.pl" />
<title>EPTIK</title>
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/navi.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/tinyeditor.css" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/tiny.editor.packed.js"></script>
<script type="text/javascript">
$(function(){
	$(".box .h_title").not(this).next("ul").hide("normal");
	$(".box .h_title").not(this).next("#home").show("normal");
	$(".box").children(".h_title").click( function() { $(this).next("ul").slideToggle(); });
});
</script>
</head>
<body>
<div class="wrap">
	<div id="header">
		<div id="top">
			<div class="left">
				<p>Welcome, <strong><?php echo $_SESSION[namalengkap]; ?></strong> [ <a href="logout.php">logout</a> ]</p>
			</div>
			<div class="right">
				<div class="align-right">
					<p><strong>Kelompok 10 | EPTIK</strong></p>
				</div>
			</div>
		</div>
		<div id="nav">
			<ul>
				<?php
		  		if($_SESSION[leveluser]=='All_Privilages' OR $_SESSION[leveluser]=='User'){
		 		?>
				<li class="upp"><a href="#">Entry</a>
					<ul>
						<li>&#8250; <a href="admin.php?p=artikel">Entry Artikel</a></li>
						<li>&#8250; <a href="admin.php?p=kategori">Entry Kategori</a></li>
					</ul>
				</li>
				<?php
				}
		  		if($_SESSION[leveluser]=='All_Privilages' OR $_SESSION[leveluser]=='User'){
		 		?>
				<li class="upp"><a href="#">Administrasi Data</a>
					<ul>
						<li>&#8250; <a href="admin.php?p=artikeladmin">Artikel</a></li>
						<li>&#8250; <a href="admin.php?p=kategoriadmin">Kategori</a></li>
					</ul>
				</li>
				<?php
				}
		  		if($_SESSION[leveluser]=='All_Privilages'){
		 		?>
				<li class="upp"><a href="#">Users</a>
					<ul>
						<li>&#8250; <a href="admin.php?p=useradmin">Show all uses</a></li>
						<li>&#8250; <a href="admin.php?p=user">Add new user</a></li>
						<li>&#8250; <a href="admin.php?p=userlock">Lock users</a></li>
					</ul>
				</li>
				<?php } ?>
			</ul>
		</div>
	</div>
	
	<div id="content">
		<div id="sidebar">
			<div class="box">
				<div class="h_title">Panduan Singkat Penggunaan</div>
				<div class="h_title">&#8250; Formulir Entry</div>
				<ul id="home">
					<li class="b1"><a class="icon add_page" href="">Formulir Entry</a></li>
					<li class="b1"><a>Berisi formulir-formulir elektronik untuk menginput data.</a></li>
				</ul>
			</div>
			
			<div class="box">
				<div class="h_title">&#8250; Administrasi Data</div>
				<ul>
					<li class="b1"><a class="icon page" href="">Administrasi Data</a></li>
					<li class="b2"><a>Berisi menu administrasi data, yaitu Edit dan Delete.</a></li>
				</ul>
			</div>
		</div>
		<div id="main">
			
			<!-- <div class="clear"></div> -->
			
			<div class="full_w">
			
			<?php
			//include "halaman.php";
	
			$pages_dir = 'modul';
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

	<div id="footer">
		<div class="left">
			<p>KELOMPOK 10 | Admin Panel</p>
		</div>
		<div class="right">
			<p>Etika Profesi Teknologi Informasi dan Komunikasi</p>
		</div>
	</div>
</div>

</body>
</html>
<?php
	}
}else{
	session_start();
	session_destroy();
	
	header('location:login.php?eptik=denied');
}
?>