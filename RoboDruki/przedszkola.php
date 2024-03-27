<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoboDruki</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include_once('header.php')
    ?>




    <article>
        <h1>Zajęcia w przedszkolach</h1>

        <div class="przedszkola__contentBox">
            <div class="przedszkola__contentBox-text">
                Swoją prace z dziećmi zaczynałem od robotyki na klockach lego w przedszkolach i ta forma zajęć jest również w mojej ofercie. Od września na terenie Krakowa i okolicy będę prowadzić zajęcia z robotyki dla grup pięcio i sześciolatków w placówkach przeszkolnych oraz szkołach podstawowych.
            </div>
            <img src="/img/Milo.jpg" alt="">
        </div>

        <div class="przedszkola__contentBox  wyscigowka">
            <img src="/img/wyscigowka.jpg" alt="">
            <div class="przedszkola__contentBox-text">
                Zajęcia polegają na budowaniu konstrukcji z klocków edukacyjnych LEGO. Zestawy te charakteryzują się dużą liczbą elementów wspomagających kreatywność, oraz zdolności manualne. Każdy robot jest budowany według instrukcji, a po zakończonej pracy przychodzi czas na puszczenie wodzy fantazji i twórcze budowanie ozdób i dodatków.
            </div>
        </div>

        <div class="przedszkola__contentBox">
            <div class="przedszkola__contentBox-karuzela karuzela1">
                <!-- <img id="karuzela1slajd1" src="img/helikopter.png" alt="">
                    <img id="karuzela1slajd2" src="img/flower.png" alt="">
                    <img id="karuzela1slajd3" src="img/Roboramie.png" alt=""> -->
            </div>
            <div class="przedszkola__contentBox-karuzela karuzela2">
                <!-- <img id="karuzela2slajd1" src="img/Puller.png" alt="">
                    <img id="karuzela2slajd2" src="img/smieciarka.png" alt="">
                    <img id="karuzela2slajd3" src="img/pingwin.png" alt=""> -->
            </div>

        </div>



    </article>





    <?php
    include_once('footer.php')
    ?>

    <div class="blur hide"></div>
    <script src="app.js"></script>
    <script src="karuzelaobrazow.js"></script>
</body>