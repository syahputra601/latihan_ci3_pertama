<h2>User List</h2>
<a href="<?php echo site_url('User/create'); ?>">Add New User</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user->id; ?></td>
        <td><?php echo $user->name; ?></td>
        <td><?php echo $user->email; ?></td>
        <td>
            <a href="<?php echo site_url('user/edit/'.$user->id); ?>">Edit</a> |
            <a href="<?php echo site_url('user/delete/'.$user->id); ?>" onclick="return confirm('Are you sure?')">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<br>
<a href="<?php echo site_url('User'); ?>">User List</a>
