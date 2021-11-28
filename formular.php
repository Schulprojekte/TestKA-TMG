<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formular</title>
</head>
<body>
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
</body>
</html>