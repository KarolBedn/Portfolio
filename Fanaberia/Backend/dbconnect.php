<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'bazafanaberia';

    $connection = mysqli_connect($host, $username, $password, $database);

    if(!$connection){
        die('nie polaczono:'.mysqli_connect_error());
    }

?>