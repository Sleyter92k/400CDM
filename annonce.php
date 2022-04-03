<?php  require_once 'inc/log_bdd.php'; 


if (!empty($_POST)) {
    // var_dump($_POST);
    $_POST['type_de_cdm'] = htmlspecialchars($_POST['type_de_cdm']);
    $_POST['type_annonce'] = htmlspecialchars($_POST['type_annonce']);
    $_POST['titre'] = htmlspecialchars($_POST['titre']);
    $_POST['description'] = htmlspecialchars($_POST['description']);
    $_POST['code_postal'] = htmlspecialchars($_POST['code_postal']);
    $_POST['ville'] = htmlspecialchars($_POST['ville']);
    $_POST['adresse'] = htmlspecialchars($_POST['adresse']);


    $insertion = $pdoLOG->prepare(" INSERT INTO annonces (type_de_cdm, type_annonce, titre, description, code_postal, ville, adresse) VALUES (:type_de_cdm, :type_annonce, :titre, :description, :code_postal, :ville, :adresse) ");

    $insertion->execute(array(
        ':type_de_cdm' => $_POST['type_de_cdm'],
        ':type_annonce' => $_POST['type_annonce'],
        ':titre' => $_POST['titre'],
        ':description' => $_POST['description'],
        ':code_postal' => $_POST['code_postal'],
        ':ville' => $_POST['ville'],
        ':adresse' => $_POST['adresse'],
    ));
}


?>
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
            <section class="row justify-content-center">
                <form action="" method="POST" class=" g-3">
                    
                    <div class="mb-3">
                        <label class="form-label d-block">Type de coup de main</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="offre" type="radio" value="Offre" name="type_de_cdm" data-sb-validations="required" />
                            <label class="form-check-label" for="offre">Offre</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="demande" type="radio" name="type_de_cdm" value="Demande" data-sb-validations="required" />
                            <label class="form-check-label" for="demande">Demande</label>
                        </div>
                        <div class="invalid-feedback" data-sb-feedback="typeDeCoupDeMain:required">One option is required.</div>
                    </div>
                    <div class="mb-3 col-6">
                        <label class="form-label" for="type_annonce"></label>
                        <select class="form-select" id="type_annonce" name="type_annonce" aria-label="">
                            <option value="Services">Services</option>
                            <option value="Biens">Biens</option>
                            <option value="Prêts">Prêts</option>
                            <option value="Dons">Dons</option>
                        </select>
                    </div>
                    </div>
                    <div class="mb-3 col-6">
                        <label class="form-label" for="titre">Titre</label>
                        <input class="form-control" id="titre" type="text" name="titre" placeholder="Titre" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="titre:required">Titre is required.</div>
                    </div>
                    <div class="mb-3 col-6">
                        <label class="form-label" for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" type="text" placeholder="Description" style="height: 10rem;" data-sb-validations="required"></textarea>
                        <div class="invalid-feedback" data-sb-feedback="description:required">Description is required.</div>
                    </div>
                    <div class="mb-3 col-6">
                        <label class="form-label" for="codePostal">Code Postal</label>
                        <input class="form-control" id="code_postal" type="text" name="code_postal" placeholder="Code Postal" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="codePostal:required">Code Postal is required.</div>
                    </div>
                    <div class="mb-3 col-6">
                        <label class="form-label" for="ville">Ville</label>
                        <input class="form-control" id="ville" name="ville" type="text" placeholder="Ville" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="ville:required">Ville is required.</div>
                    </div>
                    <div class="mb-3 col-6">
                        <label class="form-label" for="adresse">Adresse</label>
                        <input class="form-control" id="adresse" name="adresse" type="text" placeholder="Adresse" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="adresse:required">Adresse is required.</div>
                    </div>
                    
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                        </div>
                    </div>
                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3">Error sending message!</div>
                    </div>


                    <button type="submit" class="btn btn-secondary">Validez</button>

                </form>
            </section>
            
        </div>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>


        <?php require_once 'inc/footer.php'; ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/script.js"></script>
    </body>
</html>
