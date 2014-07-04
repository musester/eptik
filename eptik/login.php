<?php
error_reporting(0);
session_start();

if($_SESSION['namauser']==TRUE){
    header('location:index.php?eptik=welcome');
}else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Paweł 'kilab' Balicki - kilab.pl" />
<title>Login</title>
<link rel="stylesheet" type="text/css" href="css/login.css" media="screen" />
</head>
<body>
<div class="wrap">
<div id="content">
	<div id="main">
<center>
<?php

if($_GET['eptik']=='welcome'){
        echo"<h2>SELAMAT DATANG DI HALAMAN LOGIN ADMIN</h2>";
    }
    
    elseif($_GET['eptik']=='gagallogin'){
        echo"<div class=\"n_error\"><p>Login Gagal!!! Username dan Password salah atau sedang di blokir.</p></div>";
    }
    
    elseif($_GET['eptik']=='denied'){
        echo"<div class=\"n_warning\"><p>Silahkan Login Terlebih Dahulu untuk mengakses !</p></div>";
    }
    
    elseif($_GET['eptik']=='logout'){
        echo"<div class=\"n_ok\"><p>Anda telah sukses keluar dari sistem <b>[LOGOUT]<b></p></div>";
    }
?>
</center><br /><br />
		<div class="full_w">
			<form action="cek_login.php" method="post">
				<label for="login">Username:</label>
				<input id="login" name="username" class="text" />
				<label for="pass">Password:</label>
				<input id="pass" name="password" type="password" class="text" />
				<div class="sep"></div>
				<button type="submit" class="ok" name="Submit">Login</button> <a class="button" type="reset">Reset</a>
			</form>
		</div>
		<div class="footer">&raquo; <a href="">ETIKA PROFESI TEKNOLOGI INFORMASI dan KOMUNIKASI</a> | Admin Panel</div>
	</div>
</div>
</div>

</body>
</html>

<?php } ?>