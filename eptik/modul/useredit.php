<?php
include_once("koneksi.php");

error_reporting(0);
session_start();
if (empty($_SESSION[namauser]) AND empty($_SESSION[passuser])) {
	echo "<center>Untuk Mengakses modul, Anda harus login!..<br>";
	echo "<a href=index.php><b>LOGIN</b></a></center>";
}
else{

koneksi();
$tabel = "user";

//ambil nilai variabel URL
$username=$_GET["username"];

$query="SELECT * FROM $tabel WHERE username = '$username'";
//echo $query;
$hasil = mysql_query($query);
while ($data = mysql_fetch_array($hasil))
	{	

	if(mysql_affected_rows() > 0)
		{
		$fullname=$data["fullname"];
		$username=$data["username"];
		$password=$data["password"];
		$level=$data["level"];
		}
	else
		{
		echo "<script>alert('Maaf, record tidak ditemukan');</script>";
		echo "<script>history.go(-1);</script>";
		}
	}

?>

<div class="h_title">Edit user - form elements</div>
	<form action="admin.php?p=usersimpanedit" method="post">
		<div class="element">
			<label for="fullname">Full Name<span class="red">(required)</span></label>
			<input id="fullname" name="fullname" type="text" class="text err" value="<?php echo $fullname; ?>"/>
		</div>
		<div class="element">
			<label for="username">Username<span class="red"></span></label>
			<input id="username" name="username" type="text" value="<?php echo $username; ?>" disabled="disabled"/>
			<input id="username" name="username" type="hidden" value="<?php echo $username; ?>"/>
		</div>
		<div class="element">
			<label for="password">Password<span class="red"></span></label>
			<input id="password" name="password" type="password" class="text err"/>
		</div>
	  <div class="element">
			<label for="blokir">Blokir</label>
		<input name="blokir" type="radio" value="N" checked="checked" />
		No &nbsp;&nbsp;	
		<input name="blokir" type="radio" value="Y" />
		Yes </div>
		<div class="element">
			<label for="level">Level</label>
		  <select name="level">
		  	<option value="">-- Select --</option>
		    <option value="User">User</option>
		    <option value="All_Privilages">All Privilages</option>
		  </select>
		</div>
		<div class="entry">
			<button type="submit" class="add" name="simpan">Save page</button> <button class="cancel" name="clear" type="reset">Reset</button>
		</div>
	</form>
<?php } ?>