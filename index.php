<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Login</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<div class="wrapper">
	<h1>Login</h1>
    <form action="validation.php" method="post">
        <input type="text" name="username" value="Log in" placeholder="Username"/>
            <?php if (isset($name_error)) {
                echo $name_error; } ?>
        <input type="password" name="password" placeholder="Password"/>
            <?php if (isset($password_error)) {
                    echo $password_error; } ?>
        <button type="submit" class="btn">Let me in.</button>
    </form>
</div>
</body>
</html>
<?php
  session_start();
  if(isset($_SESSION['username']) && isset($_SESSION['password'])){
    $url= 'panel.php';
    header('Location: ' . $url);
    exit();
  }
?>
=======
    <title>PHP SERVER SESSION</title>
    <link rel='stylesheet' type = 'text/css' href="style.css">
</head>
<body>
<ul>
    <li><a href="index.php"></a>HOME</li>
    <li><a href="contact.php"></a>CONTACT</li>
</ul>
<?php
        
?>
</body>
</html>
>>>>>>> 84a531625fdd53c4257bab551415755af3ca59e0
