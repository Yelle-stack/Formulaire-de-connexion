<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulaire de connexion</title>
</head>
<body>
    <section>
        <h1>Connexion</h1>
        <form action="config.php" method="POST">
            <label>Adresse Mail</label>
            <input type="text" name="email">
            <label>Mots de Passe</label>
            <input type="password" name="mdp">
            <input type="submit" value="Valider">
        </form>
    </section>
</body>
</html>