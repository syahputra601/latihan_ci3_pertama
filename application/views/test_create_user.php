<h1>BAGIAN INPUT DATA USER BARU</h1>
<form method="POST" action="<?php echo site_url('test/store'); ?>">
<input name="name" type="text" placeholder="input name" require>
<input name="email" type="text" placeholder="input email" require>
<button type="submit" name="save" >Save</button>
</form>