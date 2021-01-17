<!-- Lien pour ajouter le header à la page -->
<?php include "inc/header.inc.php" ?>

<title>AlphaScan3D | Inscription.</title>

<?php

use App\User;

require "Autoloader.php";
Autoloader::register();

$user = new User();

// Permet de bien faire fonctionner le formulaire
if (isset($_GET["error"])) {
    switch ($_GET["error"]) {
        case 'succes':
            $user->setAccount();
            break;
        case 'already':
            echo 'Vous êtes déjà inscrit !';
            break;
        case 'pseudo':
            echo 'Votre pseudo fait plus de 30 caracteres';
            break;
        case 'email':
            echo 'Ceci n"est pas une adresse email !';
            break;
        case 'emailLenght':
            echo 'Votre email est trop longue !';
            break;
    }
}
?>

<!-- Mise en place des div qui contiennent les éléments de notre page -->
<div class="container-fluid featureCore1" style="padding: 0;">

    <div class="container featurette" style="padding: 80px;">

        <div class="row featurette">

            <div class="col-md-7">
                <section class="InscripTxt" style="width: 85%;margin: 0 auto;">
                    <h1>Inscrivez-vous</h1>
                    <hr>

                    <form action="signInView.php?error=succes" method="post" style="display: grid;">
                        Identifiant : <input type="text" name="pseudo">
                        Prenom : <input type="text" name="prenom">
                        Nom : <input type="text" name="nom">
                        Email : <input type="text" name="email">
                        Mot de passe : <input type="password" name="password">
                        <button type="submit" style="margin-left: 50%;margin-top: 20px; border-radius: 10px; width: 50%;"> Envoyer </button>
                    </form>

                </section>
            </div>

            <div class="col-md-5">
                <img src="img/profil02.png" style="height: 400px;border-radius: 20px;">
            </div>

        </div>

    </div>

    <!-- Lien pour ajouter le footer à la page -->
    <?php include "inc/footer.inc.php" ?>