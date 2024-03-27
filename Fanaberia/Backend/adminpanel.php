<?php
session_start();
if($_SESSION['zalogowano']==1){
    
}
else{
    header('location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        include('font.php')
    ?>
</head>
<body>
    <div class="adminpanel-pasektop">
        <div class="adminpanel-pasektop-content">
            <div class="adminpanel-pasektop-content-lewa">
                <a href="index.php">Strona główna</a>
            </div>
            <div class="adminpanel-pasektop-content-prawa">
                <a href="logout.php">Wyloguj!</a>
            </div>
            
        </div>
    </div>
    <?php
        if(isset($_SESSION['usunietoProdukt'])){
            echo '<div class="adminpanel-komunikat">'.$_SESSION['usunietoProdukt'].'</div>';
            unset($_SESSION['usunietoProdukt']);
        }

        if(isset($_SESSION['dodanoProdukt'])){
            echo '<div class="adminpanel-komunikat">'.$_SESSION['dodanoProdukt'].'</div>';
            unset($_SESSION['dodanoProdukt']);
        }
    ?>
    
    <div class="wrapper">
        <div class="content">
            <div class="content-titlespace">
                <div class="content-titlespace-title">Panel administratorski</div>
            </div>
            <div class="listaProduktow-nazwaProduktu barlow-semi">
                co chcesz zrobić?
            </div>

            <!-- dodawanie produktu -->
            <div class="adminpanel-dropdown-title">
                Dodaj produkt:
            </div>
            <div class="adminpanel-dropdown-content">
                <form action="dodawaniedobazydanych.php" method="POST">
                    <label for="nazwaproduktu">Nazwa produktu:</label>
                    <br>
                    <input type="text" name="nazwaproduktu" id="nazwaproduktu">

                    <br><br>
                    <label for="sklad">Skład:</label>
                    <br>
                    <input type="text" name="sklad" id="sklad">
                    <br><br>
                    <label for="cena">Cena:</label>
                    <br>
                    <input type="text" name="cena" id="cena">
                    <br><br>

                    Kategoria: <br>
                    <input type="radio" id="burger" name="kategoria" value="burger" checked>
                    <label for="burger">Burger</label>
                    <br>
                    <input type="radio" id="salatka" name="kategoria" value="salatka">
                    <label for="salatka">Sałatka</label>
                    <br>
                    <input type="radio" id="brushetta" name="kategoria" value="brushetta">
                    <label for="brushetta">Brushetta</label>
                    <br>
                    <input type="radio" id="napoje" name="kategoria" value="napoje">
                    <label for="napoje">Napoje</label>
                    <br><br>

                    <label for="adnotacje">Adnotacje:</label>
                    <br>
                    <input type="text" name="adnotacje" id="adnotacje">
                    <br><br>
                    <input type="submit" value="Dodaj produkt do menu">
                </form>
            </div>

            <!-- usuwanie produktu -->
            <div class="adminpanel-dropdown-title">
                Usuń produkt:
            </div>
            <div class="adminpanel-dropdown-content">
                Wybierz produkt, który chcesz usunąć
                <form action="usuwanieproduktuzbazydanych.php" method="POST">
                    <?php //zapytanie do bazy o liste produtkow
                        require_once('wyswietlnazwyproduktow.php');
                    ?> 
                    <br>
                    <input type="submit" value="usuń">
                </form>
            </div>
            
            <!-- Edycja burgera miesiąca -->
            <div class="adminpanel-dropdown-title">
                Zmień burgera miesiąca
            </div>
            <div class="adminpanel-dropdown-content">
                <form action="edycjaburgeramiesiaca.php" method="POST">
                    <label for="nazwaburgeramiesiaca">Nazwa:</label>
                    <br>
                    <input type="text" id="nazwaburgeramiesiaca" name="nazwaburgeramiesiaca">
                    <br><br>
                    <label for="cenaburgeramiesiaca">Cena:</label>
                    <br>
                    <input type="text" id="cenaburgeramiesiaca" name="cenaburgeramiesiaca">
                    <br><br>
                    <label for="skladburgeramiesiaca">Skład:</label>
                    <br>
                    <input type="text" id="skladburgeramiesiaca" name="skladburgeramiesiaca">
                    <br><br>
                    <input type="submit" value="Aktualizuj burgera miesiąca">
                    <br><br>
                </form>
            </div>
            

        </div>
    </div>





<script src="cykadminpaneldropdown.js"></script>
<script src="cykusuwaniekomunikatu.js"></script>




</body>
</html>