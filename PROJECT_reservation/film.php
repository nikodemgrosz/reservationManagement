<?php
$connection = new PDO (
        'mysql:host=localhost;dbname=Kino;',
        'root',
        ''
    
    
    );


    $zapytanie = $connection -> query("SELECT * FROM `Film` ORDER BY FilmID DESC;");
    $zmienna = $zapytanie -> fetchAll(PDO::FETCH_ASSOC);
   
    foreach( $zmienna as $wypisz){
        echo "ID: ".$wypisz["FilmID"]."<br>";
        echo "Tytul: ".$wypisz["Tytul"]."<br>";
        echo "Rezyser: ".$wypisz["Rezyser"]."<br>";
        echo "Rok produkcji: ".$wypisz["RokProdukcji"];
        echo "<br><br><br>";
    }
//SELECT * FROM `Film` ORDER BY FilmID DESC; 












    ?>