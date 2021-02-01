<?php
    session_start();

    session_destroy();
    if(isset($_POST['username']) && !isset($_SESSION['username'])){
        $username = $_POST['username'];
        $_SESSION['username'] = $username;
        $url = 'page1.php?';
        header ( 'Location: ' . $url);
        exit();
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How to pass variables</title>
</head>
<body>
    <form method="post" action="home.php">
    <input type="text" name="username" placeholder="Tell me you name baby">
    <input type="submit" value="Save yourself">
    </form>
</body>
</html>