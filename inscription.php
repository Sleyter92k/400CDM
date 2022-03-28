<?php  require_once 'inc/log_bdd.php'; ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>400 Coups de Main</title>
        <!-- Favicon-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;600&display=swap" rel="stylesheet">  
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/bootstrap.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
    </head>
    <body>
        <?php require_once 'inc/navbar.php'; ?>
        
        <!-- Section-->
        <div class="container px-5 my-5">
    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
        <div class="mb-3">
            <label class="form-label d-block">Civilité</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="mr" type="radio" name="civilite" data-sb-validations="" />
                <label class="form-check-label" for="mr">Mr</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="mme" type="radio" name="civilite" data-sb-validations="" />
                <label class="form-check-label" for="mme">Mme</label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="nom">Nom</label>
            <input class="form-control" id="nom" type="text" placeholder="Nom" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="nom:required">Le nom est obligatoire</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="prenom">Prénom</label>
            <input class="form-control" id="prenom" type="text" placeholder="Prénom" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="prenom:required">Le prénom est obligatoire</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="pseudo">Pseudo</label>
            <input class="form-control" id="prenom" type="text" placeholder="Pseudo" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="pseudo:required">Le pseudo est obligatoire</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="adresseMail">Adresse Mail</label>
            <input class="form-control" id="adresseMail" type="email" placeholder="Adresse Mail" data-sb-validations="required,email" />
            <div class="invalid-feedback" data-sb-feedback="adresseMail:required">L'adresse mail est obligatoire</div>
            <div class="invalid-feedback" data-sb-feedback="adresseMail:email">Votre adresse mail est invalide</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="motDePasse">Mot de Passe</label>
            <input class="form-control" id="motDePasse" type="password" placeholder="Mot de Passe" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="motDePasse:required">Mot de passe obligatoire</div>
        </div>
        <div class="d-none" id="submitSuccessMessage">
            <div class="text-center mb-3">
                <div class="fw-bolder">Form submission successful!</div>
                <p>To activate this form, sign up at</p>
            </div>
        </div>
        <div class="d-grid">
            <button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Validez</button>
        </div>
    </form>
</div>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>


        <?php require_once 'inc/footer.php'; ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/script.js"></script>
    </body>
</html>