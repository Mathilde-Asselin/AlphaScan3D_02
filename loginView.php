<!-- Lien pour ajouter le header à la page -->
<?php include "inc/header.inc.php" ?>

<title>AlphaScan3D | Connexion.</title>

<?php

use App\User;

require "Autoloader.php";
Autoloader::register();

$user = new User();

// Permet de bien faire fonctionner le formulaire
if (isset($_GET['submit'])) {
    $user->getAccount($_POST['pseudo'], $_POST['password']);
} elseif (isset($_GET['error'])) {
    switch ($_GET["error"]) {
        case 'admin':
            echo '<h1 class="green">Bienvenue Mathias !</h1>';
            header("location: adminView.php");
            break;
        case 'connected':
            echo '<h1 class="green">Vous êtes connecter !</h1>';
            header("location: monEspace.php");
            break;
        case 'password':
            echo '<h1 class="red">Mot de passe incorect !</h1>';
            break;
        case 'pseudo':
            echo '<h1 class="red">Pseudo incorect ! </h1>';
            break;
    }
}



?>

<div class="container-fluid featureCore1" style="padding: 0;">

    <div class="container featurette" style="padding: 80px;">

        <div class="row featurette">

            <div class="col-md-7">
                <form action="loginView.php?submit=send" method="post" style="text-align: end;margin-top: 20px;margin-right: 80px;">
                    <h1>Connectez-vous</h1>
                    <hr style="width: 60%; margin-right: 0;">
                    <label for="email">Identifiant : </label>
                    <input type="text" name="pseudo" style="margin-bottom: 20px;"> <br>
                    <label for="email">Mot de passe : </label>
                    <input type="password" name="password" style="margin-bottom: 20px;"> <br>
                    <button id="submit" type="submit" style="border-radius: 10px;"> Envoyer </button> <br> <br>
                    <a href="signInView.php?connected=no" class="button" style="color: #E5201C;margin-right: 5px;">S'inscrire</a><br><br>
                    <a href="#" class="button" style="margin-right: 5px; text-decoration: none; color: #111110;">Mot de passe perdu ? <span style="color: #E5201C;">Cliquez ici</span></a>
                </form>
            </div>

            <div class="col-md-5">
                <img src="img/Profil03.png" style="height: 400px;border-radius: 20px;">
            </div>

        </div>

    </div>
    <!-- Lien pour ajouter le footer à la page -->
    <?php include "inc/footer.inc.php" ?>