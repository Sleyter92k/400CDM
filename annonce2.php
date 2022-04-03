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
        <div class="container"><?php echo $contenu; ?>
            <section class="row m-4 justify-content-center">
             
                <div class="col-md-6 p-2 bg-light border border-primary">
                    
                    <form action="" method="POST">
                        <label for="type">Type de coup de main*</label>
                        <div class="row">
                            <div class=" col form-group mt-2">
                                <input type="radio" id="offre"  name="type_de_cdm" value="Offre"  > Offre
                                <input type="radio" id="demande" name="type_de_cdm" value="Demande"> Demande            
                            </div>
                            <div class="col form-group mt-2">
                                <select id="type_annonce" name="type_annonce" >
                                    <option value="">---</option>
                                    <option value="Services">Services</option>
                                    <option value="Biens">Biens</option>
                                    <option value="Prêts">Prêts</option>
                                    <option value="Dons">Dons</option>
                                </select>
                            </div>
                        </div>
                          
                            <div class="col-6 form-group mt-2">
                                <label for="nom">Titre *</label>
                                <input type="text" name="titre" id="titre" value="" class="form-control" required>
                            </div>
                             <div class="col-6 form-group mt-2">
                                <input type="file" name="photo" id="photo" accept="image/png, image/jpeg">
                             </div>
                          
                        <div class="form-group mt-2">
                            <label for="description">Description *</label>
                            <textarea name="description" id="description" class="form-control"></textarea>
                        </div>
                        <div class="row">
                            <div class="col form-group mt-2">
                                <label for="code_postal">Code postal*</label>
                                <input type="text" name="code_postal" id="code_postal" value="" class="form-control"> 
                            </div>
                            <div class="col form-group mt-2">        
                                <label for="ville">Ville*</label>
                                <input type="text" name="ville" id="ville" value="" class="form-control"> 
                            </div>
                            
                        </div>
                        <div class="col form-group mt-2">        
                            <label for="adresse">Adresse*</label>
                            <input type="text" name="adresse" id="adresse" value="" class="form-control"> 
                        </div>
                        <div class="form-group mt-2 text-center">
                            <input type="submit" value="Validez" class="btn btn-sm btn-success"> 
                        </div>
                    </form>
                </div>
                <!-- fin col -->
            </section>
            <!-- fin row -->
        </div>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>


        <?php require_once 'inc/footer.php'; ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/script.js"></script>
    </body>
</html>