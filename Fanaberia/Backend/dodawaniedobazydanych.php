<?php
    session_start();
    require_once('dbconnect.php');

    $nazwaproduktu = $_POST['nazwaproduktu'];
    $sklad = $_POST['sklad'];
    $cena = $_POST['cena'];
    $kategoria = $_POST['kategoria'];
    $adnotacje = $_POST['adnotacje'];

    $query = "INSERT INTO menu (nazwa, sklad, cena, kategoria, adnotacje) VALUES ('$nazwaproduktu', '$sklad', '$cena', '$kategoria','$adnotacje')";

    mysqli_query($connection, $query);
    $_SESSION['dodanoProdukt'] = 'dodano produkt do bazy danych';
    header('location: adminpanel.php');
?>
