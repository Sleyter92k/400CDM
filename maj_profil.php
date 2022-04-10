<?php
require_once 'inc/log_bdd.php'; 
require_once 'inc/fonction.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <title>400 Coups de Main</title>
      <script src="https://kit.fontawesome.com/5ba36090d7.js" crossorigin="anonymous"></script>
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

<!-- =================================== -->
<!-- navbar -->
<!-- =================================== -->
<?php require_once 'inc/navbar.php'; ?>


    <!-- =================================== -->
    <!-- en-tête -->
    <!-- =================================== -->
    <!-- fin container header -->
<div class="container mb-4 bg-white">

<section class="row">
<div class="col-md-8">
        <form method="POST" action="" class="shadow p-3 mb-5 bg-body rounded">
			<h2>Mise à jour de vos informations</h2>
            <div class="row">
              <div class="col-4 form-group mt-2">
                  <label for="pseudo">Votre pseudo *</label>
                  <input type="text" name="pseudo" id="pseudo" value="<?php echo $maj['membre']['pseudo']; ?>" class="form-control"> 
              </div>
            </div>
            <!-- <div class="form-group mt-2">
                <label for="mdp">Mot de passe *</label>
                <input type="password" name="mdp" id="mdp" value="" class="form-control">
                <small class="bg-warning">votre mot de passe doit contenir entre 4 et 20 caractères</small>
            </div> -->
            <div class="row">
              <div class="col-4 form-group mt-2">
                  <label for="nom">Nom *</label>
                  <input type="text" name="nom" id="nom" value="<?php echo $maj['nom']; ?>" class="form-control">
              </div>
              <div class="col-4 form-group mt-2">
                  <label for="prenom">Prénom *</label>
                  <input type="text" name="prenom" id="prenom" value="<?php echo $maj['prenom']; ?>" class="form-control"> 
              </div>
            <div class="col-4 form-group mt-2">
                <label for="email">Email *</label>
                <input type="email" name="email" id="email" value="<?php echo $maj['mail']; ?>" class="form-control">
            </div>
            </div>
            <!-- fin row  -->
            <div class="row">
              <div class="form-group mt-2">
                  <label for="civilite">Civilité *</label>
                  
                  <input type="radio" name="civilite" value="Mr" checked> Homme
                  <input type="radio" name="civilite" value="Mme"<?php if (isset($maj['civilite']) && $maj['civilite'] =='Mme') echo 'checked';?>> Femme            
              </div>
              <div class="col-4 form-group mt-2">
                  <label for="adresse">Adresse</label>
                  <textarea name="adresse" id="adresse" class="form-control"><?php echo $maj['adresse']; ?></textarea>
              </div>
              <div class="col-4 form-group mt-2">
                  <label for="code_postal">Code postal</label>
                  <input type="text" name="code_postal" id="code_postal" value="<?php echo $maj['code_postal']; ?>" class="form-control"> 
              </div>
              <div class="col-4 form-group mt-2">        
                  <label for="ville">Ville</label>
                  <input type="text" name="ville" id="ville" value="<?php echo $maj['ville']; ?>" class="form-control"> 
              </div>
            </div>
            <div class="form-group mt-2">
                <input type="submit" class="btn btn-md btn-outline-success"> 
            </div>
    </form>
        </div>
    <!-- <a href="profil.php"></a> -->
    </section>
    </div>
</div>

    
</section>
      
    </div>
    <!-- fin div container -->

    <?php require_once 'inc/footer.php' ?>

    <!-- Optional JavaScript -->
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>