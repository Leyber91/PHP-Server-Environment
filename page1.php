<?php
    session_start();

    if(!isset($_GET['username'])){
    header('Location: home.php');
    exit();
    }

    $username = $_SESSION['username'];
    $url = 'page2.php?username=' . $username;
    echo "Hello $username, do you want to proceed to <a href='$url'> page 2? </a> "

?>