<?php
$connection = new PDO (
    'mysql:host=localhost;dbname=Kino;',
    'root',
    ''


);

$zapytanie = $connection -> query("SELECT * FROM `Sala` ORDER BY NumerSali;");
$tab = $zapytanie -> fetchAll(PDO::FETCH_ASSOC);
echo '<table style="border: 1px solid black; width: 600px;">';
echo '<tr style="border: 1px solid black;">';
    echo '<td>SalaID</td>';
    echo '<td>Numer sali</td>';
    echo '<td>Liczba miejsc</td>';
    echo "</tr>";
    foreach($tab as $item){
        echo '<tr style="border: 1px solid black">';
        echo '<td style="border: 1px solid black">'.$item["SalaID"]."</td>";
        echo '<td style="border: 1px solid black">'.$item["NumerSali"]."</td>";
        echo '<td style="border: 1px solid black">'.$item["LiczbaMiejsc"]."</td>";
        echo "</tr>";
    }
    echo "</table>";




?>