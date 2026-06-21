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
    <title>Strona główna</title>
    <style>
      
        a{
            font-size: 30px;
            text-decoration:none;

        }
        #div{
            width:100%;
            height:100%;
            display:flex;
            justify-content:space-around;
            align-items:center;
            align-content:center;
            background-color: LightSeaGreen;
            position:absolute;
           
        }
        h1{
            color:Green;
        }
        #a1{
            color:orange;
        }
        #a2{
            color:blue;
        }
        #a3{
            color:purple;
        }
        #a4{
            color:red;
        }
       
    </style>
</head>
<body>
    
       
   
    <div id="div">
        
        <h1>KINO -> </h1>
    <a href="login.php" id="a1">Zaloguj się</a>
    <a href="nowy_film.php" id="a2">Dodaj film</a>
    <a href="nowa_rezerwacja.php" id="a3">Dodaj rezerwację</a>
    <a href="nowa_sala.php" id="a4">Dodaj salę</a>
    <a href="logout.php" id="a4">Wyloguj się</a>
    </div>

    <div>
</body>
</html>