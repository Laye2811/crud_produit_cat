<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un Rendez-vous</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Modifier un Rendez-vous</h1>
        <form method="POST" action="/rendezvous/edit/<?= $rendezvous->id ?>">
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" id="date" name="date" value="<?= $rendezvous->date ?>" required>
            </div>
            <div class="mb-3">
                <label for="heure" class="form-label">Heure</label>
                <input type="time" class="form-control" id="heure" name="heure" value="<?= $rendezvous->heure ?>" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required><?= $rendezvous->description ?></textarea>
            </div>
            <div class="mb-3">
                <label for="clientId" class="form-label">Client ID</label>
                <input type="number" class="form-control" id="clientId" name="clientId" value="<?= $rendezvous->clientId ?>" required>
            </div>
            <button type="submit" class="btn btn-success">Modifier</button>
            <a href="/rendezvous" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
</body>
</html>
