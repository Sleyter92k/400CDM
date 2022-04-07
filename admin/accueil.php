<?php
require_once '../inc/log_bdd.php';
require_once '../inc/fonction.php';


?>

<!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>400 Coups de Main - Administration</title>
        <!-- Favicon-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;600&display=swap" rel="stylesheet">  
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/bootstrap.css" rel="stylesheet" />
        <link href="../css/style.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
<body>
   <!-- =================================== -->
  <!-- en-tête -->
  <!-- =================================== -->

  <header>
    <?php require_once '../inc/navbar.php'; ?>

  </header>
  <div class="container mb-4 bg-light">
  <section class="row">
      <!-- col -->
      <div class="col-12 col-sm-12 col-md-6 col-lg-4 mx-auto">

        <div class="card1" style="width: 18rem;">
          <img src="../photos/pull1.jpg" class="card-img-top" alt="pull1">
          <div class="card-body text-center">
            <h5 class="card-title">Pull gris</h5>

          </div>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Prix</li>
          <li class="list-group-item">50 €</li>
        </ul>
        <p>
        <button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
         Ajoutez au panier
          </button>
        </p>
        <div class="collapse" id="collapseExample1">
          <div class="card card-body">
            <select class="form-select" aria-label="Default select example">
              <option value="xs">-XS-</option>
              <option value="s">-S-</option>
              <option value="m">-M-</option>
              <option value="l">-L-</option>
              <option value="xl">-XL-</option>
              <option value="xxl">-XXL-</option>
            </select>
          </div>
        </div>
        <!-- fin card body -->
      </div>
      <!-- fin col -->

      <div class="col-12 col-sm-12 col-md-6 col-lg-4 mx-auto">

        <div class="card2" style="width: 18rem;">
          <img src="../photos/pull2.jpg" class="card-img-top" alt="pull2">
          <div class="card-body text-center">
            <h5 class="card-title">Pull white</h5>


          </div>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Prix</li>
          <li class="list-group-item">39 €</li>
        </ul>
        <p>
        <button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
           Ajoutez au panier
          </button>
        </p>
        <div class="collapse" id="collapseExample2">
          <div class="card card-body">
            <select class="form-select" aria-label="Default select example">
              <option value="xs">-XS-</option>
              <option value="s">-S-</option>
              <option value="m">-M-</option>
              <option value="l">-L-</option>
              <option value="xl">-XL-</option>
              <option value="xxl">-XXL-</option>
            </select>
          </div>
        </div>
        <!-- fin card body -->
      </div>
      <!-- fin col -->

    </section>
    <section class="row">
      <!-- col -->
      <div class="col-12 col-sm-12 col-md-6 col-lg-4 mx-auto">

        <div class="card3" style="width: 18rem;">
          <img src="../photos/pantalon1.jpg" class="card-img-top" alt="pantalon1">
          <div class="card-body text-center">
            <h5 class="card-title">Pantalon blanc</h5>

          </div>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Prix</li>
          <li class="list-group-item">50 €</li>
        </ul>
        <p>
        <button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3">
      Ajoutez au panier
          </button>
        </p>
        <div class="collapse" id="collapseExample3">
          <div class="card card-body">
            <select class="form-select" aria-label="Default select example">
              <option value="xs">-XS-</option>
              <option value="s">-S-</option>
              <option value="m">-M-</option>
              <option value="l">-L-</option>
              <option value="xl">-XL-</option>
              <option value="xxl">-XXL-</option>
            </select>
          </div>
        </div>
        <!-- fin card body -->
      </div>
      <!-- fin col -->


      <div class="col-12 col-sm-12 col-md-6 col-lg-4 mx-auto">

        <!-- card 2 -->
        <div class="card4" style="width: 18rem;">
          <img src="../photos/pantalon2.jpg" class="card-img-top" alt="pantalon2">
          <div class="card-body text-center">
            <h5 class="card-title">Pantalon</h5>

          </div>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Prix :</li>
          <li class="list-group-item">39 €</li>
        </ul>
        <p>
          <button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample4">
            Ajoutez au panier
          </button>
        </p>
        <div class="collapse" id="collapseExample4">
          <div class="card card-body">
            <select class="form-select" aria-label="Default select example">
              <option value="xs">-XS-</option>
              <option value="s">-S-</option>
              <option value="m">-M-</option>
              <option value="l">-L-</option>
              <option value="xl">-XL-</option>
              <option value="xxl">-XXL-</option>
            </select>
          </div>
        </div>
        <!-- fin card body -->
      </div>
      <!-- fin col -->
      <!-- navigation produits -->
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item">
            <a class="page-link" href="#">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
      <!-- fin navigation page produits -->
    </section>

    <?php
    $requete = $pdoMAB->query("SELECT * FROM produits, categories WHERE produits.id_categorie = categories.id_categorie;");
    // debug($resultat);
    $pdt = $requete->rowCount();
    // debug($nbr_commentaires);
    ?>
    <h5>Il y a <?php echo $pdt; ?> produits en ligne </h5>

    <table class="table table-striped">
      <thead>
        <tr>
        <th class="text text-danger">Photo</th>
          <th class="text text-danger">Titre</th>
          <th class="text text-danger">Categorie</th>
          <th class="text text-danger">Taille</th>
          <th class="text text-danger">Description</th>
          <th class="text text-danger">Couleurs</th>


        </tr>
      </thead>
      <tbody>
        <!-- ouverture de la boucle while -->
        <?php while ($ligne = $requete->fetch(PDO::FETCH_ASSOC)) { ?>
          <tr>
            <td><img src="../<?php echo $ligne['photo']; ?>" alt=""></td>
            <td><?php echo $ligne['titre']; ?></td>
            <td><?php echo $ligne['categorie'] . ' ** ' . $ligne['stock']; ?></td>
            <td><?php echo $ligne['taille']; ?></td>
            <td><?php echo $ligne['description']; ?></td>
            <td><?php echo $ligne['couleur']; ?></td>
            <td><?php echo $ligne['stock']; ?></td>
            

          </tr>
          <!-- fermeture de la boucle -->
        <?php } ?>
      </tbody>
    </table>
 
  <!-- fin col -->
  </section> 
  <!-- fin row -->
