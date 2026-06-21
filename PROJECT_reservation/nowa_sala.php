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
        background-color:LightSeaGreen;
        }
        </style>
</head>
<body>
    <form action="dodaj_sale.php" method="post">
    <input type="number" name="nrsali">
    <label for="nrsali">Numer sali</label>
    <input type="number" name="iloscmiejsc">
    <label for="nrsali">Ilosc miejsc</label>
    <input type="submit" value="Dodaj salę!!!!">

</form>
</body>
</html>