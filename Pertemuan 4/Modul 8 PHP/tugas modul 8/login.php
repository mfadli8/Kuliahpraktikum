<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="hasil.css">
    <title>time website login</title>
</head>
<body>
<?php
    $username=$_POST['username'];
    $nama=$_POST['nama'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    ?>
    <header>
        </header>
        <p class="content"><?php echo "$nama  Telah Login Pada "; echo date("m-F-Y, g:i:s a"); ?></p>
        <div class="navbar-container">
            <ul>
                <li><a href="#">home</a></li>
            </ul>
        </div>
        <div>
            <footer>
                <h1 class="footer-pertama">My Info</h1>
                <p class="p-footer">Username : <?php echo $username ?></p>
                <p>Email : <?php echo $email ?></p>
            </footer>
</body>
</html>