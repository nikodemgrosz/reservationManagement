<?php
    session_start();
    
    if(isset($_POST['potwierdz']))
    {
        if($_POST['password1'] == $_POST['password2'])
        {
            $login = $_POST['login'];
            $haslo = $_POST['password1'];

            $hash = password_hash($haslo, PASSWORD_DEFAULT);

            $connect = new PDO(
                'mysql:host=localhost; dbname=Kino',
                'root',
                ''
            );

            $dodaj = $connect->prepare("INSERT INTO User (login, password) VALUES (:login, :password)");
            $dodaj->bindValue(':login', $login, PDO::PARAM_STR);
            $dodaj->bindValue(':password', $hash, PDO::PARAM_STR);
            $dodaj->execute();
            
            header('location:login.php');
        }else
        {
            $_SESSION['register_error'] = "Podane hasła są różne";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:pink;
            gap: 10px;
        }
        </style>
</head>
<body>
    <form method="post">
        <input type="text" name="login" id="login">
        <label for="login">LOGIN</label>
        <br>
        <input type="password" name="password1" id="haslo">
        <label for="login">HASŁO</label>
        <br>
        <input type="password" name="password2" id="haslo">
        <label for="login">POWTÓRZ HASŁO</label>
        <br>
        <input type="submit" name="potwierdz" value="Zarejestruj się!">
        <p>
        <?php
    if(isset($_SESSION["register_error"])){
        echo $_SESSION["register_error"];
        unset($_SESSION["register_error"]);
    }



?>
    
    
    </p>
        
    </form>
</body>
</html>