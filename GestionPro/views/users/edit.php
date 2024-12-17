<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un Utilisateur</title>
</head>
<body>
    <h1>Modifier un Utilisateur</h1>
    <form method="POST" action="">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" value="<?= $user['nom'] ?>" required><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" value="<?= $user['prenom'] ?>" required><br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" value="<?= $user['email'] ?>" required><br>

        <button type="submit">Modifier</button>
    </form>
    <a href="index.php?action=listUsers">Retour</a>
</body>
</html>