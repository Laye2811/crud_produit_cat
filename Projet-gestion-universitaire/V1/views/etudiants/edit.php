<?php
// Récupérer les données de l'étudiant à modifier
$id = $_GET['id'];
$query = $conn->prepare("SELECT * FROM etudiants WHERE id=?");
$query->bind_param("i", $id);
$query->execute();
$etudiant = $query->get_result()->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Modifier un étudiant</title>
</head>
<body>
    <h1>Modifier un étudiant</h1>
    <form method="POST" action="index.php?action=edit">
        <input type="hidden" name="id" value="<?= $etudiant['id'] ?>">
        <label>Nom :</label><input type="text" name="nom" value="<?= $etudiant['nom'] ?>" required><br>
        <label>Prénom :</label><input type="text" name="prenom" value="<?= $etudiant['prenom'] ?>" required><br>
        <label>Email :</label><input type="email" name="email" value="<?= $etudiant['email'] ?>" required><br>
        <label>Filière :</label><input type="text" name="filiere" value="<?= $etudiant['filiere'] ?>" required><br>
        <button type="submit">Modifier</button>
    </form>
</body>
</html>
