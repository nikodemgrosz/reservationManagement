<?php
session_start();
if(!isset($_SESSION['isUserLoggedIn'])
|| $_SESSION['isUserLoggedIn'] == false){
    echo "Strona tylko dla zalogowanych!!! <br>";
    echo "<a href='login.php'>Zaloguj się</a>";
    exit;


}

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     body{
        background-color:gold;
        }
        </style>
</head>
</head>
<body>
    <form action="dodaj_rezerwacje.php" method="POST">
        ID Filmu: <input type="text" name="film"><br>
        ID Sali: <input type="number" name="sala"><br>
        Data i godzina: <input type="datetime-local" name="datagodz"><br>
        <input type="submit" name="wyslij" value="Dodaj rezerwacje">
    </form>
</body>
</html>