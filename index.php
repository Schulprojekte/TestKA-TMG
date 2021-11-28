<!DOCTYPE html>
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