<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeIgniter 3 with Bootstrap</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
</head>
<body>
    <div class="container">
        <h1 class="text-center text-primary">Welcome to CodeIgniter 3</h1>
    </div>
    
    <div>
        <button class="btn btn-primary" id="add_new_user" onclick="window.location.href='<?php echo site_url('test/create'); ?>'">Add New</button>
    </div>

    <div>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>EMAIL</td>
                <td>Actions</td>
            </tr>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user->id; ?></td>
                <td><?php echo $user->name; ?></td>
                <td><?php echo $user->email; ?></td>
                <td>
                    <a href="<?php echo site_url('test/edit/').$user->id; ?>" title="Edit User">Edit</a>
                    <a href="<?php echo site_url('test/delete/').$user->id; ?>" onclick="return confirm('Are you sure to delete this data?');" title="Delete User">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
                <br><br><br><br><hr>
        <table>
                <tr>
                    <td>ID</td>
                    <td>Name Email</td>
                </tr>
                <?php foreach($test1 as $test): ?>
                <tr>
                    <td><?php echo $test->id; ?></td>
                    <td><?php echo $test->name_email; ?></td>
                </tr>
                <?php endforeach; ?>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>
