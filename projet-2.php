<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Projet PPEJDR</title>
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
        <h1 class="heading-primary">PPE Jeux de Rôles</h1>
        <div class="Projet-cs-hero__info">
          <p class="text-primary1">
          C'est un projet que j'ai fait en deuxième année de BTS pour pouvoir le présenter lors de mes oraux de BTS.

          </p>
        </div>
        <div class="Projet-cs-hero__cta">
          <a href="https://drive.google.com/drive/folders/1ccqROGCaKFWiNcWgyXG5wWUFkv53ePzZ?usp=sharing" class="btn btn--bg" target="_blank">Démonstration</a>
        </div>
      </div>
    </section>
    <section class="Projet-details">
      <div class="main-container">
        <div class="Projet-details__content">
          <div class="Projet-details__showcase-img-cont">
            <img
              src="./assets/jpeg/Projet-mockup-example.jpeg"
              alt="Projet Image"
              class="Projet-details__showcase-img"
            />
          </div>
          <div class="Projet-details__content-main">
            <div class="Projet-details__desc">
              <h3 class="Projet-details__content-title">Projet Overview</h3>
              <p class="Projet-details__desc-para">
                Ce projet est un jeu de rôle, il nous permet de pouvoir creer son personnage, le modifier ou le supprimer, on peut gerer aussi ses statistiques,
                il y a un chat pour communiquer avec les autres joueurs durant la partie. Nous avons aussi la partie administrateur/ Maitre du jeu, qui peut creer et lancer
                une partie, ainsi que la possiblité de donner des avantages ou malus a certains joueurs. Il utilise aussi une api pour lier les données du chat ainsi que les
                statistique des joueurs.
              </p>
              <p class="Projet-details__desc-para">
                Pour pouvoir lancer le logiciel, vous devez cliquer sur le lien "Démo", qui vous mène au google drive, vous devez télécharger le logiciel, et entrez les infos suivantes :
                user : adminppe et password : P@ssword1 . Ensuite vous aurez accès au logiciel.
              </p>
            </div>
            <div class="Projet-details__tools-used">
              <h3 class="Projet-details__content-title">Tools Used</h3>
              <div class="skills">
                <div class="skills__skill">Visual Studio</div>
                <div class="skills__skill">API</div>
                <div class="skills__skill">GIT</div>
                <div class="skills__skill">Windows Forms</div>
                <div class="skills__skill">Android</div>
              </div>
            </div>
            <div class="Projet-details__links">
              <h3 class="Projet-details__content-title">En voir plus</h3>
              <a
                href="https://drive.google.com/drive/folders/1ccqROGCaKFWiNcWgyXG5wWUFkv53ePzZ?usp=sharing"
                class="btn btn--med btn--theme Projet-details__links-btn"
                target="_blank"
                >Demo</a
              >
              <a
                href="https://github.com/Freddy92i/PPE-jeu-de-role"
                class="btn btn--med btn--theme-inv Projet-details__links-btn"
                target="_blank"
                >Code Source</a
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
