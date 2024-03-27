<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wół w fanaberii</title>
    <?php
        include("font.php");
    ?>
    
</head>
<body>
    <?php
        include('header.php');
        require_once('dbconnect.php');
    ?>

    <div class="wrapper">
    
        <!-- Burger miesiąca -->
        <div class="content">
            <div class="content-titlespace">
                <div class="content-titlespace-title protest-revolution-regular">
                    BURGER MIESIĄCA
                </div>
            </div>
                    <!-- burger miesiaca -->
                    <?php
                        $query = "SELECT * FROM `menu` WHERE `Kategoria`='burger miesiaca'";
                        $result = mysqli_query($connection,$query);
                        $burgerMiesiaca = mysqli_fetch_assoc($result);

                        
                    ?>
                    <div class="listaProduktow-produkt">
                            <div class="listaProduktow-produkt-pierwszalinia">
                                <div class="listaProduktow-nazwaProduktu barlow-semi">
                                    <?php echo $burgerMiesiaca['nazwa']; ?>
                                </div>
                                <div class="listaProduktow-produkt-cena barlow-semi">
                                    <?php echo $burgerMiesiaca['cena']. " zł"; ?>
                                </div>
                            </div>
                            <div class="listaProduktow-sklad libre-franklin">
                                <?php echo $burgerMiesiaca['sklad']; ?>
                            </div>
                    </div>


        </div>
        <!-- Burgery -->
        <div class="content">
                <div class="content-titlespace">
                    <div class="content-titlespace-title protest-revolution-regular">
                        BURGER
                    </div>
                </div>
                <!-- wypisywanie listy burgerów -->
                <?php
                $queryBurgery = "SELECT * from menu where kategoria = 'burger'";
                $listaBurgerow = mysqli_query($connection, $queryBurgery);
                if(!$listaBurgerow){
                    echo 'błąd połączenia z bazą danych';
                }

                $i = 1;
                while($row = mysqli_fetch_assoc($listaBurgerow)){
                    
                    echo <<<END
                            <div class="listaProduktow-produkt">
                                <div class="listaProduktow-produkt-pierwszalinia">
                                    <div class="listaProduktow-nazwaProduktu barlow-semi">
                                        {$i}. {$row['nazwa']}
                                    </div>
                                    <div class="listaProduktow-produkt-cena barlow-semi">
                                        {$row['cena']} zł
                                    </div>
                                </div>
                                <div class="listaProduktow-sklad libre-franklin">
                                    {$row['sklad']}
                                </div>
                            </div>
                            END;
                            $i++;
                }
            ?>
        </div>

        <!-- Sałatki -->
        <div class="content">
                <div class="content-titlespace">
                    <div class="content-titlespace-title">
                        SAŁATKI
                    </div>
                </div>

                <?php
                $querySalatki = "SELECT * from menu where kategoria = 'salatka'";
                $listaSalatek = mysqli_query($connection, $querySalatki);
                if(!$listaSalatek){
                    echo 'błąd połączenia z bazą danych';
                }

                $i = 1;
                while($row = mysqli_fetch_assoc($listaSalatek)){
                    echo <<<END
                            <div class="listaProduktow-produkt">
                                <div class="listaProduktow-produkt-pierwszalinia">
                                    <div class="listaProduktow-nazwaProduktu barlow-semi">
                                        {$i}. {$row['nazwa']}
                                    </div>
                                    <div class="listaProduktow-produkt-cena barlow-semi">
                                        {$row['cena']} zł
                                    </div>
                                </div>
                                <div class="listaProduktow-sklad libre-franklin">
                                    {$row['sklad']}
                                </div>
                            </div>
                            END;
                            $i++;
                }
            ?>


        </div>
                

        <!-- Brushetta -->
        <div class="content">
                <div class="content-titlespace">
                    <div class="content-titlespace-title">
                        Brushetta
                    </div>
                </div>

                <?php
                $queryBrushetta = "SELECT * from menu where kategoria = 'brushetta'";
                $listaBrushetta = mysqli_query($connection, $queryBrushetta);
                if(!$listaBrushetta){
                    echo 'błąd połączenia z bazą danych';
                }

                $i = 1;
                while($row = mysqli_fetch_assoc($listaBrushetta)){
                    echo <<<END
                            <div class="listaProduktow-produkt">
                                <div class="listaProduktow-produkt-pierwszalinia">
                                    <div class="listaProduktow-nazwaProduktu barlow-semi">
                                        {$i}. {$row['nazwa']}
                                    </div>
                                    <div class="listaProduktow-produkt-cena barlow-semi">
                                        {$row['cena']} zł
                                    </div>
                                </div>
                                <div class="listaProduktow-sklad libre-franklin">
                                    {$row['sklad']}
                                </div>
                            </div>
                            END;
                            $i++;
                }
            ?>


        </div>
    
        <!-- Napoje -->
        <div class="content">
                <div class="content-titlespace">
                    <div class="content-titlespace-title">
                        Napoje
                    </div>
                </div>

                <?php
                $queryNapoje = "SELECT * from menu where kategoria = 'napoje'";
                $listaNapoje = mysqli_query($connection, $queryNapoje);
                if(!$listaNapoje){
                    echo 'błąd połączenia z bazą danych';
                }

                $i = 1;
                while($row = mysqli_fetch_assoc($listaNapoje)){
                    echo <<<END
                            <div class="listaProduktow-produkt">
                                <div class="listaProduktow-produkt-pierwszalinia">
                                    <div class="listaProduktow-nazwaProduktu barlow-semi">
                                        {$i}. {$row['nazwa']}
                                    </div>
                                    <div class="listaProduktow-produkt-cena barlow-semi">
                                        {$row['cena']} zł
                                    </div>
                                </div>
                                <div class="listaProduktow-sklad libre-franklin">
                                    {$row['sklad']}
                                </div>
                            </div>
                            END;
                            $i++;
                }
            ?>


        </div>


    </div>
</body>
</html>