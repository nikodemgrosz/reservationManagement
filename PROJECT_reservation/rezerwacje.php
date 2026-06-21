<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $dbconnection = new PDO(
            'mysql:host=localhost; dbname=Kino',
            'root',
            ''
        );
        $wynik = $dbconnection->query("SELECT * FROM Rezerwacja;");
        $rezerwacje = $wynik->fetchAll(PDO::FETCH_ASSOC);
        echo '<table>
        <tr>
            <th>ID Filmu</th>
            <th>ID Sali</th>
            <th>Data i godzina</th>
        </tr>';
        foreach($rezerwacje as $row)
        {
            echo '<tr>
                <td>'.$row['FilmID'].'</td>
                <td>'.$row['SalaID'].'</td>
                <td>'.$row['DataGodzina'].'</td>
            </tr>';
        }
        echo '</table>';
        
    ?>
</body>
</html>