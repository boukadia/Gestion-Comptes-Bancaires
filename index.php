<?php 
require_once "head.php"
?>
<!DOCTYPE html>
<html lang="en">

<body style="display: flex;flex-direction: column">
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
                        <a class="nav-link" href="./src/comptes.php">Comptes</a>
                    </li>
                   
                   
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row">
           
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">saving account </h5>
                        <a href="./src/showSavingAccounts.php" class="btn btn-primary">saving account</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">current account</h5>
                       
                        <a href="./src/showCurrentAccounts.php" class="btn btn-primary">current account</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">businees account</h5>
                        <a href="./src/showBusnisseAccounts.php" class="btn btn-primary">business account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-container">
        <h3>Creation de Compte</h3>
        <form action=" ./src/sendDonnes.php" method="POST" id="accountForm">
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
                <select onchange="show(event)" class="form-select" name="accountType" id="accountType" required>
    <option value="">Selectionnez un type</option>
    <option value="saving">saving</option>
    <option value="current">current</option>
    <option value="business">business</option>
</select>

            </div>


            <div id="fee" class="mb-3" style="display:none">
    <label for="balance" class="form-label">fee</label>
    <input type="number" class="form-control" id="fee" name="fee" placeholder="Entrez le fee" min="0">
</div>

<div id="limitt" class="mb-3" style="display:none">
    <label for="balance" class="form-label">limit</label>
    <input type="number" class="form-control" id="limitt" name="limitt" placeholder="limit" min="0">
</div>

<div id="interet" class="mb-3" style="display:none">
    <label for="balance" class="form-label">interet</label>
    <input type="number" class="form-control" id="interet" name="interet" placeholder="Entrez le interet" min="0">
</div>


            
            <div class="text-center">
                <button type="submit" class="btn btn-primary w-100">Creer</button>
            </div>
        </form>
        

    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="">
    <script src="./js/script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
