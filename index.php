<?php include"inc/header.inc.php" ?>
<!-- <?php if($_GET['form']=="success") {  echo "<div class='alert alert-success text-center' role='alert'>Nous avons bien reçu votre mail, notre équipe reviendra vers vous très vite!</div>"; } ?> -->

<title>AlphaScan3D | Le Scan 3D Pour Tous.</title>

<div class="plan">
  <div class="darker"></div>
  <video autoplay loop muted>
    <source src="video/background.mp4" type="video/mp4">
  </video>
</div>



<div class="container-fluid content1">
  <div class="row" id="mainText">
    <div class="col-lg-1">
    </div>
    <div class="col-lg-5 mb-4 text-center text-lg-left">
      <h3 class="display-2" style="font-weight:200;">Offrez-vous de nouvelles <span
          style="color:crimson; font-weight: 700; text-shadow: 2px 2px 6px #bb1133;"><br>Dimensions.</span></h3>
      <div class="sep"></div><br>
      <h1>
        <strong>LE SCAN <span class="volume">3D</span> POUR TOUS.</strong>
      </h1>
      <h2 class="mb-4 d-none d-md-block">

        AlphaScan3D spécialiste des technologies digitales au service des professionnels et des particuliers.
      </h2>
      <p><a class="btn btn-danger" href="contact.php" role="button">Nous contacter »</a></p>
    </div>
  </div>
  <div class="row justify-content-center text-center">
    <button type="submit" class="blinking" onClick="document.getElementById('wave').scrollIntoView()" ;><i
        class="fas fa-3x fa-angle-double-down"></i></button>
  </div>
</div>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" id="wave">
  <path id="wavePath" fill="#dee1e4" fill-opacity="1"
    d="M0,160L80,176C160,192,320,224,480,208C640,192,800,128,960,106.7C1120,85,1280,107,1360,117.3L1440,128L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
  </path>
