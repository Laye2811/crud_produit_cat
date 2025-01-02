<?php
// Récupérer les données du cours à modifier
$id = $_GET['id'];
$query = $conn->prepare("SELECT * FROM cours WHERE id=?");
$query->bind_param("i", $id);
$query->execute();
$cours = $query->get_result()->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Modifier un cours</title>
</head>
<body>
    <h1>Modifier un cours</h1>
    <form method="POST" action="index.php?action=edit">
        <input type="hidden" name="id" value="<?= $cours['id'] ?>">
        <label>Nom du cours :</label>
        <input type="text" name="nom_cours" value="<?= $cours['nom_cours'] ?>" required><br>
        <label>Code du cours :</label>
        <input type="text" name="code_cours" value="<?= $cours['code_cours'] ?>" required><br>
        <label>Nombre d'heures :</label>
        <input type="number" name="nombre_heures" value="<?= $cours['nombre_heures'] ?>" required><br>
        <button type="submit">Modifier</button>
    </form>
</body>
</html>