<section class="row">
  <h2>Insertion d'un nouveau produit</h2>
  <div class="col-md-8 p-2 bg-light border boder-danger">
    <form action="" method="POST" enctype="multipart/form-data">
      <!-- l'attribut enctype spécifie que le formulaire envoie des fichiers en plus de données texte; il va nous permettre de télécharger un fichier ici une photo -->
  <label for="reference" class="form-label">Ref produit</label>
  <input type="text" name="reference" id="reference" class="form-control">

  <label for="categorie" class="form-label">Catégorie</label>
  <select name="categorie" id="categorie" class="form-select">
      <?php
        foreach ( $pdoMAB->query ( " SELECT * FROM categories ORDER BY categorie ASC " ) as $ligne_categorie) {
          echo '<option value="' .$ligne_categorie['id_categorie'].'">' .$ligne_categorie['categorie']. '</option>';
        }
      ?>
  </select>

  <label for="titre" class="form-label">Titre *</label>
  <input type="text" name="titre" id="titre" class="form-control">

  <label for="description" class="form-label">Description</label>
  <textarea type="text" name="description" id="description" class="form-control"></textarea>

  <label for="couleur" class="form-label">Couleur</label>
  <input type="text" name="couleur" id="couleur" class="form-control">

  <label for="taille" class="form-label">Taille</label>
  <select name="taille" id="taille" class="form-select">
              <option value="xs">-XS-</option>
              <option value="s">-S-</option>
              <option value="m">-M-</option>
              <option value="l">-L-</option>
              <option value="xl">-XL-</option>
              <option value="xxl">-XXL-</option>
            </select>

            <input type="radio" name="public" value="f"checked>
            <label for="public" class="form-check-label">Femme</label>

            <input type="radio" name="public" value="m"checked>
            <label for="public" class="form-check-label">Homme</label>

            <input type="radio" name="public" value="mixte"checked>
            <label for="public" class="form-check-label">Mixte</label>

            <label for="photo" class="form-label">Photo</label>
            <input type="file" name="photo" id="photo" class="form-control">

            <label for="prix" class="form-label">Prix</label>
            <input type="text" name="prix" id="prix" class="form-control">

            <label for="stock" class="form-label">Stock</label>
            <input type="text" name="stock" id="stock" class="form-control">

            <button class="btn btn-outline-info" type="submit">Ajouter un produit</button>
    </form>
  </div>
</section>
      
</div>

  <?php 
// require_once '../inc/footer.inc.php';
  ?>
  <!-- Footer -->
  <!-- Optional JavaScript -->
  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>