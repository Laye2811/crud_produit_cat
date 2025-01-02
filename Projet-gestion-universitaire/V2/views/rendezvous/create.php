<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Créer un Rendez-vous</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Créer un Rendez-vous</h1>
        <form method="POST" action="../rendezvous/create">
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
            <div class="mb-3">
                <label for="heure" class="form-label">Heure</label>
                <input type="time" class="form-control" id="heure" name="heure" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="clientId" class="form-label">Client ID</label>
                <input type="number" class="form-control" id="clientId" name="clientId" required>
            </div>
            <button type="submit" class="btn btn-success">Créer</button>
            <a href="../rendezvous/index.php" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
</body>
</html>
