<?php
session_start ();
session_destroy ();
	echo '<script language="javascript">
	alert ("Anda berhasil logout");
	window.location="index.php";
	</script>';
	header('location:login.php?eptik=logout');
	exit();
?>