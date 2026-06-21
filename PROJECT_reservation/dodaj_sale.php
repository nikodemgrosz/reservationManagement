<?php
$connection = new PDO (
    'mysql:host=localhost;dbname=Kino;',
    'root',
    ''


);
$query = $connection -> prepare("INSERT INTO Sala(NumerSali,LiczbaMiejsc) VALUES (:nrsali,:iloscmiejsc);");
$query -> bindParam(":nrsali",$_POST["nrsali"],PDO::PARAM_INT);
$query -> bindParam(":iloscmiejsc",$_POST["iloscmiejsc"],PDO::PARAM_INT);
$query -> execute();






?>