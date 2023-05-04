<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Acceuil</title>
  <meta name="description" content="Letecode est une grande communauté" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="shortcut icon" href="photos/logoletecode.png" />
  <link rel="stylesheet" href="styles.css" />

  <!-- Ajout Open graph -->
  <meta property="og:title" content="Acceuil" />
  <meta property="og:description" content="Letecode est une grande communauté" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="https://marcellinmweze.github.io/tp2/photos/logoletecode.png" />
  <meta property="og:url" content="https://marcellinmweze.github.io/tp2" />
</head>

<body>

  <?php
  $page = 'index';

  include_once('header.php');

  ?>

  <section class="section header">
    <div class="contener">
      <h1 class="mar-t-10">Bienvenue sur notre site</h1>
      <p class="mar-t-20">
        Nous vous apprenons à changer le <br />
        monde avec votre créativité
      </p>
      <a href="contact.php" class="btn link">Nous contacter</a>
    </div>
  </section>

  <section class="section learn">
    <div class="contener">
      <div class="bloc-item al-center">
        <img src="photos/logoletecode.png" alt="Logo Letecode" />
      </div>
      <div class="bloc-item para">
        <h2 class="mar-t-10">
          Vous avez droit <br />
          d'apprendre
        </h2>
        <p class="mar-t-20">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias
          delectus maxime eaque maiores repellendus provident, officiis nemo
          quisquam fugiat totam architecto cum, deleniti voluptate?
          Praesentium laborum libero dolores vel commodi.
        </p>
      </div>
    </div>
  </section>

  <section class="section para">
    <div class="contener">
      <h2 class="mar-t-10">A propos de nous</h2>
      <p class="mar-t-20">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias
        eligendi minus amet accusantium sit cum earum delectus, voluptas iure
        non nulla hic dolor autem fugiat repudiandae? Repudiandae numquam
        blanditiis error.
      </p>
      <p class="mar-t-20">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias
        eligendi minus amet accusantium sit cum earum delectus, voluptas iure
        non nulla hic dolor autem fugiat repudiandae? Repudiandae numquam
        blanditiis error.
      </p>
      <p class="mar-t-20">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias
        eligendi minus amet accusantium sit cum earum delectus, voluptas iure
        non nulla hic dolor autem fugiat repudiandae? Repudiandae numquam
        blanditiis error.
      </p>
      <h3>Les options</h3>
      <ul>
        <li>Git & Girhub</li>
        <li>HTML</li>
        <li>CSS</li>
        <li>Javascript</li>
      </ul>
    </div>
  </section>

  <?php

  include_once('footer.php');
  ?>
  <script src="script/menuvolet.js"></script>
</body>

</html>