<nav class="navbar navbar-expand-lg navbar-light " style="background-color:#CBC3E3;">
        <a class="navbar-brand" href="../Accueil.php">
            <img src="../IMG/LogoAvecTexte.png" width="" height="50" class="d-inline-block align-top" alt="Génération UX">

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../GestProjet/GestProj.php"> Gestion de projet <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Etat de l'art
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="../EDLA/EDLA.php">Etat de l'art général</a>
                            <a class="dropdown-item" href="../EDLA/Emotionnelle.php">Domaine émotionnel</a>
                            <a class="dropdown-item" href="../EDLA/Utilisabilite.php">Domaine Utilisabilité</a>
                            <a class="dropdown-item" href="../EDLA/UX.php">Domaine UX</a>
                            <a class="dropdown-item" href="../EDLA/ValidationSuite.php">Processus d'adaptation et de validation d'une échelle</a>
                            <a class="dropdown-item" href="../EDLA/Echelles.php">Echelles retenues pour l'adaptation</a>
                            <a class="dropdown-item" href="../EDLA/Sources.php">Sources de l'état de l'art</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Adaptation de l'échelle MeCue
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="../Adaptation/Adaptations.php">Versions de l'adaptation</a>
                            <a class="dropdown-item" href="../Adaptation/ProcessAdaptation.php">Processus d'adaptation</a>
                            <a class="dropdown-item" href="../Adaptation/DetailsTest.php">Déroulement des tests</a>
                            <a class="dropdown-item" href="../Adaptation/Protocole.php">Protocole de tests</a>
                            <a class="dropdown-item" href="../Adaptation/Enseignants.php">Questionnaire pour les enseignants</a>
                            <a class="dropdown-item" href="../Adaptation/ResultatsAnalyse.php">Résultats et analyse</a>
                    </div>
                </li>
            </ul>
        </div>
</nav>

<?php require_once "script.php"; ?>
</html>

