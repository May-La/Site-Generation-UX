<?php 
    require_once "../include/functions.php";

    if(isset($_SESSION['login']))
    {
    $stmt = getDb() -> prepare("SELECT ID_Utilisateur FROM utilisateur WHERE Email = ?");
    $stmt ->execute(array($_SESSION['login']));
    $id = $stmt -> fetch();
    $idUtilisateur = $id['ID_Utilisateur'];
    }
    
?>

<nav class="navbar navbar-expand-lg navbar-light " style="background-color:#CBC3E3;">
        <a class="navbar-brand" href="../PHP/Bienvenue.php">
            <img src="../IMG/LogoAvecTexte.png" width="" height="50" class="d-inline-block align-top" alt="Poulpy Recherche Melody">

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../PHP/Annonces.php">Annonces <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../PHP/Recherches.php">Recherches Avancées <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <?php
                        if(isset($_SESSION['login']))
                        {
                            echo '<a class="nav-link" href="../PHP/FormulaireAnnonce.php">Ajouter une annonce <span class="sr-only">(current)</span></a>';
                        }
                    ?>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Profil
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php
                            if(isset($_SESSION['login']))
                            {
                        ?> 
                                <a class="dropdown-item" href="../PHP/Deconnexion.php">Se déconnecter</a>
                                <a class="dropdown-item" href="../PHP/Profil.php?id=<?= $idUtilisateur ?>">Mon profil</a>
                        <?php
                            }
                            else
                            {
                        ?>
                                <a class="dropdown-item" href="../PHP/Connexion.php">Se connecter</a>
                                <a class="dropdown-item" href="../PHP/Inscription.php">S'inscrire</a>
                        <?php
                            }
                        ?>
                    </div>
                </li>
            </ul>
        </div>
</nav>

<?php require_once "script.php"; ?>
</html>

