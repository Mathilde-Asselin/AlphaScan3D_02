<?php include"inc/header.inc.php" ?>

<title>AlphaScan3D | Connexion.</title>

    <?php
        use App\User;
        require "Autoloader.php";
        Autoloader::register();

        $user = new User();

        if (isset($_GET['submit'])) {
            $user->getAccount($_POST['pseudo'], $_POST['password']);
        }elseif (isset($_GET['error'])) {
            switch ($_GET["error"]) {
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
                <form action="loginView.php?submit=send" method="post" style="text-align: end;margin-top: 20px;">
                    <h1>Connectez-vous</h1>
                    <hr>
                    <label for="email">Pseudo : </label>
                    <input type="text" name="pseudo"> <br>
                    <label for="email">Password :   </label>
                    <input type="password" name="password"> <br>
                    <button id="submit" type="submit"> Envoyer </button> <br> <br>
                    <a href="signInView.php?connected=no" class="button">S'inscire</a>
                </form>
            </div>

            <div class="col-md-5">
                <img src="img/Profil01.jpg" style="height: 400px;border-radius: 20px;">
            </div>

    </div>

    </div>

<?php include"inc/footer.inc.php" ?>