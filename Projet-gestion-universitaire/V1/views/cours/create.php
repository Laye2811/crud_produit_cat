<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un cours</title>
</head>
<body>
    <h1>Ajouter un cours</h1>
    <form method="POST" action="index.php?action=create">
        <label>Nom du cours :</label><input type="text" name="nom_cours" required><br>
        <label>Code du cours :</label><input type="text" name="code_cours" required><br>
        <label>Nombre d'heures :</label><input type="number" name="nombre_heures" required><br>
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
