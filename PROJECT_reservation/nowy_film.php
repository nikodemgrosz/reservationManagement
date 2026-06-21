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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
        background-color:green;
        }
        </style>
</head>
<body>
<form action="dodaj_film.php" method="POST">
    <input type="text" name="tytul"> 
    <label for="tytul">Tytuł</label>
    <br>
    <input type="text" name="rezyser"> 
    <label for="rezyser">Reżyser</label>
    <br>
    <input type="number" name="rok"> 
    <label for="rok">Rok produkcji</label>
    <br>
    <input type="submit" value="Wyślij!">
</form>
</body>
</html>