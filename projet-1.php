<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>La Mediatheque</title>
    <meta name="description" content="Case study page of Projet" />

    <link rel="stylesheet" href="css/style.css" />

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
        <h1 class="heading-primary">Projet 1</h1>
        <div class="Projet-cs-hero__info">
          <p class="text-primary1">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
            in numquam incidunt earum quaerat cum fuga, atque similique natus
            nobis sit.
          </p>
        </div>
        <div class="Projet-cs-hero__cta">
          <a href="../mediatheque/index.php" class="btn btn--bg" target="_blank">Live Link</a>
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
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque
                alias tenetur minus quaerat aliquid, aut provident blanditiis,
                deleniti aspernatur ipsam eaque veniam voluptatem corporis vitae
                mollitia laborum corrupti ullam rem. Lorem ipsum dolor sit amet
                consectetur adipisicing elit. Neque alias tenetur minus quaerat
                aliquid, aut provident blanditiis, deleniti aspernatur ipsam
                eaque veniam voluptatem corporis vitae mollitia laborum corrupti
                ullam rem?
              </p>
              <p class="Projet-details__desc-para">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque
                alias tenetur minus quaerat aliquid, aut provident blanditiis,
                deleniti aspernatur ipsam eaque veniam voluptatem corporis vitae
                mollitia laborum corrupti ullam rem?
              </p>
            </div>
            <div class="Projet-details__tools-used">
              <h3 class="Projet-details__content-title">Tools Used</h3>
              <div class="skills">
                <div class="skills__skill">HTML</div>
                <div class="skills__skill">CSS</div>
                <div class="skills__skill">JavaScript</div>
                <div class="skills__skill">React</div>
                <div class="skills__skill">SASS</div>
                <div class="skills__skill">GIT</div>
                <div class="skills__skill">Shopify</div>
                <div class="skills__skill">Wordpress</div>
                <div class="skills__skill">Google ADS</div>
                <div class="skills__skill">Facebook Ads</div>
                <div class="skills__skill">Android</div>
                <div class="skills__skill">IOS</div>
              </div>
            </div>
            <div class="Projet-details__links">
              <h3 class="Projet-details__content-title">See Live</h3>
              <a
                href="../mediatheque/index.php"
                class="btn btn--med btn--theme Projet-details__links-btn"
                target="_blank"
                >Live Link</a
              >
              <a
                href="github.com/Freddy92i/Mediatheque"
                class="btn btn--med btn--theme-inv Projet-details__links-btn"
                target="_blank"
                >Code Link</a
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
