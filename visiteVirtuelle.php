<?php include"inc/header.inc.php" ?>

<title>AlphaScan3D | La visite virtuelle.</title>

<div class="container-fluid featureCore1">
    <div class="row justify-content-center text-center">
        <h1 class="featureTitle">Visite Virtuelle.</h1>
    </div>
    <div class="row justify-content-center text-center">
        <p class="featureSubtitle">Faites découvrir les plus beaux atouts de vos espaces en guidant vos visiteurs à travers une visite virtuelle.</p>
    </div>
    <div class="row">
        <div class="container featurette">

            <hr class="featurette-divider-half">

            <div class="row featurette justify-content-center text-center">
                <div class="col-md-9 justify-content-center">
                    <h2 class="featurette-heading">Comme si vous y étiez.<span class="text-danger">Essayez par
                            vous-même.</span></h2>
                    <p class="lead">Faite découvrir les plus beaux atouts de vos espaces en guidant vos visiteurs à
                        travers une visite virtuelle.</p>
                    <iframe class="virtualPlayer" src='https://my.matterport.com/show/?m=uatsDYKKvJZ'
                        src='https://my.matterport.com/show/?m=uatsDYKKvJZ' frameborder='0' allowfullscreen
                        allow='xr-spatial-tracking'></iframe>

                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Des outils puissants. <span class="text-danger">Et précis.</span>
                    </h2>
                    <p class="lead">Un outil de mesure est à votre disposition lors de la visite virtuelle, prenez les
                        mesures de n’importe quel élément de votre espace, tel que les murs, les meubles et plus encore.
                    </p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img class="featurette-image img-fluid mx-auto" data-src="img/tools.png" alt="500x500"
                        style="width: 500px; height: 500px; object-fit: cover" src="img/tools.png"
                        data-holder-rendered="true">
                </div>
                <div class="col-md-12 order-md-3 mt-3 text-center">
                    <video class="img-fluid" id="utilisationVideo" playsinline autoplay muted loop>
                        <source src="video/tools.mp4" type="video/mp4">
                    </video>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Des marqueurs efficaces. <span class="text-danger">Et
                            complets.</span></h2>
                    <p class="lead">Nous réalisons pour vous des marqueurs appelés "Tags", qui permettent de fournir des
                        détails supplémentaires et, généralement, d'ajouter simplement du contexte à différents aspects
                        de votre espace 3D. Nous pouvons y insérer une photo ou une vidéo avec un titre ainsi qu’un
                        texte.</p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500"
                        style="width: 500px; height: 500px; object-fit: cover" src="img/tag.jpg"
                        data-holder-rendered="true">
                </div>
            </div>

        </div>
    </div>
</div>
<?php include"inc/footer.inc.php" ?>