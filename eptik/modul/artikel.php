<?php
include_once("koneksi.php");

error_reporting(0);
session_start();
if (empty($_SESSION[namauser]) AND empty($_SESSION[passuser])) {
	echo "<center>Untuk Mengakses modul, Anda harus login!..<br>";
	echo "<a href=index.php><b>LOGIN</b></a></center>";
}
else{
?>

<div class="h_title">Add new article - form elements</div>
<form action="admin.php?p=artikelsimpan" method="post">
	<div class="element">
		<label for="name">Judul Artikel <span class="red">(required)</span></label>
		<input id="judul" name="judul" class="text err" />
	</div>
	<div class="element">
		<label for="category">Kategori <span class="red">(required)</span></label>
		<select name="kdkategori" class="err">
		<option value="">-- Select --</option>
		<?php
		koneksi();
		
		//nama tabel
		$tabel1 = "tblkategori";
		 
		$sql="select * from $tabel1";
		$qry=mysql_query($sql) or die ("ERROR..".mysql_error());
		while ($data=mysql_fetch_array($qry)) {
		?>
					
		<option value="<?php echo $data['kdkategori']; ?>">[ <?php echo $data['kdkategori'];?> ] <?php echo $data['isikategori']; ?></option><?php } ?>
		</select>
		</div>
	<div class="element">
		<label for="comments">Penulis</label>
		<input id="penulis" name="penulis" type="text" value="<?php echo $_SESSION[namalengkap]; ?>" disabled="disabled"/>
		<input id="penulis" name="penulis" type="hidden" value="<?php echo $_SESSION[namalengkap]; ?>"/>
	</div>
	
	<div class="element">
		<label for="content">Isi <span>(required)</span></label>
		<textarea name="isi" class="textarea" rows="10" id="tinyeditor"><?php if ($isi) echo $isi;  ?></textarea>
		<script>
		var editor = new TINY.editor.edit('editor', {
			id: 'tinyeditor',
			width: 620,
			height: 175,
			cssclass: 'tinyeditor',
			controlclass: 'tinyeditor-control',
			rowclass: 'tinyeditor-header',
			dividerclass: 'tinyeditor-divider',
			controls: ['bold', 'italic', 'underline', 'strikethrough', '|', 'subscript', 'superscript', '|',
				'orderedlist', 'unorderedlist', '|', 'outdent', 'indent', '|', 'leftalign',
				'centeralign', 'rightalign', 'blockjustify', '|', 'unformat', '|', 'undo', 'redo', 'n',
				'font', 'size', 'style', '|', 'image', 'hr', 'link', 'unlink', '|', 'print'],
			footer: true,
			fonts: ['Verdana','Calibri','Arial','Georgia','Trebuchet MS'],
			xhtml: true,
			cssfile: 'custom.css',
			bodyid: 'editor',
			footerclass: 'tinyeditor-footer',
			toggle: {text: 'source', activetext: 'wysiwyg', cssclass: 'toggle'},
			resize: {cssclass: 'resize'}
		});
		</script>
	</div>
	<div class="entry">
		<button type="submit" class="add" name="simpan" onclick='editor.post();'>Save page</button> <button class="cancel" name="clear" type="reset">Reset</button>
	</div>
</form>
<?php } ?>