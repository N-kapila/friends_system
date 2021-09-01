<?php
    session_start();
    unset($_SESSION['error']);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>My Friends System</title>
</head>
<body>
    <div class="container border-dark">
        <h1 style="text-align:center; color:blue">My Friends System</h1>
        <h2>Home</h2>
        <table >
            <tr>
                <td>Name:</td>
                <td>P.G.T.N.B Kapilarathne</td>
            </tr>
            <tr>
                <td>Student ID:</td>
                <td>SE/2018/024</td>
            </tr>
        </table >
        <br>
        <div style="text-align:center">
             <a href="sign-up.php"><b>Sign up</b></a>&nbsp
             <a href="login.php"><b>Login</b></a>&nbsp
             <a href="friends-view.php"><b>My Friends</b></a>&nbsp
             <a href="add-friends-view.php"><b>Add Friends</b></a>&nbsp
             <a href="about.php"><b>About</b></a>
        </div>
    </div>
</body>
</html>