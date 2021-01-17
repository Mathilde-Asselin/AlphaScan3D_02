<?php

use App\User;

require "Autoloader.php";
Autoloader::register();

$user = new User();
?>

<!-- Lien pour ajouter le header à la page -->
<?php include "inc/header.inc.php" ?>

<title>AlphaScan3D | Admin.</title>

<?php
//Lancement de la session
session_start();
?>

<!-- Mise en place des div qui contiennent les éléments de notre page -->
<div class="container-fluid featureCore1" style="padding: 0;">

    <div style="height: 40px;padding: 4%;">
        <div style="float: left;">
            <p style="font-size: 18px;color: #888888;">Clients</p>
        </div>
        <div style="float: right;"><a href="monEspace.php?modifier=disconnect" style="font-size: 18px;color: crimson;">Se Déconnecter</a></div>
    </div>

    <div class="container featurette" style="padding: 20px;text-align: center;">

        <h1 style="font-size: 72px;font-weight: bold;text-align: initial;">CLIENTS</h1>

        <div style="text-align: initial;padding: 40px 0;">
            <a href="#" style="font-size: 16px;color: #757576; margin-right: 20px;">ALPHABÉTIQUE</a>
            <a href="#" style="font-size: 16px;color: #757576; margin-right: 20px;">TYPE</a>
            <a href="#" style="font-size: 16px;color: #757576; margin-right: 20px;">PROPRIÉTÉS</a>
            <a href="#" style="font-size: 16px;color: #757576; margin-right: 20px;">EN COURS</a>
            <a href="#" style="font-size: 16px;color: #757576; margin-right: 20px;">PLUS RÉCENTS</a>
        </div>

        <table width="100%" border="0" style="margin: 30px 0;">
            <tr>
                <td width="100" class="table-entete" style="background-color: #101010;height: 90px;border-radius: 10px 0 0 10px; color: white;">Clients</td>
                <td width="100" class="table-entete-centre" style="color: white;background-color: #101010; height: 50px;">Type</td>
                <td width="100" class="table-entete" style="color: white;background-color: #101010; height: 50px;">Propriétés</td>
                <td width="100" class="table-entete" style="color: white;background-color: #101010; height: 50px;">Projets en cours</td>
                <td width="100" class="table-entete" style="color: white;background-color: #101010;border-radius: 0 10px 10px 0;height: 50px;">Avancée</td>
            </tr>

        </table>

    </div>

</div>

<!-- Permet de se déconnecter de la page -->
<?php

    if ($_GET['modifier'] === 'disconnect') {
        $user->disconnect($_SESSION['user_id']);
        echo 'test';
    }

?>

<!-- Lien pour ajouter le footer à la page -->
<?php include "inc/footer.inc.php" ?>