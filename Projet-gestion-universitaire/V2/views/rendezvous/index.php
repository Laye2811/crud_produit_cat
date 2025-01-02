<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Rendez-vous</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Liste des Rendez-vous</h1>
        <a href="../rendezvous/create" class="btn btn-primary mb-3">Créer un rendez-vous</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Heure</th>
                    <th>Description</th>
                    <th>Client ID</th>
                </tr>
            </thead>
            <tbody>
            <?php if (!empty($clients)): ?>
                <?php foreach ($rendezvous as $rdv): ?>
                    <tr>
                        <td><?= $rdv->date ?></td>
                        <td><?= $rdv->heure ?></td>
                        <td><?= $rdv->description ?></td>
                        <td><?= $rdv->clientId ?></td>
                    </tr>
                <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="text-center">Aucun rendez-vous trouvé.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
