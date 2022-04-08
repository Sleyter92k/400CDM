
<!-- <header class="py-4"> -->
<nav id="navbar" class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid px-4 px-lg-5 bg-body">
            <div class="">
            <img src="img/logo.png" alt="Logo" width="200">
            </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item m-1"><a class="nav-link border border-info btn btn-outline-light" href="accueil.php">Accueil</a></li>
                        <li class="nav-item m-1"><a class="nav-link border border-primary btn btn-outline-primary" href="recherche.php">Recherche</a></li>
                        <li class="nav-item m-1"><a class="nav-link border border-secondary btn btn-outline-light" href="annonce.php">Déposer une annonce</a></li>
                        <li class="nav-item m-1"><a class="nav-link border border-success btn btn-outline-light " href="contact.php">Contact</a></li>
                    </ul>

                        <div class="col-md-2 col-sm-2">
                        <?php if(!EstConnecte()) { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="connexion.php">Connexion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="inscription.php">Inscription</a>
                            </li>
                        <?php } else { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="profil.php">Profil</a>
                            </li>

                            <li class="nav-item">
                           <?php echo '<a class="btn btn-danger" href="' .RACINE_SITE. 'connexion.php?action=deconnexion">Se déconnecter</a>'; ?>
                            </li>
         
                        <?php } ?>
                    </div>
                </div>
            </div>
        </nav>
<!-- </header> -->
