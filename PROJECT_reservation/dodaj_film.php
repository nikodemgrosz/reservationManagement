<?php
    $connection = new PDO (
        'mysql:host=localhost;dbname=Kino;',
        'root',
        ''
    
    
    );
    $query = $connection -> prepare("INSERT INTO Film(Tytul,Rezyser,RokProdukcji) VALUES(:tytul,:rezyser,:rok);");
    $query -> bindParam(":tytul",$_POST["tytul"],PDO::PARAM_STR);
    $query -> bindParam(":rezyser",$_POST["rezyser"],PDO::PARAM_STR);
    $query -> bindParam(":rok",$_POST["rok"],PDO::PARAM_INT);
    $query -> execute();

    //INSERT INTO Film(Tytul,Rezyser,RokProdukcji) VALUES("","","");

?>