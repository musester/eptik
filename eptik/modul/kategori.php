<?php
include_once ("koneksi.php");
koneksi();
//nama tabel
$tabel = "tblkategori";

include "libraries/inc.librari.php";

$auto = kdauto($tabel,"KAT");

?>
<div class="h_title">Add new category - form elements</div>
	<form action="admin.php?p=kategorisimpan" method="post">
		<div class="element">
			<label for="name">Kode Kategori</label>
			<input id="kode" name="kdkategori" type="text" value="<?php echo $auto; ?>" disabled="disabled"/>
			<input id="kode" name="kdkategori" type="hidden" value="<?php echo $auto; ?>"/>
		</div>
		<div class="element">
			<label for="content">Isi Kategori<span>(required)</span></label>
			<textarea name="isikategori" class="textarea" rows="5"></textarea>
		</div>
		<div class="entry">
			<button type="submit" class="add" name="simpan">Save page</button> <button class="cancel" name="clear" type="reset">Reset</button>
		</div>
	</form>