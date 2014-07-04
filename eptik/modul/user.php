<div class="h_title">Add new user - form elements</div>
	<form action="admin.php?p=usersimpan" method="post">
		<div class="element">
			<label for="fullname">Full Name<span class="red">(required)</span></label>
			<input id="fullname" name="fullname" type="text" class="text err"/>
		</div>
		<div class="element">
			<label for="username">Username<span class="red">(required)</span></label>
			<input id="username" name="username" type="text" class="text err"/>
		</div>
		<div class="element">
			<label for="password">Password<span class="red">(required)</span></label>
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