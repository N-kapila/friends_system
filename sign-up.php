<?php
require("db.php");

session_start();

if (isset($_REQUEST['submit'])) {

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $confirm_password = $_REQUEST['confirm_password'];

    unset($_SESSION['error']);

    if (empty($name)) {
        set_error("Please enter your full name!");
    }

    if (empty($email)) {
        set_error("Please enter your email!");
    }

    if (empty($password)) {
        set_error("Please enter valid password!");
    }

    if (empty($confirm_password) || $password != $confirm_password) {
        set_error("The password and confirmation password does not match!");
    }

    
    $sql = "INSERT INTO user (name,email,password) VALUES ('{$name}','{$email}','{$password}')";
    $res = $conn->query($sql);

    if ($res) {
        header("location:index.php");
    } else {
        set_error("Database error!");
    }
}

function set_error($error)
{
    $_SESSION['error'] = $error;
    header("location:sign-up.php");
    die();
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Sign Up</title>
</head>
<body>

<div class="container border-dark">
    <h1 style="text-align: center; color:blue"> My Friends System</h1>
    <h2>Sign Up</h2>

    <form action="" method="post">
        <?php if (isset($_SESSION['error'])): ?>
           <div class="error center">
               <span ><?= $_SESSION['error'] ?></span>
           </div>
            <br>
        <?php endif; ?>
        <table style="width: 40%" class="center">
            <tr>
                <td>Full Name:</td>
                <td><input type="text" name="name"></td>
            </tr>

            <tr>
                <td>Email:</td>
                <td><input type="text" name="email"></td>
            </tr>

            <tr>
                <td>Password:</td>
                <td><input type="password" name="password"></td>
            </tr>

            <tr>
                <td>Confirm Password:</td>
                <td><input type="password" name="confirm_password"></td>
            </tr>

        </table>

        <br>
        <button type="submit" name="submit" class="center">Sign Up</button>
        <p style="text-align: center">Already have an account? <a href="login.php"><b>Log In</b></a></p>
        
        
        </form>

</div>
</body>
</html>
