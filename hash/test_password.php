<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="decrypt_password.php">
        <label for="password">Mot de passe Clair :</label>
    <input type="text" name="password" id="password">
    <label for="hash">Mot de passe chiffré :</label>
        <input type="text" name="hash" id="hash">
    <button type="submit">Valider</button>
    </form>
</body>
</html>