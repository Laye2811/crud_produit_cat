<!DOCTYPE html>
<html>
<head>
    <title>Liste des étudiants</title>
</head>
<body>
    <h1>Liste des étudiants</h1>
    <a href="index.php?action=create">Ajouter un étudiant</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Filière</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($etudiants as $etudiant): ?>
        <tr>
            <td><?= $etudiant['id'] ?></td>
            <td><?= $etudiant['nom'] ?></td>
            <td><?= $etudiant['prenom'] ?></td>
            <td><?= $etudiant['email'] ?></td>
            <td><?= $etudiant['filiere'] ?></td>
            <td>
                <a href="index.php?action=edit&id=<?= $etudiant['id'] ?>">Modifier</a>
                <a href="index.php?action=delete&id=<?= $etudiant['id'] ?>" onclick="return confirm('Êtes-vous sûr ?')">Supprimer</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
