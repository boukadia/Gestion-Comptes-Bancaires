<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Comptes Bancaires</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assest/css/style.css">
  
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Welcome to Our Bank</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Comptes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Solde</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Support</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="form-container">
        <h3>Creation de Compte</h3>
        <form id="accountForm">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" name="nom" id="nom" placeholder="Entrez votre nom" required>
            </div>

            <div class="mb-3">
                <label for="balance" class="form-label">Solde</label>
                <input type="number" class="form-control" id="balance" name="balance" placeholder="Entrez le solde" min="0" required>
            </div>
            
            <div class="mb-3">
                <label for="accountType" class="form-label">Type de compte</label>
                <select class="form-select" name="type" id="accountType" required>
                    <option value=""> Selectionnez un type </option>
                    <option value="epargne">Compte epargne</option>
                    <option value="courant">Compte courant</option>
                    <option value="business">Compte business</option>
                </select>
            </div>
            
            <div class="text-center">
                <button type="submit" class="btn btn-primary w-100">Creer</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assest/js/script.js"></script>
</body>
</html>
