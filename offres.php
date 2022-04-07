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
        
        <section class="py-5">
            <div class="container ">
                <div class="row mb-5">
                    <div class="col" >
                         <a href="offres.php" class="btn btn-info">Voir les offres</a>
                    </div>
                    <div class="col">
                         <a href="demandes.php" class="btn btn-info">Voir les demandes</a>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    
                    <?php

                    $annonce = $pdoLOG->query ( "SELECT * FROM annonces WHERE type_de_cdm = 'Offre' ; ");
                    // $annonce = $pdoLOG->query ( "SELECT * FROM annonces WHERE type_de_cdm = 'Offre' AND categorie= 'Informatique/Multimédia'; ");
                    // $annonce = $pdoLOG->query ( "SELECT * FROM annonces WHERE type_de_cdm = 'Offre' AND categorie= 'Maison'; ");
                    // $annonce = $pdoLOG->query ( "SELECT * FROM annonces WHERE type_de_cdm = 'Offre' AND categorie= 'Sport'; ");
                    // $annonce = $pdoLOG->query ( "SELECT * FROM annonces WHERE type_de_cdm = 'Offre' AND categorie= 'Mécanique'; ");
                    // $annonce = $pdoLOG->query ( "SELECT * FROM annonces WHERE type_de_cdm = 'Offre' AND categorie= 'Mobilité/Véhicule'; ");
                    // $annonce = $pdoLOG->query ( "SELECT * FROM annonces ORDER BY id_annonce DESC LIMIT 8; ");
                    
                         
                    while($reserve = $annonce->fetch(PDO::FETCH_ASSOC)) {
                    echo "<div class=\"col mb-3\">";
                    echo "<div class=\"card shadow-sm\">";
                    echo "<img src=\"$reserve[photo]\" alt=\"photo d'annonce\">";

                    echo "<div class=\"card-body\">";
                    echo "<p class=\"card-title\"> ".$reserve['titre']. "</p>";
                    echo "<p class=\"card-text\">Type d'annonce : " .$reserve['type_de_cdm']. "</p>";
                    echo "<p class=\"card-text\">Categorie : ".$reserve['categorie']. "</p>";
                    echo "<div class=\"d-flex justify-content-between align-items-center\">";
                    echo "<div class=\"btn-group\">";


                    echo "<button type=\"button\"  class=\"btn btn-info text-white btn-outline-secondary rounded text-center\">Voir l'annonce</button>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    }
                    ?>
                   
                </div>
            </div>
        </section>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>


        <?php require_once 'inc/footer.php'; ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/script.js"></script>
    </body>
</html>