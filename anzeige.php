<!DOCTYPE html>
<!--
Name: David Hülsberg
Klasse: 19IT1
Datum: 29.11.2021
Zweck: Abfrage der Daten aus der Datenbank
-->
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB-Daten</title>
</head>
<body>
    <?php
        include('zugriff.inc');
        $connection = mysqli_connect($host, $user, null, $database) or die("Verbindung zum Server konnte nicht hergestellt werden!");
        $query = "SELECT name, klasse, beschreibung FROM daten ORDER BY name desc;";
        echo "<table border='1'>";
        echo "<tr><th>Name:</th><th>Klasse:</th><th>Beschreibung:</th>";
        if($result = $connection->query($query)) {
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["name"]."</td><td>".$row["klasse"]."</td><td>".$row["beschreibung"]."</td></tr>";
            }
        }
        echo "</table>";
        mysqli_close($connection);
    ?>
</body>
</html>