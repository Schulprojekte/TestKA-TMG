<!DOCTYPE html>
<?php
    include("zugriff.inc");
    if(isset($_POST['name']) && isset($_POST['klasse']) && isset($_POST['beschreibung'])) {
        $name = $_POST['name'];
        $klasse = $_POST['klasse'];
        $beschreibung = $_POST['beschreibung'];

        if($name != NULL && $klasse != NULL && $beschreibung != NULL) {
            $connection = mysqli_connect($host, $user, $password, $database) or die("Verbindung zum Server konnte nicht hergestellt werden!");
            mysqli_query($connection, "INSERT INTO daten VALUES(NULL, '$name', '$klasse', '$beschreibung');") or die("Daten konnten nicht eigetragen werden");
            mysqli_close($connection);
        } else {
            echo "<p>Bitte geben Sie alle Daten an!</p>";
        }
    } else {
        //nichts tun
    }
?>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TestKA</title>
    <link rel="stylesheet" href="./css/stylesheet.css">
</head>
<body>
    <div class="layout wrapper">
        <div class="layout oben">
            <p>Blau</p>
        </div>
        <div class="layout links">
            <p>Gelb</p>
        </div>
        <div class="layout rechts">
            <form action="index.php" method="POST">
                <label for="name">Name:</label>
                <input name="name" type="text">
                <br>
                <label for="klasse">Klasse:</label>
                <input name="klasse" type="text">
                <br>
                <label for="beschreibung">Beschreibung:</label>
                <br>
                <textarea name="beschreibung" rows="4" cols="50">Beschreibung</textarea>
                <br>
                <input type="submit">
            </form>
        </div>
    </div>
</body>
</html>