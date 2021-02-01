<?php
    session_start(); //we start the ssession so variables can be stored, you can even include header

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
//$_SESSION['username'] = "Leyber91";
//You need to start it at the top of the page that variable to be recognizable rgardless of the page ou are in.
echo $_SESSION['username'];
?>
</body>
</html>