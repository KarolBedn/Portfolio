<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        include("font.php");
        session_start();
        if(isset($_SESSION['zalogowano']) && $_SESSION['zalogowano']==1){
            header('location: adminpanel.php');
        }
    ?>
</head>
<body>

    <div class="loginwrapper">
        <div class="content">
            <div class="content-titlespace">
                <div class="content-titlespace-title">
                    Logowanie
                </div>
            </div>  
            <div class="loginform">
                Podaj dane logowania:
                <br><br>
                <form class="loginform" method="post" action="czyzalogowano.php">
                    <label for="login" >Login: <span style="color: green;">administrator</span></label><br>
                    <input type="text" name="login" required>
                    <br>
                    <br>
                    <label for="password">Hasło: <span style="color: green;">tajnehaslo</span></label><br>
                    <input type="password" name="password" required>
                    <br>
                    <?php
                        if(isset($_SESSION['blad'])){
                            echo $_SESSION['blad'];
                        }
                    ?>
                    <input type="submit" value="logowanie" class="submit">
                    
                </form>

            </div>  
            


            
        </div>
    </div>
</body>
</html>