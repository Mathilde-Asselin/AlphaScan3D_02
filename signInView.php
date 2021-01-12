<?php include"inc/header.inc.php" ?>

<title>AlphaScan3D | Inscription.</title>

<?php
            use App\User;
            require "Autoloader.php";
            Autoloader::register();

            $user = new User();

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
<div class="container-fluid featureCore1" style="padding: 0;">

<div class="container featurette" style="padding: 80px;">

<div class="row featurette">

    <div class="col-md-7">
        <section class="InscripTxt">
            <h1>Inscrivez-vous</h1>
            <hr>

            <form action="signInView.php?error=succes" method="post">
                pseudo : <input type="text" name="pseudo">
                prenom : <input type="text" name="prenom">
                nom : <input type="text" name="nom">
                email : <input type="text" name="email">
                password : <input type="password" name="password">
                <button type="submit"> Envoyer </button>
            </form> 
            
            </section>
    </div>

    <div class="col-md-5">
        <img src="img/profil02.jpg" style="height: 400px;border-radius: 20px;">
    </div>

</div>

</div>

<?php include"inc/footer.inc.php" ?>