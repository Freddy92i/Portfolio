<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>La Mediatheque</title>
    <meta name="description" content="Case study page of Projet" />

    <link rel="stylesheet" href="css/style.css" />
    <link rel="logo" href="./assets/png/freddy-peltier.png" type="image/png" />


    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700;900&display=swap"
      rel="stylesheet"
    />
    <?php include "navbar.php" ?>
  </head>
  <body>
    <section class="Projet-cs-hero">
      <div class="Projet-cs-hero__content">
        <h1 class="heading-primary">La Médiatheque</h1>
        <div class="Projet-cs-hero__info">
          <p class="text-primary1">
            C'est un projet que j'ai fait en première année de BTS et que j'ai pofiner et améliorer dans mon coin pour pouvoir le présenter lors de mes oraux de BTS.
          </p>
        </div>
        <div class="Projet-cs-hero__cta">
          <a href="../mediatheque/index.php" class="btn btn--bg" target="_blank">Démo</a>
        </div>
      </div>
    </section>
    <section class="Projet-details">
      <div class="main-container">
        <div class="Projet-details__content">
          <div class="Projet-details__showcase-img-cont">
            <img
              src="./assets/imgprojet/screen-mediatheque.jpeg"
              alt="Projet Image"
              class="Projet-details__showcase-img"
            />
          </div>
          <div class="Projet-details__content-main">
            <div class="Projet-details__desc">
              <h3 class="Projet-details__content-title">Contenu du projet</h3>
              <p class="Projet-details__desc-para">
                Ce projet est une médiatheque, elle permet au utilisateur de voir quels films sont disponible au visionnage, ainsi que d'avoir les horraires et toutes autres infos
                sur la médiatheque. Elle comprend des formulaire sécurisés, des protections contre les injections de code. 
              </p>
              <p class="Projet-details__desc-para">
                Pour le coté administrateur, une interface pour pouvoir 
                ajouter, modifier et supprimer des utilisateurs et une autre qui permet d'ajouter, modifier et supprimer des films. Chaque films contient les infos suivantes : nom, durée, réalisateurs,
                genre, ainsi que les affiches du films.
              </p>
            </div>
            <div class="Projet-details__tools-used">
              <h3 class="Projet-details__content-title">Outils utilisés</h3>
              <div class="skills">
                <div class="skills__skill">HTML</div>
                <div class="skills__skill">CSS</div>
                <div class="skills__skill">SCSS</div>
                <div class="skills__skill">GIT</div>
              </div>
            </div>
            <div class="Projet-details__links">
              <h3 class="Projet-details__content-title">En voir plus</h3>
              <a
                href="../mediatheque/index.php"
                class="btn btn--med btn--theme Projet-details__links-btn"
                target="_blank"
                >Démo</a
              >
              <a
                href="https://github.com/Freddy92i/mediatheque"
                class="btn btn--med btn--theme Projet-details__links-btn"
                target="_blank"
                >Code source</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="./index.js"></script>
  </body>
</html>

<?php include "footer.php" ?>
