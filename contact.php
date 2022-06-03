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
          <form action="#" class="contact__form">
            <div class="contact__form-field">
              <label class="contact__form-label" for="email">Email</label>
              <input
                required
                placeholder="Entrer votre Email"
                type="text"
                class="contact__form-input"
                name="email"
                id="email"
              />
            </div>
            <div class="contact__form-field">
              <label class="contact__form-label" for="message">Message</label>
              <textarea
                required
                cols="30"
                rows="10"
                class="contact__form-input"
                placeholder="Entrer votre message"
                name="message"
                id="message"
              ></textarea>
            </div>
            <button type="submit" class="btn btn--theme contact__btn">
              Envoyer
            </button>
          </form>
          <?php
    if (isset($_POST['message'])) {
      $entete  = 'MIME-Version: 1.0' . "\r\n";
      $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
      $entete .= 'Reply-to: ' . $_POST['email'];
        $retour = mail('freddypeltier21@outlook.fr', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . "\r\n" . 'Reply-to: ' . $_POST['email']);
        if($retour)
            echo '<p>Votre message a bien été envoyé.</p>';
    }
    ?>
        </div>
      </div>
    </section>
</html>
<?php include "footer.php" ?>