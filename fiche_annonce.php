<?php  require_once 'inc/log_bdd.php'; 
// 1 RÉCEPTION DES INFORMATIONS D'UNE ANNONCE AVEC $_GET
// debug($_GET);
if ( isset($_GET['id_annonce']) ) {
  // debug($_GET);
  $annonce = $pdoLOG->prepare( " SELECT * FROM annonces WHERE   id_annonce = :id_annonce " );
  $annonce->execute(array(
    ':id_annonce' => $_GET['id_annonce']
  ));
  // debug($annonce->rowCount());
    if ($annonce->rowCount() == 0) { // si le rowCount est égal à 0 c'est qu'il n'y a pas de produit
        header('location:accueil.php');// redirection vers la page de départ
        exit();// arrêt du script
    }  
    $reserve = $annonce->fetch(PDO::FETCH_ASSOC);//je passe les infos dans une variable
    // debug($reserve);// ferme if isset accolade suivante
    // var_dump($reserve);
    } else {
    header('location:accueil.php');// si j'arrive sur la page sans rien dans l'url
    exit();// arrête du script
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
    <?php require_once 'inc/navbar.php'; ?>
    <div class="container">
      <section class="row m-4 justify-content-center">
    
        <h1 class="text-center"><?php echo $reserve['titre']; ?></h1>
        <div class="col-md-4">
          <img width="200" height="200" src="<?php echo $reserve['photo']; ?>" class=" border border-info image-responsive " alt="...">
        </div>
        <div class="col-md-4">
          <p class="card-text"><?php echo $reserve['type_de_cdm']; ?> de <?php echo $reserve['type_annonce']; ?> </p>
          <p class="card-text"><?php echo $reserve['description']; ?></p>
          <p class="card-text">Localisation : <?php echo $reserve['code_postal']; ?> <?php echo $reserve['ville']; ?></p>
          <a href="#" class="btn btn-primary">Réservez</a>
        </div>
      </section>
    </div>
    <?php require_once 'inc/footer.php'; ?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/script.js"></script>
  </body>
</html>

