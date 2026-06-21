<?php
    session_start();

    if(isset($_POST['submit']))
    {
        $login = $_POST['login'];
        $password = $_POST['password'];
        $connection = new PDO(
            'mysql:host=localhost; dbname=Kino;',
            'root',
            ''
        );

        $sql = $connection->prepare("SELECT password FROM User WHERE login = :login");
        $sql->bindValue(':login', $login, PDO::PARAM_STR);
        
        $sql->execute();
        $hash = $sql -> fetch();
        if( password_verify($password,$hash['password']) )
        {
            $_SESSION['isUserLoggedIn'] = true;
            header('location:index.php');
            exit;

        }
        else{
            $_SESSION['login_error']="Blędnie podane hasło";
                echo $_SESSION["login_error"];
                unset($_SESSION["login_error"]);
        }
        
        // if($sql->rowCount()==1)
        // {
        //     $_SESSION['isUserLoggedIn'] = true;
        //     header('location:index.php');
        // }
        // exit;
    }
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>

</head>
<body>
    <form action="login.php" method="POST">
        Login: <input type="text" name="login" maxlength="30" required><br>
        Hasło: <input type="password" name="password" required>
        <input type="submit" name="submit" value="Zaloguj się">
    </form>
</body>
</html>