
        document.getElementById('accountForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const nom = document.getElementById('nom').value;
            const balance = document.getElementById('balance').value;
            const type = document.getElementById('accountType').value;

            if (!nom || balance < 0 || !type) {
                alert("Veuillez remplir tous les champs correctement.");
                return;
            }

            alert("Compte créé avec succès !");
        });
    