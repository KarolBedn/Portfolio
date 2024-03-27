<?php
    session_start();
    require_once('dbconnect.php');

        if(isset($_POST['wybor'])){
            $wybranyProdukt = mysqli_real_escape_string($connection, $_POST['wybor']);
            $query = "DELETE FROM `menu` WHERE `nazwa` = '$wybranyProdukt'";
            mysqli_query($connection, $query);
            $_SESSION['usunietoProdukt'] = "Produkt został usunięty z bazy danych";
            header('location:adminpanel.php');
        }else{
            echo 'Nie wybrano produktu';
        }


    
?>