<?php require_once 'inc/fonction.php';  // appel du fichier de fonction 
      require_once 'inc/log_bdd.php';
?>

<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title> </title>
    <!-- mes styles -->
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
    <div class="container">
        <?php require_once 'inc/navbar.php'; ?> 
      <section class="row">
        <div class="col-md-6">
        <?php
            // requête 
        $annonce = $pdoLOG->query ( "SELECT * FROM annonces WHERE categorie  = 'Informatique/Multimédia' ; ");
            // affichage
        while($reserve = $annonce->fetch(PDO::FETCH_ASSOC)) {
        echo "<div class=\"col\">";
        echo "<div class=\"card shadow-sm\">";
        echo "<img src=\"$reserve[photo]\" alt=\"photo d'annonce\">";

        echo "<div class=\"card-body\">";
        echo "<p class=\"card-title\"> ".$reserve['titre']. "</p>";
        echo "<p class=\"card-text\">Type d'annonce : " .$reserve['type_de_cdm']. "</p>";
        echo "<p class=\"card-text\">Categorie : ".$reserve['categorie']. "</p>";
        echo "<div class=\"d-flex justify-content-between align-items-center\">";
        echo "<div class=\"btn-group\">";


        echo "<a href=\"fiche_annonce.php\"  class=\"btn btn-info text-white btn-outline-secondary rounded text-center\">Voir l'annonce</button>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        }
        ?>

        </div>
        <div class="col-md-6">
          <h2></h2>

        </div>
      </section>
      <!-- footer en require  -->
       
      <?php require_once 'inc/footer.php'; ?>
       
    </div>
    
    
    <!-- fin container  -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>