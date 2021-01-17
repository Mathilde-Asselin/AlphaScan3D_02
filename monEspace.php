<?php

use App\User;

require "Autoloader.php";
Autoloader::register();

$user = new User();
?>

<!-- Lien pour ajouter le header à la page -->
<?php include "inc/header.inc.php" ?>

<title>AlphaScan3D | Mon Espace.</title>

<?php
//Lancement de la session
session_start();

//Redirige vers la page Login si l'utilisateur n'est pas connecter
if (!isset($_GET['connected'])) {
    if (!isset($_SESSION['user_id'])) {
        header("location: loginView.php?connected=no");
    } elseif (!isset($_GET['connected'])) {
        if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == 6) {
            header("location: adminView.php?connected=admin");
        }
    }
}

?>

<!-- Mise en place des div qui contiennent les éléments de notre page -->
<div class="container-fluid featureCore1" style="padding: 0;">

    <div style="height: 40px;padding: 4%;">
        <div style="float: left;">
            <p style="font-size: 18px;color: #888888;">Votre espace</p>
        </div>
        <div style="float: right;">
            <p style="float: left;margin-top: 18px;"><?= $_SESSION['user_firstName'] ?> <?= $_SESSION['user_lastName'] ?></p>
            <a href="monEspace.php?modifier=disconnect"><img src="img/logoexit.png"></a>
        </div>
    </div>

    <div class="container featurette" style="padding: 20px;text-align: center;">

        <h1 style="font-size: 100px;font-weight: bold;">VOTRE <span style="color: #D93431;">ESPACE</span></h1>

        <p style="font-size: 24px;margin: 30px 0;">Retrouvez vos toutes dernières commandes et leurs avancées</p>

        <table width="100%" border="0" style="margin-bottom: 20px;">
            <tr>
                <td width="100" class="table-entete" style="background-color: #101010;height: 50px;border-radius: 10px 0 0 10px; color: white;font-size: 22px;">Commande</td>
                <td width="100" class="table-entete-centre" style="color: white;background-color: #101010; height: 50px;font-size: 22px;">Date</td>
                <td width="100" class="table-entete-centre" style="color: white;background-color: #101010; height: 50px;font-size: 22px;">Statut</td>
                <td width="100" class="table-entete" style="color: white;background-color: #101010; height: 50px;font-size: 22px;">Type</td>
                <td width="100" class="table-entete" style="color: white;background-color: #101010;border-radius: 0 10px 10px 0;height: 90px;font-size: 22px;">Livrable</td>
            </tr>
        </table>

        <section class="ProfilInfo" style="text-align: initial;">
            <h1>PROFIL</h1>
            <hr>
            <ul class="profil">
                <li class="black">Nom: <?= $_SESSION['user_lastName'] ?>
                <li class="black">Prenom: <?= $_SESSION['user_firstName'] ?>
                <li class="black">Pseudo: <?= $_SESSION['user_pseudo'] ?>
                <li class="black">Email: <?= $_SESSION['user_email'] ?>
                <li class="black">Mot de passe: **********
                <li><a href="monEspace.php?modifier=disconnect" class="red">Se Déconnecter</a></li>
            </ul>
        </section>

    </div>

</div>

<!-- Permet de se déconnecter de la page -->

<?php

if (isset($_GET['modifier'])) {
?>
    <form action=<?php echo "profilView.php?modifier=" . $_GET['modifier'] ?> method="post" id="modif">
        <input type="text" name="<?= $_GET['modifier'] ?>" id="modifier">
        <button type="submit">Modifier</button>
    </form>
<?php

    if (isset($_POST[$_GET['modifier']])) {
        if ($_GET['modifier'] === 'user_password') {
            $user->updatePassword($_POST[$_GET['modifier']], $_SESSION['user_id']);
            header("location: profilView.php");
        } else {
            $user->updateUser($_GET['modifier'], $_POST[$_GET['modifier']], $_SESSION['user_id']);
            header("location: profilView.php");
        }
    }

    if ($_GET['modifier'] === 'disconnect') {
        $user->disconnect($_SESSION['user_id']);
        echo 'test';
    }
}
?>

<!-- Lien pour ajouter le footer à la page -->
<?php include "inc/footer.inc.php" ?>