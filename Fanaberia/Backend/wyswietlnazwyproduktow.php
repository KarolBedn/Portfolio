<?php
require_once('dbconnect.php');

    // $queryKategorie = "SELECT 'Kategoria' FROM 'menu'";
    $queryKategorie = "SELECT DISTINCT `Kategoria` FROM `menu`";

    $kategorie = mysqli_query($connection, $queryKategorie);



    echo '<select name="wybor">';
    while($categoryRow = $kategorie->fetch_assoc()){
        echo '<optgroup label='.$categoryRow['Kategoria'].'>';

        $queryProdukty = "SELECT `nazwa` FROM `menu` WHERE `Kategoria` = '{$categoryRow['Kategoria']}'";
        $produkty = mysqli_query($connection, $queryProdukty);
        while($productRow = $produkty->fetch_assoc()){
            $productName = htmlspecialchars($productRow['nazwa']);
            echo '<option value="'.$productName.'">'.$productName.'</option>';
        }
        echo '</optgroup>';
    }
    

    echo '</select>'

?>

