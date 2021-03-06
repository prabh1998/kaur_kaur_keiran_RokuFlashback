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

    <link rel="stylesheet" href="../public/css/main.css">
</head>
<body>
    <section class="loginPage">
        <h2>Login to your Roku Account</h2>
        <?php echo !empty($message)? $message: ''; ?>
        <form action="admin_login.php" class="loginForm" method="post">
            <label for="username">Username:</label>
            <br>
            <br>
            <input type="text" name="username" id="username" value="">
            <br>
            <br>
            <label for="password">Password:</label>
            <br>
            <br>
            <input type="password" name="password" id="password" value="">
            <br>
            <button name="submit">Sign In</button>
        </form>
    </section>
</body>
</html>