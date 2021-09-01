<?php
    require ('db.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>About</title>
</head>
<body>
    <div class="container border-dark">
        <h1  style="text-align:center; color:blue">My Friends System</h1>
        <h2>About</h2>
        <table>
            <tr>
                <td>Project Owner:</td>
                <td>P.G.T.N.B Kapilarathne</td>
            </tr>
            <tr>
                <td>Database Server:</td>
                <td><?=$conn->host_info?></td>
            </tr>
            <tr>
                <td>Server Name:</td>
                <td><?=$_SERVER['SERVER_NAME']?></td>
            </tr>  
        </table>
        <br>
        <a href="index.php" style="text-align:center"><b>Home</b></a>
    </div>
</body>
</html>