</svg>
<div class="container-fluid content2 textSwap" id="divPath">
  <div class="row justify-content-center text-center">
    <h2 id="tagline">Nous capturons l'existant,<br> vous imaginez le reste.</h2>
  </div>
  <div class="row justify-content-center text-center" id="switchRow">
    <div class="d-flex justify-content-center">
      <h3>Particuliers</h3>
      <input type="checkbox" id="switch" onclick="colorSwap()">
      <label for="switch" id="toggle">Toggle</label>
      <h3>Professionnels</h3>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-lg-10 boardMain" id="whiteBoard">
      <div class="row">
        <div class="card-group">

          <div class="card">
            <video class="img-fluid" id="lightImgLeft" playsinline autoplay muted loop>
              <source src="video/VisiteVirtuelle.mp4" type="video/mp4">
            </video>
            <div class="card-body" id="cardVirtual">
              <h4 class="card-title">Visite Virtuelle</h4>
              <p class="card-text">Faites découvrir votre bien immobilier en immergeant vos visiteurs afin de capter
                leur attention et d’éveiller leur intérêt. Partagez la visite virtuelle sur le web et sur vos réseaux
                sociaux pour atteindre un maximum de personnes.</p>
              <p><a class="btn btn-outline-danger" href="visiteVirtuelle.php" role="button" id="showVirtual">En savoir
                  plus »</a></p>
            </div>
            <div class="card-footer text-center" id="lightBodyLeft">
              <button type="button" class="btn btn-danger addButton"
                onclick="addVirtual(); estimation(); document.getElementById('planText').scrollIntoView()"
                id="addButtonVirtual">Ajouter +</button>
              <button type="button" class="btn btn-danger addButton"
                onclick="cutVirtual(); cutPicture(); cutPlan(); estimation()" id="cutButtonVirtual"
                style="display:none;">Retirer -</button>
            </div>
          </div>

          <div class="card">
            <video class="img-fluid" autoplay muted loop>
              <source src="video/PhotosVideos.mp4" type="video/mp4">
            </video>
            <div class="card-body" id="cardPicture">
              <h4 class="card-title">Photos, Vidéos et 360</h4>
              <p class="card-text">Des visuels en ultra haute définition de vos espaces, réalisés par des professionnels
                pour impacter davantage vos visiteurs et mettre en avant votre bien. Partagez facilement du contenu de
                qualité.</p>
              <p><a class="btn btn-outline-danger" href="visuels.php" role="button" id="showPicture">En savoir plus
                  »</a></p>
            </div>
            <div class="card-footer text-center" id="lightBodyCenter">
              <button type="button" class="btn btn-danger addButton"
                onclick="addVirtual(); addPicture(); estimation(); document.getElementById('planText').scrollIntoView()"
                id="addButtonPicture">Ajouter +</button>
              <button type="button" class="btn btn-danger addButton" onclick="cutPicture(); cutPlan(); estimation()"
                id="cutButtonPicture" style="display:none;">Retirer -</button>
            </div>
          </div>

          <div class="card">
            <img class="card-img-top" id="lightImgRight" src="img/planDeSol.jpg" type="img/png">
            <div class="card-body" id="cardPlan">
              <h4 class="card-title">Plan de sol</h4>
              <p class="card-text" id="planText">Un plan d’étage schématique qui aidera vos visiteurs à visualiser les
                espaces et à se projeter de façon claire et précise. .</p>
              <p><a class="btn btn-outline-danger" href="planDeSol.php" role="button" id="showPlan">En savoir plus »</a>
              </p>
            </div>
            <div class="card-footer text-center" id="lightBodyRight">
              <button type="button" class="btn btn-danger addButton"
                onclick="addVirtual(); addPicture(); addPlan(); estimation(); document.getElementById('planText').scrollIntoView()"
                id="addButtonPlan">Ajouter +</button>
              <button type="button" class="btn btn-danger addButton" onclick="cutPlan(); estimation()"
                id="cutButtonPlan" style="display:none;">Retirer -</button>
            </div>
          </div>

        </div>
      </div>

      <div class="row justify-content-center text-center estimation">
        <div class="col-lg">
          <h3>Faire une estimation:</h3>
        </div>
      </div>
      <div class="row justify-content-center text-center">
        <div class="col-lg-3 mt-5">
          <form class="form" onkeyup="estimation()" onclick="estimation()">
            <p>Superficie : <input id="surface" class="inline borderless-input" type="number" min="0" max="100000"
                style="-webkit-appearance: none; margin: 0; -moz-appearance: textfield;">m²</p>
          </form>
        </div>
        <div class="col-lg-3 mt-5">
          <h3 class="ml-5"><span id="estimatedPrice">0</span>€<span class="taxes">TTC</span></h3>
        </div>
      </div>

      <div class="row justify-content-center text-center mt-5">
        <p id="infob">Veuillez sélectionner une offre.</p>
      </div>
      <div class="row justify-content-center text-center">
        <p><a class="btn btn-outline-danger disabled" data-toggle="collapse" href="#collapseForm" role="button"
            aria-expanded="false" aria-controls="collapseExample" id="devisButton">Recevoir votre devis</a></p>
      </div>
      <div class="row justify-content-center text-center mt-5">
        <div class="collapse" id="collapseForm">
          <div class="card card-body" id="formCard">
            <section class="mb-4">
              <p class="text-center w-responsive mx-auto">Notre équipe vous répondra aussi vite que possible.</p>
              <p class="text-center w-responsive mx-auto mb-5"><span class="requis">*</span>= requis</p>

              <div class="row">
                <div class="col-md-9 mb-md-0 mb-5">
                  <form id="contact-form" name="contact-form" action="indexFormContact.php" method="POST">

                    <div class="row">
                      <div class="col-md-6">
                        <div class="md-form mb-0">
                          <label for="lastname" class="mt-4">Nom<span class="requis">*</span></label>
                          <input type="text" id="lastname" name="lastname" class="form-control"
                            pattern="[A-Za-z\-]{1,13}" placeholder="Einstein" required>
                          <input type="text" id="honey" name="honey" />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="md-form mb-0">
                          <label for="firstname" class="mt-4">Prénom<span class="requis">*</span></label>
                          <input type="text" id="firstname" name="firstname" class="form-control"
                            pattern="[A-Za-z\-]{2,13}" placeholder="Albert" required>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="md-form mb-0">
                          <label for="email" class="mt-4">Email<span class="requis">*</span></label>
                          <input type="email" id="email" name="email" class="form-control"
                            pattern="[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})"
                            placeholder="exemple@alphascan3d.fr" required>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="md-form mb-0 mt-4">
                          <label for="tel" class="">Téléphone<span class="requis">*</span></label>
                          <input type="tel" id="tel" name="tel" class="form-control"
                            pattern="(01|02|03|04|05|06|07|08|09)[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}"
                            placeholder="0612345678" required>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-9">
                        <div class="md-form mb-0">
                          <label for="address" class="mt-4">Adresse<span class="requis">*</span></label>
                          <input type="text" id="adr" name="address" class="form-control"
                            placeholder="24 Rue des courgettes" required>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="md-form mb-0">
                          <label for="zip" class="mt-4">Code Postal<span class="requis">*</span></label>
                          <input type="number" id="zip" name="zip" class="form-control" placeholder="92300" required>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-9">
                        <div class="md-form mb-0">
                          <label for="date" class="mt-4">Date souhaitée de l'intervention</label>
                          <input type="date" id="date" name="date" min="2020-08-28" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="md-form mb-0">
                          <label for="time" class="mt-4">Heure</label>
                          <input type="time" id="time" name="time" class="form-control">
                        </div>
                      </div>
                    </div>

                    <div class="row" class="readOnlyRow">
                      <div class="col-md-2">
                        <div class="md-form mb-0">
                          <label for="surfaceForm" class="mt-4">Superficie</label>
                          <input type="text" id="surfaceForm" name="surfaceForm" class="form-control" value="0"
                            readonly>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="md-form mb-0">
                          <label for="priceForm" class="mt-4">Estimation</label>
                          <input type="text" id="priceForm" name="priceForm" class="form-control" value="0" readonly>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <div class="md-form mb-0">
                          <label for="prestationForm" class="mt-4">Prestation(s)</label>
                          <input type="text" id="prestationForm" name="prestationForm" class="form-control" value=""
                            readonly>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="md-form">
                          <label for="message" class="mt-4">Une précision ou une question? N'hésitez pas!</label>
                          <textarea type="text" id="message" name="message" rows="2"
                            class="form-control md-textarea"></textarea>
                        </div>
                      </div>
                    </div>

                    <div class="row justify-content-center" id="addressCheckboxRow">
                      <div class="col-md-6">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="addressCheckbox" checked
                            onclick="billingAddress()">
                          <label class="custom-control-label" for="addressCheckbox">Mon adresse d'intervention est
                            identique à l'adresse de facturation</label>
                        </div>
                      </div>
                    </div>

                    <div class="row" id="billingAddressForm">
                      <div class="col-md-12">
                        <div class="md-form mb-0">
                          <label for="billAddress" class="">Adresse de facturation</label>
                          <input type="text" id="billAddress" name="billAddress" class="form-control"
                            placeholder="24 Rue des courgettes">
                        </div>
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-lg btn-success">Envoyer</button>
                    </div>

                  </form>
                </div>

                <div class="col-md-3 text-center">
                  <ul class="list-unstyled mb-0">
                    <li><i class="fas fa-map-marker-alt fa-2x"></i>
                      <p>Paris, France</p>
                    </li>

                    <li><i class="fas fa-phone mt-4 fa-2x"></i>
                      <p>+33 6 52 64 72 51</p>
                    </li>

                    <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                      <p>contact@<br>alphascan3d.fr</p>
                    </li>
                  </ul>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>

      <div class="row justify-content-center text-center">
        <p class="infop"><i class="fas fa-info-circle"></i> Avec AlphaScan3D, ne payez que le jour de l'intervention.
        </p>
      </div>
    </div>

    <div class="col-lg-10 boardMainBlack" id="blackBoard">
      <div class="row justify-content-center">
        <div class="card-group black-group">

          <div class="card card-black">
            <video class="img-fluid" id="darkImgLeft" playsinline autoplay muted loop>
              <source src="video/VisiteVirtuelle.mp4" type="video/mp4">
            </video>
            <div class="card-body black-body" id="cardProVirtual">
              <h4 class="card-title">Visite Virtuelle<br>Photos, Vidéos, 360<br> et Plan de sol</h4>
              <p class="card-text">Valoriser vos espaces avec une visite virtuelle immersive, du contenu photos et
                vidéos en haute résolution réalisées par des professionnels et un plan de sol pour plus de précisions.
                Démarquez-vous et rejoignez la révolution digitale.
              </p>
              <div class="dropdown">
                <button class="btn btn-outline-danger dropdown-toggle" type="button" id="showProVirtual"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  En savoir plus
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="visiteVirtuelle.php">Visite Virtuelle</a>
                  <a class="dropdown-item" href="visuels.php">Photos, Vidéos et 360</a>
                  <a class="dropdown-item" href="planDeSol.php">Plan de Sol</a>
                </div>
              </div>
            </div>
            <div class="card-footer black-footer text-center" id="darkBodyLeft">
              <button type="button" class="btn btn-danger addButton" onclick="addProVirtual(); proEstimation();"
                id="addButtonProVirtual">Ajouter +</button>
              <button type="button" class="btn btn-danger addButton" onclick="cutProVirtual(); proEstimation()"
                id="cutButtonProVirtual" style="display:none;">Retirer -</button>
            </div>
          </div>

          <div class="card card-black">
            <img class="card-img-top" id="darkImgCenterLeft" src="img/streetView.jpg" type="img/png">
            <div class="card-body black-body" id="cardProStreetView">
              <h4 class="card-title">Google Street View <i class="fas fa-map-marked-alt"></i></h4>
              <p class="card-text">Nous réalisons la visite virtuelle de votre établissement que nous intégrons ensuite
                à votre fiche Google My Business visible également dans Google Maps.
                Montrez votre meilleur profil en mettant votre établissement en valeur.
              </p>
              <p><a class="btn btn-outline-danger" href="streetView.php" role="button" id="showProStreetView">En savoir
                  plus »</a></p>
            </div>
            <div class="card-footer black-footer text-center" id="darkBodyCenterLeft">
              <button type="button" class="btn btn-danger addButton" onclick="addProStreetView(); proEstimation();"
                id="addButtonProStreetView">Ajouter +</button>
              <button type="button" class="btn btn-danger addButton" onclick="cutProStreetView(); proEstimation()"
                id="cutButtonProStreetView" style="display:none;">Retirer -</button>
            </div>
          </div>

          <div class="card card-black">
            <video class="img-fluid" id="darkImgCenterRight" playsinline autoplay muted loop>
              <source src="video/MatterPack.mp4" type="video/mp4">
            </video>
            <div class="card-body black-body" id="cardPro3D">
              <h4 class="card-title">Fichiers 3D<span class="taxes"> (.OBJ et .XYZ)</span></h4>
              <p class="card-text">Le modèle 3D de la visite virtuelle au format OBJ et XYZ est destiné aux architectes,
                ingénieurs et professionnels de la construction qui souhaitent importer ces actifs dans des programmes
                tiers (tels que 3ds max, ReCap, Revit ou AutoCAD), effectuer des travaux supplémentaires. </p>
              <p><a class="btn btn-outline-danger" href="fichiers3D.php" role="button" id="showPro3D">En savoir plus
                  »</a></p>
            </div>
            <div class="card-footer black-footer text-center" id="darkBodyCenterRight">
              <button type="button" class="btn btn-danger addButton" onclick="addPro3D(); proEstimation();"
                id="addButtonPro3D">Ajouter +</button>
              <button type="button" class="btn btn-danger addButton" onclick="cutPro3D(); proEstimation()"
                id="cutButtonPro3D" style="display:none;">Retirer -</button>
            </div>
          </div>

          <div class="card card-black">
            <img class="card-img-top" id="darkImgRight" src="img/integration.jpg" type="img/png">
            <div class="card-body black-body" id="cardProIntegration">
              <h4 class="card-title">Intégration Web</h4>
              <p class="card-text" id="WebText">Nous intégrons vos visites virtuelles à votre site web existant.</p>
              <p><a class="btn btn-outline-danger" href="integrationWeb.php" role="button" id="showProIntegration">En
                  savoir plus »</a></p>
            </div>
            <div class="card-footer black-footer text-center" id="darkBodyRight">
              <button type="button" class="btn btn-danger addButton" onclick="addProIntegration(); proEstimation();"
                id="addButtonProIntegration">Ajouter +</button>
              <button type="button" class="btn btn-danger addButton" onclick="cutProIntegration(); proEstimation()"
                id="cutButtonProIntegration" style="display:none;">Retirer -</button>
            </div>
          </div>

        </div>
      </div>
      <div class="row justify-content-center text-center estimation">
        <div class="col-lg">
          <h3>Faire une estimation:</h3>
        </div>
      </div>
      <div class="row justify-content-center text-center">
        <div class="col-lg-3 mt-5">
          <form class="form" onkeyup="proEstimation()" onclick="proEstimation()">
            <p>Superficie : <input id="proSurface" class="inline borderless-input text-white" type="number" min="0"
                max="100000" style="-webkit-appearance: none; margin: 0; -moz-appearance: textfield;">m²</p>
          </form>
        </div>
        <div class="col-lg-3 mt-5">
          <h3 class="ml-5"><span id="proEstimatedPrice">0</span>€<span class="taxes">HT</span></h3>
        </div>
      </div>
      <div class="row justify-content-center text-center mt-5">
        <p id="infobpro">Veuillez sélectionner une offre.</p>
      </div>
      <div class="row justify-content-center text-center">
        <p><a class="btn btn-outline-danger disabled" data-toggle="collapse" href="#collapseProForm" role="button"
            aria-expanded="false" aria-controls="collapseExample" id="devisProButton">Recevoir votre devis</a></p>
      </div>
      <div class="row justify-content-center text-center mt-5">
        <div class="collapse" id="collapseProForm">
          <div class="card card-body" id="proFormCard">
            <section class="mb-4">
              <p class="text-center w-responsive mx-auto">Notre équipe vous répondra aussi vite que possible.</p>
              <p class="text-center w-responsive mx-auto mb-5"><span class="requis">*</span>= requis</p>

              <div class="row">
                <div class="col-md-9 mb-md-0 mb-5">
                  <form id="contact-pro-form" name="contact-pro-form" action="indexFormProContact.php" method="POST">

                    <div class="row">
                      <div class="col-md-6">
                        <div class="md-form mb-0">
                          <label for="lastnamePro" class="mt-4">Nom<span class="requis">*</span></label>
                          <input type="text" id="lastnamePro" name="lastnamePro" class="form-control"
                            pattern="[A-Za-z\-]{1,13}" placeholder="Einstein" required>
                          <input type="text" id="honeyPro" name="honeyPro" />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="md-form mb-0">
                          <label for="firstnamePro" class="mt-4">Prénom<span class="requis">*</span></label>
                          <input type="text" id="firstnamePro" name="firstnamePro" class="form-control"
                            pattern="[A-Za-z\-]{2,13}" placeholder="Albert" required>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="md-form mb-0">
                          <label for="sirenPro" class="mt-4">N° de SIREN<span class="requis">*</span></label>
                          <input type="text" id="sirenPro" name="sirenPro" class="form-control"
                            pattern="[0-9]{3}[ \.\-]?[0-9]{3}[ \.\-]?[0-9]{3}" placeholder="451 789 356" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="md-form mb-0">
                          <label for="tvaPro" class="mt-4">TVA Intra-communautaire<span class="requis">*</span></label>
                          <input type="text" id="tvaPro" name="tvaPro" class="form-control"
                            pattern="[A-Z]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{3}[ \.\-]?[0-9]{3}[ \.\-]?[0-9]{3}"
                            placeholder="FR 02 254 254 254" required>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="md-form mb-0">
                          <label for="companyPro" class="mt-4">Nom de l'entreprise<span class="requis">*</span></label>
                          <input type="text" id="companyPro" name="companyPro" class="form-control"
                            pattern="[A-Za-z\-]{2,15}" placeholder="Microsoft" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="md-form mb-0">
                          <label for="emailPro" class="mt-4">Email<span class="requis">*</span></label>
                          <input type="email" id="emailPro" name="emailPro" class="form-control"
                            pattern="[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})"
                            placeholder="exemple@alphascan3d.fr" required>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="md-form mb-0 mt-4">
                          <label for="telPro" class="">Téléphone<span class="requis">*</span></label>
                          <input type="tel" id="telPro" name="telPro" class="form-control"
                            pattern="(01|02|03|04|05|06|07|08|09)[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}"
                            placeholder="0612345678" required>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-9">
                        <div class="md-form mb-0">
                          <label for="addressPro" class="mt-4">Adresse de l'intervention<span
                              class="requis">*</span></label>
                          <input type="text" id="addressPro" name="addressPro" class="form-control"
                            placeholder="24 Rue des courgettes" required>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="md-form mb-0">
                          <label for="zipPro" class="mt-4">Code Postal<span class="requis">*</span></label>
                          <input type="number" id="zipPro" name="zipPro" class="form-control" placeholder="92300"
                            required>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-9">
                        <div class="md-form mb-0">
                          <label for="datePro" class="mt-4">Date souhaitée de l'intervention</label>
                          <input type="date" id="datePro" name="datePro" min="2020-09-04" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="md-form mb-0">
                          <label for="timePro" class="mt-4">Heure</label>
                          <input type="time" id="timePro" name="timePro" class="form-control">
                        </div>
                      </div>
                    </div>

                    <div class="row" class="readOnlyRow">
                      <div class="col-md-2">
                        <div class="md-form mb-0">
                          <label for="proSurfaceForm" class="mt-4">Superficie</label>
                          <input type="text" id="proSurfaceForm" name="proSurfaceForm" class="form-control" value="0"
                            readonly>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="md-form mb-0">
                          <label for="proPriceForm" class="mt-4">Estimation</label>
                          <input type="text" id="proPriceForm" name="proPriceForm" class="form-control" value="0"
                            readonly>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <div class="md-form mb-0">
                          <label for="proPrestationForm" class="mt-4">Prestation(s)</label>
                          <input type="text" id="proPrestationForm" name="proPrestationForm" class="form-control"
                            value="" readonly>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="md-form">
                          <label for="messagePro" class="mt-4">Une précision ou une question? N'hésitez pas!</label>
                          <textarea type="text" id="messagePro" name="messagePro" rows="2"
                            class="form-control md-textarea"></textarea>
                        </div>
                      </div>
                    </div>

                    <div class="row justify-content-center" id="addressCheckboxRow">
                      <div class="col-md-6">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="addressCheckboxPro" checked
                            onclick="billingAddressPro()">
                          <label class="custom-control-label" for="addressCheckboxPro">Mon adresse d'intervention est
                            identique à l'adresse de facturation</label>
                        </div>
                      </div>
                    </div>

                    <div class="row" id="billingAddressFormPro">
                      <div class="col-md-12">
                        <div class="md-form mb-0">
                          <label for="billAddressPro" class="">Adresse de facturation</label>
                          <input type="text" id="billAddressPro" name="billAddressPro" class="form-control"
                            placeholder="24 Rue des courgettes">
                        </div>
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-lg btn-success">Envoyer</button>
                    </div>

                  </form>
                </div>

                <div class="col-md-3 text-center">
                  <ul class="list-unstyled mb-0">
                    <li><i class="fas fa-map-marker-alt fa-2x"></i>
                      <p>Paris, France</p>
                    </li>

                    <li><i class="fas fa-phone mt-4 fa-2x"></i>
                      <p>+33 6 52 64 72 51</p>
                    </li>

                    <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                      <p>contact@<br>alphascan3d.fr</p>
                    </li>
                  </ul>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>

      <div class="row justify-content-center text-center">
        <p class="infop"><i class="fas fa-info-circle"></i> Avec AlphaScan3D, ne payez que le jour de l'intervention.
        </p>
      </div>
    </div>
  </div>
