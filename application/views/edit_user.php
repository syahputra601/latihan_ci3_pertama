<h2>Edit User</h2>
<form action="<?php echo site_url('user/update/'.$user->id); ?>" method="post">
    <label>Name:</label><br>
    <input type="text" name="name" value="<?php echo $user->name; ?>" required><br><br>
    <label>Email:</label><br>
    <input type="email" name="email" value="<?php echo $user->email; ?>" required><br><br>
    <input type="submit" value="Update User">
</form>
