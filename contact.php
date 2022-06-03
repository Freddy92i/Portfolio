<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Portfolio</title>
        <meta name="description" content="Portfolio frontend web Developer" />

        <link rel="stylesheet" href="css/style.css" />
        <link rel="logo" href="./assets/png/freddy-peltier.png" type="image/png" />


        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700;900&display=swap" rel="stylesheet"/>
    </head>
    <?php include "navbar.php" ?>
    <section id="contact" class="contact sec-pad dynamicBg">
      <div class="main-container">
        <h2 class="heading heading-sec heading-sec__mb-med">
          <span class="heading-sec__main heading-sec__main--lt">Contactez-Moi</span>
          <span class="heading-sec__sub heading-sec__sub--lt">
            Si vous voulez me contacter, n'hésitez pas a me contacter via le formulaire ci-dessous, et je vous répondrais dès que possible
          </span>
        </h2>
        <div class="contact__form-container">
          <div action="#" class="contact__form">
            <div class="contact__form-field">
              <label class="contact__form-label" for="email">Email</label>
              <a class="mail" href="mailto:freddypeltier21@outlook.fr">freddypeltier21@outlook.fr</a>
            </div>
            <div class="contact__form-field">
              <label class="contact__form-label" for="message">Téléphone</label>
              <a class="phonenum">07&nbsp;71&nbsp;13&nbsp;61&nbsp;38</a>
            </div> 
          </div>
          
        </div>
      </div>
    </section>
</html>
<?php include "footer.php" ?>