</div>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" id="wave2">
  <path fill="#dee1e4" fill-opacity="1"
    d="M0,128L80,106.7C160,85,320,43,480,48C640,53,800,107,960,117.3C1120,128,1280,96,1360,80L1440,64L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
  </path>
</svg>
<div class="container-fluid content3">
  <div class="row justify-content-center text-center">
    <div class="col-lg-10" id="procedure">
      <div class="row justify-content-center text-center">
        <div class="col-lg-4">
          <div class="bubbleStep">
            <h3>1</h3>
          </div>
          <h2>Commande</h2>
          <p>Sélectionnez une date d'intervention après avoir choisi votre prestation</p>
        </div>
        <div class="col-lg-4">
          <div class="bubbleStep">
            <h3>2</h3>
          </div>
          <h2>Intervention</h2>
          <p>Notre professionnel arrive sur place et s'occupe de votre commande</p>
        </div>
        <div class="col-lg-4">
          <div class="bubbleStep">
            <h3>3</h3>
          </div>
          <h2>Livraison</h2>
          <p>Vous recevez vos fichiers prêts à l'emploi sous 48h par mail</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid content4">
  <div class="row">
    <div class="col-lg-1">
    </div>
    <div class="col-lg-7 text-white" id="testVirtual">
      <h2><span style="color:crimson;">Essayez</span> par vous-même !</h2>
      <p>Faites découvrir les plus beaux atouts de vos espaces en guidant vos visiteurs à travers une visite virtuelle.
      </p>
      <iframe id="indexPlayer" src='https://my.matterport.com/show/?m=uatsDYKKvJZ' frameborder='0' allowfullscreen
        allow='xr-spatial-tracking'></iframe>
    </div>
  </div>
