<?php
    session_start();
    require_once('dbconnect.php');

    if(isset($_POST['nazwaburgeramiesiaca']) && $_POST['nazwaburgeramiesiaca']!=""){
        $nazwaBurgera = $_POST['nazwaburgeramiesiaca'];
        $query = "UPDATE menu SET `nazwa` = '$nazwaBurgera' WHERE `kategoria`='burger miesiaca'";
        mysqli_query($connection, $query);
    }
    
    if(isset($_POST['cenaburgeramiesiaca']) && $_POST['cenaburgeramiesiaca']!=""){
        $cenaBurgera = $_POST['cenaburgeramiesiaca'];
        $query = "UPDATE menu SET `cena` = '$cenaBurgera' WHERE `kategoria`='burger miesiaca'";
        mysqli_query($connection,$query);
    }

    if(isset($_POST['skladburgeramiesiaca']) && $_POST['skladburgeramiesiaca']!=""){
        $skladBurgera = $_POST['skladburgeramiesiaca'];
        $query = "UPDATE menu SET `sklad`='$skladBurgera' WHERE `kategoria`='burger miesiaca'";
        mysqli_query($connection,$query);
    }
    
    header('location:adminpanel.php');

?>