
        // document.getElementById('accountForm').addEventListener('submit', function(e) {
            
        //     const nom = document.getElementById('nom').value;
        //     const balance = document.getElementById('balance').value;
        //     const type = document.getElementById('accountType').value;

        //     if (!nom || balance < 0 || !type) {
        //         alert("Veuillez remplir tous les champs correctement.");
        //         return;
        //     }

        //     alert("Compte créé avec succès !");
        // });
    

      

    let accountType = document.getElementById('accountType');
    let fet = document.getElementById('fet');
    let limit = document.getElementById('limit');
    let interet = document.getElementById('interet');



accountType.onclick=function(){

        const select = accountType.value;
        if (select === 'savings') {

                          interet.style.display = 'block';
                          fet.style.display = 'none';
                          limit.style.display = 'none';
                        } else if (select === 'current') {
                          limit.style.display = 'block';
                          fet.style.display = 'none';
                          interet.style.display = 'none';
                        } else if (select === 'business') {
                          fet.style.display = 'block';
                          interet.style.display = 'none';
                          limit.style.display = 'none';
                        }
}
//      



