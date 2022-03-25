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
        

        <div class="container px-5 my-5">
    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
        <div class="mb-3">
            <label class="form-label d-block">Type de coup de main</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="offre" type="radio" name="typeDeCoupDeMain" data-sb-validations="required" />
                <label class="form-check-label" for="offre">Offre</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="demande" type="radio" name="typeDeCoupDeMain" data-sb-validations="required" />
                <label class="form-check-label" for="demande">Demande</label>
            </div>
            <div class="invalid-feedback" data-sb-feedback="typeDeCoupDeMain:required">One option is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for=""></label>
            <select class="form-select" id="" aria-label="">
                <option value="Services">Services</option>
                <option value="Biens">Biens</option>
                <option value="Prêts">Prêts</option>
                <option value="Dons">Dons</option>
            </select>
        </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="titre">Titre</label>
            <input class="form-control" id="titre" type="text" placeholder="Titre" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="titre:required">Titre is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="description">Description</label>
            <textarea class="form-control" id="description" type="text" placeholder="Description" style="height: 10rem;" data-sb-validations="required"></textarea>
            <div class="invalid-feedback" data-sb-feedback="description:required">Description is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="codePostal">Code Postal</label>
            <input class="form-control" id="codePostal" type="text" placeholder="Code Postal" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="codePostal:required">Code Postal is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="ville">Ville</label>
            <input class="form-control" id="ville" type="text" placeholder="Ville" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="ville:required">Ville is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="adresse">Adresse</label>
            <input class="form-control" id="adresse" type="text" placeholder="Adresse" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="adresse:required">Adresse is required.</div>
        </div>
        <div class="d-none" id="submitSuccessMessage">
            <div class="text-center mb-3">
                <div class="fw-bolder">Form submission successful!</div>
                <p>To activate this form, sign up at</p>
                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
            </div>
        </div>
        <div class="d-none" id="submitErrorMessage">
            <div class="text-center text-danger mb-3">Error sending message!</div>
        </div>
        <div class="d-grid">
            <button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button>
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
