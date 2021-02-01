<?php
    session_start(); //we start the ssession so variables can be sotred

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SERVER SESSION</title>
    <link rel='stylesheet' type = 'text/css' href="style.css">
</head>
<body>
<ul>
    <li><a href="index.php">HOME</a></li>
    <li><a href="contact.php">CONTACT</a></li>
</ul>
<?php

$_SESSION['username'] = "Leyber91";
echo $_SESSION['username'];

if (!isset($_SESSION['username'])) {
    echo "You are not logged in!";
} else {
    echo " You are <strong>logged in!</strong>";
};

?>
</body>
</html>