</div>

<div class="container-fluid content5">
  <div class="row justify-content-center text-center">
    <h2>Ils nous ont fait confiance</h2>
    <div class="col-lg-10 pt-5" id="testimonial">
      <div id="client-testimonial-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active text-center p-4">
            <blockquote class="blockquote text-center">
              <p class="mb-0 quote"><i class="fa fa-quote-left"></i> Ravie d’avoir travaillé avec ALPHA SCAN 3D.
                La visite virtuelle est très efficace pour montrer un projet réalisé aux clients.
              </p>
              <footer class="blockquote-footer">Crea-Inside <cite title="Source Title">-Architecte d'intérieur</cite>
              </footer>
              <p class="client-review-stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i><!-- far fa-star pour négatif -->
              </p>
            </blockquote>
          </div>
          <div class="carousel-item text-center p-4">
            <blockquote class="blockquote text-center">
              <p class="mb-0 quote"><i class="fa fa-quote-left"></i> ...j'ai été accompagnée par des experts très à
                l'écoute
                et disponibles, c'était pour moi une experience complètement nouvelle qu'ils ont rendu possible de façon
                rapide et sans écueils. Bref ils sont très fort et très agréables. Merci !
              </p>
              <footer class="blockquote-footer">Mini Rosa <cite title="Source Title">-Prêt à porter</cite></footer>
              <p class="client-review-stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </p>
            </blockquote>
          </div>
          <div class="carousel-item text-center p-4">
            <blockquote class="blockquote text-center">
              <p class="mb-0 quote"><i class="fa fa-quote-left"></i> Super équipe avec un bon suivi client. La visite
                virtuelle m'a permis d'accélérer la vente de ma maison.
              </p>
              <footer class="blockquote-footer">Annick K. <cite title="Source Title">-Particulier</cite></footer>
              <p class="client-review-stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </p>
            </blockquote>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#client-testimonial-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#client-testimonial-carousel" data-slide-to="1"></li>
          <li data-target="#client-testimonial-carousel" data-slide-to="2"></li>
        </ol>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid content6 text-center">
  <h2>Retrouvez nous sur nos réseaux</h2>
  <div class="row justify-content-center text-center">
    <div class="col-lg-4 py-5 d-flex justify-content-around" id="socialMedias">
      <a href="https://www.facebook.com/AlphaScan-3D-115189146878144/" class="fab fa-facebook-f fa-3x"></a>
      <a href="https://instagram.com/alphascan3d?igshid=gcnea5qoahfp" class="fab fa-instagram fa-3x"></a>
      <a href="https://fr.linkedin.com/company/alphascan3d?trk=public_profile_topcard_current_company"
        class="fab fa-linkedin-in fa-3x"></a>
    </div>
  </div>
  <div class="row justify-content-center text-center mt-5">
    <svg id="a3021eee-13c5-481a-ad89-41ba2f75e20a" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="460"
      height="400" viewBox="0 0 759.60891 659">
      <title>social_notifications</title>
      <path
        d="M532.306,552.30261c1.92023-1.20474,3.85478-2.46453,5.74937-3.74339l1.2864,1.90575c-1.916,1.29331-3.87133,2.56645-5.81328,3.78518Z"
        transform="translate(-220.19554 -120.5)" fill="#e6e6e6" />
      <path
        d="M310.36236,211.24091c2.56179-1.72923,5.18392-3.41521,7.79442-5.01207l1.19954,1.96168c-3.90877,2.39058-7.82113,4.9705-11.57917,7.63454l-1.32921-1.87686Q308.38309,212.57693,310.36236,211.24091Zm-15.07607,11.19916,1.45445,1.78148c-3.57412,2.91645-7.08445,5.98761-10.43682,9.12823l-1.57157-1.67805C288.1222,228.49633,291.6725,225.39007,295.28629,222.44007Zm35.071-23.12195c4.13462-2.15834,8.38918-4.19717,12.646-6.06009l.92074,2.10652c-4.20743,1.84177-8.41387,3.8576-12.50191,5.99262Zm-55.52185,42.28771,1.68365,1.56717c-3.135,3.37042-6.1921,6.89421-9.08608,10.47312l-1.7882-1.44513C268.5728,248.58016,271.6646,245.01538,274.83544,241.60583Zm81.202-53.52391c4.38152-1.56781,8.87715-3.0027,13.36038-4.26532l.62366,2.21223c-4.43379,1.24957-8.87782,2.66859-13.21056,4.21838ZM257.20875,263.4043l1.884,1.31815c-2.63911,3.76988-5.17964,7.67775-7.55,11.613l-1.96918-1.1875C251.97107,271.16863,254.53938,267.21763,257.20875,263.4043Zm125.83218-82.9264c4.56956-.95111,9.22483-1.75418,13.83718-2.38605l.31235,2.27879c-4.55961.62472-9.16293,1.41846-13.68071,2.359ZM242.76145,287.39251l2.04624,1.04881c-2.097,4.09744-4.07956,8.31816-5.88931,12.54412l-2.11454-.90518C238.63511,295.80592,240.63986,291.53774,242.76145,287.39251Zm168.08063-110.7293c4.65434-.31481,9.3728-.47243,14.02649-.46713l-.003,2.29929c-4.60044-.00467-9.2666.15015-13.86927.46124ZM231.72777,313.14688l2.17036.75912c-1.52009,4.346-2.90878,8.79844-4.12787,13.23523l-2.21745-.60814C228.78592,322.04484,230.19021,317.54128,231.72777,313.14688Zm207.16441-136.457c4.64306.32266,9.33752.80975,13.95406,1.44831l-.31572,2.27742c-4.56387-.63077-9.206-1.11255-13.798-1.43177Zm-214.59271,163.485,2.25333.45661c-.91443,4.51288-1.686,9.11493-2.29188,13.6796l-2.27984-.30325C222.59442,349.39211,223.37444,344.73832,224.29947,340.17493ZM466.66656,180.53421c4.56027.95151,9.14425,2.0726,13.62361,3.33067l-.62187,2.21317c-4.42946-1.24435-8.96151-2.35172-13.47081-3.29294Zm-246.054,187.43755,2.29389.14748c-.29307,4.59058-.43094,9.25655-.41,13.86681l-2.2986.01011C220.17566,377.33391,220.31572,372.615,220.61254,367.97176ZM493.65221,188.11439c4.38691,1.56159,8.77357,3.29537,13.03793,5.151l-.917,2.109c-4.2166-1.835-8.5541-3.54916-12.89281-5.09452ZM220.74527,396.02125l2.29208-.16825c.33721,4.59722.83879,9.23928,1.49122,13.79982l-2.2756.3251C221.59276,405.36574,221.08528,400.67078,220.74527,396.02125ZM519.34265,199.29418c4.12948,2.14442,8.23628,4.45992,12.20606,6.88146L530.3512,208.138c-3.92509-2.39346-7.9855-4.68338-12.06829-6.80378ZM224.7174,423.80079l2.24792-.4825c.96664,4.50829,2.10249,9.04051,3.377,13.471l-2.20967.63549C226.8429,432.94362,225.69367,428.35947,224.7174,423.80079ZM543.24772,213.87616c3.80023,2.69311,7.55347,5.55339,11.1565,8.50017l-1.45639,1.77954c-3.56173-2.9137-7.27212-5.7406-11.02953-8.40437ZM232.47594,450.76234l2.16147-.78717c1.57591,4.32729,3.32276,8.653,5.191,12.85746l-2.10084.93317C235.83788,459.51349,234.07144,455.13871,232.47594,450.76234Zm332.469-219.1356c3.39065,3.189,6.71466,6.53815,9.87853,9.95406l-1.68681,1.56259c-3.12847-3.37751-6.41458-6.68856-9.767-9.84105ZM243.85874,476.37668l2.03214-1.07508c2.15045,4.06274,4.47238,8.1086,6.90038,12.02666l-1.95414,1.2107C248.38147,484.57794,246.03374,480.48582,243.85874,476.37668ZM583.99532,252.18863c2.918,3.61849,5.7538,7.38925,8.42877,11.20764l-1.88376,1.319c-2.64469-3.77653-5.44915-7.50481-8.335-11.08269Zm-323.50221,246.674c2.68577,3.74609,5.531,7.44346,8.45663,10.989l-1.7727,1.46343c-2.95949-3.5857-5.83672-7.32446-8.55325-11.1121Zm17.64311,21.3757c3.17265,3.34565,6.49592,6.61944,9.87958,9.72986l-1.55591,1.69231c-3.42217-3.1454-6.78394-6.45617-9.99232-9.84069Zm20.40621,18.75476c3.5931,2.87085,7.3311,5.65338,11.11081,8.26891l-1.30816,1.89079c-3.82316-2.6458-7.604-5.45968-11.23714-8.36378Zm22.76918,15.75372c3.9588,2.3531,8.0465,4.59616,12.14847,6.66771l-1.03631,2.05271c-4.14913-2.09527-8.28275-4.36422-12.28654-6.74384Zm24.72894,12.48847c4.247,1.79078,8.6051,3.45513,12.95036,4.948l-.746,2.17372c-4.39517-1.5086-8.80256-3.19181-13.09827-5.00256Zm26.21193,9.0005c4.44506,1.19522,8.98928,2.25238,13.50731,3.14233l-.44413,2.25574c-4.56948-.89992-9.16514-1.96909-13.66072-3.17694Zm27.19923,5.35613c4.57417.5798,9.22189,1.0097,13.81388,1.27676l-.13315,2.29506c-4.644-.26987-9.34469-.704-13.96965-1.29081Zm27.68274,1.60956c4.6129-.04912,9.27688-.25734,13.86244-.61986l.182,2.29231c-4.63847.36641-9.35475.57742-14.02059.62637Zm27.65216-2.19027c4.5607-.67828,9.15282-1.52474,13.65038-2.51529l.49432,2.24537c-4.54825,1.00174-9.19356,1.85768-13.80653,2.54483Zm27.0964-5.96745c4.417-1.29851,8.84456-2.768,13.16112-4.36786l.79959,2.15579c-4.36628,1.61849-8.8448,3.10481-13.31155,4.41793Zm25.98982-9.63356c4.19219-1.89244,8.37593-3.95593,12.436-6.13439l1.08657,2.0271c-4.106,2.2027-8.33758,4.28967-12.57637,6.20339Z"
        transform="translate(-220.19554 -120.5)" fill="#e6e6e6" />
      <path
        d="M598.28529,276.62556l1.96954-1.18588c1.19751,1.98878,2.36733,4.00777,3.47737,6.00142l-2.00823,1.11853C600.62605,280.589,599.46928,278.59231,598.28529,276.62556Z"
        transform="translate(-220.19554 -120.5)" fill="#e6e6e6" />
      <ellipse cx="477.60891" cy="642" rx="282" ry="17" fill="#3f3d56" />
      <path
        d="M748.35157,275.29784s7.9014,102.71824-3.16056,105.87881-50.569,26.86477-113.78021,20.54364c0,0-61.63095,33.1859-52.14926,1.58028s52.14926-23.70421,52.14926-23.70421,75.85347-15.8028,79.014-26.86477-9.48168-56.8901-4.74084-58.47038S748.35157,275.29784,748.35157,275.29784Z"
        transform="translate(-220.19554 -120.5)" fill="#a0616a" />
      <path
        d="M588.35678,377.74215h0l21.219-4.91429a4.63014,4.63014,0,0,1,5.21523,2.49959l21.73546,45.07294a3.74216,3.74216,0,0,1-2.348,5.22514l-21.56438,6.12667a4.94378,4.94378,0,0,1-5.89195-2.80065l-13.86888-32.21408-.42252.23406-2.63964-6.10323.43878-.22431-3.87129-8.99211A2.85075,2.85075,0,0,1,588.35678,377.74215Z"
        transform="translate(-220.19554 -120.5)" fill="#3f3d56" />
      <path
        d="M607.01977,374.5l2.4769-.57365a3.19979,3.19979,0,0,1,3.61368,1.74741l21.21526,44.78461a1.98269,1.98269,0,0,1-1.2191,2.747l-21.4127,6.46059a2.56779,2.56779,0,0,1-3.101-1.44469l-20.07263-46.719a2.24905,2.24905,0,0,1,1.559-3.07887l2.34972-.5442a1.06144,1.06144,0,0,1,1.17573.534h0a.937.937,0,0,0,1.038.47141l11.155-2.58348A1.60177,1.60177,0,0,0,607.01977,374.5Z"
        transform="translate(-220.19554 -120.5)" fill="#dc143c" />
      <path
        d="M653.69529,454.38787s6.16056,148.39712,15.64225,170.521c7.89791,18.42846,12.50648,78.5219,13.8257,98.08316.26455,3.92264.39682,6.21537.39682,6.21537s25.28449,0,26.86477-6.32112,6.32113-75.85348,0-97.97741,8.062-175.26189,8.062-175.26189Z"
        transform="translate(-220.19554 -120.5)" fill="#2f2e41" />
      <path
        d="M689.88118,721.306s-15.8028,4.74085-18.96336,11.062S615.608,749.7511,631.4108,757.6525s63.21123-6.32112,63.21123-6.32112,25.28449-1.58028,23.70421-11.062-7.33524-21.16459-7.33524-21.16459Z"
        transform="translate(-220.19554 -120.5)" fill="#2f2e41" />
      <path
        d="M734.129,738.32008s-15.8028,4.74084-18.96336,11.062-55.30983,17.38309-39.507,25.28449,63.21123-6.32112,63.21123-6.32112,25.28449-1.58028,23.70421-11.062-7.33524-21.16459-7.33524-21.16459Z"
        transform="translate(-220.19554 -120.5)" fill="#2f2e41" />
      <path
        d="M667.75726,450.709l22.12392,37.92674L726.80446,620.5s-3.73738,120.98064,1.00346,120.98064,30.02533,7.9014,31.60561,0c1.33489-6.6744,19.03442-70.61091,10.212-113.1669A544.17691,544.17691,0,0,1,758.583,546.67055l-3.91033-73.83763s15.80281-28.445-1.58028-33.18589S667.75726,450.709,667.75726,450.709Z"
        transform="translate(-220.19554 -120.5)" fill="#2f2e41" />
      <circle cx="468.10536" cy="48.91903" r="37.92674" fill="#a0616a" />
      <path
        d="M683.56006,194.70353s6.32112,50.569,4.74084,53.72954,37.92674-34.76618,37.92674-34.76618-14.22253-22.12393-11.062-33.18589Z"
        transform="translate(-220.19554 -120.5)" fill="#a0616a" />
      <path
        d="M772.05578,245.27251s-44.24786-31.60562-45.82814-37.92674l-33.18589,28.44505-5.639-6.7123s-25.9666,25.67567-25.9666,36.73764-1.58028,44.24785,3.16056,53.72954-14.22252,129.583-14.22252,129.583,15.8028,14.22253,17.38309,15.80281,64.7915-9.48168,64.7915-9.48168,31.60562-3.16056,31.60562-7.90141-9.48169-75.85347-6.32113-94.81684S772.05578,245.27251,772.05578,245.27251Z"
        transform="translate(-220.19554 -120.5)" fill="#d0cde1" />
      <path
        d="M781.53746,289.52037s7.90141,102.71824-3.16056,105.8788-50.569,26.86477-113.78021,20.54365c0,0-61.63094,33.18589-52.14926,1.58028s52.14926-23.70421,52.14926-23.70421,75.85348-15.80281,79.014-26.86477-9.48169-56.89011-4.74084-58.47039S781.53746,289.52037,781.53746,289.52037Z"
        transform="translate(-220.19554 -120.5)" fill="#a0616a" />
      <path
        d="M672.10045,150.47291c5.18431-1.84517,10.9036-2.79276,16.18961-1.26314,7.48131,2.16488,12.66277,8.72273,18.25132,14.14719s13.42557,10.23111,20.78424,7.68031a12.18555,12.18555,0,0,1,2.32778-8.99951c.819-1.07841,1.85978-2.10181,2.0669-3.44.31439-2.03133-1.39374-3.78334-1.906-5.774-.89763-3.48851,1.563-8.26409-1.4623-10.21927-.79858-.5161-1.80967-.63377-2.589-1.17847-3.05864-2.13777.3379-7.45472-1.68438-10.59093a6.46793,6.46793,0,0,0-2.29795-1.917c-14.664-8.5563-32.59689-8.57978-49.57321-8.36426-2.36331.03-5.65348,1.20377-4.98689,3.47132-3.2083-2.30294-7.40942.93078-9.99544,3.91561l-5.293,6.10928a47.06452,47.06452,0,0,0-6.46849,8.74989c-1.61691,3.09205-1.97438,7.84574,1.24354,9.19377-2.39239-1.00221-5.29459,13.16858,5.73451,10.837C658.84981,161.47607,665.13106,152.95343,672.10045,150.47291Z"
        transform="translate(-220.19554 -120.5)" fill="#2f2e41" />
      <path
        d="M746.77129,248.43307l25.28449-3.16056s25.28449,48.9887,11.062,56.8901-50.569,14.22253-50.569,11.062S746.77129,248.43307,746.77129,248.43307Z"
        transform="translate(-220.19554 -120.5)" fill="#d0cde1" />
      <path
        d="M878.227,752.594c-.26384-.43112-6.48471-10.81833-8.64142-32.38762-1.97819-19.78869-.70617-53.14408,16.59237-99.67209,32.77158-88.14422-7.55239-159.26382-7.96442-159.97225l1.98942-1.15413c.10441.17963,10.50958,18.31234,16.65636,47.18591a205.85651,205.85651,0,0,1-8.52578,114.74208c-32.71544,87.99377-8.39329,129.64927-8.144,130.06018Z"
        transform="translate(-220.19554 -120.5)" fill="#3f3d56" />
      <circle cx="645.21699" cy="319.94103" r="14.94537" fill="#dc143c" />
      <circle cx="692.35238" cy="375.12393" r="14.94537" fill="#dc143c" />
      <circle cx="660.16236" cy="411.91253" r="14.94537" fill="#dc143c" />
      <circle cx="699.25024" cy="442.95291" r="14.94537" fill="#dc143c" />
      <circle cx="648.66592" cy="491.23794" r="14.94537" fill="#dc143c" />
      <path d="M887.25576,753.14412s-14.94536-36.7886,29.89074-64.38005Z" transform="translate(-220.19554 -120.5)"
        fill="#3f3d56" />
      <path d="M868.87528,752.47679s-6.80177-39.12162-59.44635-38.78631Z" transform="translate(-220.19554 -120.5)"
        fill="#3f3d56" />
      <path
        d="M448.95521,447.5a37,37,0,1,0,37,37A37,37,0,0,0,448.95521,447.5ZM467.241,475.11591c.01947.39953.02924.80877.02924,1.21807,0,12.48285-9.49127,26.87574-26.866,26.87574a26.37056,26.37056,0,0,1-14.44159-4.26819,19.1227,19.1227,0,0,0,2.251.13641,18.91525,18.91525,0,0,0,11.72278-4.044,9.44941,9.44941,0,0,1-8.81891-6.55817,8.90037,8.90037,0,0,0,1.77356.17541,9.49829,9.49829,0,0,0,2.48486-.33129,9.44261,9.44261,0,0,1-7.57159-9.25739v-.11694a9.21478,9.21478,0,0,0,4.28766,1.17907,9.45306,9.45306,0,0,1-2.93317-12.60955,26.73691,26.73691,0,0,0,19.45032,9.87133,9.237,9.237,0,0,1-.24359-2.15356,9.4316,9.4316,0,0,1,16.32226-6.451,18.7461,18.7461,0,0,0,5.993-2.29,9.46792,9.46792,0,0,1-4.15124,5.22315,19.07309,19.07309,0,0,0,5.418-1.491A19.20525,19.20525,0,0,1,467.241,475.11591Z"
        transform="translate(-220.19554 -120.5)" fill="#3f3d56" />
      <circle cx="111.00918" cy="261.67242" r="6.23657" fill="#3f3d56" />
      <path
        d="M339.0005,366.581H323.409a7.81859,7.81859,0,0,0-7.79572,7.79572v15.59143a7.81858,7.81858,0,0,0,7.79572,7.79571H339.0005a7.81868,7.81868,0,0,0,7.79566-7.79571V374.37671a7.8187,7.8187,0,0,0-7.79566-7.79572Zm-7.79577,24.94629a9.35486,9.35486,0,1,1,9.35485-9.35486A9.35725,9.35725,0,0,1,331.20473,391.52728Zm10.13439-17.15057a2.33872,2.33872,0,1,1,2.33875-2.33869A2.333,2.333,0,0,1,341.33912,374.37671Z"
        transform="translate(-220.19554 -120.5)" fill="#3f3d56" />
      <path
        d="M330.80446,345.5a37,37,0,1,0,37,37A37,37,0,0,0,330.80446,345.5Zm19.11,44.46814a10.946,10.946,0,0,1-10.91394,10.914H323.409a10.94606,10.94606,0,0,1-10.914-10.914V374.37671a10.94606,10.94606,0,0,1,10.914-10.914H339.0005a10.946,10.946,0,0,1,10.91394,10.914Z"
        transform="translate(-220.19554 -120.5)" fill="#3f3d56" />
      <path
        d="M440.80446,240.5a37,37,0,1,0,37,37A37,37,0,0,0,440.80446,240.5Zm.22155,58.6076a21.93755,21.93755,0,0,1-6.18786-.89648,18.14289,18.14289,0,0,0,2.19256-4.67743c.27283-.97449,1.53968-6.00268,1.53968-6.00268a6.26366,6.26366,0,0,0,5.33032,2.71875c7.01611,0,11.78119-6.39252,11.78119-14.958,0-6.47046-5.48615-12.50238-13.81781-12.50238-10.36835,0-15.6012,7.43512-15.6012,13.63275,0,3.76141,1.42273,7.094,4.47278,8.34137a.75.75,0,0,0,1.09143-.54566c.10718-.38983.34107-1.35455.44824-1.754a1.06686,1.06686,0,0,0-.31183-1.21808,6.29226,6.29226,0,0,1-1.4422-4.278,10.34294,10.34294,0,0,1,10.7483-10.456c5.85656,0,9.082,3.57629,9.082,8.3609,0,6.295-2.787,11.6059-6.9187,11.6059a3.37472,3.37472,0,0,1-3.44959-4.2c.65289-2.76746,1.92944-5.74933,1.92944-7.747,0-1.78327-.955-3.27417-2.94287-3.27417-2.33874,0-4.20971,2.41668-4.20971,5.65185a8.33369,8.33369,0,0,0,.7016,3.44965s-2.38739,10.12469-2.80646,11.89819a19.33206,19.33206,0,0,0-.38,5.00873,21.80742,21.80742,0,1,1,8.75067,1.84173Z"
        transform="translate(-220.19554 -120.5)" fill="#3f3d56" />
      <ellipse cx="231.13528" cy="200.74092" rx="19.47363" ry="19.6875" fill="#3f3d56" />
      <path
        d="M455.22555,331.74092h-3.96482V316.63338a13.6447,13.6447,0,0,1-5.12354,3.03778v-3.63759a11.4405,11.4405,0,0,0,3.37221-1.9471,7.38362,7.38362,0,0,0,2.49783-3.34556h3.21832Z"
        transform="translate(-220.19554 -120.5)" fill="#3f3d56" />
      <ellipse cx="231.13528" cy="200.74092" rx="19.47363" ry="19.6875" fill="#dc143c" />
      <path
        d="M455.22555,331.74092h-3.96482V316.63338a13.6447,13.6447,0,0,1-5.12354,3.03778v-3.63759a11.4405,11.4405,0,0,0,3.37221-1.9471,7.38362,7.38362,0,0,0,2.49783-3.34556h3.21832Z"
        transform="translate(-220.19554 -120.5)" fill="#fff" />
      <circle cx="110.75052" cy="307.98505" r="19.6875" fill="#3f3d56" />
      <path
        d="M328.60719,431.70331a4.61,4.61,0,0,0,.84461,2.96689,2.44789,2.44789,0,0,0,1.93,1.04608,2.16131,2.16131,0,0,0,1.743-.85642,4.4658,4.4658,0,0,0,.69757-2.80548,4.67125,4.67125,0,0,0-.7514-2.93933,2.349,2.349,0,0,0-3.71375-.04266A3.99376,3.99376,0,0,0,328.60719,431.70331Zm8.5398-8.59885-3.64746.422a2.83444,2.83444,0,0,0-.69758-1.73908,1.97926,1.97926,0,0,0-1.46081-.56109,2.43819,2.43819,0,0,0-2.018,1.12155q-.82488,1.12317-1.03949,4.67316a4.33011,4.33011,0,0,1,3.49976-1.7417,5.23881,5.23881,0,0,1,4.0412,1.88147,7.00023,7.00023,0,0,1,1.68262,4.853A7.14866,7.14866,0,0,1,335.738,437.078a6.253,6.253,0,0,1-9.43689-.51318q-1.91757-2.4186-1.91754-7.93207,0-5.65425,1.99762-8.15063a6.33534,6.33534,0,0,1,5.18829-2.497,5.35638,5.35638,0,0,1,3.70654,1.31118A6.25056,6.25056,0,0,1,337.147,423.10446Z"
        transform="translate(-220.19554 -120.5)" fill="#3f3d56" />
      <circle cx="110.75052" cy="307.98505" r="19.6875" fill="#dc143c" />
      <path
        d="M328.60719,431.70331a4.61,4.61,0,0,0,.84461,2.96689,2.44789,2.44789,0,0,0,1.93,1.04608,2.16131,2.16131,0,0,0,1.743-.85642,4.4658,4.4658,0,0,0,.69757-2.80548,4.67125,4.67125,0,0,0-.7514-2.93933,2.349,2.349,0,0,0-3.71375-.04266A3.99376,3.99376,0,0,0,328.60719,431.70331Zm8.5398-8.59885-3.64746.422a2.83444,2.83444,0,0,0-.69758-1.73908,1.97926,1.97926,0,0,0-1.46081-.56109,2.43819,2.43819,0,0,0-2.018,1.12155q-.82488,1.12317-1.03949,4.67316a4.33011,4.33011,0,0,1,3.49976-1.7417,5.23881,5.23881,0,0,1,4.0412,1.88147,7.00023,7.00023,0,0,1,1.68262,4.853A7.14866,7.14866,0,0,1,335.738,437.078a6.253,6.253,0,0,1-9.43689-.51318q-1.91757-2.4186-1.91754-7.93207,0-5.65425,1.99762-8.15063a6.33534,6.33534,0,0,1,5.18829-2.497,5.35638,5.35638,0,0,1,3.70654,1.31118A6.25056,6.25056,0,0,1,337.147,423.10446Z"
        transform="translate(-220.19554 -120.5)" fill="#fff" />
      <circle cx="228.50637" cy="408.6701" r="19.6875" fill="#3f3d56" />
      <path
        d="M446.2646,524.24954a2.50248,2.50248,0,0,0,.6471,1.83554,2.29867,2.29867,0,0,0,1.72131.65888,2.32875,2.32875,0,0,0,1.74237-.66544,2.51829,2.51829,0,0,0,.65363-1.84341,2.44181,2.44181,0,0,0-.64576-1.77384,2.27573,2.27573,0,0,0-1.70892-.66543,2.33568,2.33568,0,0,0-1.7561.67264A2.44974,2.44974,0,0,0,446.2646,524.24954Zm-.3537,8.80426a3.68547,3.68547,0,0,0,.81043,2.53641,2.5968,2.5968,0,0,0,2.0213.91153,2.50509,2.50509,0,0,0,1.9602-.87674,3.69784,3.69784,0,0,0,.7757-2.52985,3.32546,3.32546,0,0,0-.78882-2.31854,2.57345,2.57345,0,0,0-2.00159-.87805,2.36712,2.36712,0,0,0-2.09015.99615A3.72662,3.72662,0,0,0,445.9109,533.0538Zm-.43512-4.83722a4.4866,4.4866,0,0,1-2.15838-1.77383,4.722,4.722,0,0,1-.67334-2.47278,5.04725,5.04725,0,0,1,1.558-3.80032,7.27883,7.27883,0,0,1,8.85016,0,5.02586,5.02586,0,0,1,1.57239,3.80035,4.50753,4.50753,0,0,1-2.751,4.24658,5.2111,5.2111,0,0,1,3.39087,5.0459,6.08428,6.08428,0,0,1-6.45355,6.40762,6.95868,6.95868,0,0,1-4.53406-1.47131,5.8161,5.8161,0,0,1-2.13739-4.76831,6.01908,6.01908,0,0,1,.80322-3.06073A5.20865,5.20865,0,0,1,445.47578,528.21658Z"
        transform="translate(-220.19554 -120.5)" fill="#3f3d56" />
      <circle cx="228.50637" cy="408.6701" r="19.6875" fill="#dc143c" />
      <path
        d="M446.2646,524.24954a2.50248,2.50248,0,0,0,.6471,1.83554,2.29867,2.29867,0,0,0,1.72131.65888,2.32875,2.32875,0,0,0,1.74237-.66544,2.51829,2.51829,0,0,0,.65363-1.84341,2.44181,2.44181,0,0,0-.64576-1.77384,2.27573,2.27573,0,0,0-1.70892-.66543,2.33568,2.33568,0,0,0-1.7561.67264A2.44974,2.44974,0,0,0,446.2646,524.24954Zm-.3537,8.80426a3.68547,3.68547,0,0,0,.81043,2.53641,2.5968,2.5968,0,0,0,2.0213.91153,2.50509,2.50509,0,0,0,1.9602-.87674,3.69784,3.69784,0,0,0,.7757-2.52985,3.32546,3.32546,0,0,0-.78882-2.31854,2.57345,2.57345,0,0,0-2.00159-.87805,2.36712,2.36712,0,0,0-2.09015.99615A3.72662,3.72662,0,0,0,445.9109,533.0538Zm-.43512-4.83722a4.4866,4.4866,0,0,1-2.15838-1.77383,4.722,4.722,0,0,1-.67334-2.47278,5.04725,5.04725,0,0,1,1.558-3.80032,7.27883,7.27883,0,0,1,8.85016,0,5.02586,5.02586,0,0,1,1.57239,3.80035,4.50753,4.50753,0,0,1-2.751,4.24658,5.2111,5.2111,0,0,1,3.39087,5.0459,6.08428,6.08428,0,0,1-6.45355,6.40762,6.95868,6.95868,0,0,1-4.53406-1.47131,5.8161,5.8161,0,0,1-2.13739-4.76831,6.01908,6.01908,0,0,1,.80322-3.06073A5.20865,5.20865,0,0,1,445.47578,528.21658Z"
        transform="translate(-220.19554 -120.5)" fill="transparent" />
    </svg>
  </div>
</div>


<!--
<div class="loader-wrapper">
    <span class="loader"><img src="img/loader.gif" class="rounded" alt="..."></span></span>
</div>
  <script>
      $(window).on("load",function(){
        $(".loader-wrapper").fadeOut("slow");
      });
  </script>
    -->