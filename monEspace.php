<?php
            use App\User;
            require "Autoloader.php";
            Autoloader::register();
    
            $user = new User();
        ?>

<?php include "inc/header.inc.php" ?>

<title>AlphaScan3D | Mon Espace.</title>

<?php
//Lancement de la session
session_start();

//Redirige vers la page Login si l'utilisateur n'est pas connecter
if (!isset($_GET['connected'])) {
    if (!isset($_SESSION['user_id'])) {
        header("location: loginView.php?connected=no");
    }
}
?>

<h1>Voici la page Mon Espace !</h1>

<section class="ProfilInfo">
        <h1>PROFIL</h1>
        <hr>
        <ul class="profil">
            <li class="black">Nom: <?= $_SESSION['user_lastName'] ?> 
            <li class="black">Prenom: <?= $_SESSION['user_firstName'] ?> 
            <li class="black">Pseudo: <?= $_SESSION['user_pseudo'] ?> 
            <li class="black">Email: <?= $_SESSION['user_email'] ?> 
            <li class="black">Mot de passe: ********** 
            <li><a href="monEspace.php?modifier=disconnect" class="red" >Se Déconnecter</a></li>
        </ul>
    </section>

    <?php
        
        if (isset($_GET['modifier'])) {
            ?>
                <form action=<?php echo "monEspace.php?modifier=".$_GET['modifier']?> method="post" id="modif" >
                    <input type="text" name="<?= $_GET['modifier'] ?>" id="modifier">
                    <button type="submit">Modifier</button>
                </form>
            <?php
            
            if (isset($_POST[$_GET['modifier']])) {
                if ($_GET['modifier'] === 'user_password') {
                    $user->updatePassword($_POST[$_GET['modifier']], $_SESSION['user_id']);
                    header("location: monEspace.php");
                }else{
                    $user->updateUser($_GET['modifier'], $_POST[$_GET['modifier']], $_SESSION['user_id']);
                    header("location: monEspace.php");
                }
            }

            if ($_GET['modifier'] === 'disconnect') {
                $user->disconnect($_SESSION['user_id']);
                echo 'test';
            }
        }
    ?>


<?php include "inc/footer.inc.php" ?>