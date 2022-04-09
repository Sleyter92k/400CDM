// alert('teste');


// function controlAnnonce(event) {
//     // permet de ne pas envoyer le formulaire, pour ne pas rafraîchir la page
//     // event.preventDefault();
//     // console.log(event.target);

        // récuperation du formulaire par son id
    let formAnnonce = document.getElementById('formAnnonce');
    // écoute de l'envoie du formulaire
    formAnnonce.addEventListener('submit', controlAnnonce);

    function controlAnnonce(event) {
        event.preventDefault();
        
        let offre = event.target.offre.value;
        let demande = event.target.demande.value;
        let type_annonce = event.target.type_annonce.value;
        let type_de_cdm = event.target.type_de_cdm.value;
        let titre = event.target.titre.value;
        let categorie = event.target.catgorie.value;
        let description = event.target.description.value;
        let code_postal = event.target.code_postal.value;
        let ville = event.target.ville.value;
        let adresse = event.target.adresse.value;
    }


        // console.log(offre,demande,type_annonce,type_de_cdm,titre,categorie,description,code_postal,ville,adresse);
