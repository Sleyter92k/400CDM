<?php 
require_once 'inc/log_bdd.php';
require_once 'inc/fonction.php';

if ( isset($_GET['id_membre']) ) {// on demande le détail d'un employé
    // debug($_GET);
    $resultat = $pdoLOG->prepare( " SELECT * FROM membres WHERE id_membre = :id_membre " );
    $resultat->execute(array(
      ':id_membre' => $_GET['id_membre']// on associe le marqueur vide à l'id_employes
    ));
    // debug($resultat->rowCount());
      if ($resultat->rowCount() == 0) { // si le rowCount est égal à 0 c'est qu'il n'y a pas d'employé
          header('location:profil.php');// redirection vers la page de départ
          exit();// arrêtedu script
      }  
      $maj = $resultat->fetch(PDO::FETCH_ASSOC);//je passe les infos dans une variable
      // debug($maj);// ferme if isset accolade suivante
      } else {
      header('location:profil.php');// si j'arrive sur la page sans rien dans l'url
      exit();// arrête du script
  }

//4 TRAITEMENT DE MISE À JOUR D'UN EMPLOYÉ
if ( !empty($_POST) ) {//not empty
  // debug($_POST);
$_POST['prenom'] = htmlspecialchars($_POST['prenom']);// pour se prémunir des failles et des injections SQL
  $_POST['nom'] = htmlspecialchars($_POST['nom']);
  $_POST['civilite'] = htmlspecialchars($_POST['civilite']);
  $_POST['mail'] = htmlspecialchars($_POST['mail']);
  $_POST['adresse'] = htmlspecialchars($_POST['adresse']);
  $_POST['code_postal'] = htmlspecialchars($_POST['code_postal']);
  $_POST['ville'] = htmlspecialchars($_POST['ville']);
  $_POST['mobile'] = htmlspecialchars($_POST['mobile']);
  $_POST['statut'] = htmlspecialchars($_POST['statut']);

  $resultat = $pdoLOG->prepare( " UPDATE membres SET prenom = :prenom, nom = :nom, civilite = :civilite, mail = :mail, adresse = :adresse, code_postal = :code_postal, ville = :ville, mobile = :mobile, statut = :statut WHERE id_membre = :id_membre " );// requete préparée avec des marqueurs

  $resultat->execute( array(
      ':prenom' => $_POST['prenom'],
      ':nom' => $_POST['nom'],
      ':civilite' => $_POST['civilite'],
      ':mail' => $_POST['mail'],
      ':adresse' => $_POST['adresse'],
      ':code_postal' => $_POST['code_postal'],
      ':ville' => $_POST['ville'],
      ':mobile' => $_POST['mobile'],
      ':statut' => $_POST['statut'],
      ':id_membre' => $_GET['id_membre'],

  ));
  header('location:profil.php');
  exit();
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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