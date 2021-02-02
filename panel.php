<?php
  session_start();
  $userName = $_SESSION['username'];
  $password = $_SESSION['password'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="wrapper">
        <h2>Here you are <?php echo $userName ?> we were waiting for you</h2>
        <form class="formOut" action="close_session.php" method="post">
            <button type="submit" class="btn">Get the fuck out</button>
        </form>
    </div>
</body>
</html>