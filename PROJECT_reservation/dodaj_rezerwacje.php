<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body { background-color: gold; }
    </style>
</head>
<body>
    <?php
        
        $film = $_POST['film'];
        $sala = $_POST['sala'];
        $datagodz = $_POST['datagodz'];

        $dbconnection = new PDO(
            'mysql:host=localhost; dbname=Kino',
            'root',
            ''
        );

        $dodanie = $dbconnection->prepare("INSERT INTO Rezerwacja (FilmID, SalaID, DataGodzina) VALUES(:film, :sala, :datagodz)");
        $dodanie->bindParam(':film', $film, PDO::PARAM_INT);
        $dodanie->bindParam(':sala', $sala, PDO::PARAM_INT);
        $dodanie->bindParam(':datagodz', $datagodz, PDO::PARAM_STR);
        
        if($dodanie->execute()) {
            echo "<h2>Rezerwacja dodana pomyślnie!</h2>";
            echo "<a href='index.php'>Powrót do strony głównej</a>";
        } else {
            echo "<h2>Coś poszło nie tak przy dodawaniu rezerwacji.</h2>";
        }
    ?>
</body>
</html>