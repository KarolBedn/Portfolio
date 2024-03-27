
    <?php
        session_start();
        $login = $_POST['login'];
        $password = $_POST['password'];
        $loginError = 1;
        $passwordError = 1;

        echo $login . $password;

        if(isset($login) && $login == 'administrator'){
            echo 'login git';
            $loginError = 0;
        }
        

        if(isset($password) && $password == 'tajnehaslo'){
            echo 'haslogit';
            $passwordError = 0;
        }


        if($loginError==0 && $passwordError==0){
            echo 'ZALOGOWANO';
            header('location: adminpanel.php');
            unset($_SESSION['blad']);
            $_SESSION['zalogowano'] = 1;
        }
        else{
            $_SESSION['blad']='<span style="color: red;">Niepoprawny Login lub hasło</span>';
            header("location: login.php");    
        }


    ?>


