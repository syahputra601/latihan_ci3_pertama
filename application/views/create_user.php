<h2>Create New User</h2>
<form action="<?php echo site_url('user/store'); ?>" method="post">
    <label>Name:</label><br>
    <input type="text" name="name" required><br><br>
    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>
    <input type="submit" value="Create User">
</form>
