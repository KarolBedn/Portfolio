<?php
    session_start();

    $_SESSION['zalogowano']=0;

    session_unset();
    header('location: login.php');

?>