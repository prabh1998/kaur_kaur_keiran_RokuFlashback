<?php 
    require_once '../load.php';

    $ip = $_SERVER['REMOTE_ADDR'];

    if(isset($_POST['submit'])){
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        if(!empty($username) && !empty($password)){
            //Log user in
            $message = login($username, $password, $ip);
        }else{
            $message = 'Please fill out the required field';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
</head>
<body>
    <h2>Login Page</h2>
    <?php echo !empty($message)? $message: ''; ?>
    <form action="admin_login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" value="">

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" value="">

        <button name="submit">Submit</button>
    </form>
    <!-- I put the link here to allow the user to go to create user or homepage
     if the want but it show conflicts when I pushed to the github -->
     
    <!-- <a href="admin_createuser.php">Create User</a>
    <a href="../index.php">Home Page</a> -->
</body>
</html>