<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un étudiant</title>
</head>
<body>
    <h1>Ajouter un étudiant</h1>
    <form method="POST" action="index.php?action=create">
        <label>Nom :</label><input type="text" name="nom" required><br>
        <label>Prénom :</label><input type="text" name="prenom" required><br>
        <label>Email :</label><input type="email" name="email" required><br>
        <label>Filière :</label><input type="text" name="filiere" required><br>
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
