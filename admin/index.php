<?php
    require_once '../load.php';
    confirm_logged_in();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

    <link rel="stylesheet" href="../public/css/main.css">
</head>
<body>
    <section class="homeContent">
        <h2>Welcome! <?php echo $_SESSION['user_name'];?></h2>
        
        <a href="admin_createuser.php">Create User</a>
        <br>
        <br>
        <a href="admin_edituser.php">Edit User</a>
        <br>
        <br>
        <a href="admin_deleteuser.php">Delete User</a>
        <br>
        <br>
        <a href="admin_logout.php">Sign Out</a>
    </section>
</body>
</html>